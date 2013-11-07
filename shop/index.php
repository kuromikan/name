<?php
header("Content-Type:text/html; charset=utf-8");
echo "<html>";

echo "<frameset cols=325,100% rows=* border = 0>";
echo "<frame src = \"left.php\" name=\"left\" scrolling=\"no\">";

echo "<frame src = \"right.php\" name=\"right\">";

echo "</frameset>";

echo "</html>";
?>