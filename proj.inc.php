
<?php
function ShowUpProjHtmlhead(){
echo " <html>  \n";
echo "<head>\n";
header("Refresh:3000"); 
echo "  <meta charset='utf-8'>\n";
echo "  <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
echo "  <title>欢迎您使用docker同步项目程序</title>\n";
echo "<SCRIPT LANGUAGE='JavaScript'>\n";
echo "function ShowHidden(obj1){\n";
echo "	//alert(\"obj1\"+obj1);\n";
echo "	if(obj1.style.display==\"\"){\n";
echo "		obj1.style.display = \"none\";\n";
echo "	}else{\n";
echo "		obj1.style.display = \"\";\n";
echo "	}\n";
echo "}\n";
echo "</script>";
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
echo ".basic-grey h1 {";
echo "font-size: 25px;";
echo "padding: 0px 0px 10px 40px;";
echo "display: block;";
echo "border-bottom:1px solid #E4E4E4;";
echo "margin: -10px -15px 30px -10px;";
echo "color: #888;";
echo "}";
echo ".basic-grey h1>span {";
echo "display: block;";
echo "font-size: 11px;";
echo "}";
echo ".basic-grey label {";
echo "display: block;";
echo "margin: 0px;";
echo "}";
echo ".basic-grey label>span {";
echo "float: left;";
echo "width: 20%;";
echo "text-align: right;";
echo "padding-right: 10px;";
echo "margin-top: 10px;";
echo "color: #888;";
echo "}";
echo ".basic-grey input[type=\"text\"], .basic-grey input[type=\"email\"], .basic-grey textarea, .basic-grey select {";
echo "border: 1px solid #DADADA;";
echo "color: #888;";
echo "height: 30px;";
echo "margin-bottom: 16px;";
echo "margin-right: 6px;";
echo "margin-top: 2px;";
echo "outline: 0 none;";
echo "padding: 3px 3px 3px 5px;";
echo "width: 70%;";
echo "font-size: 12px;";
echo "line-height:15px;";
echo "box-shadow: inset 0px 1px 4px #ECECEC;";
echo "-moz-box-shadow: inset 0px 1px 4px #ECECEC;";
echo "-webkit-box-shadow: inset 0px 1px 4px #ECECEC;";
echo "}";
echo ".basic-grey textarea{";
echo "padding: 5px 3px 3px 5px;";
echo "}";
echo ".basic-grey select {";
//echo "background: #FFF url('down-arrow.png') no-repeat right;";
//echo "background: #FFF url('down-arrow.png') no-repeat right);";
echo "appearance:none;";
echo "-webkit-appearance:none;";
echo "-moz-appearance: none;";
echo "text-indent: 0.01px;";
echo "text-overflow: '';";
echo "width: 70%;";
echo "height: 35px;";
echo "line-height: 25px;";
echo "}";
echo ".basic-grey textarea{";
echo "height:100px;";
echo "}";
echo ".basic-grey .button {";
echo "background: #E27575;";
echo "border: none;";
echo "padding: 10px 25px 10px 25px;";
echo "color: #FFF;";
echo "box-shadow: 1px 1px 5px #B6B6B6;";
echo "border-radius: 3px;";
echo "text-shadow: 1px 1px 1px #9E3F3F;";
echo "cursor: pointer;";
echo "}";
echo ".basic-grey .button:hover {";
echo "background: #CF7A7A";
echo "}";

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
echo "max-width: 500px;";
//echo "   width:100px;\n";
echo "    }\n";
 
 echo ".directory{ \n";
 echo "   color: blue;  \n";
 echo "   text-align:left;\n";
 echo "   border:0; \n";
 //echo "   border-top:1px solid #aaa; \n";
 echo "   border-bottom:1px solid #aaa; \n";
 echo "   cursor:hand; \n";  
 echo "} \n";
 echo ".file{ \n";
 echo "   color: black;  \n";
 echo "   text-align:left;\n";
 echo "   border:0; \n";
// echo "   border-top:1px solid #aaa; \n";
 echo "   border-bottom:1px solid #aaa; \n";
 echo "} \n";
 echo "ul{list-style-type:none; width:100%; }\n";
 echo "ul li{ width:100%;} \n"; //float:left;
 
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
}

//取得projectres、hostres 、svn projectres
function GetProjData(){
   	//$conn=mysql_connect("localhost","root","")	or die("无法连接数据库，请重来");
    //mysql_select_db("docker",$conn);
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
	global $hostres;
	$hostip=array();
	$maxport=array();
	$hostres=array();
	$j=0;
    while($row=mysql_fetch_array($res)){
        //for($i=0; $i<$colums; $i++){ 
        //}
		$hostip[]=$row[ip];
		//$maxport[]=max(split("-",$row[ports]));
		$hostres[]=$row;
		//echo "maxport:".$maxport[$j];
		$j++;
    }
	
	
	$sql="select a.*,b.type,b.repodir,b.mvndir,b.dstlocation,b.url from dockerproject as a inner join svnproject as b on a.svnprojname=b.projname "; 
	$res=mysql_query($sql,$conn);
    $rows=mysql_affected_rows($conn);//获取行数
    $colums=mysql_num_fields($res);//获取列数
	global $projnames;
	global $projectres;
	global $svnprojnames;
	global $projnames_online;
	$projnames_online=array();
	$projnames=array();
	$projectres=array();
	$svnprojnames=array();
	$j=0;
    while($row=mysql_fetch_array($res)){
        //for($i=0; $i<$colums; $i++){ 
        //}
		if($row['type']=='test'){ $projnames[]=$j."_".$row['projname']; }
		if($row['type']=='online'){ $projnames_online[]=$j."_".$row['projname']; }
		$projectres[]=$row;
		$svnprojnames[]=$j."_".$row['projname'];
		$j++;
    }
}

