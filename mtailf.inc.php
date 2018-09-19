<?php 

function selectdb(){
   	$conn=mysql_connect("localhost","root","")	or die("无法连接数据库，请重来");
    mysql_select_db("moninfo",$conn);
    mysql_query("SET NAMES UTF8");	
    $sql="select distinct projname from moninfo.procsetting";
    $res=mysql_query($sql,$conn);
    $rows=mysql_affected_rows($conn);//获取行数
    $colums=mysql_num_fields($res);//获取列数
	global $projnames;
	$projnames=array();
	$j=0;
    while($row=mysql_fetch_array($res)){
		//$projnames[]=$j."-".$row['projname'];
		$projnames[]=$row['projname'];
		$j++;
    }
	
	//$sql="select projname,logdir,logfilename from tailproject union select cname as projname,logdir,'catalina.out' as logfilename from docker.dkcreated"; 
	
	$sql="select ip,a.projname,logdir,'catalina.out' as logfilename from moninfo.procsetting as a left join docker.dockerproject as b  on a.projname=b.projname";
	$res=mysql_query($sql,$conn);
    $rows=mysql_affected_rows($conn);//获取行数
    $colums=mysql_num_fields($res);//获取列数
	global $projectres;
	$projectres=array();
	$j=0;
    while($row=mysql_fetch_array($res)){		
		$projectres[]=$row;
		$j++;
    }
}

function showform(){
	global $projnames;
	global $totaltimes;
	echo '<script type="text/javascript">';
	echo '	function showmykeylines(obj){	obj.style.display="";	}';
	echo '</script>';	
	echo "<form name='form' action='mtailfdown.php' target='down' method='post' class='' > \n";
    echo "&nbsp&nbsp&nbsp<label style='color:black;font-size:18px;'>请选择：</label> \n ";
    //echo "<br> <br>  \n ";	 
    echo "&nbsp&nbsp&nbsp<label for='selprojname' style='color:black;font-size:14px;width:150'>项目</label> \n ";
    echo "<select name='selprojname' onclick=''>    \n ";
    for ($i=0; $i<count($projnames); $i++) {
        echo "<option value='".$projnames[$i]."'>".$projnames[$i]."</option>  \n ";
    }
    echo "</select>   \n ";      
    echo "&nbsp&nbsp&nbsp<label for='lines' style='color:black;font-size:14px;width:150'>起始行数:</label> \n ";
    echo "<input type='text' name='lines' id='lines'  value='20'>\n";
    echo "&nbsp&nbsp&nbsp<label for='keyword' style='color:black;font-size:14px;width:150'>关键字加亮:</label> \n ";
    echo "<input type='text' name='keyword' id='keyword'  value='food'>\n";
    echo "&nbsp&nbsp&nbsp<label for='refreshseconds' style='color:black;font-size:14px;width:150'>刷新间隔(秒):</label> \n ";
    echo "<input type='text' name='refreshseconds' id='refreshseconds'  value='10'>\n";	
	
	echo "&nbsp&nbsp&nbsp<label for='keymode' style='color:black;font-size:14px;'>关键字前后10行模式</label> \n ";
	echo "<input id='keymode'   type='radio' name='keymode' value='keymode' onclick='showmykeylines(mykey)' />";
	echo "<div id='mykey' style='display:none;color:black;font-size:14px;width:500;float:left;'>";
	echo "&nbsp&nbsp&nbsp<label for='mykeylines' style='color:black;font-size:14px;width:150'>查询的行数:</label> \n ";
	echo "<input id='mykeylines'  name='mykeylines'  type='text' value='200' /> \n ";
	echo "</div>";
	
    echo "&nbsp&nbsp&nbsp<input  type='submit' name='tailf' value='查看日志' /> \n";     
	echo "&nbsp&nbsp&nbsp<input  type='submit' name='stoptail' value='  停止  ' /> \n";   	
    echo "</form>\n"; 
}

#sudo ssh $IP tail -f $filename
function  readlog_ctn2($filename,$times,$size2,$ip){
    global $lines;
	global $keyword;
	$size2=$size2-$lines;
	$cmd="sudo ssh ".$ip." tail -n +".$size2." ".$filename." 2>&1";
	echo "<label style='color:green'>您选择的IP是：".$ip."文件是：".$filename."起始行数：".$lines."关键字：".$keyword."</label><BR>";
	//echo "cmd:".$cmd;
	exec($cmd,$tmp,$out);
	//$rows=preg_split('/\n/',$buffer);
	//print_r($tmp);
	echo "<div id='".$ip."'>";
	foreach ($tmp as $line){
		//str_ireplace($keyword,"<div color='red'>".$keyword."</div>",$line);
		echo str_ireplace($keyword,"<label style='color:red'>".$keyword."</label>",$line)."<BR>";
	}
	echo "</div>";
	unset($tmp);
}
function readlog_key($ip,$filename,$keyword,$mykeylines){
	$cmdstr="line=`tail -n ".$mykeylines." ".$filename."|awk '/".$keyword."/{print NR}'`; ";
	$cmdstr.="for i in \$line ; do tail -n ".$mykeylines." ".$filename."|awk  'NR>=(\"'\$i'\"-10) && NR<=(\"'\$i'\"+10){print \$0}' ; done  ";
    $fp = fopen("/root/seek.sh", "w");      
    if($fp) {                              
          fwrite($fp,$cmdstr); 
    }else {                                 
          echo "打开文件seek.sh失败";                 
    }                                      
    fclose($fp);
	
	$cmd="sudo scp /root/seek.sh ".$ip.":/root/ ;sudo ssh ".$ip." sh /root/seek.sh";
	echo "<label style='color:green'>您选择的IP是：".$ip."文件是：".$filename."tail行数：".$mykeylines."关键字：".$keyword."</label><BR>";
	echo "cmd:".$cmd;
	exec($cmd,$tmp,$out);
	echo "<div id='log'>";
	foreach ($tmp as $line){
		echo str_ireplace($keyword,"<label style='color:red'>".$keyword."</label>",$line)."<BR>";
	}
	echo "</div>";
}
?>