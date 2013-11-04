<?php
header("Content-Type:text/html; charset=utf-8");
include("mysql.php"); 
echo "<html>";
	$u_ip  = ( $_SERVER["HTTP_X_FORWARDED_FOR"] == '' )?
		$_SERVER["REMOTE_ADDR"]:strtok($_SERVER["HTTP_X_FORWARDED_FOR"],",");
	$count=0;
	$sql = "SELECT `color`.`location`,`tmpshoplist`.`stylecolor`,`tmpshoplist`.`id` FROM `tmpshoplist`,`color` WHERE `tmpshoplist`.`stylecolor`=`color`.`name` AND `ip`='$u_ip'" ;
	$result = mysql_query($sql);
	while ($row = mysql_fetch_row($result))
	{
	echo "<img src=\"style/color/$row[0].gif\" width=\"150\" height=\"200\" border=\"0\">";
	echo "<a  href=\"del.php?id=$row[2]\" >";
	echo "<img src=\"close.png\" width=\"20\" height=\"20\" border=\"0\">";
	echo "</a>";
		if($count==2)
		{
			echo "<br>";
			echo "<br>";
			$count=0;
		}
		else
		{
			$count++;
		}
	}
	echo "<br>";
	echo "<br>";
	echo "<input type=\"submit\" value=\"確定購買\"\ style=\"font-size:16pt; width:180px; height:40px;\" onClick=\"location.href='buy.php'\"/ >";
	
echo "</html>";
?>