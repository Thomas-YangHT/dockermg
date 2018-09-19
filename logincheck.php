
<html>
<head>
<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>

<style type="text/css">

</style>
</head>

<body>
<div id="bigbox"  class="ceng">
<div id="banner" class="ceng"><img src="images/banner.gif" width="778" height="70" /></div>
<div id="main" class="ceng">

<div id="log">
<div id="yonghu">
<?php
include_once("dkconfig.php");
include_once("dkcommon.php");

function make_safe($variable) {
$variable = addslashes(trim($variable));
return $variable;
}
$user=make_safe($_REQUEST["user"]);
$pass=make_safe($_REQUEST["pass"]);
//$yz=make_safe($_REQUEST["yz"]);
//$yzma=make_safe($_REQUEST["hiddenField"]);

//if ($yz == $yzma)
//{
if ($user=="" or  $pass=="" )
{
      echo"你输入的信息有空,请<a href=\"login.php\">"."返回"."</a>重新输入";
}
else
{
	$conn=mysql_connect($MysqlHost,$MysqlUser,$MysqlPass)	or die("无法连接数据库，请重来");
    mysql_select_db($dkdb,$conn) or die("无法选择数据库，请重来");
    //mysql_query("SET NAMES 'gbk'");/*解决汉字*/
    $row = mysql_fetch_assoc(mysql_query(" SELECT password,Id FROM users where name = '$user' and password = '$pass'"));
    $mima=$row[password];
    
    if($pass == $mima)
    {
           session_start();
           $_SESSION['user']=$user;
           $_SESSION['login_status']=1;
           
		   writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." login success. ");
           echo "<script>alert('成功登陆')</script>";
          # echo "<script>window.parent.location.href='index.php'; </script>"; 		 
		   echo "<script> parent.location.reload(); </script>"; 
		  # echo "<script> window.location.go(-1);  </script>"; 
		  
		   
    }
    else
    {
            echo"你的用户名或者密码输入错误,请<a href=\"login.html\">"."返回"."</a>";
    }
}

//else
//{
//echo"您输入的验证码不正确！请<a href=\"login.php\">"."返回"."</a>";
//}
?>

</div>

</div>

</div>

</div>
</body>
</html>