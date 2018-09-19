<?php
session_start(); 
if(!isset($_SESSION['login_status']))    
	header('Location:login.html');
?>
<?php
include_once("dkcommon.php");
include_once("dkconfig.php");

echo " <html>  \n";
echo "<head>\n";
header("Refresh:300"); 
echo "  <meta charset='utf-8'>\n";
echo "  <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
echo "  <title>欢迎您使用docker项目程序起停</title>\n";


echo "<!-- CSS goes in the document HEAD or added to your external stylesheet --> \n";
echo " <style type='text/css'> \n";
echo " table.altrowstable {\n";
echo " 	font-family: verdana,arial,sans-serif;\n";
echo " 	font-size:11px;\n";
echo " 	color:#333333;\n";
echo " 	border-width: 1px;\n";
echo " 	border-color: #a9c6c9;\n";
echo " 	border-collapse: collapse;\n";
echo " }\n";
echo " table.altrowstable th {\n";
echo " 	border-width: 1px;\n";
echo " 	padding: 8px;\n";
echo " 	border-style: solid;\n";
echo " 	border-color: #a9c6c9;\n";
echo " 	background-color:#ccd4d4;\n";
echo " }\n";
echo " table.altrowstable td {\n";
echo " 	border-width: 1px;\n";
echo " 	padding: 8px;\n";
echo " 	border-style: solid;\n";
echo " 	border-color: #a9c6c9;\n";
echo " }\n";
echo " .oddrowcolor{\n";
echo " 	background-color: #FFFFFF;\n";
echo " }\n";
echo " .evenrowcolor{\n";
echo " background-color:#c3dde0;\n";
echo " }\n";
echo " .shiny-blue {\n";
echo "   background-color: #759ae9;\n";
echo "   background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #759ae9), color-stop(50%, #376fe0), color-stop(50%, #1a5ad9), color-stop(100%, #2463de));\n";
echo "   background-image: -webkit-linear-gradient(top, #759ae9 0%, #376fe0 50%, #1a5ad9 50%, #2463de 100%);\n";
echo "   background-image: -moz-linear-gradient(top, #759ae9 0%, #376fe0 50%, #1a5ad9 50%, #2463de 100%);\n";
echo "   background-image: -ms-linear-gradient(top, #759ae9 0%, #376fe0 50%, #1a5ad9 50%, #2463de 100%); \n";
echo "   background-image: -o-linear-gradient(top, #759ae9 0%, #376fe0 50%, #1a5ad9 50%, #2463de 100%);\n";
echo "   background-image: linear-gradient(top, #759ae9 0%, #376fe0 50%, #1a5ad9 50%, #2463de 100%);\n";
echo "   border-top: 1px solid #1f58cc;\n";
echo "   border-right: 1px solid #1b4db3;\n";
echo "   border-bottom: 1px solid #174299; \n";
echo "   border-left: 1px solid #1b4db3; \n";
echo "   border-radius: 4px; \n";
echo "   -webkit-box-shadow: inset 0 0 2px 0 rgba(57, 140, 255, 0.8);\n";
echo "   box-shadow: inset 0 0 2px 0 rgba(57, 140, 255, 0.8); \n";
echo "   color: #fff; \n";
echo "   font: bold 12px/1 'helvetica neue', helvetica, arial, sans-serif;\n";
echo "   padding: 7px 0; \n";
echo "   text-shadow: 0 -1px 1px #1a5ad9;\n";
echo "   width:100px;\n";
echo "    }\n";
echo " </style>\n";
echo " </head>\n";
echo "<SCRIPT LANGUAGE='JavaScript'>\n";
echo " function selectall(t){  \n";
echo "    for(var i=0;i<document.form.length;i++){   \n";
echo "       var element=document.form[i];    \n";
echo "       if(element.type=='checkbox' && t.checked==true){    \n";
echo "          element.checked=true;    \n";
echo "       }    \n";
echo "       if(element.type=='checkbox' && t.checked==false){    \n";
echo "          element.checked=false;    \n";
echo "       }    \n";
echo "    }    \n";
echo " }  \n";
echo "</SCRIPT>\n";
echo "<body style='margin:0 auto;align:center;'>\n";

