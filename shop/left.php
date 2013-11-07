<?php
header("Content-Type:text/html; charset=utf-8");
echo "<html>";
echo"<input type=\"submit\" value=\"首頁\"\ style=\"font-size:16pt; width:180px; height:40px;\" onClick=\"parent.right.location.href='right.php'\"/ >";
echo "<br>";
echo"<input type=\"submit\" value=\"購物車清單\"\ style=\"font-size:16pt; width:180px; height:40px;\" onClick=\"parent.right.location.href='shoplist.php'\"/ >";
echo "<br>";
echo "<a href=\"http://www.google.com\" target=\"_blank\"><img src=\"hyperlink/google.jpg\" width=\"200\" height=\"100\" border=\"0\"></a>";
echo "<br>";
echo "<a href=\"http://www.yahoo.com\" target=\"_blank\"><img src=\"hyperlink/yahoo.gif\" width=\"200\" height=\"100\" border=\"0\"></a>";
echo "<br>";
echo "<audio controls autoplay loop><source src=\"music.mp3\" type=\"audio/mpeg\"><embed height=\"50\" width=\"100\" src=\"horse.mp3\"></audio>";
echo "</html>";
?>