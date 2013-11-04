<?php
$hostname_ttc_cable = "localhost";
$database_ttc_cable = "shop";
$username_ttc_cable = "root";
$password_ttc_cable = "1234";
$ttc_cable = mysql_pconnect($hostname_ttc_cable, $username_ttc_cable, $password_ttc_cable) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database_ttc_cable, $ttc_cable);
/*mysql_connect($hostname_ttc_cable, $username_ttc_cable, $password_ttc_cable) or die("Unable to connect to database");
@mysql_select_db( "$database_ttc_cable") or die( "Unable to select database");*/

mysql_query('SET NAMES UTF8');

?>