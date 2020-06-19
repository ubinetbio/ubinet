<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/andreas01.css" media="screen" title="andreas01 (screen)" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<link rel="icon" href="images/UbiNet.ico" type="image/x-icon">
<title>UbiNet</title>
</head>

<style type="text/css">

	.txtPageContentTitle {
		font-size: 16px;
		font-family: Geneva, Arial, Helvetica, sans-serif;
		font-weight: bold;
		color: #00F;
	}
	.txtContentNormal {
		font-size: 13px;
		font-family: Geneva, Arial, Helvetica, sans-serif;
		font-weight: normal;
		color: #000;
	}
	
	.tblHeader{
		font-family:Verdana, Geneva, sans-serif;
		font-weight:bold;
		font-size:13px;
		color:#000;
		
	}
	.tblContent{
		font-family:Verdana, Geneva, sans-serif;
		font-weight:normal;
		font-size:10px;
		color:#000;
	}
	.tblLysineK{
		font-family:Verdana, Geneva, sans-serif;
		font-weight:bold;
		font-size:13px;
		color: #F00;
	}
		
	table tr td.style11{
		border-width: 1px;
		border-style: solid;
		word-break:break-all; 
		border-color: #CCC; /*  #0F6;*/
		/*background: #E7E6E4;*/
	}
	#content .style38 {
		color: #00F;
	}
	#wrap table tr td .tblContent strong {
		color: #000;
	}
</style>
 <body><div id="wrap"><blockquote></blockquote>
<?php
//---------------------top.html--------------------------//
	include("top.html");
	include("left_menu.html");
?>
</div>	
    
    <div id="content" width="100%">
    
<?php
	include "mysql_connection.inc";
	
	$E3_ID=array();
	$E3_AC=array();
	$E3_GeneName=array();
	$E3_group=array();
	$E3_PubMedID=array();
	$Num_Substrates=array();
	$Num_Subs=array();
	$Num_Fragment=array();
	$E_Value=array();
	$BayesThreshold=array();
	$Motif=array();
	
	$e3_id = $_GET["e3_id"];
	$text="";
	
	echo "<hr />";
	if(strlen(trim($e3_id))>0){ // If e3_id !=empty => Find and display results for this E3_ID
		$text="The motif identified by MEME {E3_ID = ".$e3_id."}";
		echo "<p align=\"justify\" class=\"txtPageContentTitle\"><strong>$text</strong></p>";
		//echo "<p align=right class=\"txtPageContentTitle\"><font color=blue><a href=\"http://csb.cse.yzu.edu.tw/UbiSite/\" target=\"_blank\">Prediction by UbiSite 1.0</a></font></a></p>";
		
		$count = 0;
		$sql = "select distinct E3_ID, E3_AC, E3_GeneName, E3_Group, E3_PubID, Num_Subs, Num_Fragment, E_Value, BayesThreshold, Motif from final_E3Subs_MEME_Motif where E3_ID ='".$e3_id."'";
		$result = mysql_query($sql) or die("Query failed : " . mysql_error());
		$num_rows = mysql_num_rows($result);
		if($num_rows > 0)
		{
			 while($data = mysql_fetch_array($result))
			   {
					$E3_ID[$count] = $data[0];
					$E3_AC[$count] = $data[1];
					$E3_GeneName[$count] = $data[2];
					$E3_group[$count] = $data[3];
					$E3_PubMedID[$count] = $data[4];
					$Num_Subs[$count] = $data[5];
					$Num_Fragment[$count] = $data[6];
					$E_Value[$count] = $data[7];
					$BayesThreshold[$count] = $data[8];
					$Motif[$count] = $data[9];
					$count++;
			 }
		}
	}
	else
	{   // If e3_id =empty => Find and display all
		$text="The motifs identified by MEME...";
		echo "<p align=\"justify\" class=\"txtPageContentTitle\"><strong>$text</strong></p>";
		//echo "<p align=right class=\"txtPageContentTitle\"><font color=blue><a href=\"http://csb.cse.yzu.edu.tw/UbiSite/\" target=\"_blank\">Prediction by UbiSite 1.0</a></font></a></p>";
		
		$count = 0;
		$sql = "select distinct E3_ID, E3_AC, E3_GeneName, E3_Group, E3_PubID, Num_Subs, Num_Fragment, E_Value, BayesThreshold, Motif from final_E3Subs_MEME_Motif";
		$result = mysql_query($sql) or die("Query failed : " . mysql_error());
		$num_rows = mysql_num_rows($result);
		if($num_rows > 0)
		{
			 while($data = mysql_fetch_array($result))
			   {
					$E3_ID[$count] = $data[0];
					$E3_AC[$count] = $data[1];
					$E3_GeneName[$count] = $data[2];
					$E3_group[$count] = $data[3];
					$E3_PubMedID[$count] = $data[4];
					$Num_Subs[$count] = $data[5];
					$Num_Fragment[$count] = $data[6];
					$E_Value[$count] = $data[7];
					$BayesThreshold[$count] = $data[8];
					$Motif[$count] = $data[9];
					$count++;
			 }
		}	
	}
	mysql_close($link);
	
	if($count<=0) 
		$msg= "<p align=left class=\"txtContentNormal\"><font color=red> There is no motif identified!</font></p>";
	else
		$msg="";
		
	echo $msg;
	?>
	<table width=100% border="0"  cellpadding="0" cellspacing="0" >
	  <tr>
	    <td width="65%"></td>
	    <td width=35% align="right" valign="middle"><strong><font style="font-size:16px"><a href="viewE3Sub_MemeMotif_Detail.php" target="_blank">View all MEME motifs  </a></font></strong></td>
	    </tr>
	  <tr>
	    <td></td>
	    <td align="right" valign="middle">&nbsp;</td>
	    </tr>
	  </table>
	<table Height="100%" width="100%"  align="center" border="1" bordercolor="#666666" cellspacing="0" cellpadding="2">
		<tr bgcolor="#7B7B7B"> 
            <td width="4%" rowspan="2"  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>No.</b></font></td>
            <td width="6%" rowspan="2"  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>E3_ID</b></font></td>
            <td width="4%" rowspan="2"  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>AC</b></font></td>
            <td width="11%" rowspan="2"  align="center" class="style11" style="padding: 10px 2px;"><b><font color="white">GeneName</font></b></td>
            <td width="7%" rowspan="2"  align="center" class="style11" style="padding: 10px 2px;"><b><font color="white">Group<br />type</font></b></td>
            <td width="8%" rowspan="2"  align="center" class="style11" style="padding: 10px 2px;"><b><font color="white">No.<br />of<br />UbiSub</font></b></td>
            <td height="55" colspan="4"  align="center" class="style11" style="padding: 10px 2px;"><font color="white"><b>Motif identified by MEME</b></font></td>
        <tr bgcolor="#7B7B7B">
          <td width="9%" height="48" align="center" class="style11" style="padding: 10px 2px;"><font color="white"><b>No. <br /> of <br />          sites</b></font></td>
          <td width="9%" align="center" class="style11" style="padding: 10px 2px;"><font color="white"><b>E_Value</b></font></td>
          <td width="10%" align="center" class="style11" style="padding: 10px 2px;"><font color="white"><b>Bayes<br />threshold</b></font></td>
          <td width="32%" align="center" class="style11" style="padding: 10px 2px;"><font color="white"><b>Motif</b></font></td>

