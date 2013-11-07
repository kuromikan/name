<?php
header("Content-Type:text/html; charset=utf-8");
include("mysql.php"); 
echo "<html>";
	$time_now = time();
	$mysqldate = date( 'Y-m-d H:i:s', $time_now );

	$u_ip  = ( $_SERVER["HTTP_X_FORWARDED_FOR"] == '' )?
		$_SERVER["REMOTE_ADDR"]:strtok($_SERVER["HTTP_X_FORWARDED_FOR"],",");
		
	$count=0;
	$sqlflag=0;
	$sql = "SELECT `color`.`location`,`tmpshoplist`.`stylecolor`,`tmpshoplist`.`id` FROM `tmpshoplist`,`color` WHERE `tmpshoplist`.`stylecolor`=`color`.`name` AND `ip`='$u_ip'" ;
	$result = mysql_query($sql);
	while ($row = mysql_fetch_row($result))
	{
		echo "$row[1]____購買完成";
		$sqladdshop = "INSERT INTO  `shop`.`shoplist` (`id` ,`ip` ,`stylecolor` , `date` )VALUES (NULL ,'$u_ip' ,'$$row[1]' ,'$mysqldate');" ;
		$resultaddshop = mysql_query($sqladdshop);
		
		$sqldeltmp = "DELETE FROM `tmpshoplist` WHERE `tmpshoplist`.`id` = '$row[2]'" ;
		$resultdeltmp = mysql_query($sqldeltmp);
		echo "<br>";
		
	}
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "目前沒有商品在購物車內";
		echo "<br>";		
		echo "<input type=\"submit\" value=\"回到購物清單\"\ style=\"font-size:16pt; width:180px; height:40px;\" onClick=\"location.href='right.php'\"/ >";

	
echo "</html>";


?>