<?php
//ъ把计
$ID = $_GET['ID'];
$pos = $_GET['pos'];
$PTM_type = $_GET['PTM_type'];

////connect to mysql database
$link = mysql_connect("localhost", "DB", "bidlab203") or die("Could not connect : " . mysql_error());
mysql_select_db("dbPTM2") or die("Could not select database");

//get the sequence
$number = 0;
$sql = "select * from Swiss_ID_count where ID = '".substr($ID,0,strpos($ID,"_"))."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result)) 
{
	$number = $data[1];
}

/*
$PTM_type = "";
$sql = "select * from Swiss_PTM where ID = '".$ID."' and position = ".$pos;
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result)) 
{
	$PTM_type = $data[2];
}
*/
//echo $number;

if($number > 1)
{
	//preprocess of aligned sequences
	$tag = 0;
	for($i=0;$i<=$number;$i++)
	{
		$seq[$i] = "";
	}
	$handle = fopen("./Swiss_Ortholog/".substr($ID,0,strpos($ID,"_")).".aln","r");
	fgets($handle, 4096);
	fgets($handle, 4096);
	fgets($handle, 4096);
	while(!feof ($handle) ) 
	{
		$temp = trim(fgets($handle,4096));
		if(strlen($temp)>1 && $tag == 0)
		{
			$seq[0] = $temp;
			for($k=1;$k<$number;$k++)
			{
				$seq[$k] = trim(fgets($handle,4096));
				
			}
			$seq[$number] = substr(fgets($handle,4096),16,60);
			$tag++;
		}
		elseif(strlen($temp)>1 && $tag>0)
		{
			$seq[0] .= trim(substr($temp,16));
			for($k=1;$k<$number;$k++)
			{
				$seq[$k] .= trim(substr(fgets($handle,4096),16));
				
			}
			$seq[$number] .= substr(fgets($handle,4096),16,60);
			$tag++;
		}

		fgets($handle,4096);
	}
	fclose($handle);

	for($i=0;$i<$number;$i++)
	{
		$seq_id[$i] = substr($seq[$i],0,strpos($seq[$i]," "));
		$seq[$i] = trim(substr($seq[$i],strpos($seq[$i]," ")));
	}

	//砞﹚﹍把计
	$graphWidth = 100+strlen($seq[0])*8;
	$graphHeight = 40 + $number*20;
	$start_x = 10;
	$start_y = 10;


	//玻ネ瓜郎
	header("Content-type: image/png");
	$im = @ImageCreate ($graphWidth, $graphHeight) or die ("Cannot Initialize new GD image stream");
	$background_color = ImageColorAllocate ($im, 255, 255, 255);	//砞﹚璉春肅︹
	include("image_color.php");
	$level = 0;
	$pos_count = 0;
	for($i=0;$i<$number;$i++)
	{
		if($seq_id[$i] == $ID)
		{
			imageString($im,3,$start_x,$start_y+$level,$seq_id[$i],$blue);
			for($j=0;$j<strlen($seq[$i]);$j++)
			{
				imageString($im,3,$start_x+100+$j*8,$start_y+$level,$seq[$i][$j],$blue);
				if($seq[$i][$j] != "-")
				{
					
					$pos_count++;
					if($pos_count == $pos)
					{
						imageString($im,3,$start_x+100+$j*8,$start_y+$level,$seq[$i][$j],$red);
						imageline($im,$start_x+100+$j*8+3,$start_y+$level+13,$start_x+100+$j*8+3,$start_y+$level+18,$red);
						//imageline($im,$start_x+100+$j*8+3,$start_y+$level+18,$start_x+100+$j*8+3+7,$start_y+$level+18,$red);
						imageString($im,2,$start_x+100+$j*8,$start_y+$level+18,$PTM_type,$red);
					}
				}
			}
			$level += 30;
		}
		else
		{
			imageString($im,3,$start_x,$start_y+$level,$seq_id[$i],$black);
			for($j=0;$j<strlen($seq[$i]);$j++)
			{
				imageString($im,3,$start_x+100+$j*8,$start_y+$level,$seq[$i][$j],$black);
			}
			$level += 20;
		}
	}

	//程
	for($j=0;$j<strlen($seq[$number]);$j++)
	{
		imageString($im,3,$start_x+100+$j*8,$start_y+$level,$seq[$number][$j],$black);
	}

	mysql_free_result($result);
	mysql_close($link);

	imagepng($im);
	imagedestroy($im);
}
else
{
	echo "There are no $ID orthologous protein cluster!!!";
}
?>
