<?php
header("Content-Type:text/html; charset=utf-8");
include("../../mysql.php"); 
echo "<html>";
$styleid=$_GET['styleid'];
$name=$_GET['name'];

	$time_now = time();
	$mysqldate = date( 'Y-m-d H:i:s', $time_now );

	$top=0;
	$left=0;
	$sql = "SELECT `name`,`location`,`price`,`content` FROM `color` WHERE `name`='$name' AND `styleid`='$styleid'" ;
	$result = mysql_query($sql);
	while ($row = mysql_fetch_row($result))
	{
	echo "<img src=\"$row[1].gif\" width=\"150\" height=\"200\" border=\"0\">";
	echo "<br>";
	echo "price : ".$row[2];
	echo "<br>";
	echo "商品名稱 : ".$row[0];
	echo "<br>";
	echo "商品簡介 : ".$row[3];
	echo "<br>";
	echo "<a  href=\"addshop.php?stylecolor=$row[0]&start_time=$mysqldate\" >加入購物車</a>";
	}
	
	
	
	
echo "</html>";
?>