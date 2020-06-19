<?php
//get parameter
function CN($part,$Length,$LengthS)
{//CN($part,$Length,$Length);    
    $number=0;
    for($numberi=0;$numberi<strlen($part);$numberi++)
    {
        if(substr($part,$numberi,$Length)==$LengthS)
        $number++;
    }
    return $number;
}
$SwissID = $_GET['SwissID'];

//connect to mysql database
$link = mysql_connect("140.138.144.145", "ubinet", "ubinet1706c") or die("Could not connect : " . mysql_error());
mysql_select_db("RegUbi") or die("Could not select database");
$sql = "";

//get the sequence
$Seq = "";
$sql = "select sequence from Swiss_sequence_201106 where ID = '".$SwissID."'";
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

$sqlPDB = "select PDB from SwissProt_1030319 where ID='".$SwissID."'";         
$resultPDB = mysql_query($sqlPDB) or die("Query failed : " . mysql_error());

if($data = mysql_fetch_array($resultPDB)) 
{
	$PDB123 = $data[0];
}

$pre_pos = 10000;
$level = 1;

//設定初始參數
$ComPDB = CN($PDB123,"4","pdb;");

$max_level = $ComPDB+1;

$graphWidth = 900;
$graphHeight = 25+$max_level*25;
$start_x = 100;  
$start_y = $max_level*25;  //底基數


//產生圖檔
header("Content-type: image/png");
$im = @ImageCreate ($graphWidth, $graphHeight) or die ("Cannot Initialize new GD image stream");
$background_color = ImageColorAllocate ($im, 255, 255, 255);	//設定背景顏色
include("image_color.php");

//show hint

//------------------------show Sequence-------------------------//
imageString($im,4,10,12,$SwissID,$black);
imagefilledrectangle( $im , $start_x, 21 , $start_x+(strlen($Seq)/$scale) , 23 , $black);

imageString($im, 2 , $start_x-2 , 25 , "1" , $black);

imageString($im, 2 , $start_x+(strlen($Seq)/$scale) , 25 , strlen($Seq) , $black);

//imageString($im, 2 , $start_x+20 , 25 , $ComPDB , $black);


$start_PDB = 25;//初數
$seq1cuta1 = explode("pdb;",$PDB123);

for($SCPDB=1;$SCPDB<$ComPDB+1;$SCPDB++)
{
  if($SCPDB%2==1)
  {
    $ColorBar = $blue;
  }
  else
  {
    $ColorBar = $green;
  }         
  $range_PDB = 25;//範圍基數*$SCPDB (用的)         
  $PDBin = $seq1cuta1[$SCPDB];
              
  $PDBinCut = explode(";",$PDBin);
  //$PDBinCut3 = $PDBinCut[3];
  
  $PDBinCut3_1 = explode(".",$PDBinCut[3]);
  $PDBinCut3 = explode("=",$PDBinCut3_1[0]);
              
  $PDBinCut31 = explode("-",$PDBinCut3[1]);
  
  $PDBinCut31[0];
  $PDBinCut31[1];
 
  imageString($im,3,5,$start_PDB+$range_PDB*$SCPDB-8,$PDBinCut[0],$ColorBar);//pdbid
  imageString($im,2,7,$start_PDB+$range_PDB*$SCPDB+2,$PDBinCut3[0],$ColorBar);
  
  if($PDBinCut31[0]==1)
  {
    imagefilledrectangle( $im , $start_x, $start_PDB+$range_PDB*$SCPDB , $start_x+($PDBinCut31[1]/$scale) , $start_PDB+4+$range_PDB*$SCPDB , $ColorBar);  //$scale = strlen($Seq)/750; seq1000 1000/750=1.333 1000/1.33=751.8
  }else{
    imagefilledrectangle( $im , $start_x+($PDBinCut31[0]/$scale), $start_PDB+$range_PDB*$SCPDB , $start_x+($PDBinCut31[1]/$scale) , $start_PDB+4+$range_PDB*$SCPDB , $ColorBar);  //$scale = strlen($Seq)/750; seq1000 1000/750=1.333 1000/1.33=751.8
  }
  
  if($PDBinCut31[0]==1)
  {
    imageString($im, 2 , $start_x, $start_PDB+4+$range_PDB*$SCPDB , $PDBinCut31[0] , $black);
  }else if($PDBinCut31[0]<10)
  {
    imageString($im, 2 , $start_x+($PDBinCut31[0]/$scale)-2 , $start_PDB+4+$range_PDB*$SCPDB , $PDBinCut31[0] , $black);
  }else if($PDBinCut31[0]>10 && $PDBinCut31[0]<100)
  {
    imageString($im, 2 , $start_x+($PDBinCut31[0]/$scale)-8 , $start_PDB+4+$range_PDB*$SCPDB , $PDBinCut31[0] , $black);       //s
  }else if($PDBinCut31[0]>100 && $PDBinCut31[0]<1000)
  {
    imageString($im, 2 , $start_x+($PDBinCut31[0]/$scale)-16 , $start_PDB+4+$range_PDB*$SCPDB , $PDBinCut31[0] , $black);
  }else if($PDBinCut31[0]>=1000)
  {
    imageString($im, 2 , $start_x+($PDBinCut31[0]/$scale)-24 , $start_PDB+4+$range_PDB*$SCPDB , $PDBinCut31[0] , $black);
  }
  
  imageString($im, 2 , $start_x+($PDBinCut31[1]/$scale) , $start_PDB+4+$range_PDB*$SCPDB , $PDBinCut31[1] , $black);        //e

}

mysql_close($link);
imagepng($im);
imagedestroy($im);
?>

