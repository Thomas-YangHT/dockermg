 <?php
session_start(); 
if(!isset($_SESSION['login_status']))    
	header('Location:login.html');
?>

 <?php
	include_once("dkconfig.php");
	include_once("dkcommon.php");
	include_once("proj.inc.php");
	GetProjData();
	//echo "projname:".$_POST[selprojname];
	$selprojname=split('_',$_POST["selprojname"]);
	$projid= $selprojname[0];
	//取同步标志
	exec("sudo cat ".$dksig_file,$tmpsig,$tmpout); 
	$dksig=split(':',$tmpsig[0]);

	//SVN checkout
	if( isset($_POST["svncheckout"]) ){
		//$projectres[$projid][projname] $projectres[$projid][projname]
		$cmd = "sudo -u root sh -c 'cd /root;svn checkout ".$projectres[$projid][url]." 2>&1 >>".$svn_log."' &";
		runcmd($cmd);
		writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." proj checkout ".$cmd);
		echo "<meta http-equiv='refresh' content='2;url=tailsimple.php?filename=".$svn_log."&keyword=".$projectres[$projid]['svnprojname']."'>\n";
		
	}//SVN update
	elseif( isset($_POST["svnupdate"]) ){
		$cmd = "sudo -u root sh -c 'svn update ".$projectres[$projid]['repodir']."/".$projectres[$projid]['svnprojname']." 2>&1 >>".$svn_log."' &";
		runcmd($cmd);
		writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." proj checkout ".$cmd);
		echo "<meta http-equiv='refresh' content='2;url=tailsimple.php?filename=".$svn_log."&keyword=".$projectres[$projid]['svnprojname']."'>\n";
		
	}//MVN clean install
	elseif( isset($_POST["mvnproj"]) ){
		if($projectres[$projid]['svnprojname']=="xhy-hotel-api"){
			$cmd = "sudo -u root sh -c 'cd ".$projectres[$projid]['mvndir'].";mvn clean install deploy 2>&1 >>".$mvn_log." && rm -rf /root/.m2/repository/xhy-hotel-api/xhy-hotel-api/0.0.1-SNAPSHOT/' ";
		}else{
		    $cmd = "sudo -u root sh -c 'rm -rf /root/.m2/repository/xhy-hotel-api/xhy-hotel-api/0.0.1-SNAPSHOT/;rm -rf /root/.m2/repository/ucenter-xhy-common/ucenter-xhy-common/1.7;cd ".$projectres[$projid]['mvndir'].";mvn clean install  2>&1 >>".$mvn_log."' &";
		}
		runcmd($cmd);
		writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." proj checkout ".$cmd);
		echo "<meta http-equiv='refresh' content='2;url=tailsimple.php?filename=".$mvn_log."&keyword=".$projectres[$projid]['svnprojname']."'>\n";
        //$cmd = "sudo -u root sh -c 'cd ".$projectres[$projid][mvndir]."/target;jar -cvf ".$projectres[$projid][projname].".war ".$projectres[$projid][projname]."  2>&1 >>/root/mvn.log' &";	
	}//显示选择排除文件页
	elseif( isset($_POST["exlfile"]) ){
		ShowUpProjHtmlhead();
		ShowSelExlFile();
		
	}//显示同步确认页
	elseif( isset($_POST["confirmsync"]) ){
		ShowUpProjHtmlhead();
		ShowConfirm();
		
	}//显示目录切换页	
	elseif( isset($_POST["showproj"]) ){
		ShowUpProjHtmlhead();
		if( $_POST['dk']=='no' ){
			GetProcSetting();
			NoDKShowProjVersion();
		}else{
			ShowProjVersion();			
		}		

			
	}//显示项目启停操作页	
	elseif( isset($_POST["operproj"]) ){
		if( $_POST['dk']=='no' ){
			header('Location:/qinmonitor/procoper.php?projname='.$_POST["selprojname"]);
		}else{
			header('Location:dkopproj.php?projname='.$_POST["selprojname"]);
		}
			
	}//同步按扭
	elseif( isset($_POST["syncproj"]) ){
		if( $_POST['dk']=='no' ){
			GetProcSetting();
			NoDKrsync();
		}else{
			DoRsyncProj();
		}
		
	}//同步过程显示
	elseif($dksig[0]=="rsyncrun"){
		DoRsyncRun();
		
	}//切换目录
	elseif( isset($_POST["ReplUpdir"]) ||  isset($_POST["ReplHisdir"]) ){
		if( $_POST['dk']=='no' ){
			GetProcSetting();
			NoDKExchangeDir();
		}else{
			ExchangeDir();
		}
		
		
	}//记录被选择的排除文件
	elseif( isset($_POST["ExlFileSel"]) ){
		DoExlFileSel();
		
	}//清除排除文件内容
	elseif( isset($_POST["ExlFileCln"]) ){
		DoExlFileCln();
		
	}//比较更新内容差异
	elseif( isset($_POST["cmpproj"]) ){
		//echo "comproj:".$_POST["cmpproj"];
		if( $_POST['dk']=='no' ){
			GetProcSetting();
			NoDKCompare();
		}else{
			DoCompare();
		}		
		
	}
	
?>