function GetProcIPSetting() {
		include_once("qinconfig.inc.php");
		$conn=mysql_connect($MysqlHost,$MysqlUser,$MysqlPass)	or die("无法连接数据库，请重来");
		mysql_select_db($mondb,$conn);
		mysql_query("SET NAMES UTF8");
        $sql="select distinct a.ip from procsetting as a inner join hostip as b on trim(a.ip)=trim(b.ip) order by ip";    
        $res=mysql_query($sql,$conn);
		global $procipres;
		$procipres=array();
        while($row=mysql_fetch_array($res)){
			$procipres[]=$row[ip];
        }		
}

function ShowProjForm(){
	global $projectres;	
	$selprojname=split('_',$_GET['projname']);
	//$projid= $selprojname[0];
	//$location=split(':',$projectres[$projid][location]);
	//$srcip=$location[0];
	//$srcdir=$location[1];
	//echo "<form name='form' action='$PHP_SELF' method='post' class='basic-grey'> \n";
	echo "<body style='margin:0 auto;align:center;'>\n";
	//echo "Projname:".$_GET["projname"];
	echo "<form name='form' action='projdown.php' target='".$_GET['projname']."' method='post'  > \n";//style='float:left;width:100%;margin:0;padding:0;border:0;'
	if ( isset($_GET['dk']) ){ 
		echo "<h3 style='margin:0;padding:0;border:0;height:30'>项目名称：".$selprojname[1]."[在线]</h3> ";
	}else{
		echo "<h3 style='margin:0;padding:0;border:0;height:30'>项目名称：".$selprojname[1]."</h3> ";
	}
	echo "<input type='hidden' name='selprojname' value='".$_GET["projname"]."' />\n";	
	echo "<input type='hidden' name='dk' value='".$_GET["dk"]."' />\n";		
	echo "<div style='margin:0 auto;text-align:center'>";
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";		
	echo "<input name='svncheckout' class='shiny-blue' type='submit' value=' SvnCheckout ' onclick='this.style.color=\"#FFA500\";this.style.backgroundColor=\"#759ae9\"'/> \n";    
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<input name='svnupdate' class='shiny-blue' type='submit' value=' SvnUpdate ' onclick='this.style.color=\"#FFA500\";this.style.backgroundColor=\"#759ae9\"'/> \n";    
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<input name='mvnproj' class='shiny-blue' type='submit' value=' MVN编译 ' onclick='this.style.color=\"#FFA500\";this.style.backgroundColor=\"#759ae9\"'/> \n"; 
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
	echo "<input name='cmpproj' class='shiny-blue' type='submit' value=' 比较更新内容 ' onclick='this.style.color=\"#FFA500\";this.style.backgroundColor=\"#759ae9\"'/> \n"; 
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
	echo "<input name='exlfile' class='shiny-blue' type='submit' value=' 选择排除文件 ' onclick='this.style.color=\"#FFA500\";this.style.backgroundColor=\"#759ae9\"'/> \n";    
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
	echo "<input name='confirmsync' class='shiny-blue' type='submit' value=' 同步并备份 ' onclick='this.style.color=\"#FFA500\";this.style.backgroundColor=\"#759ae9\"'/> \n";    
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<input name='showproj' class='shiny-blue' type='submit' value=' 显示版本切换 ' onclick='this.style.color=\"#FFA500\";this.style.backgroundColor=\"#759ae9\"'/> \n";  
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
	echo "<input name='operproj' class='shiny-blue' type='submit' value=' 程序起停 ' onclick='this.style.color=\"#FFA500\";this.style.backgroundColor=\"#759ae9\"'/> \n";    
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
	echo "</div>";
    echo "</form>\n"; 
    echo "</body>";	
}


