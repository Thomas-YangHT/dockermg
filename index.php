﻿
<html>
<head>
<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
<!-- <meta http-equiv="refresh" content="300"> -->
<title>Docker Manager</title>
<!-- <script type="text/javascript" src="http://libs.baidu.com/jquery/2.0.3/jquery.min.js"> </script>
<script type="text/javascript">window.jQuery||document.write('<script src="//localhost/jquery/jquery-2.0.3.min.js"><\/script>');</script>
<script type="text/javascript" src="jquery.2.0.3.min.js"></script> 
<script type="text/javascript" src="jquery.sha1.js"></script> -->
<script type="text/javascript" src="jquery.2.0.3.min.js"></script> 
<!-- <script type="text/javascript" src="jquery-1.7.2.min.js"></script>
 <script type="text/javascript" src="jquery-ui-1.8.21.custom.min.js"></script>
<link rel="stylesheet" href="themes/base/jquery.ui.all.css"> -->



<script type="text/javascript">
      $(function () {
                $('li').has('ul').mouseover(function () {
                    $(this).children('ul').show();
                }).mouseout(function () {
                    $(this).children('ul').hide();
                })
        });      
 
function ShowHidden(obj1){
	//alert("obj1"+obj1);
if(obj1.style.display==""){
	obj1.style.display = "none";
	if (obj1.id=="info"){
	    var a=document.body.clientWidth-15;  //取得iframe框架的实际宽度
        document.getElementById("right").style.width=a+"px";
    }
}else{
	obj1.style.display = "";
	if (obj1.id=="info"){
	    var a=document.body.clientWidth-200;  //取得iframe框架的实际宽度
	    document.getElementById("right").style.width=a+"px";
    }
}
}
</script>
   <style>
        body
        {
            width: 100%;
            margin: 0px auto;
        }
        
        /* Main menu */
        
        #menu
        {
            width:180px;  /*  180px */
			height: 100%;
            margin: 0;
            padding: 10px 0 0 0;
            list-style: none;
   /*<!--         background: #111;
            background: -moz-linear-gradient(#444, #111);
            background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));
            background: -webkit-linear-gradient(#444, #111);
            background: -o-linear-gradient(#444, #111);
            background: -ms-linear-gradient(#444, #111);
            background: linear-gradient(#444, #111);
            -moz-border-radius: 50px;
            border-radius: 50px;
            -moz-box-shadow: 0 2px 1px #9c9c9c;
            -webkit-box-shadow: 0 2px 1px #9c9c9c;
            box-shadow: 0 2px 1px #9c9c9c;
	-->	*/	
			background: #444;
            background: -moz-linear-gradient(#444, #111);
            background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));
            background: -webkit-linear-gradient(#444, #111);
            background: -o-linear-gradient(#444, #111);
            background: -ms-linear-gradient(#444, #111);
            background: linear-gradient(#444, #111);
            -moz-box-shadow: 0 0 2px rgba(255,255,255,.5);
            -webkit-box-shadow: 0 0 2px rgba(255,255,255,.5);
            box-shadow: 0 0 2px rgba(255,255,255,.5);
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        
        #menu li
        {
            float: left;
            padding: 0 0 10px 0;
            position: relative;
            line-height: 0;  
            display: block;
            -moz-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
            -webkit-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
            box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
        }
        
        #menu a
        {
		    width: 130px;
			 /*  130px */			
            float: left;
            height: 25px;
            padding: 0 25px;
            color: #999;
            text-transform: uppercase;
            font: bold 12px/25px Arial, Helvetica;
            text-decoration: none;
            text-shadow: 0 1px 0 #000;
        }
        
        #menu li:hover > a
        {
            color: #fafafa;
        }
        
        *html #menu li a:hover /* IE6 */
        {
            color: #fafafa;
        }
        
        #menu li:hover > ul
        {
            display: block;
        }
        
        /* Sub-menu */
        
        #menu ul
        {
            list-style: none;
            margin: 0;
            padding: 0;
            display: none;
            position: absolute;
            top: 10px;
            left: 120px;
            z-index: 99999;
            background: #444;
            background: -moz-linear-gradient(#444, #111);
            background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));
            background: -webkit-linear-gradient(#444, #111);
            background: -o-linear-gradient(#444, #111);
            background: -ms-linear-gradient(#444, #111);
            background: linear-gradient(#444, #111);
            -moz-box-shadow: 0 0 2px rgba(255,255,255,.5);
            -webkit-box-shadow: 0 0 2px rgba(255,255,255,.5);
            box-shadow: 0 0 2px rgba(255,255,255,.5);
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        
        #menu ul ul
        {
            top: 0;
            left: 150px;
			 /*  150px */

        }
        
        #menu ul li
        {
     		float: none;
            margin: 0;
            padding: 0;
            display: block;
            -moz-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
            -webkit-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
            box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
        }
        
        #menu ul li:last-child
        {
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        
        #menu ul a
        {
            padding: 10px;
            height: 10px;
            width: 130px;
			 /*  130px */
            height: auto;
            line-height: 1;
            display: block;
            white-space: nowrap;
            float: none;
            text-transform: none;
        }
        
        *html #menu ul a /* IE6 */
        {
            height: 10px;
        }
        
        *:first-child + html #menu ul a /* IE7 */
        {
            height: 10px;
        }
        
        #menu ul a:hover
        {
            background: #0186ba;
            background: -moz-linear-gradient(#04acec,  #0186ba);
            background: -webkit-gradient(linear, left top, left bottom, from(#04acec), to(#0186ba));
            background: -webkit-linear-gradient(#04acec,  #0186ba);
            background: -o-linear-gradient(#04acec,  #0186ba);
            background: -ms-linear-gradient(#04acec,  #0186ba);
            background: linear-gradient(#04acec,  #0186ba);
        }
        
        #menu ul li:first-child > a
        {
            -moz-border-radius: 5px 5px 0 0;
            border-radius: 5px 5px 0 0;
        }
        
        #menu ul li:first-child > a:after
        {
            content: '';
            position: absolute;
            left: 30px;
            top: -8px;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-bottom: 8px solid #444;
        }
        
        #menu ul ul li:first-child a:after
        {
            left: -8px;
            top: 12px;
            width: 0;
            height: 0;
            border-left: 0;
            border-bottom: 5px solid transparent;
            border-top: 5px solid transparent;
            border-right: 8px solid #444;
        }
        
        #menu ul li:first-child a:hover:after
        {
            border-bottom-color: #04acec;
        }
        
        #menu ul ul li:first-child a:hover:after
        {
            border-right-color: #04acec;
            border-bottom-color: transparent;
        }
        
        
        #menu ul li:last-child > a
        {
            -moz-border-radius: 0 0 5px 5px;
            border-radius: 0 0 5px 5px;
        }
        
        /* Clear floated elements */
        #menu:after
        {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }
        
        * html #menu
        {
            zoom: 1;
        }
        /* IE6 */
        *:first-child + html #menu
        {
            zoom: 1;
        }
        /* IE7 */

    #left{   
        width:10px;   
        height:100%;   
        border:1px solid #777;
        display:table-cell;     
        text-align:center;   
        vertical-align:middle;   
        background:#678;   
        color:#fff;
        font-size:8px;
        cursor:hand;
        line-height:12px;		
        float:left;		
        } 
    </style>

</head>
<script type="text/javascript">
 window.onload=function(){
   var a=document.body.clientWidth-200;  //取得iframe框架的实际宽度
   document.getElementById("right").style.width=a+"px";
 }
 </script>

<body>
<div id='up'>
<iframe style="HEIGHT: 100px;WIDTH: 100%; " name="mainFrame" scrolling="NO" noresize src="top.htm">  </iframe> 
</div>
<div id='top' onClick='ShowHidden(up)' style='text-align:center;line-height:12px;height:10px;width:100%;cursor:hand;background:#678;font-size:8px;color:#fff' >
   OPEN / CLOSE</div>

<div id='info' style='width:180px;float:left;height:100%;position: relative;Z-INDEX: 12;' >
<!--example:
    <ul id="menu">
        <li><a href="#">Categories</a>
            <ul>
                <li><a href="#">CSS</a>
                    <ul>
                        <li><a href="#">Item 11</a></li>
                    </ul>
                </li>
            </ul>
        </li>
     </ul>
-->
<ul id="menu">
  <?php
    include_once("dkconfig.php");
	include_once("dkcommon.php");
	include_once("proj.inc.php");
	GetProjData();
  ?>
  <li><a href='/dockermg/dockerstatus.php'    target='right' >[容器状态]</a></li>
  <li><a href='/dockermg/dockercreate.php'    target='right' >[容器创建]</a></li>
  <li><a href='/dockermg/dkopcont.php'        target='right' >[容器启停]</a></li>
  <li><a href='/dockermg/dkopproj.php'        target='right' >[测试程序启停]</a>
	<ul>
  <?php
	for($i=0;$i<count($projnames);$i++){
		echo    "<li><a href='/dockermg/dkopproj.php?projname=".$projnames[$i]."'     target='right' >[".$projnames[$i]."]</a></li>";
	}   
  ?>
	</ul>  
  </li>  
   <li><a href='#' >[测试项目发布]</a>
	<ul>
  <?php
	for($i=0;$i<count($projnames);$i++){
		echo    "<li><a href='/dockermg/projframe.php?projname=".$projnames[$i]."'     target='right' >[".$projnames[$i]."]</a></li>";
	}   
  ?>
	</ul>
   </li>
 <li><a href='/qinmonitor/procoper.php'        target='right' >[在线程序启停]</a>
  	<ul>
  <?php
	GetProcIPSetting();
	for($i=0;$i<count($procipres);$i++){
		echo    "<li><a href='/qinmonitor/procoper.php?procip=".$procipres[$i]."'     target='right' >[".$procipres[$i]."]</a></li>";
	}   
  ?>  	
	</ul>  
  </li>   
 <li><a href='#' >[在线项目发布]</a>
	<ul>
  <?php
	for($i=0;$i<count($projnames_online);$i++){
		echo    "<li><a href='/dockermg/projframe.php?projname=".$projnames_online[$i]."&dk=no'     target='right' >[".$projnames_online[$i]."]</a></li>";
	}   
  ?>
	</ul>
   </li>   
  <li><a href='/dockermg/tailffile.php'     target='right' >[查询日志]</a></li> 
  <li><a href='/dockermg/mtailffile.php'     target='right' >[查询多IP项目日志]</a></li>   
</ul>
</div>	
<div id='left' onClick='ShowHidden(info)' >
   <div id='left1' style='height:500;text-valign:middle;display:table-cell;vertical-align:middle;text-align:center;'>O P E N / C L O S E</div>
    <script type="text/javascript">    document.getElementById("left1").style.height=document.body.clientHeight+"px"; </script>
</div>
 <iframe frameBorder="0" id="right" name="right" scrolling="auto" src="dockerstatus.php" style="position: absolute;Z-INDEX: 2; HEIGHT: 100%; VISIBILITY: inherit; WIDTH: 100%; ">    </iframe> 
</body>
</html>
