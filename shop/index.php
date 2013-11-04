<?php
header("Content-Type:text/html; charset=utf-8");
echo "<html>";

echo "<frameset cols=25%,75% rows=* border = 1>";
echo "<frame src = \"left.php\" name=\"left\" >";

echo "<frame src = \"right.php\" name=\"right\">";

echo "</frameset>";

echo "</html>";
?>