function ShowSelExlFile(){
	global $projectres;	
	global $dk_logpath;
	$selprojname=split('_',$_POST["selprojname"]);
	$projid= $selprojname[0];
	$location=split(':',$projectres[$projid][location]);
	$srcip=$location[0];
	$srcdir=$location[1];
	$cmd="sudo touch ".$dk_logpath.$projectres[$projid][projname].".exl";
	exec($cmd,$tmp,$out);

	$cmd="sudo touch ".$dk_logpath.$projectres[$projid][projname].".file";
	exec($cmd,$tmp,$out);

	$cmd="sudo chmod 666 ".$dk_logpath.$projectres[$projid][projname].".file";
	exec($cmd,$tmp,$out);
	
	$cmd="sudo -u root ssh root@".$srcip." \"find ".$srcdir." -exec ls -ld {} \; 2>&1 \"|awk  '{print $1,$2,$3,$4,$5,$6,$7,$8,\"//\"$9}'>".$dk_logpath.$projectres[$projid][projname].".file";
	exec($cmd,$tmp,$out);
	unset($tmp);
	$cmd="sudo cat ".$dk_logpath.$projectres[$projid][projname].".file";
	exec($cmd,$tmp,$out);
	//echo $cmd;
    echo "<table class='altrowstable' id='alternatecolor' style='margin:0 auto;align:center;word-break:break-all; word-wrap:break-all;width:100%'> <tr>\n";
	echo " <form id='form' name='form' method='post' action='$PHP_SELF'>\n";
	echo "<th> 选择 </th>\n";		
	echo "<th> sn </th>\n";
  	echo "<th> 文件名 </th>\n";
  	echo "<th> 属性 </th>\n";

    echo "</tr>\n";

	echo "<TR><TD COLSPAN=15 align='left' > "; 
	echo "<div >";
	echo "<ul>";

	$t='d';
	for($i=0;$i<count($tmp);$i++){
		$fileatt=explode("//",$tmp[$i]);
		$deep = substr_count($fileatt[1], "/");
		if($i==0){ $firstdeep = substr_count($fileatt[1],"/"); $prex = 0;}
		$x = $deep-$firstdeep;
		if( strpos($fileatt[0],"d") === 0 ){
			if($i!=0 && $x == $prex && $t=='d'){echo "</uL></div> <br>";}
			if($i!=0 && $x == $prex && $t=='f' && $pref>$prex){echo "</uL></div> <br>";}
			if($i!=0 && $x < $prex  && $t=='f' && $pref>$prex ){ 
				$cnt=$prex-$x; 
				//echo "cnt:".$cnt;
				for($j=0;$j<=$cnt;$j++){echo "</uL></div>";} 
			}elseif($i!=0 && $x < $prex ){ 
				$cnt=$prex-$x; 
				//echo "cnt:".$cnt;
				for($j=0;$j<$cnt;$j++){echo "</uL></div>";} 
			}
			//if( $x > $prex ){ }
			$t='d';
			$prex=$x; 
			echo "<li ><div class='directory' style='float:left;width:70%' onClick='ShowHidden(level".($i+1).")'> <input type='checkbox' style='float:left;' name='".str_replace(".","_",$fileatt[1])."' />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".($i+1)."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$fileatt[1]."</div><div  align='left' style='float:right;width:30%'> ".$fileatt[0]. "</div> </li>\n"; 
			if($i==0){echo "<div id='level1' style='display:\"\"' >\n ";}
			else{echo "<div id='level".($i+1)."' style='display:none'>\n ";}
			echo "<uL>";

		}else{
			if($i!=0 && $x == $prex && $t == 'd'){echo "</uL></div> ";}
			if($i!=0 && $x == $prex && $t == 'f' && $pref>$prex){echo "</uL></div> <br>";}
			if($i!=0 && $x  < $prex && $t == 'd'){ 
				$cnt=$prex-$x; 
				for($j=0;$j<$cnt;$j++){echo "</uL></div>";} 
				$prex=$x-1;
			}
			if($i!=0 && $x<$prex && $t=='f' && $pref>$prex){ 
				$cnt=$pref-$x; 
				for($j=0;$j<$cnt;$j++){echo "</uL></div>";} 	
				$prex=$x-1;
			}
			//if($i!=0 && $x  > $prex && $t == 'd'){ }//no do
			//if($i!=0 && $x  > $prex && $t == 'f'){ }//no do
			$t='f';
			$pref=$deep-$firstdeep;
			echo "<li ><div  class='file' style='float:left;width:70%'><input type='checkbox'  name='".str_replace(".","_",$fileatt[1])."' />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".($i+1)."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$fileatt[1]."</div><div  align='left' style='float:right;width:30%'> ".$fileatt[0]. "</div> </li>\n"; 			
		}
		//单层表格方式显示
		//if($i/2==round($i/2)){echo "<tr class='oddrowcolor'>\n";}
		//else{echo "<tr class='evenrowcolor'>\n";}
		//echo "<td> <input type='checkbox' style='float:left' name='".str_replace(".","_",$fileatt[1])."' /></td>\n";
		//echo "<td>".$i."</td>\n";
		//echo "<td>".$fileatt[1]."</td>\n"; 
		//echo "<td>".$fileatt[0]."</td>\n"; 
		//echo "</tr>\n";
		//echo "<li><div id='red' onClick='ShowHidden(red$i".$k.")'>[".substr($a,0,60)."] </div> \n</li> ";

	}
	echo "</uL>";
	echo "</div>";
	echo "</ul>";
	echo "</div>";
    echo "</TD></TR>";    
	echo "<TR><TD COLSPAN=15 align='right'> "; 
	echo "<input type='hidden' name='selprojname' value='".$_POST["selprojname"]."' />\n";	
	echo "<input class='shiny-blue' type='submit' name='ExlFileSel' value=' 选择排除文件 ' />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\n";

	echo "</TD></TR>"; 
	echo " </form>\n";
    echo "</table>\n";	
	
}


