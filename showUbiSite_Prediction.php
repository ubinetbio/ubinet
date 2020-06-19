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
		color:#000;
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

<body><div id="wrap">
<?php
//---------------------top.html--------------------------//
	include("top.html");
	include("left_menu.html");

?>
</div>



<div id="content">
   
    <hr />
    <p align="justify" class="txtPageContentTitle"><strong>UbiSite-prediction results for interacting proteins... <span class="txtContentNormal">(7600 unique proteins in our current database)</span></strong></p>
    <!--
    <p align=right class="txtPageContentTitle"><font color=blue><a href="http://csb.cse.yzu.edu.tw/UbiSite/" target="_blank">Prediction by UbiSite 1.0</a></font></a></p>
    -->
    <?php
	
	
	$ID=array(); // Protein ID
	$pos=array(); // position of ubiquitination site
	$fragment=array(); // fragment 
	$score=array(); // SVM score
	$motif=array(); // substrate motif
	$count=0;
	
	/*
	// EXTRACT DATA FROM My-SQL database table <final_UbiSite_Prediction>
		include "mysql_connection.inc";
		$sql = "select * from final_UbiSite_Prediction";
		$result = mysql_query($sql) or die("Query failed : " . mysql_error());
		$num_rows = mysql_num_rows($result);
		if($num_rows > 0)
		{
			 while($data = mysql_fetch_array($result))
			   {
					  $ID[count($ID)] = $data[0];
					  $pos[count($pos)] = $data[1];
					  $fragment[count($fragment)] = $data[2];
					  $score[count($score)]=$data[3];
					  $motif[count($motif)]=$data[4];
			 }
		}
		$count=count($ID);
		mysql_close($link);
	*/
	
	//READ DATA FROM TEXT FILE
		$fi = fopen("./data/final_UbiSite_Prediction.result","r");
		//$fi = fopen("./data/test.result","r");
		$temp = fgets($fi); //Skip the first row containing column title
		while(!feof($fi))
		{
			$temp = fgets($fi);
			if(strlen(trim($temp))>0) // If this is not an empty line
			{	
				$ID[$count]=strtok($temp,"\t");
				$pos[$count]=strtok("\t");
				$fragment[$count]=strtok("\t");
				$score[$count]=strtok("\t");
				$motif[$count]=strtok("\t"); 
				$count++;
			}
		}
		fclose($fi);	
	
	echo "<table width=\"100%\" border=\"0\"  cellpadding=\"0\" cellspacing=\"0\" >";
	echo "<tr>";
          echo "<td width=\"50\" height=\"42\" align=\"center\" valign=\"middle\"><strong></strong></td>";
          echo "<td width=\"157\" align=\"center\" valign=\"middle\"><strong></strong></td>";
          echo "<td width=\"115\" align=\"center\" valign=\"middle\"><strong></strong></td>";
          echo "<td width=\"258\" align=\"center\" valign=\"middle\"><strong></strong></td>";
          echo "<td width=\"167\" align=\"center\" valign=\"middle\"><strong></strong></td>";
          echo "<td width=\"300\" align=\"right\" valign=\"middle\"><strong><a href=\"http://csb.cse.yzu.edu.tw/UbiSite/\" target=\"_blank\">Prediction by UbiSite 1.0</a></a></strong></td>";
      echo "</tr>";
	echo "</table>";
	
    // Write data to Table
	echo "<table width=\"100%\" border=\"2\"  cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#333333\"  bgcolor=\"#FFFFFF\">";
    echo "<tr class=\"tblHeader\" bgcolor=\"#99CCFF\" style=\"tblHeader\">";
          echo "<td width=\"50\" height=\"42\" align=\"center\" valign=\"middle\"><strong>No.</strong></td>";
          echo "<td width=\"157\" align=\"center\" valign=\"middle\"><strong>ID</strong></td>";
          echo "<td width=\"115\" align=\"center\" valign=\"middle\"><strong>Position</strong></td>";
          echo "<td width=\"258\" align=\"center\" valign=\"middle\"><strong>Fragment</strong></td>";
          echo "<td width=\"167\" align=\"center\" valign=\"middle\"><strong>Score</strong></td>";
          echo "<td width=\"300\" align=\"center\" valign=\"middle\"><strong>Substrate motif</strong></td>";
      echo "</tr>";

		$rowColor="#E8E8D0";
		
		for($i=0;$i<$count;$i++){
			if (($i+1) % 2 === 0) $rowColor="#E8E8D0";
			else $rowColor="#E0FFFF";
			
			echo "<tr  bgcolor=".$rowColor." style=\"tblContent\">";
				echo "<td align=\"center\" >".($i+1)."</td>"; 
				//echo "<td align=\"center\" ><a href=http://www.uniprot.org/uniprot/".$ID[$i]."  target=\"_blank\">".$ID[$i]."</a></td>";
				echo "<td align=\"center\" ><a href=search_result.php?search_type=db_id&swiss_id=$ID[$i] target=\"_blank\" \">".$ID[$i]."</a></td>";
				echo "<td align=\"center\" >".$pos[$i]."</td>";
				echo "<td align=\"center\" >".$fragment[$i]."</td>";
				echo "<td align=\"center\" >".$score[$i]."</td>";
				//echo "<td align=\"center\" ><a href=./data/MDD_motif/".$motif[$i]." target=\"_blank\"> Show motif</a></td>";
				echo "<td align=\"center\" ><img src=./data/MDD_motif/".$motif[$i]." width=\"300\" height=\"100\"></td>";
				
			echo "</tr>";
		}
    ?>
    </tr>
  </table>
</p>
    </blockquote>
</div>

<?php
include("footer.html");
?>
</div>
</body>
</html>
