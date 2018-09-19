
<?php 

function  readlog($filename){
	global $keyword;
	$cmd="sudo  tail -20 ".$filename." 2>&1";
	exec($cmd,$tmp,$out);
	//echo "<div id='log'>";
	foreach ($tmp as $line){
		echo str_ireplace($keyword,"<label style='color:red'>".$keyword."</label>",$line)."<BR>";
	}
	//echo "</div>";
}

if( !empty($_REQUEST[filename]) ){
	$filename = $_REQUEST[filename];
	$keyword =  $_REQUEST[keyword];
}else{
	$filename = "/var/log/messages";
}

$freshtime=2;
readlog($filename);

echo "<meta http-equiv='refresh' content='$freshtime'>\n";

?>