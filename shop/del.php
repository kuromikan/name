<?php
header("Content-Type:text/html; charset=utf-8");
include("mysql.php"); 
echo "<html>";
$id=$_GET['id'];

	$sql = "DELETE FROM `tmpshoplist` WHERE `tmpshoplist`.`id` = $id" ;
	$result = mysql_query($sql);
	
echo "<script>document.location.href=\"shoplist.php\";</script>";
echo "</html>";

//alter table tablename auto_increment=0


//alter table tablename drop column id;
//alter table tablename add id mediumint(8) not null primary key auto_increment first;
/*alter table tmpshoplist drop column id;
alter table tmpshoplist add id int(20) not null primary key auto_increment first;*/
/*
SET @newid=0;
update table_name 
set id = (SELECT @newid:=@newid+ 1);
*/
?>