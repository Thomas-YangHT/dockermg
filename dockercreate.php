<?php
session_start(); 
if(!isset($_SESSION['login_status']))    
	header('Location:login.html');
?>

<?php
include_once("dkconfig.php");
include_once("dkcommon.php");


echo " <html>  \n";
echo "<head>\n";
header("Refresh:3000"); 
echo "  <meta charset='utf-8'>\n";
echo "  <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
echo "  <title>欢迎您使用docker 创建容器</title>\n";

echo "<!-- CSS goes in the document HEAD or added to your external stylesheet --> \n";
echo " <style type='text/css'> \n";
echo ".basic-grey {";
echo "margin-top:10px;";
echo "margin-left:10px;";
echo "margin-right:auto;";
echo "max-width: 500px;";
echo "background: #F7F7F7;";
echo "padding: 25px 15px 25px 10px;";
echo "font: 12px Georgia, \"Times New Roman\", Times, serif;";
echo "color: #888;";
echo "text-shadow: 1px 1px 1px #FFF;";
echo "border:1px solid #E4E4E4;";
echo "}";
echo " .oddrowcolor{\n";
echo " 	background-color: #FFF8DC;\n";
echo " }\n";
echo " .evenrowcolor{\n";
echo " /*	background-color:#c3dde0; */\n";
echo " background-color:#ffffff;\n";
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
echo "<body style='margin:0 auto;align:center;'>\n";

?>


<?php
function selectdb(){
	global $MysqlHost;
	global $MysqlPass;
	global $MysqlUser;
	global $dkdb;
	$conn=mysql_connect($MysqlHost,$MysqlUser,$MysqlPass)	or die("无法连接数据库，请重来");
    mysql_select_db($dkdb,$conn);
	
    mysql_query("SET NAMES UTF8");
    $sql="select ip,ports,hostdir from dockerhost";    
    $res=mysql_query($sql,$conn);
    $rows=mysql_affected_rows($conn);//获取行数
    $colums=mysql_num_fields($res);//获取列数
	global $hostip;
	global $maxport;
	global $hostres;
	$hostip=array();
	$maxport=array();
	$hostres=array();
	$j=0;
    while($row=mysql_fetch_array($res)){
        //for($i=0; $i<$colums; $i++){ 
        //}
		$hostip[]=$j."-".$row[ip];
		$maxport[]=max(split("-",$row[ports]));
		$hostres[]=$row;
		echo "maxport:".$maxport[$j];
		$j++;
    }
	
	
	$sql="select projdir,projname,ports,progdir,logdir from dockerproject"; 
	$res=mysql_query($sql,$conn);
    $rows=mysql_affected_rows($conn);//获取行数
    $colums=mysql_num_fields($res);//获取列数
	global $projnames;
	global $projectres;
	$projnames=array();
	$projectres=array();
	$j=0;
    while($row=mysql_fetch_array($res)){
        //for($i=0; $i<$colums; $i++){ 
        //}
		$projnames[]=$j."_".$row['projname'];
		$projectres[]=$row;
		$j++;
    }
	
	$sql="select imagename from dockerimage"; 
	$res=mysql_query($sql,$conn);
    $rows=mysql_affected_rows($conn);//获取行数
    $colums=mysql_num_fields($res);//获取列数
	global $imagename;
	$imagename=array();
	$j=0;	
    while($row=mysql_fetch_array($res)){
        //for($i=0; $i<$colums; $i++){ 
        //}
		$imagename[]=$j."-".$row['imagename'];
		$j++;
    }
	
	$sql="select max(Id) as maxid from dkcreated"; 
    $res=mysql_query($sql,$conn);
    $rows=mysql_affected_rows($conn);//获取行数
    $colums=mysql_num_fields($res);//获取列数	
	$row=mysql_fetch_array($res);
	global $maxid;
	$maxid=$row['maxid'];
	if( empty($maxid) ){$maxid=1;}
	else{$maxid++;}
	echo "maxid:".$maxid;
}