<?php
    // Write data to Table
	
		$rowColor="#E8E8D0";
		$index=0;
		for($i=0;$i<$count;$i++){
			if (($i+1) % 2 === 0) $rowColor="#FFFFFF";
			else $rowColor="#E0FFFF";
			
			echo "<tr  bgcolor=".$rowColor." style=\"tblContent\">";
				if($Num_Subs[$i]>0){
					echo "<td width=\"4%\" align=\"center\" >".($index+1)."</td>"; 
					echo "<td width=\"6%\"align=\"center\" ><a href=http://www.uniprot.org/uniprot/".$E3_ID[$i]."  target=\"_blank\">".$E3_ID[$i]."</td>";
					echo "<td width=\"4%\"align=\"center\" >".$E3_AC[$i]."</td>";
					echo "<td width=\"11%\"align=\"center\" >".$E3_GeneName[$i]."</td>";
					echo "<td width=\"7%\"align=\"center\" >".$E3_group[$i]."</td>";
					echo "<td width=\"8%\" align=\"center\" >".$Num_Subs[$i]."</td>";
					echo "<td width=\"7%\" align=\"center\"  >".$Num_Fragment[$i]."</td>";
					echo "<td width=\"5%\" align=\"center\" >".$E_Value[$i]."</td>";
					echo "<td width=\"6%\" align=\"center\" >".$BayesThreshold[$i]."</td>"; 
					echo "<td width=\"42%\" align=\"center\" ><img src=./data/MEME_motif/".$Motif[$i]." width=\"95%\" height=\"100\"></td>";
					$index++;
				}
			echo "</tr>";
		}
?>
    </tr>
  </table>

</div> <!-- End of div id="content"-->

</blockquote>
</div> <!-- End of div id="wrap" -->

</body>
</html>
