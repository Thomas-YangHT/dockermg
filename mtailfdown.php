<?php 
include_once("mtailf.inc.php");
$lines=20;
$filename="/var/log/messages";
$totaltimes=100;
$i=100;
$freshtime=1000; 

//如果选择了关键字前后10行模式
if( !empty($_REQUEST['keymode']) ){ 
	selectdb();
    $projname=   $_REQUEST["selprojname"];
	$keyword =   $_REQUEST['keyword'];
	$mykeylines= $_REQUEST['mykeylines'];
	for($j=0;$j<count($projectres);$j++){
		if( $projectres[$j]['projname']==$projname ){
			$ip=$projectres[$j]['ip'];
			$filename = $projectres[$j]['logdir']."/".$projectres[$j]['logfilename'];
			readlog_key($ip,$filename,$keyword,$mykeylines);
		}
	}

//如果点击了查看日志，
}elseif( !empty($_REQUEST['tailf']) ){ 
	selectdb();
	$lines   = $_REQUEST['lines'];
	$keyword = $_REQUEST['keyword'];
	$projname= $_REQUEST["selprojname"];
	//echo "select:".$lines.":".$keyword.":".$projname;
	//echo "projectres:";
	//print_r($projectres);
	$i=1; 
	$cmd="echo >/tmp/mtail.ctl";
	exec($cmd,$tmp,$out);
	for($j=0;$j<count($projectres);$j++){
		if( $projectres[$j]['projname']==$projname ){
		    $ip = $projectres[$j]['ip'];
			$filename = $projectres[$j]['logdir']."/".$projectres[$j]['logfilename'];
		    //先取一下文件总行数size2
		    $cmd="sudo ssh ".$ip." wc -l ".$filename."|awk '{print $1}' 2>&1";
		    exec($cmd,$tmp2,$out);
		    echo "<br>cmd:<label style='color:red'>".$cmd."</label>";
		    echo "tmp2[0]:".$tmp2[0];
		    if($out==0){
		    	$size2=$tmp2[0];
		    	readlog_ctn2($filename,$i,$size2,$ip);
		    	//将相关数据写入控制文件
		    	$cmd="echo '".$i.":".$size2.":".$ip.":".$filename.":".$lines.":".$keyword.":".$_POST['refreshseconds']."' 2>&1 >>/tmp/mtail.ctl";
				exec($cmd,$tmp3,$out);				
		    	echo "<br>cmd3:<label style='color:red'>".$cmd.$out.$tmp3[0]."</label><br><br><br><br><br>";
		    }else{ echo "tmp2[0]:".$tmp2[0]; }			
			unset($tmp2);
		}
	}
	$cmd="";
	$freshtime=$_POST['refreshseconds']; 


}else{
	//读取tail参数存入ctls
	$cmd="cat /tmp/mtail.ctl|grep -v ^$";
	exec($cmd,$ctls,$out);
	if($out!=0){
		$cmd="sudo sh -c \"touch /tmp/tail.ctl;chmod 666 /tmp/mtail.ctl;\"";
		exec($cmd,$tmp,$out);
	}
	if( !empty($ctls[0]) ) {
		$ctl=split(':',$ctls[0]);
		$i=$ctl[0];	
		//print_r(ctls);
		//print_r(ctl);

	}
	//到达刷新次数限制或者点击了停止按纽则退出
    if( $i > $totaltimes or !empty($_REQUEST['stoptail']) ){    
	    $cmd="echo '' >/tmp/mtail.ctl 2>&1 "; 
	    exec($cmd,$tmp,$out);
	    $ipcount=count($ctls);
	    for($j=0;$j<$ipcount;$j++){
	        $ctl=split(':',$ctls[$j]);
	        $i=$ctl[0];
	        $size2=$ctl[1];
	        $ip	 = $ctl[2];
	    	$filename = $ctl[3];
	        $lines    = $ctl[4];
	        $keyword  = $ctl[5];
	    	//$freshtime= 1000;
	    	readlog_ctn2($filename,$i,$size2,$ip);
	    }
	    
	//否则继续刷新	
	}elseif( $i <= $totaltimes){ 
	    $cmd="echo >/tmp/mtail.ctl";
	    exec($cmd,$tmp2,$out);
	    $ipcount=count($ctls);
	    for($j=0;$j<$ipcount;$j++){
	        $ctl=split(':',$ctls[$j]);
	        $i=$ctl[0];
	        $size2=$ctl[1];
	        $ip	 = $ctl[2];
	    	$filename = $ctl[3];
	        $lines    = $ctl[4];
	        $keyword  = $ctl[5];
	    	$freshtime= $ctl[6];
	    	$i++;
	        if( empty($keyword) ){
	        	$keyword=$filename;
	        }    	
	    	readlog_ctn2($filename,$i,$size2,$ip);
	    	$cmd="echo '".$i.":".$size2.":".$ip.":".$filename.":".$lines.":".$keyword.":".$freshtime."' 2>&1 >>/tmp/mtail.ctl";		
	    	exec($cmd,$tmp2,$out);	
	    }

	}
}	
//echo "i:".$i."total:".$totaltimes;

echo "<meta http-equiv='refresh' content='$freshtime'>\n";

?>