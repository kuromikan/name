<?php
header("Content-Type:text/html; charset=utf-8");
include("../mysql.php"); 
echo "<html>";
$id=$_GET['id'];

	$top=0;
	$left=0;
	$sql = "SELECT `name`,`location` FROM `color` WHERE `styleid`='$id'" ;
	$result = mysql_query($sql);
	while ($row = mysql_fetch_row($result))
	{
		$toppx=$top."px";
		$leftpx=$left."px";
		echo "<div style=\"position: fixed; top: $toppx; left: $leftpx; width: 150px; height: 200px;\">";
		echo "<a href=\"color/shopcar.php?styleid=$id&name=$row[0]\" >";
		echo "<img src=\"color/$row[1].gif\" width=\"150\" height=\"200\" border=\"0\">";
		echo "</a>";
		echo "</div>";
		if($left==350)
		{
			$left=0;
			$top+=225;
		}
		else
		{
		$left+=175;
		}
	}

echo "</html>";

?>