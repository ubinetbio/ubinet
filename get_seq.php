<?php
//get the protein sequence

$ID = $_GET['ID'];
$type = $_GET['type'];

//connect to mysql database
$link = mysql_connect("localhost", "DB", "bidlab203") or die("Could not connect : " . mysql_error());
mysql_select_db("dbPTM2") or die("Could not select database");
	
if($type == "sequence")
{
	$sequence = "";
	$sql = "select sequence from Swiss_sequence where ID = '".$ID."'";
	$result = mysql_query($sql) or die("Query failed : " . mysql_error());
	while($data = mysql_fetch_array($result)) 
	{
		$sequence = $data[0];
	}
	echo ">$ID &nbsp;&nbsp;&nbsp;".strlen($sequence)." aa<br>$sequence<br>";
}
elseif($type == "second")
{
	$second = "";
	$sql = "select secondary from Swiss_secondary where ID = '".$ID."'";
	$result = mysql_query($sql) or die("Query failed : $sql" . mysql_error());
	while($data = mysql_fetch_array($result)) 
	{
		$second = $data[0];
	}
	echo ">$ID &nbsp;&nbsp;&nbsp;".strlen($second)." aa<br>$second<br>";
}

mysql_close($link);

?>