function ShowProjVersion(){
	global $hostip;
	global $hostres;
	global $projectres;	
	$selprojname=split('_',$_POST["selprojname"]);
	$projid= $selprojname[0];
	//echo $projid.":"."<br>";
	
	$location=split(':',$projectres[$projid][location]);
	$srcip=$location[0];
	$srcdir=$location[1];
	$cmd = "sudo -u root ssh root@".$srcip." ls -ld --full-time ".$srcdir;
	$cmd.= "|awk '{print $6\" \"$7}'";
	exec($cmd,$tmp,$out);
	//echo $cmd.":";
	$version = $tmp[0];
	unset($tmp);
    echo "<div style='margin:0 auto;align:center;font-size:22px;font-family:SimHei;width:800px'>".'欢迎您使用Docker版本目录切换操作</div>'."<div style='margin:0 auto;width:600px;color:red;float:right;font-size:14px;font-family:SimHei;'>需同步版本[".$version."]</div>\n";
    echo "<table class='altrowstable' id='alternatecolor' style='margin:0 auto;align:center;word-break:break-all; word-wrap:break-all;'> <tr>\n";
	echo "<h3 style='margin:0 auto;align:center;font-size:16px;width:800px'><input type='checkbox' name='allunchecked' onclick='selectall(this)' />全选/取消</h3>\n";
	echo " <form id='form' name='form' method='post' action='$PHP_SELF'>\n";
	echo "<th>选择</th>\n";		
	echo "<th> sn </th>\n";
  	echo "<th> IP </th>\n";
	echo "<th>项目名  </th>\n";
  	echo "<th>运行版本".$selprojname[1]."/running".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]."</th>\n";
	echo "<th>更新目录版本".$selprojname[1]."/update".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]."</th>\n";
	echo "<th>历史目录版本".$selprojname[1]."/history".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]."</th>\n";
	//echo "<th><a href='dkopcont.php?sortby=".$field_name."'target='right' >".$field_name."</a></th>\n";
    echo "</tr>\n";
	
	for($i=0;$i<count($hostip);$i++){
		$cmd = "sudo ssh root@".$hostip[$i]." ls -ld --full-time ".$hostres[$i][hostdir]."/".$selprojname[1]."/running".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]." ";
		$cmd.= $hostres[$i][hostdir]."/".$selprojname[1]."/update".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]." ";
		$cmd.= $hostres[$i][hostdir]."/".$selprojname[1]."/history".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]." ";
		$cmd.= "|awk '{print $6\" \"$7}'";
		exec($cmd,$tmp,$out);
		//echo "cmd:".$cmd."<br>";
		//print_r($tmp);
		if($i/2==round($i/2)){echo "<tr class='oddrowcolor'>\n";}
		else{echo "<tr class='evenrowcolor'>\n";}
		echo "<td> <input type='checkbox' style='float:left' name='".str_replace(".","_",$hostip[$i])."' /></td>\n";
		echo "<td>".$i."</td>\n";
		echo "<td>".$hostip[$i]."</td>\n";
		echo "<td>".$selprojname[1]."</td>\n";
		echo "<td>".$tmp[1]."</td>\n"; //running
		echo "<td>".$tmp[2]."</td>\n"; //update
		echo "<td>".$tmp[0]."&nbsp</td>\n"; //history ls按名称排序h在u和r前
		echo "</tr>\n";
		unset($tmp);
	}
        
	echo "<TR><TD COLSPAN=15 align='right'> "; 
	echo "<input type='hidden' name='selprojname' value='".$_POST["selprojname"]."' />\n";	
	echo "<input type='hidden' name='dk' value='".$_POST["dk"]."' />\n";		
	echo "<input class='shiny-blue' type='submit' name='ReplUpdir' value='切换运行与更新目录' />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\n";
	echo "<input class='shiny-blue' style='background:#2b2b2b' type='submit' name='ReplHisdir' value='切换运行与历史目录' />\n";	
	echo "</TD><TR>"; 
	echo " </form>\n";
    echo "</table>\n";
}

function ShowConfirm(){
	global $dk_logpath;
	$selprojname=split('_',$_POST["selprojname"]);
	$cmd="sudo cat ".$dk_logpath.$selprojname[1].".exl";
	exec($cmd,$tmp,$out);	
	//echo $cmd.":".$out;
	//print_r($tmp);
	echo "<form name='form' action='$PHP_SELF' method='post' class='basic-grey'> \n";
	echo "<h1>您选择的项目是：".$selprojname[1]."</h1> ";
    echo "<h3>排除文件包括：</h3> ";
	echo "<label>";
	for($i=0;$i<count($tmp);$i++){
		echo $tmp[$i]."</br>";
	}	
	echo "</label>  ";
	echo "</br></br>";
	echo "<label>";
	echo "<span>&nbsp;</span>";
	echo "<input type='hidden' name='selprojname' value='".$_POST["selprojname"]."' />\n";	
	echo "<input type='hidden' name='dk' value='".$_POST["dk"]."' />\n";		
	echo "<input name='syncproj' class='shiny-blue' type='submit' value=' 确认同步 ' onclick=''/> \n";    
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<input name='ExlFileCln' class='shiny-blue' type='submit' value=' 清空文件 ' onclick=''/> \n";  
	echo "</label>  ";	
    echo "</form>\n"; 	
}

