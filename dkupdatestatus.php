
<?php
function getips(){
   	$conn=mysql_connect("localhost","root","")	or die("�޷��������ݿ⣬������");
    mysql_select_db("docker",$conn);
    mysql_query("SET NAMES UTF8");
    $sql="select ip from dockerhost";    
    $res=mysql_query($sql,$conn);

	global $hostip;
	$hostip=array();
    while($row=mysql_fetch_array($res)){
		$hostip[]=$row[ip];
    }
}

function getcontainers(){
   	$conn=mysql_connect("localhost","root","")	or die("�޷��������ݿ⣬������");
    mysql_select_db("docker",$conn);
    mysql_query("SET NAMES UTF8");
    #$sql="select ip,cid,b.projname,status from dockercontainers as a inner join dockerproject as b on a.cname like concat(b.projname,'%') where substring(status,1,2)='Up'";    
	$sql="select ip,cid,b.project,status from dockercontainers as a inner join dkcreated as b on a.cname=b.cname where substring(status,1,2)='Up'";
    $res=mysql_query($sql,$conn);

	global $containers;
	$containers=array();
    while($row=mysql_fetch_array($res)){
		$containers[]=$row;
    }
}

function updatedb($sql){
	$conn=mysql_connect("localhost","root","")	or die("�޷��������ݿ⣬������");
    mysql_select_db("docker",$conn);
    mysql_query("SET NAMES UTF8");
    $res=mysql_query($sql,$conn);
	if ( $res === FALSE) { echo "<br>\nִ��ʧ�ܣ�".$sql."<br>\n";}
	else{echo "<br>\n���³ɹ���".$sql."<br>\n";}
}

//-------------------start docker update status--------------------------------------------------------
//ssh 192.168.100.21 docker ps -a --format "{{.ID}}\;{{.Names}}\;{{.Image}}\;{{.Command}}\;{{.CreatedAt}}\;{{.Status}}\;{{.Ports}}"|sed 's/,//g'|sed 's/;/,/g'|awk '{print "192.168.100.21,"$0}' >containers.csv
//LOAD DATA INFILE '/root/containers.csv' INTO TABLE `dockercontainers` FIELDS TERMINATED BY ','  (`ip`, `cid`, `cname`, `image`, `cmd`, `createtime`, `status`, `ports`)
include_once("dkconfig.php");
    getips();
	$cmd = "sudo -u root echo ''>".$dkctstat_file;
	echo "���containers.csv: ".$cmd."\n";
	exec($cmd,$tmp,$out);
	for ($i=0; $i<count($hostip); $i++) {
		//���IP��ȡcontainers״̬��Ϣ����/root/containers.csv
		$cmd="sudo -u root ssh root@".$hostip[$i]." docker ps -a --format \"{{.ID}}\;{{.Names}}\;{{.Image}}\;{{.Command}}\;{{.CreatedAt}}\;{{.Status}}\;{{.Ports}}\"";
		$cmd .= "|sed 's/,//g'|sed 's/;/,/g'|awk '{print \"".$hostip[$i].",\"\$0}' >>".$dkctstat_file;
		echo "cmd is: ".$cmd;
		exec($cmd,$tmp,$out); 
		if($out==0){
			echo "<br>\n��ȡcontainer״̬�ɹ���".$hostip[$i].$tmp[0];
		}else{echo "<br>\n��ȡcontainer״̬ʧ�� ".$hostip[$i].$tmp[0]; }
    }
	$sql="delete from dockercontainers";
	updatedb($sql);
	$sql="LOAD DATA INFILE '".$dkctstat_file."' INTO TABLE `dockercontainers` FIELDS TERMINATED BY ','  (`ip`, `cid`, `cname`, `image`, `cmd`, `createtime`, `status`, `ports`)";
	updatedb($sql);
	
// docker exec food8 ps auxwww|grep tomcat|grep food|grep -v grep |awk '{print $2}' >>projstatus.csv
// select ip,cid,status from dockercontainers where substring(status,1,2)='Up'
    getcontainers();
	$cmd = "sudo -u root echo ''>".$dkpjstat_file;
	echo "���projstatus.csv: ".$cmd."\n";
	exec($cmd,$tmp,$out);	
	for ($i=0; $i<count($containers); $i++) {
		//���container��ȡprojstatus״̬��Ϣ����/root/projstatus.csv
		//		$cmd="sudo -u root ssh root@".$containers[$i][ip]." docker exec ".$containers[$i][cid]." ps auxwww|grep ".$containers[$i][projname]."|grep -v grep |awk '{print \"".$containers[$i][cid].",\""."$2}' >>".$dkpjstat_file;
		$cmd="sudo -u root ssh root@".$containers[$i][ip]." docker exec ".$containers[$i][cid]." ps auxwww|grep java|grep -v grep |awk '{print \"".$containers[$i][cid].",\""."$2}' >>".$dkpjstat_file;
		echo "cmd is: ".$cmd;
		exec($cmd,$tmp,$out); 
		if($out==0){
			echo "<br>\n��ȡprojstatus״̬�ɹ���".$hostip[$i].$tmp[0];
		}else{echo "<br>\n��ȡprojstatus״̬ʧ�� ".$hostip[$i].$tmp[0]; }		
    }
	$sql="delete from dkprojstatus";
	updatedb($sql);
	$sql="LOAD DATA INFILE '".$dkpjstat_file."' INTO TABLE `dkprojstatus` FIELDS TERMINATED BY ','  (`cid`, `pid`)";
	updatedb($sql);	

?>