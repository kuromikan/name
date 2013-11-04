<?php
header("Content-Type:text/html; charset=utf-8");
echo "<html>";
include("mysql.php"); 
//echo "<div style=\"position: fixed; top: 0px; left: 0px; width: 300px; height: 300px;\"><img src=\"hyperlink/google.jpg\" width=\"200\" height=\"100\" border=\"0\"></div>";

	$top=0;
	$left=0;
	$sql = "SELECT `id`,`location` FROM `style_list`" ;
	$result = mysql_query($sql);
	while ($row = mysql_fetch_row($result))
	{
		$toppx=$top."px";
		$leftpx=$left."px";
		echo "<div style=\"position: fixed; top: $toppx; left: $leftpx; width: 150px; height: 200px;\">";
		echo "<a href=\"style/style.php?id=$row[0]\" >";
		echo "<img src=\"style/$row[1].gif\" width=\"150\" height=\"200\" border=\"0\">";
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
		/*echo "top=".$top.",";
		echo "left=".$left.",";*/
	}

//echo "<div style=\"position: fixed; top: 0px; left: 0px; width: 300px; height: 300px;\"></div>"
echo "</html>";
?>