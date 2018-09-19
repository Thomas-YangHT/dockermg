<?php
session_start(); 
if(!isset($_SESSION['login_status']))    
	header('Location:login.html');
?>

<?php
	include_once("dkconfig.php");
	include_once("dkcommon.php");
	include_once("proj.inc.php");
	//GetProjData();
	//echo "projname:".$_GET[projname];
	ShowUpProjHtmlhead();
   	ShowProjForm()
?>