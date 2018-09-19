 <?php
 include_once("dkconfig.php");
 
 function runcmd($cmdline){
	     #echo "start...";
	   global $dkpid_file;
       $descriptorspec = array(
   			0 => array("pipe", "r"), 
   			1 => array("pipe", "w"), 
			2 => array("pipe", "w") 
   		#	1 => array("file", "/root/test.log", "a"), 
   		#	2 => array("file", "/root/test.log", "a")
   			);
       $process = proc_open($cmdline, $descriptorspec,$pipes); 
       $var = proc_get_status($process); 
       print_r($var);	 
       global $pid;
       $pid = intval($var['pid']); 
       echo "$pid";
       
       $fp = fopen($dkpid_file, "w");      
       if($fp) {                              
          fwrite($fp,$pid); 
       }                                      
       else {                                 
          echo "打开文件".$dkpid_file."失败";                 
       }                                      
       fclose($fp);
       
       fclose($pipes[0]);
       #echo stream_get_contents($pipes[1]);
       #echo stream_get_contents($pipes[2]);
       fclose($pipes[1]); 
       fclose($pipes[2]);
       $outcode = proc_close($process);
       if($outcode!=0){
           print_r("执行错误:proc_close".$outcode);
        }else{
           print_r("Successful\n"); 
       }
}

function updatedb($sql){
	global $MysqlHost;
	global $MysqlPass;
	global $MysqlUser;
	global $dkdb;
	$conn=mysql_connect($MysqlHost,$MysqlUser,$MysqlPass)	or die("无法连接数据库，请重来");
    mysql_select_db($dkdb,$conn);
	
    mysql_query("SET NAMES UTF8");
    $res=mysql_query($sql,$conn);
	if ( $res === FALSE) { echo "<br>执行失败：".$sql;}
	else{echo "<br>更新成功：".$sql;}
}

//example: writelog(date("Y.m.d H:i:sa l")." user: ".$_SERVER[PHP_AUTH_USER]." from ".$_SERVER['REMOTE_ADDR']." adduser: ".$username);
function  writelog($logstr){
		 global $dklog_file;
		 //file_put_contents($dklog_file, $logstr, FILE_APPEND | LOCK_EX);
         $fp = fopen($dklog_file, "a");      
         if($fp) {                              
            fwrite($fp,$logstr."\n");                              
         }else {                                 
            echo "打开文件失败:".$dklog_file;
         }
         fclose($fp);
}
?>