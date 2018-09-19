<?php
echo " <html>  \n";
echo "<head>\n";
header("Refresh:3000"); 
echo "  <meta charset='utf-8'>\n";
echo "  <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
echo "  <title>欢迎您使用项目日志查看程序</title>\n";

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
echo "background: #FFF url('down-arrow.png') no-repeat right;";
echo "background: #FFF url('down-arrow.png') no-repeat right);";
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

echo " </style>\n";
echo " </head>\n";
echo "<body style='margin:0 auto;align:center;'>\n";

?>
<?php 


include_once("mtailf.inc.php");
selectdb();
showform();


?>