function showform(){
	echo '<script type="text/javascript">';
	echo '	function showmynetip(obj){	obj.style.display="";	}';
	echo '</script>';
	global $hostip;
	global $projnames;
	global $imagename;
	echo "<form name='form' action='$PHP_SELF' method='post' class='basic-grey' > \n";
	echo "&nbsp&nbsp&nbsp&nbsp<label style='color:black;font-size:18px;'>请选择：</label> <br><br>\n ";
    echo "&nbsp&nbsp&nbsp&nbsp<label for='selhostname' style='color:black;font-size:14px;'>主机</label> \n ";
    echo "<select name='selhostname' onclick=''>    \n ";
    for ($i=0; $i<count($hostip); $i++) {
        echo "<option value='".$hostip[$i]."'>".$hostip[$i]."</option>  \n ";
    }
    echo "</select>   \n ";
	echo "<br> <br>  \n ";	 
	echo "&nbsp&nbsp&nbsp&nbsp<label for='selprojname' style='color:black;font-size:14px;'>项目</label> \n ";
    echo "<select name='selprojname' onclick=''>    \n ";
    for ($i=0; $i<count($projnames); $i++) {
        echo "<option value='".$projnames[$i]."'>".$projnames[$i]."</option>  \n ";
    }
    echo "</select>   \n ";
	echo "<br> <br>  \n ";	 
	echo "&nbsp&nbsp&nbsp&nbsp<label for='selimagename' style='color:black;font-size:14px;'>镜相</label> \n ";
    echo "<select name='selimagename' onclick=''>    \n ";
    for ($i=0; $i<count($imagename); $i++) {
        echo "<option value='".$imagename[$i]."'>".$imagename[$i]."</option>  \n ";
    }
    echo "</select>   \n ";
    echo "<br> <br>  \n ";	
	echo "&nbsp&nbsp&nbsp&nbsp<label for='hostnetmode' style='color:black;font-size:14px;'>HOST网络模式</label> \n ";
	echo "<input id='hostnetmode' type='radio' name='netmode' value='hostnetmode' />";
	echo "<br> \n ";	
	echo "&nbsp&nbsp&nbsp&nbsp<label for='mynetmode' style='color:black;font-size:14px;'>使用青云宿主机网络段IP</label> \n ";
	echo "<input id='mynetmode'   type='radio' name='netmode' value='mynetmode' onclick='showmynetip(mynet)' />";
	echo "<div id='mynet' style='display:none'>";
	echo "&nbsp&nbsp&nbsp&nbsp<label for='mynetip' style='color:black;font-size:14px;display:inline-block;padding: 0 10px;vertical-align: middle;width:25px;'>IP:</label> \n ";
	echo "<input id='mynetip'  name='mynetip'  type='text' value='172.16.xx.xxx' style='display:' /> \n ";
	echo "<br>";
	echo "&nbsp&nbsp&nbsp&nbsp<label for='mynetmac' style='color:black;font-size:14px;display:inline-block;padding: 0 10px;vertical-align: middle;width:25px;'>MAC:</label> \n ";
	echo "<input id='mynetmac' name='mynetmac' type='text' value='' style='display:'/> \n ";	
	echo "</div>";
	echo "<br> <br>  \n ";	
	echo "&nbsp&nbsp&nbsp&nbsp<input name='createct' class='shiny-blue' type='submit' value='提交' onclick=''/> \n";     
    echo "</form>\n"; 
}

	selectdb();
	if( isset($_POST["createct"]) ){
		if( isset($_POST["netmode"]) and $_POST["netmode"]=='hostnetmode' ){ 
			echo " Host netmode";
		    $selip       =split('-',$_POST["selhostname"]);
		    $selprojname =split('_',$_POST["selprojname"]);
		    $selimagename=split('-',$_POST["selimagename"]);
		    $hostid	= $selip[0];
		    $projid = $selprojname[0];
		    $imageid= $selimagename[0];
		    $pjports=split("-",$projectres[$projid][ports]);
		    echo $hostid.":".$projid.":".$imageid.":".$pjports[0]."<br>";
		    $cmd = "sudo -u root ssh root@".$selip[1]." docker run --privileged -d -v /sys/fs/cgroup:/sys/fs/cgroup:ro -v ".$hostres[$hostid]['hostdir']."/".$selprojname[1]."/running".$projectres[$projid]['projdir'];
		    $cmd .= ":".$projectres[$projid]['progdir']." -v ".$hostres[$hostid]['hostdir']."/".$selprojname[1]."/logs".$maxid.":".$projectres[$projid]['logdir'];
		    $hports=" ";
		    $cmd .= " --name ".$selprojname[1].$maxid." --net=\"host\"  -t ".$selimagename[1]." 2>&1";
		    echo "创建container的命令是：<br>".$cmd;
		    exec($cmd,$tmp,$out); 
		    if($out==0){
		    	echo "<br>创建容器成功，ID是：".$tmp[0];
		    	date_default_timezone_set("PRC");
		    	$date = date("Ymd H:i:s",time()); 
		    	$sql="insert dkcreated values('".$maxid."','".$date."','".$selip[1]."','".$hports."','".$selprojname[1]."','".$hostres[$hostid]['hostdir']."/".$selprojname[1]."/running".$projectres[$projid]['projdir']."','";
		    	$sql .= $hostres[$hostid]['hostdir']."/".$selprojname[1]."/logs".$maxid."','".$selprojname[1].$maxid."','".$selimagename[1]."');";
		    	echo "<br>insert:".$sql;
		    	updatedb($sql);
		    }
		    else{
		    	echo "<br>错误代码是：";
		    	print_r($tmp);
		    }
		    writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." ct create ".$cmd);			
		}elseif( isset($_POST["netmode"]) and $_POST["netmode"]=='mynetmode' ){
			echo " physical netmode ";
			echo "输入的IP是：".$_POST["mynetip"];
			echo "输入的mac是：".$_POST["mynetmac"];
		    $selip       =split('-',$_POST["selhostname"]);
		    $selprojname =split('_',$_POST["selprojname"]);
		    $selimagename=split('-',$_POST["selimagename"]);
		    $hostid	= $selip[0];
		    $projid = $selprojname[0];
		    $imageid= $selimagename[0];
		    $pjports=split("-",$projectres[$projid][ports]);
		    echo $hostid.":".$projid.":".$imageid.":".$pjports[0]."<br>";
		    $cmd = "sudo -u root ssh root@".$selip[1]." docker run --privileged -d -v /sys/fs/cgroup:/sys/fs/cgroup:ro -v ".$hostres[$hostid]['hostdir']."/".$selprojname[1]."/running".$projectres[$projid]['projdir'];
		    $cmd .= ":".$projectres[$projid]['progdir']." -v ".$hostres[$hostid]['hostdir']."/".$selprojname[1]."/logs".$maxid.":".$projectres[$projid]['logdir'];
		    $hports=" ";
		    $cmd .= " --name ".$selprojname[1].$maxid." --net=\"qinnet\" --ip=".$_POST["mynetip"]." --mac-address ".$_POST["mynetmac"]." -t ".$selimagename[1]." 2>&1";
		    echo "创建container的命令是：<br>".$cmd;
		    exec($cmd,$tmp,$out); 
		    if($out==0){
		    	echo "<br>创建容器成功，ID是：".$tmp[0];
		    	date_default_timezone_set("PRC");
		    	$date = date("Ymd H:i:s",time()); 
		    	$sql="insert dkcreated values('".$maxid."','".$date."','".$selip[1]."','".$hports."','".$selprojname[1]."','".$hostres[$hostid]['hostdir']."/".$selprojname[1]."/running".$projectres[$projid]['projdir']."','";
		    	$sql .= $hostres[$hostid]['hostdir']."/".$selprojname[1]."/logs".$maxid."','".$selprojname[1].$maxid."','".$selimagename[1]."');";
		    	echo "<br>insert:".$sql;
		    	updatedb($sql);
		    	//$sql="update dockerhost set ports='".$usedports."'  where ip='".$selip[1]."';";
		    	//echo "<br>update:".$sql;
		    	//updatedb($sql);
		    }
		    else{
		    	echo "<br>错误代码是：";
		    	print_r($tmp);
		    }
		    writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." ct create ".$cmd);				
			
		}else{
			echo " Bridge netmode by default";
		    //ssh 192.168.100.21 docker run --privileged -d -v /sys/fs/cgroup:/sys/fs/cgroup:ro -v /mnt/sdc/docker/food/usr/local/apache-tomcat-food:/usr/local/apache-tomcat-food -v /mnt/sdc/docker/food/logs1:/usr/local/apache-tomcat-food/logs --name food1 -h food1 -p 8030:8030  -p 8031:8031  -p 8032:8032  -p 10022:22 -t centos:tomcat 
		    $selip       =split('-',$_POST["selhostname"]);
		    $selprojname =split('_',$_POST["selprojname"]);
		    $selimagename=split('-',$_POST["selimagename"]);
		    $hostid	= $selip[0];
		    $projid = $selprojname[0];
		    $imageid= $selimagename[0];
		    $pjports=split("-",$projectres[$projid][ports]);
		    echo $hostid.":".$projid.":".$imageid.":".$pjports[0]."<br>";
		    $cmd = "sudo -u root ssh root@".$selip[1]." docker run --privileged -d -v /sys/fs/cgroup:/sys/fs/cgroup:ro -v ".$hostres[$hostid][hostdir]."/".$selprojname[1]."/running".$projectres[$projid][projdir];
		    $cmd .= ":".$projectres[$projid][progdir]." -v ".$hostres[$hostid][hostdir]."/".$selprojname[1]."/logs".$maxid.":".$projectres[$projid][logdir];
		    $usedports = $hostres[$hostid][ports];
		    for ($i=0; $i<count($pjports); $i++) {
		    	$cmd .= " -p ".($maxport[$hostid]+$i+1).":".$pjports[$i];
		    	$usedports .= ($maxport[$hostid]+$i+1)."-";
		    	$hports .= ($maxport[$hostid]+$i+1)."-";
		    }
		    $cmd .= " --name ".$selprojname[1].$maxid." -h ".$selprojname[1].$maxid." -t ".$selimagename[1]." 2>&1";
		    echo "创建container的命令是：<br>".$cmd;
		    exec($cmd,$tmp,$out); 
		    if($out==0){
		    	echo "<br>创建容器成功，ID是：".$tmp[0];
		    	date_default_timezone_set("PRC");
		    	$date = date("Ymd H:i:s",time()); 
		    	$sql="insert dkcreated values('".$maxid."','".$date."','".$selip[1]."','".$hports."','".$selprojname[1]."','".$hostres[$hostid][hostdir]."/".$selprojname[1]."/running".$projectres[$projid][projdir]."','";
		    	$sql .= $hostres[$hostid][hostdir]."/".$selprojname[1]."/logs".$maxid."','".$selprojname[1].$maxid."','".$selimagename[1]."');";
		    	echo "<br>insert:".$sql;
		    	updatedb($sql);
		    	$sql="update dockerhost set ports='".$usedports."'  where ip='".$selip[1]."';";
		    	echo "<br>update:".$sql;
		    	updatedb($sql);
		    }
		    else{
		    	echo "<br>错误代码是：";
		    	print_r($tmp);
		    }
		    writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." ct create ".$cmd);
		    //echo $out;
		}
	}
	else{
		showform();
	}
	echo "</body>\n";
    echo "</html> \n";
?>