function ExchangeDir(){
	global $hostip;
	global $hostres;
	global $projectres;	
	$selprojname=split('_',$_POST["selprojname"]);
	$projid= $selprojname[0];
	if( isset($_POST["ReplUpdir"])  )    { $dir="/update";  }
	elseif(	isset($_POST["ReplHisdir"]) ){ $dir="/history"; }	
	
	for($i=0;$i<count($hostip);$i++){
		//echo str_replace(".","_",$hostip[$i]);
		//echo  $_REQUEST[str_replace(".","_",$hostip[$i])];
		if( !empty($_REQUEST[str_replace(".","_",$hostip[$i])]) ){
			$dir1  = $hostres[$i][hostdir]."/".$selprojname[1]."/running".$projectres[$projid][projdir].$projectres[$projid][dstwebapp];
			$dir2  = $hostres[$i][hostdir]."/".$selprojname[1].$dir.$projectres[$projid][projdir].$projectres[$projid][dstwebapp];
			$dirtmp= $hostres[$i][hostdir]."/".$selprojname[1]."/tmpdir".$projectres[$projid][projname];
			//$cmd = "sudo ssh root@".$hostip[$i]." mkdir ".$hostres[$i][hostdir]."/".$selprojname[1]."/tmpdir";
			//exec($cmd,$tmp,$out);
			//unset($tmp);
			$cmd = "sudo ssh root@".$hostip[$i]." mv ".$dir1." ".$dirtmp;
			echo $cmd."<br>";
			exec($cmd,$tmp,$out);
			unset($tmp);
			if($out==0){
				echo "<br>\n mv 1成功：".$hostip[$i].$tmp[0];
			}else{echo "<br>\n mv 1失败 ".$hostip[$i].$tmp[0]; }
			$cmd = "sudo ssh root@".$hostip[$i]." mv ".$dir2." ".$dir1;
			echo $cmd."<br>";
			exec($cmd,$tmp,$out);
			unset($tmp);
			if($out==0){
				echo "<br>\n mv 2成功：".$hostip[$i].$tmp[0];
			}else{echo "<br>\n mv 2失败 ".$hostip[$i].$tmp[0]; }			
			$cmd = "sudo ssh root@".$hostip[$i]." mv ".$dirtmp." ".$dir2;
			echo $cmd."<br>";
			exec($cmd,$tmp,$out);
			unset($tmp);			
			if($out==0){
				echo "<br>\n mv 3成功：".$hostip[$i].$tmp[0];
			}else{echo "<br>\n mv 3失败 ".$hostip[$i].$tmp[0]; }			
			writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." proj exchangedir ".$hostip[$i]." ".$dir1." ".$dir2);

		}
	}	
}
function DoExlFileSel(){
	    global $projectres;
		global $dk_logpath;
		$selprojname=split('_',$_POST["selprojname"]);
		$projid= $selprojname[0];
		$location=split(':',$projectres[$projid][location]);
		print_r($location);
		print_r($projectres);
		//读入项目文件列表
		$cmd="sudo cat ".$dk_logpath.$selprojname[1].".file";
		exec($cmd,$tmp,$out);
		echo $cmd;
		//print_r( $_POST );
		//清空排除文件，准备写入
		$cmd="sudo sh -c 'echo -n \"\" > ".$dk_logpath.$selprojname[1].".exl'";
		exec($cmd,$tmp,$out);		
		for($i=0;$i<count($tmp);$i++){
			$fileatt=explode("//",$tmp[$i]);
			$f=str_replace(".","_",$fileatt[1]);
			if( isset($_POST[$f]) ){
				echo "</br>您选择了：".$fileatt[1].$location[1]."</br>";
				$cmd="sudo sh -c 'echo \"".substr($fileatt[1],strlen($location[1]))."\" >> ".$dk_logpath.$selprojname[1].".exl'";
				exec($cmd,$tmp,$out);
			}
		}
}
function DoRsyncProj(){
		global $projectres;
		global $hostres;
		global $dk_logpath;
		global $dksig_file;
		global $dkrsync_file;
		$selprojname=split('_',$_POST["selprojname"]);
		$projid= $selprojname[0];
		//echo $projid.":"."<br>";
		$location=split(':',$projectres[$projid][location]);
		//print_r($projectres[$projid]);
		//echo $projectres[$projid][location].":"."<br>";
		$srcip=$location[0];
		$srcdir=$location[1];
		///usr/bin/rsync -vzrtopg -c -progress  -e ssh /mnt/tomcat1/usr  root@192.168.100.21:/mnt/sdc/docker/food/ >>/root/rsync.log
		//ssh 192.168.100.21 docker load -i /mnt/sdc/docker/images/tomcat.tar
		$cmd="sudo touch ".$dk_logpath.$projectres[$projid][projname].".exl";
		exec($cmd,$tmp,$out);
		for($i=0;$i<count($hostres);$i++){
			//运行目录备份到history下
			$cmd = "sudo -u root ssh root@".$hostres[$i][ip]." /usr/bin/rsync -vzrtopg -c -progress  -e ssh ".$hostres[$i][hostdir]."/".$selprojname[1]."/running".$projectres[$projid][projdir]."  ".$hostres[$i][hostdir]."/".$selprojname[1]."/history"." 2>&1 >>".$dkrsync_file." &";
			echo "先备份运行目录到历史目录：<br>".$cmd;
			//exec("sudo -u root echo \"rsync to:".$hostres[$i][ip]."\" 2>&1 >>".$dkrsync_file,$tmp,$tmpout); 
			runcmd($cmd);
			writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." proj bak ".$cmd);
			//同步项目资源目录到所有目标机的/update目录
			$cmd = "sudo -u root ssh root@".$hostres[$i][ip]." rm -f ".$hostres[$i][hostdir]."/".$selprojname[1]."/update".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]."/WEB-INF/lib/xhy-hotel-api*;";
			$cmd .= "sudo -u root ssh root@".$srcip." /usr/bin/rsync -vzrtopg -c -progress --exclude-from=".$dk_logpath.$projectres[$projid][projname].".exl -e ssh ".$srcdir."/  root@".$hostres[$i][ip].":".$hostres[$i][hostdir]."/".$selprojname[1]."/update".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]." 2>&1 >>".$dkrsync_file." &";
			echo "同步项目的命令是：<br>".$cmd;
			exec("sudo -u root echo \"rsync to:".$hostres[$i][ip]."\" 2>&1 >>".$dkrsync_file,$tmp,$tmpout); 
			runcmd($cmd);
			writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." proj up ".$cmd);
			//记录运行状态及资源主机的srcip
			exec("sudo -u root echo \"rsyncrun:".$srcip."\" 2>&1 >".$dksig_file,$tmp,$tmpout); 
            echo "<h3>rsyncrun...$tmp[0]...</h3>";
			$freshtime=2;
			echo "<meta http-equiv='refresh' content='$freshtime'>\n";
			//date_default_timezone_set("PRC");
			//$date = date("Ymd H:i:s",time()); 
		}
}
function DoRsyncRun(){
		global $dksig;
		global $dksig_file;
		global $dkrsync_file;
		$srcip=$dksig[1];
		echo "<h3>dksig:$dksig[0]...</h3>";
		$freshtime=2;
		echo "<meta http-equiv='refresh' content='$freshtime'>\n";
		//date_default_timezone_set("Asia/Shanghai");
        exec("sudo ls -l --full-time ".$dksig_file."|awk '{print \$7}'|awk -F'.' '{print $1}'",$res,$out);
        if($res[0]){ $result=strtotime(date("H:i:s"))-strtotime($res[0]);}
		echo " Program Processing";
        for($i=1;$i<$result;$i++){echo ".";}
		//查询rsync是否还在运行如没有则清空运行标记
		exec("sudo -u root ssh root@".$srcip." ps auxwww|grep /usr/bin/rsync|grep -v grep",$tmp,$tmpout); 
		if( empty($tmp[0]) ){
			exec("sudo -u root echo \"\" 2>&1 >".$dksig_file,$tmp1,$tmpout); 
		}else{
			exec("sudo -u root tail -20 ".$dkrsync_file,$tmp2,$tmpout);
			for($i=1;$i<count($tmp2);$i++){echo $tmp2[$i];}
		}	
}

