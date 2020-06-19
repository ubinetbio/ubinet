<?php

//get parameter
$SwissID = $_GET['SwissID'];

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
$scale = strlen($Seq)/750;

//Preview the phosphosite level
$sql = "select ID, Position from final_UbiSubs_Frag_Human where ID='".$SwissID."' group by Position order by Position desc";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
$pre_pos = 10000;
$level = 1;
$max_level = 1;
while($data = mysql_fetch_array($result,MYSQL_ASSOC)) 
{
	if(($pre_pos-$data['position']) < 30)
		$level++;
	else
		$level = 1;

	if($level >= $max_level)
		$max_level = $level;

	$pre_pos = $data['position'];
}

//設定初始參數
$graphWidth = 900;
$graphHeight = 200+$max_level*25;
$start_x = 100;
$start_y = 100+$max_level*25;


//產生圖檔
header("Content-type: image/png");
$im = @ImageCreate ($graphWidth, $graphHeight) or die ("Cannot Initialize new GD image stream");
$background_color = ImageColorAllocate ($im, 255, 255, 255);	//設定背景顏色
include("image_color.php");

//show hint
imageline($im,10,10,10,30,$orange);
imagefilledellipse($im,10,10, 20, 15, $orange);
imageString($im,2,25,10,"Ubiquitination Site",$orange);
imagefilledrectangle($im,1,40,15,50,$purple);
imageString($im,2,20,40,"Helix",$purple);
imagefilledrectangle($im,56,40,70,50,$green);
imageString($im,2,75,40,"Sheet",$green);
imagefilledrectangle($im,110,45,125,46,$black);
imageString($im,2,130,40,"Coil",$black);
//imagefilledrectangle($im,$start_x,$start_y+4,$start_x+(strlen($Seq)/$scale),$start_y+6,$black);
//imagefilledrectangle($im,$start_x,$start_y+4,$start_x+(strlen($Seq)/$scale),$start_y+6,$black);
//imageString($im,2,25,15,"Site",$orange);
//imagefilledellipse($im, 25,50, 50, 25, $purple2);	//kinase logo
//imageString($im,2,55,40,"Catalytic",$purple2);
//imageString($im,2,55,50,"Kinase",$purple2);

//------------------------show Sequence-------------------------//
imagefilledrectangle($im,$start_x,$start_y+4,$start_x+(strlen($Seq)/$scale),$start_y+6,$black);
imageString($im,2,$start_x-5,$start_y+10,"1",$black);
imageString($im,2,$start_x+(strlen($Seq)/$scale),$start_y+10,strlen($Seq),$black);
imageString($im,2,10,$start_y-5,"Secondary",$black);
imageString($im,2,10,$start_y+5,"Structure",$black);
$sql = "select secondary from Swiss_secondary_v55 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result)) 
{
	for($i=0;$i<750;$i++)
	{
		if($data[0][$i*$scale] == 'H')
			imageline($im,$start_x+$i,$start_y,$start_x+$i,$start_y+10,$purple);
		elseif($data[0][$i*$scale] == 'E')
			imageline($im,$start_x+$i,$start_y,$start_x+$i,$start_y+10,$green);
	}
}
mysql_free_result($result);

//-------------------------show ASA-----------------------------//
imageString($im,2,10,$start_y-40,"Solvent",$lightblue2);
imageString($im,2,10,$start_y-30,"Accessibility",$lightblue2);
imagedashedline($im,$start_x,$start_y-20,$start_x+(strlen($Seq)/$scale),$start_y-20,$blue2);
$sql = "select ASA from Swiss_ASA_v55 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result)) 
{
	$ASA_value = explode(":",$data[0]);
	for($i=0;$i<750;$i++)
	{
		imageline($im,$start_x+$i,$start_y-$ASA_value[$i*$scale],$start_x+$i+1,$start_y-$ASA_value[($i+1)*$scale],$lightblue2);
	}
}
mysql_free_result($result);

//-----------------------show SNOSite-------------------------//
$sql = "select ID,Position from final_UbiSubs_Frag_Human where ID='".$SwissID."' group by Position order by Position desc";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
$pre_pos = 10000;
$level = 1;
while($data = mysql_fetch_array($result,MYSQL_ASSOC)) 
{
	if(($pre_pos-$data['position']) < 30)
		$level++;
	else
		$level = 1;

	imageline($im,$start_x+($data['position']/$scale),$start_y,$start_x+($data['position']/$scale),$start_y-(25*$level),$orange);
	imagefilledellipse($im, $start_x+($data['position']/$scale),$start_y-(25*$level), 20, 15, $orange);
	
	if($data['position']>=100)
		imageString($im,1,$start_x+($data['position']/$scale)-8,$start_y-(25*$level)-3,$data['position'],$black);
	else
		imageString($im,1,$start_x+($data['position']/$scale)-5,$start_y-(25*$level)-3,$data['position'],$black);
		
	$pre_pos = $data['position'];
}
mysql_free_result($result);
/*
//-------------------------畫作標-----------------------------//
for($i=0;$i<strlen($Seq);$i=$i+1)
{
	if(($i+1)%100 == 0)
	{
		//imageline($im,$start_x+3+$i*$scale,$start_y-3,$start_x+3+$i*$scale,$start_y,$black);
		//imageString($im,2,$start_x+$i*$scale,$start_y-15,$i+1,$black);
	}
}

//------------------------show domain-------------------------//
$sql = "select distinct a.*,c.name from InterPro a,Swiss_ID_AC_v55 b,InterPro_shortname c where a.Swiss_AC=b.AC and b.ID='".$SwissID."' and DB_ID like '%PF%' and a.InterPro_ID=c.ID";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
$count = 1;
while($data = mysql_fetch_array($result)) 
{
	$InterPro = $data[1];
	imagefilledrectangle($im,$start_x+($data[4]/$scale),$start_y-10,$start_x+($data[5]/$scale),$start_y+20,$color[$count]);
	imagerectangle($im,$start_x+($data[4]/$scale),$start_y-10,$start_x+($data[5]/$scale),$start_y+20,$gray2);
	imagestring($im,2,$start_x+($data[4]/$scale),$start_y,$data[6]." (".$data[4]."-".$data[5].")",$black);
	//imagestring($im,2,$start_x+($data[4]/$scale),$start_y-20,$data[4]." - ".$data[5],$black);
	$count++;
}
mysql_free_result($result);
*/
mysql_close($link);
imagepng($im);
imagedestroy($im);
?>
