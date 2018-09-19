<?php
//设置mysql参数
$MysqlHost="localhost";
$MysqlUser="root";
$MysqlPass="";
$dkdb="docker";
$mondb="moninfo";

//设置时区
date_default_timezone_set("PRC");

//准备相关文件
$dk_logpath="/root/";
$dklog_file   = $dk_logpath."dk.log";
$dksig_file   = $dk_logpath."dkrun.sig";
$dkpid_file   = $dk_logpath."dk.pid";
$dkrsync_file = $dk_logpath."rsync.log";
$svn_log      = $dk_logpath."svn.log";
$mvn_log	  = $dk_logpath."mvn.log";
$dkctstat_file= $dk_logpath."containers.csv";
$dkpjstat_file= $dk_logpath."projstatus.csv";
if( !file_exists($dklog_file) )   {exec("sudo -u root touch ".$dklog_file,$tmp,$tmpout);    exec("sudo -u root chmod 666 ".$dk_logpath."dk*",$tmp,$tmpout);}
if( !file_exists($dksig_file) )   {exec("sudo -u root touch ".$dksig_file,$tmp,$tmpout);    exec("sudo -u root chmod 666 ".$dk_logpath."dk*",$tmp,$tmpout);}
if( !file_exists($dkpid_file) )   {exec("sudo -u root touch ".$dkpid_file,$tmp,$tmpout);    exec("sudo -u root chmod 666 ".$dk_logpath."dk*",$tmp,$tmpout);}
if( !file_exists($dkrsync_file) ) {exec("sudo -u root touch ".$dkrsync_file,$tmp,$tmpout);  exec("sudo -u root chmod 666 ".$dk_logpath."dk*",$tmp,$tmpout);}
if( !file_exists($svn_log) )      {exec("sudo -u root touch ".$svn_log,$tmp,$tmpout);       exec("sudo -u root chmod 666 ".$dk_logpath."*.log",$tmp,$tmpout);}
if( !file_exists($mvn_log) )      {exec("sudo -u root touch ".$mvn_log,$tmp,$tmpout);       exec("sudo -u root chmod 666 ".$dk_logpath."*.log",$tmp,$tmpout);}
if( !file_exists($dkctstat_file) ){exec("sudo -u root touch ".$dkctstat_file,$tmp,$tmpout); exec("sudo -u root chmod 666 ".$dk_logpath."dk*",$tmp,$tmpout);}
if( !file_exists($dkpjstat_file) ){exec("sudo -u root touch ".$dkpjstat_file,$tmp,$tmpout); exec("sudo -u root chmod 666 ".$dk_logpath."dk*",$tmp,$tmpout);}

//touch($dkpid_file );

?>