function DoExlFileCln(){
	global $dk_logpath;
	$selprojname=split('_',$_POST["selprojname"]);
	$cmd="sudo sh -c 'echo -n \"\" > ".$dk_logpath.$selprojname[1].".exl'";
	exec($cmd,$tmp,$out);
	if($out==0){
		echo "清除".$selprojname[1].".exl"."内容成功";
	}else{
		echo "清除".$selprojname[1].".exl"."内容失败";
	}
}

function DoCompare(){
	global $hostip;
	global $hostres;
	global $projectres;	
	$selprojname=split('_',$_POST["selprojname"]);
	$projid= $selprojname[0];
	$location=split(':',$projectres[$projid][location]);
	$srcip=$location[0];
	$srcdir=$location[1];
	$cmd = "sudo -u root ssh root@".$srcip." \"cd ".$srcdir."; find . -type f |xargs md5sum>".$projectres[$projid][projname].".md5 2>&1\"";
	exec($cmd,$tmp,$out);
	//echo $cmd;
	//print_r($tmp);
	for($i=0;$i<count($hostres);$i++){
		echo "<h3>".$hostres[$i][ip]."</h3></br>";
		//复制md5文件到所有目标机的/update目录
		$cmd = "sudo -u root ssh root@".$srcip." /usr/bin/rsync -vzrtopg -c -progress  -e ssh ".$srcdir."/".$projectres[$projid][projname].".md5  root@".$hostres[$i][ip].":".$hostres[$i][hostdir]."/".$selprojname[1]."/update".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]." 2>&1 ";
		exec($cmd,$tmp1,$out);
		//echo $cmd;
		//检查md5
		$cmd = "sudo -u root ssh root@".$hostres[$i][ip]." \"export LANG=en_US.utf8; cd  ".$hostres[$i][hostdir]."/".$selprojname[1]."/update".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]." && md5sum -c ".$projectres[$projid][projname].".md5 2>&1|grep -v OK  \"";
		//echo $cmd;
		exec($cmd,$tmp2,$out);
		foreach($tmp2 as $line){
			echo $line."</br>";
		}
		unset($tmp2);
		unset($tmp1);
				
	}
}

