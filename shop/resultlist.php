<?php
header("Content-Type:text/html; charset=utf-8");
include("mysql.php"); 
echo "<html>";
	$sql = "SELECT `stylecolor`,`ip`,`date` FROM `shoplist` ORDER BY `id` , `date`" ;
	$result = mysql_query($sql);
	echo "<table border=\"1\">";
	
		echo "<tr>";
		echo "<td width=\"150px\">produce</td>";
		echo "<td width=\"150px\">ip</td>";
		echo "<td width=\"150px\">date</td>";
		echo "</tr>";
		
		
		while ($row = mysql_fetch_row($result)){
			echo "<tr>";
			echo "<td width=\"150px\"><input type=\"text\" name=\"produce\" readonly=\"readonly\" style=\"width:150px;\" value=\"$row[0]\" /></td>";
			echo "<td width=\"150px\"><input type=\"text\" name=\"ip\" readonly=\"readonly\" style=\"width:150px;\" value=\"$row[1]\" /></td>";
			echo "<td width=\"150px\"><input type=\"text\" name=\"date\" readonly=\"readonly\" style=\"width:150px;\" value=\"$row[2]\" /></td>";
			echo "</tr>";

			}
	echo "</table>";
	


echo "</html>";

?>