<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/andreas01.css" media="screen" title="andreas01 (screen)" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<title>dbPTM</title>
</head>

<style type="text/css">
<!--
.style1 {
	font-size: 15px;
	font-family: Arial, Helvetica, sans-serif;
}

.style16 {
	font-size: 24px;
	font-weight: bold;
}
.style17 {
	font-family: Arial, Helvetica, sans-serif;
	color: #666666;
	font-weight: bold;
	font-size: 16px;
}
.style18 {
	color: #999999;
	font-size: 14px;
	font-family: "Times New Roman", Times, serif;
}
.style19 {
	color: #FFFFFF;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif; font-size: 13px;
}
.style22 {color: #FFFFFF; font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }


-->
</style>

<body><div id="wrap">

<?php
//---------------------top.html--------------------------//
include("top.html");
?>

<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>
<li><a href="index.php">Welcome!</a></li>
<li><a href="introduction.php">Introduction</a></li>
<li><a href="statistics.php">Data Statistics</a></li>
<li><a href="browse.php">Browse PTM Type</a></li>
<li><a href="advance_search.php">Search</a></li>
<li><a href="download.php">Download</a></li>
<li><a href="tutorial.php">Tutorial</a></li>
<li><a href="http://dbPTM.mbc.nctu.edu.tw/1.0/">dbPTM 1.0</a></li>
</ul>

<div class="announce">
<h3>Latest news:</h3>
<p><strong>Oct. 15, 2007:</strong><br />
The newest Phosphorylation resource, Phospho.ELM version 7.0, is integrated in dbPTM!</p>
<p class="textright"><a href="index.html">Read more...</a></p>
</div>

</div>

<div id="content2">

	<table width="680">
      <tr>
        <td>
		  
			<?php
			//get the parameters
			$PTM_type = $_GET['type'];
			$PTM_AA = $_GET['AA'];
			
			if(strpos($PTM_AA,"-") !== false)
					$PTM_AA = substr($PTM_AA,0,1);


			if(!file_exists("PTM_sequence/".str_replace(" ","_",$PTM_type)) )
			{
				mkdir("PTM_sequence/".str_replace(" ","_",$PTM_type));
			}

			if(!file_exists("PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA) )
			{
				mkdir("PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA);
			}

			//initial parameters
			$AA = array("A","R","N","D","C","G","E","Q","H","I","L","K","M","F","P","S","T","W","Y","V");

			//connect to mysql database
			$link = mysql_connect("localhost", "DB", "bidlab203") or die("Could not connect : " . mysql_error());
			mysql_select_db("dbPTM2") or die("Could not select database");
			
			//get the protein information
			//$sql = "select FT_desc,FT_key,target,position,correction,mass_monoiso,mass_avg,location,RESID from Swiss_PTM_desc where keyword like '%".$PTM_type."%' and target = '".trim($_GET['AA'])."'"; //Justin 081008
			$sql = "select FT_desc,FT_key,target,position,correction,mass_monoiso,mass_avg,location,RESID from Swiss_PTM_desc where keyword like '".$PTM_type."' and target = '".trim($_GET['AA'])."'"; //Justin 081008
			$result = mysql_query($sql) or die("Query failed : " . mysql_error());
			while($data = mysql_fetch_array($result,MYSQL_ASSOC))
			{
				//general information
				echo "<table align='center' width='680'>";
				echo "<tr><td colspan='2' background='images/footer.gif'><div align='center' class='style1'>General Information</div></td></tr>";
				echo "<tr>";
				echo "<td width='150' bgcolor='#888888'><div align='center' class='style2'>PTM Description</div></td>";
				echo "<td bgcolor='#EEEEEE' class='style3'><font color=red><strong>".$data['FT_desc']."</strong></font></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td width='150' bgcolor='#888888'><div align='center' class='style2'>Modified Amino Acid</div></td>";
				echo "<td bgcolor='#DDDDDD' class='style3'>".$data['target']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td width='150' bgcolor='#888888'><div align='center' class='style2'>Position of Modification on Amino Acid</div></td>";
				echo "<td bgcolor='#EEEEEE' class='style3'>";
				if(substr($data['position'],0,strpos($data['position']," ")) == 'BB')
					echo "protein backbone";
				else
					echo "amino-acid side chain";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td width='150' bgcolor='#888888'><div align='center' class='style2'>Position in the Polypeptide</div></td>";
				echo "<td bgcolor='#DDDDDD' class='style3'>";
				if(strpos($data['position'],"Nter") !== false)
					echo "N-terminal amino group";
				elseif(strpos($data['position'],"Cter") !== false)
					echo "C-terminal carboxyl group";
				elseif(strpos($data['position'],"core") !== false)
					echo "not N-terminal amino group and C-terminal carboxyl group";
				else
					echo "any position";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td width='150' bgcolor='#888888'><div align='center' class='style2'>Correction Formula</div></td>";
				echo "<td bgcolor='#EEEEEE' class='style3'>".$data['correction']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td width='150' bgcolor='#888888'><div align='center' class='style2'>Monoisotopic Mass Difference</div></td>";
				echo "<td bgcolor='#DDDDDD' class='style3'>".$data['mass_monoiso']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td width='150' bgcolor='#888888'><div align='center' class='style2'>Average Mass Difference</div></td>";
				echo "<td bgcolor='#EEEEEE' class='style3'>".$data['mass_avg']."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td width='150' bgcolor='#888888'><div align='center' class='style2'>Localization</div></td>";
				echo "<td bgcolor='#DDDDDD' class='style3'>";
				if(strpos($data['location'],"in") !==false)
					echo "cytoplasm, nucleus, mitochondrial matrix, etc.";
				elseif(strpos($data['location'],"out") !==false)
					echo "extracellular and lumenal localisation";
				else
					echo $data['location'];

				echo " [<a href=\"browse_localization.php?PTM_desc=".trim($data['FT_desc'])."\" target='_blank'>Detail</a>]</td></tr>";
				//RESID information
				//echo "<tr><td colspan='2' background='images/footer.gif'><div align='center' class='style1'>RESID Information</div></td></tr>";
				if($data['RESID'] != 'none')
				{
					echo "<tr>";
					echo "<td width='150' bgcolor='#888888' align='center' class='style2'>RESID ID</td>";
					echo "<td bgcolor='#EEEEEE' class='style3'><a href=\"http://srs.ebi.ac.uk/srsbin/cgi-bin/wgetz?-newId+(([RESID-ID:".$data['RESID']."*]))+-view+ResidSimple+-page+qResult\" target='_blank'>".$data['RESID']."</a></td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td width='150' bgcolor='#888888' align='center' class='style2'>Formula Structure</td>";
					echo "<td class='style3'><img src='./RESID/images/".$data['RESID'].".gif' width='600' height='440'></td>";
					echo "</tr>";
					echo "<tr>";
					if(file_exists("./RESID/models/".$data['RESID'].".PDB"))
					{
						echo "<td width='150' bgcolor='#888888' align='center' class='style2'>Formula 3D Structure</td>";
						echo "<td class='style3'>";
						echo "<applet name='jmol' code='JmolApplet' archive='JmolApplet.jar' codebase='./jmol-11.2.4/' width='600' height='400' mayscript='true'>";
						echo "<param name='progressbar' value='true'/>";
						echo "<param name='load' value='./RESID/models/".$data['RESID'].".PDB'/>";
						echo "</applet>";
						echo "</td>";
						echo "</tr>";
					}
				}
				else
				{
					echo "<tr>";
					echo "<td width='150' bgcolor='#888888' align='center' class='style2'>RESID ID</td>";
					echo "<td bgcolor='#DDDDDD' class='style3'>none</td>";
					echo "</tr>";
				}
				
				//----------------------------------------- substrate site specificity---------------------------------------------//
				$filename = str_replace("'","_",$data['FT_desc']);
				$filename = str_replace(" ","_",$filename);
				$filename = str_replace("(","_",$filename);
				$filename = str_replace(")","_",$filename);
				
				//PTM description preprocessing
				$temp_desc = "";
				if( strrpos($data['FT_desc'],"'") === false)
					$temp_desc = trim($data['FT_desc']);
				else
					$temp_desc = trim(substr($data['FT_desc'],strrpos($data['FT_desc'],"'")+1));

				//PTM related information
				echo "<tr><td colspan='2' bgcolor='#888888' align='center' class='style2'><b>Substrate Site Specificity</b></td></tr>";
				echo "<tr>";
				echo "<td width='150' bgcolor='#888888' align='center' valign='middle' class='style2'>Number of Experimentally Validated Sites</td>";
				echo "<td class='style3'>";
				//get the number of PTM sites
				$PTM_num = 0;
				$sql = "select count(distinct a.ID,a.position) from Mix_dbPTM2 a,Swiss_sequence b where a.ID=b.ID and a.description like '%".$temp_desc."%' and substring(b.sequence,a.position,1) = '".$PTM_AA."' and a.description not like '%similarity%' and a.description not like '%potential%' and a.description not like '%probable%'";
				$result2 = mysql_query($sql) or die("Query failed : " . mysql_error());
				if($data2 = mysql_fetch_array($result2,MYSQL_NUM))
				{
					$PTM_num = $data2[0];
					echo "<a href='PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".fas'>".$data2[0]."</a>";
				}
				mysql_free_result($result2);
				echo "</td></tr>";
				
				echo "<tr>";
				echo "<td width='150' bgcolor='#888888' align='center' valign='middle' class='style2'>The Matrix of Positional Amino Acid Frequency Surrounding Modified Site</td>";
				echo "<td class='style3'>";

				//get the peptide sequence
				$PTM_seq_len = 0;
				$handle = fopen("PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".fas","w");	//save the sequence file
				$secondary = fopen("PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".secondary","w");	//save the secondary file
				$ASA = fopen("PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".ASA","w");	//save the ASA file
				if(strpos($data['position'],"Nter") !== false)
				{
					$PTM_seq_len = 7;
					$sql = "select distinct a.ID,a.position,a.resource,substring(b.sequence,a.position,7),substring(c.secondary,a.position,7),d.ASA from Mix_dbPTM2 a,Swiss_sequence b,Swiss_secondary c,Swiss_ASA d where a.ID=b.ID and b.ID=c.ID and c.ID=d.ID and a.description like '%".$temp_desc."%' and substring(b.sequence,a.position,1) = '".$PTM_AA."' and a.description not like '%similarity%' and a.description not like '%potential%' and a.description not like '%probable%' and substring(b.sequence,a.position,7) not like '%X%' and substring(b.sequence,a.position,7) not like '%Z%' and substring(b.sequence,a.position,7) not like '%B%' and length(substring(b.sequence,a.position,7)) = 7";
				}
				elseif(strpos($data['position'],"Cter") !== false)
				{
					$PTM_seq_len = 7;
					$sql = "select distinct a.ID,a.position,a.resource,substring(b.sequence,a.position-6,7),substring(c.secondary,a.position-6,7),d.ASA from Mix_dbPTM2 a,Swiss_sequence b,Swiss_secondary c,Swiss_ASA d where a.ID=b.ID and b.ID=c.ID and c.ID=d.ID and a.description like '%".$temp_desc."%' and substring(b.sequence,a.position,1) = '".$PTM_AA."' and a.description not like '%similarity%' and a.description not like '%potential%' and a.description not like '%probable%' and substring(b.sequence,a.position-6,7) not like '%X%' and substring(b.sequence,a.position-6,7) not like '%Z%' and substring(b.sequence,a.position-6,7) not like '%B%' and length(substring(b.sequence,a.position-6,7)) = 7";
				}
				else
				{
					$PTM_seq_len = 13;
					$sql = "select distinct a.ID,a.position,a.resource,substring(b.sequence,a.position-6,13),substring(c.secondary,a.position-6,13),d.ASA from Mix_dbPTM2 a,Swiss_sequence b,Swiss_secondary c,Swiss_ASA d where a.ID=b.ID and b.ID=c.ID and c.ID=d.ID and a.description like '%".$temp_desc."%' and substring(b.sequence,a.position,1) = '".$PTM_AA."' and a.description not like '%similarity%' and a.description not like '%potential%' and a.description not like '%probable%' and substring(b.sequence,a.position-6,13) not like '%X%' and substring(b.sequence,a.position-6,13) not like '%Z%' and substring(b.sequence,a.position-6,13) not like '%B%' and length(substring(b.sequence,a.position-6,13)) = 13";
				}
				$result2 = mysql_query($sql) or die("Query failed : " . mysql_error());
				$count = 0;
				unset($PTM_AA_count);
				while($data2 = mysql_fetch_array($result2,MYSQL_NUM))
				{
					fwrite($handle,">".$data2[0].":".$data2[1].":".$data2[2]."\n".$data2[3]."\n");
					fwrite($secondary,">".$data2[0].":".$data2[1]."\n".$data2[4]."\n");
					
					$temp_ASA = explode(":",$data2[5]);
					if(strpos($data['position'],"Nter") !== false)
					{
						fwrite($ASA,$data2[0]."\t".$data2[1]."\t");
						$temp_ASA_value = "";
						for($i=($data2[1]-1);$i<($data2[1]-1+7);$i++)
						{
							$temp_ASA_value .= ":".$temp_ASA[$i];
						}
						fwrite($ASA,substr($temp_ASA_value,1)."\n");
					}
					elseif(strpos($data['position'],"Cter") !== false)
					{
						fwrite($ASA,$data2[0]."\t".$data2[1]."\t");
						$temp_ASA_value = "";
						for($i=($data2[1]-7);$i<$data2[1];$i++)
						{
							$temp_ASA_value .= ":".$temp_ASA[$i];
						}
						fwrite($ASA,substr($temp_ASA_value,1)."\n");
					}
					else
					{
						fwrite($ASA,$data2[0]."\t".$data2[1]."\t");
						$temp_ASA_value = "";
						for($i=($data2[1]-7);$i<($data2[1]-1+7);$i++)
						{
							$temp_ASA_value .= ":".$temp_ASA[$i];
						}
						fwrite($ASA,substr($temp_ASA_value,1)."\n");
					}


					$PTM_seq[$count] = $data2[3];
					for($i=0;$i<strlen($PTM_seq[$count]);$i++)
					{
						$PTM_AA_count[$i][$data2[3][$i]]++;
					}
					$count++;
				}
				mysql_free_result($result2);
				fclose($handle);
				fclose($secondary);
				fclose($ASA);
				
				//show the matrix
				if($count > 0)
				{
					echo "<table width=600 border=0><tr align=center bgcolor='#99CCFF'><td>Pos.</td>";
					if(strpos($data['position'],"Nter") !== false)
						echo "<td>0</td><td>+1</td><td>+2</td><td>+3</td><td>+4</td><td>+5</td><td>+6</td>";
					elseif(strpos($data['position'],"Cter") !== false)
						echo "<td>-6</td><td>-5</td><td>-4</td><td>-3</td><td>-2</td><td>-1</td><td>0</td>"; 
					else
						echo "<td>-6</td><td>-5</td><td>-4</td><td>-3</td><td>-2</td><td>-1</td><td>0</td><td>+1</td><td>+2</td><td>+3</td><td>+4</td><td>+5</td><td>+6</td>";
					echo "</tr>";
					
					//get the background frequency
					$BG_count = 0;
					$BG = fopen("Swiss_BG/".$PTM_AA.".matrix","r");	//save the sequence file
					while(!feof($BG))
					{
						$temp_BG = explode("\t",trim(fgets($BG,1000)));

						if(strpos($data['position'],"Nter") !== false)
						{
							for($j=0;$j<$PTM_seq_len;$j++)
								$AA_BG[$j][$AA[$BG_count]] = $temp_BG[7+$j];
						}
						elseif(strpos($data['position'],"Cter") !== false)
						{
							for($j=0;$j<$PTM_seq_len;$j++)
								$AA_BG[$j][$AA[$BG_count]] = $temp_BG[1+$j];
						}
						else
						{
							for($j=0;$j<$PTM_seq_len;$j++)
								$AA_BG[$j][$AA[$BG_count]] = $temp_BG[1+$j];
						}

						$BG_count++;
					}
					fclose($BG);
					
					//calculate the frequence and z-score
					for($i=0;$i<20;$i++)
					{
						echo "<tr align=center bgcolor='#CCEEFF'><td class='style3'>".$AA[$i]."</td>";
						for($j=0;$j<$PTM_seq_len;$j++)
						{
							$temp_ave = $PTM_AA_count[$j][$AA[$i]]/$count;
							$temp_z = 0;
							if($AA_BG[$j][$AA[$i]] != 0 && $AA_BG[$j][$AA[$i]] != 1)
							{
								$temp_z = $temp_ave/$AA_BG[$j][$AA[$i]];// / sqrt($AA_BG[$j][$AA[$i]]*(1-$AA_BG[$j][$AA[$i]]));
							}

							if($temp_z >= 10)
							{
								echo "<td class='style3' bgcolor='#FF0000'>".round($temp_ave,2)."</td>";
							}
							elseif($temp_z >= 5)
							{
								echo "<td class='style3' bgcolor='#FF6060'>".round($temp_ave,2)."</td>";
							}
							elseif($temp_z >= 2)
							{
								echo "<td class='style3' bgcolor='#FFC0C0'>".round($temp_ave,2)."</td>";
							}
							else
							{
								echo "<td class='style3' bgcolor='#FFE0E0'>".round($temp_ave,2)."</td>";
							}

						}
						echo "</tr>";
					}
					echo "</table>";
					echo "</td></tr>";
					

					//create the sequence logo and secondary logo
					if(strpos($data['position'],"Nter") !== false)
					{
						$cmd1 = "./weblogo/seqlogo -F PNG -s 0 -w 7 -h 5 -f ./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".fas -o ./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename." -abcnSMY";
						$cmd2 = "./weblogo/seqlogo -t 'H=helix E=Sheet C=Coil' -F PNG -s 0 -w 7 -h 5 -f ./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".secondary -o ./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".secondary -abcnMY";
					}
					elseif(strpos($data['position'],"Cter") !== false)
					{
						$cmd1 = "./weblogo/seqlogo -F PNG -s -6 -w 7 -h 5 -f ./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".fas -o ./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename." -abcnSMY";
						$cmd2 = "./weblogo/seqlogo -t 'H=helix E=Sheet C=Coil' -F PNG -s -6 -w 7 -h 5 -f ./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".secondary -o ./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".secondary -abcnMY";
					}
					else
					{
						$cmd1 = "./weblogo/seqlogo -F PNG -s -6 -w 13 -h 5 -f ./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".fas -o ./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename." -abcnSMY";
						$cmd2 = "./weblogo/seqlogo -t 'H=helix E=Sheet C=Coil' -F PNG -s -6 -w 13 -h 5 -f ./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".secondary -o ./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".secondary -abcnMY";
					}
					exec($cmd1);
					exec($cmd2);

					echo "<tr>";
					echo "<td width='150' bgcolor='#888888' align='center' valign='middle' class='style2'>Sequence Logo</td>";
					echo "<td class='style3'><img src='./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".png' width=600 hight=200></td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td width='150' bgcolor='#888888' align='center' valign='middle' class='style2'>Average Solvent Accessibility Surrounding Modified Site</td>";
					echo "<td class='style3'><img src='browse_image_ASA.php?PTM_type=".str_replace(" ","_",$PTM_type)."&PTM_AA=".$PTM_AA."&filename=".$filename."&PTM_pos=".$data['position']."&PTM_seq_len=".$PTM_seq_len."' width=600 hight=200></td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td width='150' bgcolor='#888888' align='center' valign='middle' class='style2'>Secondary Structure Logo</td>";
					echo "<td class='style3'><img src='./PTM_sequence/".str_replace(" ","_",$PTM_type)."/".$PTM_AA."/".$filename.".secondary.png' width=600 hight=200></td>";
					echo "</tr>";
					
				}

				echo "</table><br><hr><br>";
				
			}
			mysql_free_result($result);
			?>
          
          
          </td>
        </tr>
    </table>



</div>

<?php
include("buttom.html");
?>

</div>
</body>
</html>
