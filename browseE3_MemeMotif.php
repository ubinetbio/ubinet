<?php
// Start the session
session_start();
?>


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
	.style37 {
		font-size: 14px;
		font-family: Geneva, Arial, Helvetica, sans-serif;
		font-weight: bold;
		color: #FFFFFF;
	}
	.style38 {
		color: #FF0066;
		font-weight: lighter;
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
</style>

<body><div id="wrap">

<?php
//---------------------top.html--------------------------//
include("top.html");
?>

<blockquote>
<div id="content">
    <hr />
    <p align="justify" class="txtPageContentTitle"><strong>Browse all E3 ligases...</strong></p> 
	<p>
	  <?php
		
			
		$Rank=array();
		$E3_ID=array();
		$E3_AC=array();
		$E3_group=array();
		$GeneName=array();
		$Ensembl=array();
		$PubMedID=array();
		
		$Num_Substrates=array();
		$Substrates_List=array();
		$Networks=array();
		$Motif=array();
		$NumOfFragment=array();
		$E_value=array();
		$BayesThreshold=array();
		
			
	
	//READ DATA FROM TEXT FILE
		$fi = fopen("./data/browseE3_Meme_motif.txt","r");
		$temp = fgets($fi); //Skip the first row containing column title
		$count=0;
		while(!feof($fi))
		{
			$temp = fgets($fi);
			if(strlen(trim($temp))>0) // If this is not an empty line
			{	
				$E3_ID[$count]=trim(strtok($temp,"\t"));
				$E3_AC[$count]=trim(strtok("\t"));
				$GeneName[$count]=trim(strtok("\t"));
				$E3_group[$count]=trim(strtok("\t"));
				$Num_Substrates[$count]=trim(strtok("\t"));
				$Ensembl[$count]=trim(strtok("\t"));
				$PubMedID[$count]=trim(strtok("\t"));
				$Networks[$count]=trim(strtok("\t"));
				$Motif[$count]=trim(strtok("\t"));
				$NumOfFragment[$count]=trim(strtok("\t"));
				$E_value[$count]=trim(strtok("\t"));
				$BayesThreshold[$count]=trim(strtok("\t"));
				$count++;
			}
		}
		fclose($fi);
		
	?>
	</p>
	<table width="100%"  align="center" border="1" bordercolor="#666666" cellspacing="0" cellpadding="2">
		<tr bgcolor="#7B7B7B"> 
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>No.</b></font></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>ID</b></font></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>AC</b></font></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><b><font color="white">GeneName</font></b></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><b><font color="white">Group type</font></b></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><p><b><font color="white">Number of<br /></font><font color="white">UbiSubstrates<br /></font></b><b><font color="white">interact with E3<br />(</font></b><b><font color="white">via PPI)</font><font color="white"></a></font></b></p></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>Ensembl</b></font></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>Pubmed ID</b></font></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>Networks</b></font></td>

        <?php	
       
  		session_register ("e3list");
        $_SESSION ["e3list"] = $E3_ID;	
		//get the parameters
		
		$substrate=$_POST['substrate'];
		
		$species = 'Homo sapiens (Human)';

        for($x=0;$x<$count;$x++){
			
				if (($x+1) % 2 === 0) $cellcolor="#E8E8D0";
				else $cellcolor="#FFFFFF";			
				echo "<tr height=\"40\" bgcolor=".$cellcolor."> ";				
					echo "<td width=5% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\"><b>".($x+1)."</b></font></td>";
					echo "<td width=8% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\"  size=\"2\"><a href=\"http://www.uniprot.org/uniprot/$E3_ID[$x]\" target=\"_blank\" \">".$E3_ID[$x]."</a></font></td>";
					echo "<td width=8% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\"><a href=\"http://www.uniprot.org/uniprot/$E3_AC[$x]\" target=\"_blank\" \">".$E3_AC[$x]."</font></td>";
					echo "<td width=8% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$GeneName[$x]."</font></td>";
					echo "<td width=8% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$E3_group[$x]."</font></td>";
					if($Num_Substrates[$x]>0){
						echo "<td width=16% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\"  size=\"3\"><a href=\"viewPPI.php?index=".($x+1)."\" target=\"_blank\" \"><strong>".$Num_Substrates[$x]."</a><br />(<a href=\"viewE3Sub_MemeMotif_Detail.php?e3_id=".$E3_ID[$x]."\" target=\"_blank\" \"><strong>"."MEME Motif"."</a>)</font></td>";
					}else
						echo "<td width=16% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\"  size=\"3\">".$Num_Substrates[$x]."</a></font></td>";	
						
					echo "<td width=13% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$Ensembl[$x]."</font></td>";
					echo "<td width=24% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$PubMedID[$x]."</font></td>";
					if(strcmp($Networks[$x],"Construct")==0){
						//echo "<td width=12% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\"><a href=\"interacting_network.php?index=".($x+1)."\" target=\"_blank\" \"><strong>".$Networks[$x]."</font></td>";
						 //<==Get parameters for the interacting network
							$param="substrate%5B%5D=".$E3_ID[$x];
								include "mysql_connection.inc";
								$subs=array(); $ppi_resource=array(); $ppi_pub_id=array();
								// Get all substrates which are recognized by this E3
								$sql = "select Sub_ID,PPI_Resource, PPI_PubID from final_Interaction_E3_Sub_PPI_Human_No_String where E3_ID = '".$E3_ID[$x]."'";
								$result = mysql_query($sql) or die("Query failed : " . mysql_error());
								//$dd=0;
								while($data = mysql_fetch_array($result)){
										$subs[count($subs)] = $data[0];
										$st=$data[0];
										$ppi_resource[count($ppi_resource)] = $data[1];
										$ppi_pub_id[count($ppi_pub_id)] = $data[2];
										//if($dd==0)
										//	$param=$param.$st;
										//else
											$param=$param."%0D%0A".$st;
										//$dd++;	
									}
								
								$param=$param."&species=Human&x=54&y=22";
								//print_r($subs);
								mysql_close($link);
							//==>
						echo "<td width=10% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\"><a href=\"interacting_network.php?".$param."\" target=\"_blank\" \"><strong>".$Networks[$x]."</font></td>";
						//echo "<td width=12% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\"><a href=\"interacting_network2.php?index=".($x+1)."\" target=\"_blank\" \"><strong>".$Networks[$x]."</font></td>";
					}else				
						echo "<td width=10% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$Networks[$x]."</font></td>";
	
				echo "</tr>";
					

			}  
																									
			    
	?>
	</table>
       	


</div>
</blockquote>
<?php
include("footer.html");
?>
</div>
</body>
</html>

