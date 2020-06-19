<?php

//get parameter
$SwissID = $_GET['SwissID'];
$Domain = $_GET['Domain'];
$count = $_GET['count'];
//connect to mysql database
$link = mysql_connect("140.138.144.145", "ubinet", "ubinet1706c") or die("Could not connect : " . mysql_error());
mysql_select_db("RegUbi") or die("Could not select database");
$sql = "";

//get the sequence
$Seq = "";
$sql = "select sequence from Swiss_sequence_1030319 where ID = '".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result)) 
{
	$Seq = $data[0];
}
mysql_free_result($result);
$scale = strlen($Seq)/700;

//Preview the phosphosite level
$sql = "select ID, Position from final_UbiSubs_Frag_Human where ID='".$SwissID."' group by Position order by Position desc";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
$pre_pos = 10000;
$level = 1;
$max_level = 1;
while($data = mysql_fetch_array($result,MYSQL_ASSOC)) 
{
	if(($pre_pos-$data['Position']) < 30)
		$level++;
	else
		$level = 1;

	if($level >= $max_level)
		$max_level = $level;

	$pre_pos = $data['Position'];
}

if($Domain=="0"){//Domain=0 2013/12/31/Lu
//設定初始參數
$graphWidth = 885;
$graphHeight = 100+$max_level*50;
$start_x = 155;
$start_y = 100+$max_level*25;


//產生圖檔
header("Content-type: image/png");
$im = @ImageCreate ($graphWidth, $graphHeight) or die ("Cannot Initialize new GD image stream");
$background_color = ImageColorAllocate ($im, 255, 255, 255);	//設定背景顏色
include("image_color.php");

//show hint
imageline($im,$start_x+15,10,$start_x+15,30,$orange);
imagefilledellipse($im,$start_x+15,10, 20, 15, $orange);
imageString($im,2,$start_x+30,10,"Ubiquitination Site",$orange);
imagefilledrectangle($im,$start_x+8,40,$start_x+23,50,$purple);
imageString($im,2,$start_x+28,40,"Helix",$purple);
imagefilledrectangle($im,$start_x+68,40,$start_x+83,50,$green);
imageString($im,2,$start_x+88,40,"Sheet",$green);
imagefilledrectangle($im,$start_x+128,45,$start_x+143,46,$black);
imageString($im,2,$start_x+148,40,"Coil",$black);
imageString($im,4,30,$start_y-7,"Secondary",$black);
imageString($im,4,30,$start_y+7,"Structure",$black);
imageString($im,4,30,$start_y-42,"Solvent",$lightblue2);
imageString($im,4,30,$start_y-28,"Accessibility",$lightblue2);

//------------------------show Sequence-------------------------//
imagefilledrectangle($im,$start_x,$start_y+4,$start_x+(strlen($Seq)/$scale),$start_y+6,$black);
imageString($im,2,$start_x-5,$start_y+10,"1",$black);
imageString($im,2,$start_x+(strlen($Seq)/$scale),$start_y+10,strlen($Seq),$black);
//imageString($im,2,10,$start_y-5,"Secondary",$black);
//imageString($im,2,10,$start_y+5,"Structure",$black);
$sql = "select secondary from Swiss_secondary_dbPTM3 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result)) 
{
	for($i=0;$i<700;$i++)
	{
		if($data[0][$i*$scale] == 'H')
			imageline($im,$start_x+$i,$start_y,$start_x+$i,$start_y+10,$purple);
		elseif($data[0][$i*$scale] == 'E')
			imageline($im,$start_x+$i,$start_y,$start_x+$i,$start_y+10,$green);
	}
}
mysql_free_result($result);

//-------------------------show ASA-----------------------------//
//imageString($im,2,10,$start_y-40,"Solvent",$lightblue2);
//imageString($im,2,10,$start_y-30,"Accessibility",$lightblue2);
imagedashedline($im,$start_x,$start_y-20,$start_x+(strlen($Seq)/$scale),$start_y-20,$blue2);
$sql = "select ASA from Swiss_ASA_dbPTM3 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result)) 
{
	$ASA_value = explode(":",$data[0]);
	for($i=0;$i<700;$i++)
	{
		imageline($im,$start_x+$i,$start_y-$ASA_value[$i*$scale],$start_x+$i+1,$start_y-$ASA_value[($i+1)*$scale],$lightblue2);
	}
}
mysql_free_result($result);

//-----------------------show UbiSite-------------------------//
$sql = "select ID, Position from final_UbiSubs_Frag_Human where ID ='".$SwissID."' group by Position order by Position desc";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
$pre_pos = 10000;
$level = 1;
while($data = mysql_fetch_array($result,MYSQL_ASSOC)) 
{
	if(($pre_pos-$data['Position']) < 50)
		$level++;
	else
		$level = 1;

	imageline($im,$start_x+($data['Position']/$scale),$start_y,$start_x+($data['Position']/$scale),$start_y-(25*$level),$orange);
	imagefilledellipse($im, $start_x+($data['Position']/$scale),$start_y-(25*$level), 20, 15, $orange);
	
	if($data['Position']>=100)
		imageString($im,1,$start_x+($data['Position']/$scale)-8,$start_y-(25*$level)-3,$data['Position'],$black);
	else
		imageString($im,1,$start_x+($data['Position']/$scale)-5,$start_y-(25*$level)-3,$data['Position'],$black);
		
	$pre_pos = $data['Position'];
}
mysql_free_result($result);
mysql_close($link);
imagepng($im);
imagedestroy($im);
}//Domain=0 2013/12/31/Lu

if($Domain!="0"){
//------------------------show domain-------------------------//
$graphWidth = 750;
$graphHeight = 28;
$start_x = 20;

//產生圖檔
header("Content-type: image/png");
$im = @ImageCreate ($graphWidth, $graphHeight) or die ("Cannot Initialize new GD image stream");
$background_color = ImageColorAllocate ($im, 255, 255, 255);	//設定背景顏色
include("image_color.php");
$InterPro = $Domain;
$Dcount = $count-1;
$start = 0;
$name = "";
imagefilledrectangle($im,$start_x,11,$start_x+(strlen($Seq)/$scale),10,$black);
$sql = "select sname,start,end from InterPro where Swiss_ID='".$SwissID."' and InterPro_ID='".$InterPro."' order by start desc";
$result2 = mysql_query($sql) or die("Query failed : " . mysql_error());
while($data2 = mysql_fetch_array($result2,MYSQL_ASSOC))
{
	imagefilledrectangle($im,$start_x+($data2['start']/$scale),15,$start_x+($data2['end']/$scale),5,$color[$Dcount]);
	$start = $data2['start'];
	$sname = $data2['sname'];
}
imageString($im,2,$start_x+$start/$scale+5,15,$sname,$black);

mysql_free_result($result2);
mysql_close($link);
imagepng($im);
imagedestroy($im);
}
?>