?>


<?php
     function ShowTable($table_name) {
		global $MysqlHost;
		global $MysqlPass;
		global $MysqlUser;
		global $dkdb;	
		$conn=mysql_connect($MysqlHost,$MysqlUser,$MysqlPass)	or die("无法连接数据库，请重来");
		mysql_select_db($dkdb,$conn);	
        mysql_query("SET NAMES UTF8");  
		if ( !empty($_GET['projname']) ){
			$selprojname=split('_',$_GET['projname']);
			$projid= $selprojname[0];
			$projname= $selprojname[1];
		}
        switch ( $_REQUEST["sortby"] )
         {
			     case 'ip':
					 $sql="select a.ip,a.cid,a.cname,a.image,a.createtime,a.status, c.projname,c.progdir,c.startscript,c.stopscript,d.pid from dockercontainers as a inner join dkcreated as b on a.cname=b.cname inner join dockerproject as c on b.project=c.projname left join dkprojstatus as d on d.cid=a.cid ";
					 if (!empty($_GET['projname'])){ $sql.="where b.project='".$projname."' "; }
					 $sql.=" order by ip";
			         break;
			     case 'cid':
					 $sql="select a.ip,a.cid,a.cname,a.image,a.createtime,a.status, c.projname,c.progdir,c.startscript,c.stopscript,d.pid from dockercontainers as a inner join dkcreated as b on a.cname=b.cname inner join dockerproject as c on b.project=c.projname left join dkprojstatus as d on d.cid=a.cid ";
					 if (!empty($_GET['projname'])){ $sql.="where b.project='".$projname."' "; }
					 $sql.= " order by cid";
			      	 break;
			     case 'cname':
					 $sql="select a.ip,a.cid,a.cname,a.image,a.createtime,a.status, c.projname,c.progdir,c.startscript,c.stopscript,d.pid from dockercontainers as a inner join dkcreated as b on a.cname=b.cname inner join dockerproject as c on b.project=c.projname left join dkprojstatus as d on d.cid=a.cid ";
					 if (!empty($_GET['projname'])){ $sql.="where b.project='".$projname."' "; }
					 $sql.=" order by cname ";
			      	 break;
			     case 'image':
					 $sql="select a.ip,a.cid,a.cname,a.image,a.createtime,a.status, c.projname,c.progdir,c.startscript,c.stopscript,d.pid from dockercontainers as a inner join dkcreated as b on a.cname=b.cname inner join dockerproject as c on b.project=c.projname left join dkprojstatus as d on d.cid=a.cid ";
					 if (!empty($_GET['projname'])){ $sql.="where b.project='".$projname."' "; }
					 $sql.=" order by image";
			      	 break;
			     case 'createtime': 
			      	 $sql="select a.ip,a.cid,a.cname,a.image,a.createtime,a.status, c.projname,c.progdir,c.startscript,c.stopscript,d.pid from dockercontainers as a inner join dkcreated as b on a.cname=b.cname inner join dockerproject as c on b.project=c.projname left join dkprojstatus as d on d.cid=a.cid ";
					 if (!empty($_GET['projname'])){ $sql.="where b.project='".$projname."' "; }
					 $sql.=" order by createtime";
			      	 break;
			     case 'status': 
			      	 $sql="select a.ip,a.cid,a.cname,a.image,a.createtime,a.status, c.projname,c.progdir,c.startscript,c.stopscript,d.pid from dockercontainers as a inner join dkcreated as b on a.cname=b.cname inner join dockerproject as c on b.project=c.projname left join dkprojstatus as d on d.cid=a.cid ";
					 if (!empty($_GET['projname'])){ $sql.="where b.project='".$projname."' "; }
					 $sql.=" order by status";
			      	 break;
			     case 'pid': 
			      	 $sql="select a.ip,a.cid,a.cname,a.image,a.createtime,a.status, c.projname,c.progdir,c.startscript,c.stopscript,d.pid from dockercontainers as a inner join dkcreated as b on a.cname=b.cname inner join dockerproject as c on b.project=c.projname left join dkprojstatus as d on d.cid=a.cid ";
					 if (!empty($_GET['projname'])){ $sql.="where b.project='".$projname."' "; }
					 $sql.=" order by pid";
			      	 break;
				 default:
				     $sql="select a.ip,a.cid,a.cname,a.image,a.createtime,a.status, c.projname,c.progdir,c.startscript,c.stopscript,d.pid from dockercontainers as a inner join dkcreated as b on a.cname=b.cname inner join dockerproject as c on b.project=c.projname left join dkprojstatus as d on d.cid=a.cid ";
					 if (!empty($_GET['projname'])){ $sql.="where b.project='".$projname."' "; }
					 $sql.=" order by ip";
		 } 
        $res=mysql_query($sql,$conn);
        $rows=mysql_affected_rows($conn);//获取行数
        $colums=mysql_num_fields($res);//获取列数

        echo "<div style='margin:0 auto;align:center;font-size:22px;font-family:SimHei;width:800px'>".'欢迎您使用项目程序启停操作，数据如下：(共计:'.$rows.'行'.$colums.'列)'."</div>\n";
        echo " <form id='form2' name='form2' method='post' action='$PHP_SELF'>\n";
		echo "   <input class='shiny-blue' type='submit' name='freshstatus' value='立即刷新' />\n";
		echo " </form>\n";
        echo "<table class='altrowstable' id='alternatecolor' style='margin:0 auto;align:center;word-break:break-all; word-wrap:break-all;'> <tr>\n";
		echo "<h3 style='margin:0 auto;align:center;font-size:16px;width:800px'><input type='checkbox' name='allunchecked' onclick='selectall(this)' />全选/取消</h3>\n";
		echo " <form id='form' name='form' method='post' action='$PHP_SELF'>\n";
		echo "<th>选择</th>\n";		
		echo "<th>sn</th>\n";
        for($i=0; $i < $colums; $i++){
            $field_name=mysql_field_name($res,$i);
			if (!empty($_GET['projname'])){ 
				echo "<th><a href='dkopproj.php?sortby=".$field_name."&projname=".$_GET['projname']."'  target='right' >".$field_name."</a></th>\n";			
			}else{
				echo "<th><a href='dkopproj.php?sortby=".$field_name."'  target='right' >".$field_name."</a></th>\n";
			}
        }
		//echo "<th>pstatus</th>\n"; //增加项目程序状态列
        echo "</tr>\n";
    	$j=0;
		//global $pjstatus;
        while($row=mysql_fetch_array($res)){
            if($j/2==round($j/2)){echo "<tr class='oddrowcolor'>\n";}
		    else{echo "<tr class='evenrowcolor'>\n";}
			$j++;
			echo "<td> <input type='checkbox' style='float:left' name='".str_replace(".","_",$row[ip]).":".$row[cid]."' /></td>\n";
			echo "<td>".$j."</td>\n";
            for($i=0; $i<$colums; $i++){
				if($i==$colums-1 && empty($row[$i])){$row[$i]="未启动";}
				echo "<td>".$row[$i]."</td>\n";
            }
			//增加项目程序状态列
			//$pjflag=0;
			//for($i=0; $i<count($pjstatus); $i++){
				//if ($row[cid] == $pjstatus[$i][cid]){
					//echo "<td>".$pjstatus[$i][pid]."</td>\n";
					//$pjflag=1;
				//}
            //}
			//if( $pjflag==0 ){echo "<td>未启动</td>\n";}	
            echo "</tr>\n";
        }
		echo "<TR><TD COLSPAN=15 align='right'> "; 
		echo "   <input class='shiny-blue' type='submit' name='startproc' value='起动程序' />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\n";
		echo "   <input class='shiny-blue' type='submit' name='stopproc' value='停止程序' />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\n";
		echo "   <input class='shiny-blue' type='submit' name='killproc' value='KILL程序' />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\n";
		echo "</TD><TR>"; 
		echo " </form>\n";
        echo "</table>\n";
     }
    function getdata() {
		global $MysqlHost;
		global $MysqlPass;
		global $MysqlUser;
		global $dkdb;	
		$conn=mysql_connect($MysqlHost,$MysqlUser,$MysqlPass)	or die("无法连接数据库，请重来");
		mysql_select_db($dkdb,$conn);	
        mysql_query("SET NAMES UTF8");
        $sql="select a.ip,a.cid,a.cname,a.image,a.createtime,a.status, b.projname,b.progdir,b.startscript,b.stopscript,d.pid from dockercontainers as a inner join dkcreated as c on c.cname=a.cname inner join dockerproject as b on c.project=b.projname left join dkprojstatus as d on d.cid=a.cid";     
        $res=mysql_query($sql,$conn);
		global $dkstatusres;
		$dkstatusres=array();
        while($row=mysql_fetch_array($res)){
			$dkstatusres[]=$row;
        }		
	}
	/*
	function getpjstatus(){
		global $MysqlHost;
		global $MysqlPass;
		global $MysqlUser;
		global $dkdb;	
		$conn=mysql_connect($MysqlHost,$MysqlUser,$MysqlPass)	or die("无法连接数据库，请重来");
		mysql_select_db($dkdb,$conn);	
        mysql_query("SET NAMES UTF8");
        $sql="select * from dkprojstatus";  
        $res=mysql_query($sql,$conn);
		global $pjstatus;
		$pjstatus=array();
		while($row=mysql_fetch_array($res)){
			$pjstatus[]=$row;
		}
	}
	*/
	if( isset($_POST["freshstatus"]) ){ 
		$cmd="sudo -u root /usr/bin/php /usr/share/nginx/html/dockermg/dkupdatestatus.php &";
		exec($cmd,$tmp,$out);
    }
	
	if( isset($_POST["startproc"]) ){
		echo "<br> start....<br>";
		//$cmd="sudo -u root /usr/bin/php /usr/share/nginx/html/dockermg/dkupdatestatus.php &";
		//exec($cmd,$tmp,$out);
		getdata();
        for($i=0; $i<count($dkstatusres); $i++){
			$tmpstr = str_replace(".","_",$dkstatusres[$i][ip]).":".$dkstatusres[$i][cid];
			//echo $tmpstr;
			if( !empty($_REQUEST[$tmpstr]) ){
				echo "<br>"."您选择了\n：".$dkstatusres[$i][ip].":".$dkstatusres[$i][cid];
				$pos = strpos($dkstatusres[$i][status],"Up");
				echo "pos:".$pos;
				if($pos !== false){
					$cmd = "sudo -u root ssh root@".$dkstatusres[$i][ip]." docker exec ".$dkstatusres[$i][cid]." ".$dkstatusres[$i]['progdir'].$dkstatusres[$i]['startscript']." 2>&1 ";
					echo "<br>".$cmd;
					try{
						exec($cmd,$tmp,$out);
						if($out==0){
							echo "<br>起动程序成功：".$tmp[0]."<br>";
						}
					} catch (Exception $e) { 
					    echo "/nResult: ".$e->getMessage();
					//	exit();
					} //finally {
					writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." proj start ".$cmd);
					
					//	$cmd="sudo -u root /usr/bin/php /usr/share/nginx/html/dockermg/dkupdatestatus.php &";
					//	exec($cmd,$tmp,$out);
					//}
					
				}else{echo $dkstatusres[$i][ip].":".$dkstatusres[$i][cid].$dkstatusres[$i][status];}
			}
        }
	}else if( isset($_POST["stopproc"]) ){
		echo "<br> stop....<br>";
		//$cmd="sudo -u root /usr/bin/php /usr/share/nginx/html/dockermg/dkupdatestatus.php &";
		//exec($cmd,$tmp,$out);
		getdata();
        for($i=0; $i<count($dkstatusres); $i++){
			$tmp = str_replace(".","_",$dkstatusres[$i][ip]).":".$dkstatusres[$i][cid];
			//echo $tmp;
			if( !empty($_REQUEST[$tmp]) ){
				echo "<br>"."您选择了\n：".$dkstatusres[$i][ip].":".$dkstatusres[$i][cid];
				$pos = strpos($dkstatusres[$i][status],"Up");
				if( $pos !== false ){
					$cmd = "sudo -u root ssh root@".$dkstatusres[$i][ip]." docker  exec ".$dkstatusres[$i][cid]." ".$dkstatusres[$i]['progdir'].$dkstatusres[$i]['stopscript']." 2>&1 &";	
					echo "<br>".$cmd;
					try{
						exec($cmd,$tmp,$out); 
						if($out==0){
							echo "<br>关闭程序成功，ID是：".$tmp[0]."<br>";
						}						
					} catch (Exception $e) { 
					    echo "/nResult: ".$e->getMessage();
					} //finally{
					//	$cmd="sudo -u root /usr/bin/php /usr/share/nginx/html/dockermg/dkupdatestatus.php &";
					//	exec($cmd,$tmp,$out);
					//}
					writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." proj stop ".$cmd);
				}else{echo $dkstatusres[$i][ip].":".$dkstatusres[$i][cid].$dkstatusres[$i][status];}
			}
        }			
	}else if( isset($_POST["killproc"]) ){
		echo "<br> kill....<br>";
		//$cmd="sudo -u root /usr/bin/php /usr/share/nginx/html/dockermg/dkupdatestatus.php &";
		//exec($cmd,$tmp,$out);
		getdata();
		//getpjstatus();
        for($i=0; $i<count($dkstatusres); $i++){
			$tmp = str_replace(".","_",$dkstatusres[$i][ip]).":".$dkstatusres[$i][cid];
			//echo $tmp;
			if( !empty($_REQUEST[$tmp]) ){
				echo "<br>"."您选择了\n：".$dkstatusres[$i][ip].":".$dkstatusres[$i][cid];
				$pos = strpos($dkstatusres[$i][status],"Up");
				$pid=0;
				//for($j=0; $j<count($pjstatus); $j++){
					//if ($dkstatusres[$i][cid] == $pjstatus[$j][cid]){
						//echo "PID:".$pjstatus[$j][pid]."\n";
						//$pid=$pjstatus[$j][pid];
					//}
				//}
				if( !empty($dkstatusres[$i]['pid']) ){ $pid=$dkstatusres[$i]['pid']; }
				if( $pid==0 ){echo "未启动\n";}	
				if( $pos !== false && $pid != 0 ){
					$cmd = "sudo -u root ssh root@".$dkstatusres[$i][ip]." docker  exec ".$dkstatusres[$i][cid]." kill -9 ".$pid." 2>&1 &";	
					echo "<br>".$cmd;
					try{
						exec($cmd,$tmp,$out); 
						if($out==0){
							echo "<br>kill程序成功：".$tmp[0]."<br>";
						}						
					} catch (Exception $e) { 
					    echo "/nResult: ".$e->getMessage();
					} //finally{
					//	$cmd="sudo -u root /usr/bin/php /usr/share/nginx/html/dockermg/dkupdatestatus.php &";
					//	exec($cmd,$tmp,$out);
					//}	
					writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." proj kill ".$cmd);
				}else{echo $dkstatusres[$i][ip].":".$dkstatusres[$i][cid].$dkstatusres[$i][status];}
			}
        }
	}else{
		//$cmd="sudo -u root /usr/bin/php /usr/share/nginx/html/dockermg/dkupdatestatus.php &";
		//exec($cmd,$tmp,$out);
		//getpjstatus();
		ShowTable("dockercontainers");		
	}
   
	 echo "</body>\n";
	 echo "</html> \n";
?>

