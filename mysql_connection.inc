<?php
//connect to mysql database
$link = mysql_connect("10.21.53.252", "ubinet", "ubinet1706c") or die("Could not connect : " . mysql_error());
mysql_select_db("RegUbi") or die("Could not select database");
?>
