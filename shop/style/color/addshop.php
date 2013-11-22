<?php
header("Content-Type:text/html; charset=utf-8");
include("../../mysql.php"); 
echo "<html>";
$stylecolor=$_GET['stylecolor'];
$start_time=$_GET['start_time'];
$u_ip  = ( $_SERVER["HTTP_X_FORWARDED_FOR"] == '' )?
		$_SERVER["REMOTE_ADDR"]:strtok($_SERVER["HTTP_X_FORWARDED_FOR"],",");
		
echo $u_ip;
echo $start_time;
$time_now = time();
	$mysqldate = date( 'Y-m-d H:i:s', $time_now );


	$sql = "INSERT INTO  `shop`.`tmpshoplist` (`ip` ,`stylecolor` , `id`,`start_time`,`end_time`)VALUES ('$u_ip',  '$stylecolor' , NULL,'$start_time','$mysqldate');" ;
	$result = mysql_query($sql);

echo "<script>document.location.href=\"../../shoplist.php\";</script>";

echo "</html>";
?>