function GetProcSetting() {
		include_once("qinconfig.inc.php");
		$conn=mysql_connect($MysqlHost,$MysqlUser,$MysqlPass)	or die("无法连接数据库，请重来");
		mysql_select_db($mondb,$conn);
		mysql_query("SET NAMES UTF8");
		$sql="select b.hostname,a.* from procsetting as a inner join hostip as b on trim(a.ip)=trim(b.ip) order by ip";    
        $res=mysql_query($sql,$conn);
		global $ndk_procres;
		//global $ndk_proj_hosts;
		$ndk_procres=array();
        while($row=mysql_fetch_array($res)){
			//$ndk_proj_hosts[]=($row[ip],$row[projname]);
			$ndk_procres[]=$row;
        }		
}
function NoDKrsync(){
		global $projectres;
		global $ndk_procres;
		global $dk_logpath;
		global $dksig_file;
		global $dkrsync_file;
		$selprojname=split('_',$_POST["selprojname"]);
		$projid= $selprojname[0];
		echo $projid.":".$selprojname[1]."<br>";
		$location=split(':',$projectres[$projid][location]);
		//print_r($projectres[$projid]);
		//echo $projectres[$projid][location].":"."<br>";
		$srcip=$location[0];
		$srcdir=$location[1];
		$cmd="sudo touch ".$dk_logpath.$projectres[$projid][projname].".exl";
		exec($cmd,$tmp,$out);
		for($i=0;$i<count($ndk_procres);$i++){
			echo "projname:".$ndk_procres[$i]['projname'];
            if( $ndk_procres[$i]['projname']==$selprojname[1] ){
			    //运行目录备份到history下
			    $cmd = "sudo -u root ssh root@".$ndk_procres[$i][ip]." /usr/bin/rsync -vzrtopg -c -progress  -e ssh /usr/local/".$selprojname[1]."/running".$projectres[$projid][projdir]."  /usr/local/".$selprojname[1]."/history"." 2>&1 >>".$dkrsync_file." &";
			    echo "先备份运行目录到历史目录：<br>".$cmd;
			    runcmd($cmd);
			    writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." proj bak ".$cmd);
			    //同步项目资源目录到所有目标机的/update目录
			    $cmd = "sudo -u root ssh root@".$srcip." /usr/bin/rsync -vzrtopg -c -progress --exclude-from=".$dk_logpath.$projectres[$projid][projname].".exl -e ssh ".$srcdir."/  root@".$ndk_procres[$i][ip].":/usr/local/".$selprojname[1]."/update".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]." 2>&1 >>".$dkrsync_file." &";
			    echo "同步项目的命令是：<br>".$cmd;
			    exec("sudo -u root echo \"rsync to:".$ndk_procres[$i][ip]."\" 2>&1 >>".$dkrsync_file,$tmp,$tmpout); 
			    runcmd($cmd);
			    writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." proj up ".$cmd);
			    //记录运行状态及资源主机的srcip
			    exec("sudo -u root echo \"rsyncrun:".$srcip."\" 2>&1 >".$dksig_file,$tmp,$tmpout); 
                echo "<h3>rsyncrun...$tmp[0]...</h3>";
			    $freshtime=2;
			    echo "<meta http-equiv='refresh' content='$freshtime'>\n";			
			
		    }
		}     	
}

