<?php
header("Content-Type:text/html; charset=utf-8");
include("../../mysql.php"); 
echo "<html>";
$stylecolor=$_GET['stylecolor'];
$u_ip  = ( $_SERVER["HTTP_X_FORWARDED_FOR"] == '' )?
		$_SERVER["REMOTE_ADDR"]:strtok($_SERVER["HTTP_X_FORWARDED_FOR"],",");
		
echo $u_ip;


	$sql = "INSERT INTO  `shop`.`tmpshoplist` (`ip` ,`stylecolor` , `id`)VALUES ('$u_ip',  '$stylecolor' , NULL);" ;
	$result = mysql_query($sql);

echo "<script>document.location.href=\"../../shoplist.php\";</script>";

echo "</html>";
?>