function NoDKCompare(){
	//global $hostip;
	//global $hostres;
	global $ndk_procres;
	global $projectres;	
	$selprojname=split('_',$_POST["selprojname"]);
	$projid= $selprojname[0];
	$location=split(':',$projectres[$projid][location]);
	$srcip=$location[0];
	$srcdir=$location[1];
	$cmd = "sudo -u root ssh root@".$srcip." \"cd ".$srcdir."; find . -type f |xargs md5sum>".$projectres[$projid][projname].".md5 2>&1\"";
	exec($cmd,$tmp,$out);
	//echo $cmd;
	//print_r($tmp);
	for($i=0;$i<count($ndk_procres);$i++){
		//复制md5文件到所有目标机的/update目录
		if( $ndk_procres[$i]['projname']==$selprojname[1] ){
			echo "<h3>".$ndk_procres[$i][ip]."</h3></br>";
		    $cmd = "sudo -u root ssh root@".$srcip." /usr/bin/rsync -vzrtopg -c -progress  -e ssh ".$srcdir."/".$projectres[$projid][projname].".md5  root@".$ndk_procres[$i][ip].":/usr/local/".$selprojname[1]."/update".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]." 2>&1 ";
		    exec($cmd,$tmp1,$out);
		    //echo $cmd;
		    //检查md5
		    $cmd = "sudo -u root ssh root@".$ndk_procres[$i][ip]." \"export LANG=en_US.utf8; cd  /usr/local/".$selprojname[1]."/update".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]." && md5sum -c ".$projectres[$projid][projname].".md5 2>&1|grep -v OK  \"";
		    //echo $cmd;
		    exec($cmd,$tmp2,$out);
		    foreach($tmp2 as $line){
		    	echo $line."</br>";
		    }
		    unset($tmp2);
		    unset($tmp1);
		}
				
	}
}
function NoDKExchangeDir(){
	global $ndk_procres;
	global $projectres;	
	$selprojname=split('_',$_POST["selprojname"]);
	$projid= $selprojname[0];
	if( isset($_POST["ReplUpdir"])  )    { $dir="/update";  }
	elseif(	isset($_POST["ReplHisdir"]) ){ $dir="/history"; }	
	//echo $dir."<br>";
	//print_r($ndk_procres);
	//echo "<br>";
	//print_r($projectres);
	//echo "<br>";
	
	for($i=0;$i<count($ndk_procres);$i++){
		//echo $ndk_procres[$i]['ip'];
		//echo str_replace(".","_",$ndk_procres[$i]['ip']);
		//echo  $_REQUEST[str_replace(".","_",$ndk_procres[$i]['ip'])];
		if( !empty($_REQUEST[str_replace(".","_",$ndk_procres[$i]['ip'])]) and $ndk_procres[$i]['projname']==$selprojname[1] ){
			$dir1  = "/usr/local/".$selprojname[1]."/running".$projectres[$projid]['projdir'].$projectres[$projid]['dstwebapp'];
			$dir2  = "/usr/local/".$selprojname[1].$dir.$projectres[$projid]['projdir'].$projectres[$projid]['dstwebapp'];
			$dirtmp= "/usr/local/".$selprojname[1]."/tmpdir".$projectres[$projid]['projname'];
			$cmd = "sudo ssh root@".$ndk_procres[$i]['ip']." mv ".$dir1." ".$dirtmp;
			echo $cmd."<br>";
			exec($cmd,$tmp,$out);
			unset($tmp);
			if($out==0){
				echo "<br>\n mv 1成功：".$ndk_procres[$i][ip].$tmp[0];
			}else{echo "<br>\n mv 1失败 ".$ndk_procres[$i][ip].$tmp[0]; }
			$cmd = "sudo ssh root@".$ndk_procres[$i][ip]." mv ".$dir2." ".$dir1;
			echo $cmd."<br>";
			exec($cmd,$tmp,$out);
			unset($tmp);
			if($out==0){
				echo "<br>\n mv 2成功：".$ndk_procres[$i][ip].$tmp[0];
			}else{echo "<br>\n mv 2失败 ".$ndk_procres[$i][ip].$tmp[0]; }			
			$cmd = "sudo ssh root@".$ndk_procres[$i][ip]." mv ".$dirtmp." ".$dir2;
			echo $cmd."<br>";
			exec($cmd,$tmp,$out);
			unset($tmp);			
			if($out==0){
				echo "<br>\n mv 3成功：".$ndk_procres[$i][ip].$tmp[0];
			}else{echo "<br>\n mv 3失败 ".$ndk_procres[$i][ip].$tmp[0]; }			
			writelog(date("Y.m.d H:i:sa l")." user: ".$_SESSION['user']." proj exchangedir ".$ndk_procres[$i][ip]." ".$dir1." ".$dir2);

		}
	}		
}
function NoDKShowProjVersion(){
	//global $hostip;
	//global $hostres;
	global $ndk_procres;
	global $projectres;	
	$selprojname=split('_',$_POST["selprojname"]);
	$projid= $selprojname[0];
	//echo $projid.":"."<br>";	
	$location=split(':',$projectres[$projid][location]);
	$srcip=$location[0];
	$srcdir=$location[1];
	$cmd = "sudo -u root ssh root@".$srcip." ls -ld --full-time ".$srcdir;
	$cmd.= "|awk '{print $6\" \"$7}'";
	exec($cmd,$tmp,$out);
	//echo $cmd.":";
	$version = $tmp[0];
	unset($tmp);
    echo "<div style='margin:0 auto;align:center;font-size:22px;font-family:SimHei;width:800px'>".'欢迎您使用Docker版本目录切换操作</div>'."<div style='margin:0 auto;width:600px;color:red;float:right;font-size:14px;font-family:SimHei;'>需同步版本[".$version."]</div>\n";
    echo "<table class='altrowstable' id='alternatecolor' style='margin:0 auto;align:center;word-break:break-all; word-wrap:break-all;'> <tr>\n";
	echo "<h3 style='margin:0 auto;align:center;font-size:16px;width:800px'><input type='checkbox' name='allunchecked' onclick='selectall(this)' />全选/取消</h3>\n";
	echo " <form id='form' name='form' method='post' action='$PHP_SELF'>\n";
	echo "<th>选择</th>\n";		
	echo "<th> sn </th>\n";
  	echo "<th> IP </th>\n";
	echo "<th>项目名  </th>\n";
  	echo "<th>运行版本".$selprojname[1]."/running".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]."</th>\n";
	echo "<th>更新目录版本".$selprojname[1]."/update".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]."</th>\n";
	echo "<th>历史目录版本".$selprojname[1]."/history".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]."</th>\n";
	//echo "<th><a href='dkopcont.php?sortby=".$field_name."'target='right' >".$field_name."</a></th>\n";
    echo "</tr>\n";
	
	for($i=0;$i<count($ndk_procres);$i++){
		if( $ndk_procres[$i]['projname']==$selprojname[1] ){
		    $cmd = "sudo ssh root@".$ndk_procres[$i][ip]." ls -ld --full-time /usr/local/".$selprojname[1]."/running".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]." ";
		    $cmd.= "/usr/local/".$selprojname[1]."/update".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]." ";
		    $cmd.= "/usr/local/".$selprojname[1]."/history".$projectres[$projid][projdir].$projectres[$projid][dstwebapp]." ";
		    $cmd.= "|awk '{print $6\" \"$7}'";
		    exec($cmd,$tmp,$out);
		    //echo "cmd:".$cmd."<br>";
		    //print_r($tmp);
		    if($i/2==round($i/2)){echo "<tr class='oddrowcolor'>\n";}
		    else{echo "<tr class='evenrowcolor'>\n";}
		    echo "<td> <input type='checkbox' style='float:left' name='".str_replace(".","_",$ndk_procres[$i][ip])."' /></td>\n";
		    echo "<td>".$i."</td>\n";
		    echo "<td>".$ndk_procres[$i][ip]."</td>\n";
		    echo "<td>".$selprojname[1]."</td>\n";
		    echo "<td>".$tmp[1]."</td>\n"; //running
		    echo "<td>".$tmp[2]."</td>\n"; //update
		    echo "<td>".$tmp[0]."&nbsp</td>\n"; //history ls按名称排序h在u和r前
		    echo "</tr>\n";
		    unset($tmp);
		}
	}
        
	echo "<TR><TD COLSPAN=15 align='right'> "; 
	echo "<input type='hidden' name='selprojname' value='".$_POST["selprojname"]."' />\n";	
	echo "<input type='hidden' name='dk' value='".$_POST["dk"]."' />\n";		
	echo "<input class='shiny-blue' type='submit' name='ReplUpdir' value='切换运行与更新目录' />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\n";
	echo "<input class='shiny-blue' style='background:#2b2b2b' type='submit' name='ReplHisdir' value='切换运行与历史目录' />\n";	
	echo "</TD><TR>"; 
	echo " </form>\n";
    echo "</table>\n";	
}
?>