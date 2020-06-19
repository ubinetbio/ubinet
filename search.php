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
<!--
.style1 {
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
}

.style24 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style36 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #FFFFFF; font-weight: bold; }
.style37 {
        font-size: 14px;
        font-family: Geneva, Arial, Helvetica, sans-serif;
        font-weight: bold;
        color: #FFFFFF;
}


-->
</style>

<body><div id="wrap">

<?php
//---------------------top.html--------------------------//
include("top.html");
include("left_menu.html");
include("left_news.html");
?>

</div>

<div id="content">

<?php
//抓參數
$search_type = $_GET['search_type'];
$keyword_type = $_POST['keyword_type'];
$keyword_value = $_POST['keyword_value'];
$db_type = $_POST['db_type'];
$db_value = $_POST['db_value'];
$QuickType = $_GET['QuickType'];
$QuickValue = $_GET['QuickValue'];
$sequence = $_POST['sequence'];
?>

<br><br><br>



<?php
//------------------------ search the database ------------------------//
if($search_type != "")
{
		

			//connect to mysql database
			$link = mysql_connect("10.21.53.252", "ubinet", "ubinet1706c") or die("Could not connect : " . mysql_error());
			mysql_select_db("RegUbi") or die("Could not select database");
			$sql = "";
			
			//Keyword search at protein_name 
			if($search_type == "keyword" && $keyword_type == "protein_name" && $keyword_value != "")
			{
				$sql = "select * from SwissProt_201106 where protein_name like '%".$keyword_value."%' AND ID like '%_HUMAN%'";
				$result = mysql_query($sql) or die("Query failed : " . mysql_error());
				$num_rows = mysql_num_rows($result);
				if($num_rows == 0)//判斷是否有值
				{
					echo "<center>The keyword <div align='center' class='style2'>$keyword_value</div> is not matched in the protein name field!!</center>";
				}
				else//有值就把結果秀出來	
				{
					
					echo "<br>";
					echo "<table width=700 align=center border=1 cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>";
					echo "<tr bgcolor='#CCFFFF'>";
					echo "<td width='20' class='style8'>&nbsp;</td>";
					echo "<td width='120' align='center'class='style8'>Swiss-Prot ID</td>";
					echo "<td width='402' align='center' class='style8'>Protein Name</td>";
					echo "<td width='215' align='center' class='style8'>Information</td>";
					echo "</tr>";
					$count = 1;
					while($data = mysql_fetch_array($result,MYSQL_ASSOC)) 
					{

						$tmp = explode(";",$data['protein_name']);
						$data['protein_name'] = str_replace("RecName: Full=","",$tmp[0]);
						$data['protein_name'] = trim($data['protein_name']);

						echo "<tr>";
						echo "<td class='style3'>".$count."</td>";
						echo "<td align='center'class='style3'>".$data['ID']."</td>";
						echo "<td class='style3'>".$data['protein_name']."</td>";
						echo "<td align='center' class='style3'><a href='search_result.php?search_type=db_id&swiss_id=".$data['ID']."' class='style5'>show</a></td>";
						echo "</tr>";
						$count++;
					}
					echo "</table>";
					
				}

				mysql_free_result($result);
			}
			//Keyword search at gene_name
			elseif($search_type == "keyword" && $keyword_type == "gene_name" && $keyword_value != "")
			{
				$sql = "select * from SwissProt_201106 where gene_name like '%".$keyword_value."%' AND ID like '%_HUMAN%'";
				$result = mysql_query($sql) or die("Query failed : " . mysql_error());
				$num_rows = mysql_num_rows($result);
				if($num_rows == 0)//判斷是否有值
				{
					echo "<center>The keyword <div align='center' class='style2'>$keyword_value</div> is not matched in the protein name field!!</center>";
				}
				else//有值就把結果秀出來	
				{
					echo "<form action='search_result.php?search_type=keyword' target='_blank' method='post'>";
					echo "<br>";
					echo "<table width=700 align=center border=1 cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>";
					echo "<tr bgcolor='#CCFFFF'>";
					echo "<td width='20' class='style8'>&nbsp;</td>";
					echo "<td width='120' align='center'class='style8'>Swiss-Prot ID</td>";
					echo "<td width='402' align='center' class='style8'>Gene Name</td>";
					echo "<td width='215' align='center' class='style8'>Information</td>";
					echo "</tr>";
					$count = 1;
					while($data = mysql_fetch_array($result,MYSQL_ASSOC)) 
					{
                                                $tmp = explode(";",$data['gene_name']);
                                                $data['gene_name'] = str_replace("Name=","",$tmp[0]);
                                                $data['gene_name'] = trim($data['gene_name']);

						echo "<tr>";
						echo "<td class='style3'>".$count."</td>";
						echo "<td align='center'class='style3'>".$data['ID']."</td>";
						echo "<td class='style3'>".$data['gene_name']."</td>";
						echo "<td align='center' class='style3'><a href='search_result.php?search_type=db_id&swiss_id=".$data['ID']."' class='style5'>show</a></td>";
						echo "</tr>";
						$count++;
					}
					echo "</table>";
					echo "</form>";
				}

				mysql_free_result($result);
			}
			//SwissProt ID search 
			elseif($search_type == "db_id" && $db_type == "swiss_id" && $db_value != "")
			{
				$sql = "select * from SwissProt_201106 where ID like '%".$db_value."%' AND ID like '%_HUMAN%'";
				$result = mysql_query($sql) or die("Query failed : " . mysql_error());
				$num_rows = mysql_num_rows($result);
				if($num_rows == 0)//判斷是否有值
				{
					echo "<center>The keyword <div align='center' class='style2'>$keyword_value</div> is not matched in the protein name field!!</center>";
				}
				else//有值就把結果秀出來	
				{
					echo "<form action='search_result.php?search_type=db_id' target='_blank' method='post'>";
					echo "<br>";
					echo "<table width=700 align=center border=1 cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>";
					echo "<tr bgcolor='#CCFFFF'>";
					echo "<td width='20' class='style8'>&nbsp;</td>";
					echo "<td width='120' align='center'class='style8'>Swiss-Prot ID</td>";
					echo "<td width='402' align='center' class='style8'>Protein Name</td>";
					echo "<td width='215' align='center' class='style8'>Information</td>";
					echo "</tr>";
					$count = 1;
					while($data = mysql_fetch_array($result,MYSQL_ASSOC)) 
					{
                                                $tmp = explode(";",$data['protein_name']);
                                                $data['protein_name'] = str_replace("RecName: Full=","",$tmp[0]);
                                                $data['protein_name'] = trim($data['protein_name']);

						echo "<tr>";
						echo "<td class='style3'>".$count."</td>";
						echo "<td align='center'class='style3'>".$data['ID']."</td>";
						echo "<td class='style3'>".$data['protein_name']."</td>";
						//echo "<td align='center' class='style3'><input type='submit' name='submit' value='show ".$data['ID']."' class='style5'></td>";
						echo "<td align='center' class='style3'><a href='search_result.php?search_type=db_id&swiss_id=".$data['ID']."' class='style5'>show</a></td>";
						echo "</tr>";
						$count++;
					}
					echo "</table>";
					echo "</form>";
				}

				mysql_free_result($result);
			}
			//SwissProt AC search
			elseif($search_type == "db_id" && $db_type == "swiss_ac" && $db_value != "")
			{
				$sql = "select * from SwissProt_201106 where AC like '%".$db_value."%' AND ID like '%_HUMAN%'";
				$result = mysql_query($sql) or die("Query failed : " . mysql_error());
				$num_rows = mysql_num_rows($result);
				if($num_rows == 0)//判斷是否有值
				{
					echo "<center>The keyword <div align='center' class='style2'>$keyword_value</div> is not matched in the protein name field!!</center>";
				}
				else//有值就把結果秀出來	
				{
					echo "<form action='search_result.php?search_type=db_id' target='_blank' method='post'>";
					echo "<br>";
					echo "<table width=700 align=center border=1 cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>";
					echo "<tr bgcolor='#CCFFFF'>";
					echo "<td width='20' class='style8'>&nbsp;</td>";
					echo "<td width='120' align='center'class='style8'>Swiss-Prot ID</td>";
					echo "<td width='402' align='center' class='style8'>Swiss-Prot AC</td>";
					echo "<td width='215' align='center' class='style8'>Information</td>";
					echo "</tr>";
					$count = 1;
					while($data = mysql_fetch_array($result,MYSQL_ASSOC)) 
					{
						echo "<tr>";
						echo "<td class='style3'>".$count."</td>";
						echo "<td align='center'class='style3'>".$data['ID']."</td>";
						echo "<td class='style3'>".$data['AC']."</td>";
						echo "<td align='center' class='style3'><a href='search_result.php?search_type=db_id&swiss_id=".$data['ID']."' class='style5'>show</a></td>";
						echo "</tr>";
						$count++;
					}
					echo "</table>";
					echo "</form>";
				}

				mysql_free_result($result);
			}
			//GO ID search
			elseif($search_type == "db_id" && $db_type == "go" && $db_value != "")
			{
				$sql = "select * from SwissProt_201106 where GO like '%".$db_value."%' AND ID like '%_HUMAN%'";
				$result = mysql_query($sql) or die("Query failed : " . mysql_error());
				$num_rows = mysql_num_rows($result);
				if($num_rows == 0)//判斷是否有值
				{
					echo "<center>The keyword <div align='center' class='style2'>$keyword_value</div> is not matched in the protein name field!!</center>";
				}
				else//有值就把結果秀出來	
				{
					echo "<form action='search_result.php?search_type=db_id' target='_blank' method='post'>";
					echo "<br>";
					echo "<table width=700 align=center border=1 cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>";
					echo "<tr bgcolor='#CCFFFF'>";
					echo "<td width='20' class='style8'>&nbsp;</td>";
					echo "<td width='120' align='center'class='style8'>Swiss-Prot ID</td>";
					echo "<td width='402' align='center' class='style8'>Gene Ontology ID</td>";
					echo "<td width='215' align='center' class='style8'>Information</td>";
					echo "</tr>";
					$count = 1;
					while($data = mysql_fetch_array($result,MYSQL_ASSOC)) 
					{
						echo "<tr>";
						echo "<td class='style3'>".$count."</td>";
						echo "<td align='center'class='style3'>".$data['ID']."</td>";
						echo "<td class='style3'>".$data['GO']."</td>";
						echo "<td align='center' class='style3'><a href='search_result.php?search_type=db_id&swiss_id=".$data['ID']."' class='style5'>show</a></td>";
						echo "</tr>";
						$count++;
					}
					echo "</table>";
					echo "</form>";
				}

				mysql_free_result($result);
			}
			//InterPro ID search
			elseif($search_type == "db_id" && $db_type == "interpro" && $db_value != "")
			{
				$sql = "select * from SwissProt_201106 where InterPro like '%".$db_value."%' AND ID like '%_HUMAN%'";
				$result = mysql_query($sql) or die("Query failed : " . mysql_error());
				$num_rows = mysql_num_rows($result);
				if($num_rows == 0)//判斷是否有值
				{
					echo "<center>The keyword <div align='center' class='style2'>$keyword_value</div> is not matched in the protein name field!!</center>";
				}
				else//有值就把結果秀出來	
				{
					echo "<form action='search_result.php?search_type=db_id' target='_blank' method='post'>";
					echo "<br>";
					echo "<table width=700 align=center border=1 cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>";
					echo "<tr bgcolor='#CCFFFF'>";
					echo "<td width='20' class='style8'>&nbsp;</td>";
					echo "<td width='120' align='center'class='style8'>Swiss-Prot ID</td>";
					echo "<td width='402' align='center' class='style8'>InterPro</td>";
					echo "<td width='215' align='center' class='style8'>Information</td>";
					echo "</tr>";
					$count = 1;
					while($data = mysql_fetch_array($result,MYSQL_ASSOC)) 
					{
						echo "<tr>";
						echo "<td class='style3'>".$count."</td>";
						echo "<td align='center'class='style3'>".$data['ID']."</td>";
						echo "<td class='style3'>".$data['InterPro']."</td>";
						echo "<td align='center' class='style3'><a href='search_result.php?search_type=db_id&swiss_id=".$data['ID']."' class='style5'>show</a></td>";
						echo "</tr>";
						$count++;
					}
					echo "</table>";
					echo "</form>";
				}

				mysql_free_result($result);
			}
			//sequence search
			elseif($search_type == "seq" && $sequence != "")
			{
				$today = date("Ymd");      // 20040310
				$time = date("H:i:s");     // 17:16:17
				$fi=fopen("temp/".$today."_".$time.".in","w");
				fputs($fi,$sequence);
				fclose($fi);
				//chdir("Swiss_sequence");
				system("/home/francis/dbSNO/public_html/blast-2.2.12/bin/blastall -p blastp -d Swiss_sequence -i temp/".$today."_".$time.".in -o temp/".$today."_".$time.".out -e 0.00001 -m 9");
				chdir("..");
?>
				
				<table width="700" border=1 align=center cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>
					<tr bgcolor="#CCFFFF" background="image/bdy06.gif"> 
						<td colspan="7" height="18"> <font color="#005b90" face="Arial, Helvetica, sans-serif" size="3"><b>Sequence Search Result</b></font></td>
					</tr>
					<tr bgcolor=#c1d0df> 
						<td> 
						  <div align="center">
							<p><font color="#666666" size="2"><b>SwissProt ID</b></font></p>
						  </div>
						</td>
						<td> 
						  <div align="center"> <font color="#666666"><b><font size="2">% Identity</font></b><br></font></div>
						</td>
						<td> 
						  <div align="center">
							<font color="#666666"><b><font size="2">Alignment<br>Length</font></b></font>
						  </div>
						</td>
						<td> 
						  <div align="center"><font color="#666666"><b><font size="2">Query Range</font></b></font></div>
						</td>
						<td> 
						  <div align="center"><font color="#666666"><b><font size="2">Subject<br>Range</font></b></font></div>
						</td>
						<td><div align="center"><font color="#666666"><b><font size="2">E-value</font></b></font></div></td>
						<td><div align="center"><font color="#666666"><b><font size="2">bit score</font></b></font></div></td>
					</tr>

<?
				//get the output 
				$fi=fopen("temp/".$today."_".$time.".out","r");
				while(!feof($fi))
				{	
					$temp = fgets($fi,10000);
					if(strpos($temp,"#") === false && $temp != '')
					{
						$data = explode("\t",$temp);
						echo "<tr bgcolor=#eeeeee>";
						echo "<td><div align='center'><font color='#666666' size='2'><a href='search_result.php?search_type=seq&swiss_id=".$data[1]."'>$data[1]</font></div></td>";
						echo "<td><div align='center'><font color='#666666' size='2'>$data[2]</font></div></td>";
						echo "<td><div align='center'><font color='#666666' size='2'>$data[3]</font></div></td>";
						echo "<td><div align='center'><font color='#666666' size='2'>$data[6]~$data[7]</font></div></td>";
						echo "<td><div align='center'><font color='#666666' size='2'>$data[8]~$data[9]</font></div></td>";
						echo "<td><div align='center'><font color='#666666' size='2'>$data[10]</font></div></td>";
						echo "<td><div align='center'><font color='#666666' size='2'>$data[11]</font></div></td>";
						echo "</tr>";
					}
				}
				fclose($fi);

				echo "</table>";
			}
			elseif($search_type == "quick" && $QuickType == "Keyword")
			{
				$sql = "select * from SwissProt_201106 where protein_name like '%".$QuickValue."%' AND ID like '%_HUMAN%' or gene_name like '%".$QuickValue."%' AND ID like '%_HUMAN%'";
				$result = mysql_query($sql) or die("Query failed : " . mysql_error());
				$num_rows = mysql_num_rows($result);
				if($num_rows == 0)//判斷是否有值
				{
					echo "<center>The keyword <div align='center' class='style2'>$keyword_value</div> is not matched in the protein name field!!</center>";
				}
				else//有值就把結果秀出來	
				{
					
					echo "<br>";
					echo "<table width=900 align=center border=1 cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>";
					echo "<tr bgcolor='#CCFFFF'>";
					echo "<td width='20' class='style8'>&nbsp;</td>";
					echo "<td width='120' align='center'class='style8'>Swiss-Prot ID</td>";
					echo "<td width='120' align='center'class='style8'>Gene Name</td>";
					echo "<td width='400' align='center' class='style8'>Protein Name</td>";
					echo "<td width='240' align='center' class='style8'>Information</td>";
					echo "</tr>";
					$count = 1;
					while($data = mysql_fetch_array($result,MYSQL_ASSOC)) 
					{
						$GeneName = substr($data['gene_name'],5,strpos($data['gene_name'],";")-5);
						$ProteinName = substr($data['protein_name'],14,strpos($data['protein_name'],";")-14);
						
						echo "<tr>";
						echo "<td class='style3'>".$count."</td>";
						echo "<td align='center'class='style3'>".$data['ID']."</td>";
						echo "<td align='center' class='style3'>".str_ireplace($QuickValue,"<font color=red>".$QuickValue."</font>",$GeneName)."</td>";
						echo "<td class='style3'>".str_ireplace($QuickValue,"<font color=red>".$QuickValue."</font>",$ProteinName)."</td>";
						echo "<td align='center' class='style3'><a href='search_result.php?search_type=db_id&swiss_id=".$data['ID']."' class='style5'>show</a></td>";
						echo "</tr>";
						$count++;
					}
					echo "</table>";
					
				}

				mysql_free_result($result);
			}
			elseif($search_type == "quick" && $QuickType == "ID")
			{
				$sql = "select * from SwissProt_201106 where ID like '%".$QuickValue."%' AND ID like '%_HUMAN%'";
				$result = mysql_query($sql) or die("Query failed : " . mysql_error());
				$num_rows = mysql_num_rows($result);
				if($num_rows == 0)//判斷是否有值
				{
					echo "<center>The keyword <div align='center' class='style2'>$keyword_value</div> is not matched in the protein name field!!</center>";
				}
				else//有值就把結果秀出來	
				{
					echo "<form action='search_result.php?search_type=db_id' target='_blank' method='post'>";
					echo "<br>";
					echo "<table width=900 align=center border=1 cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>";
					echo "<tr bgcolor='#CCFFFF'>";
					echo "<td width='20' class='style8'>&nbsp;</td>";
					echo "<td width='120' align='center'class='style8'>Swiss-Prot ID</td>";
					echo "<td width='120' align='center'class='style8'>Gene Name</td>";
					echo "<td width='400' align='center' class='style8'>Protein Name</td>";
					echo "<td width='240' align='center' class='style8'>Information</td>";
					echo "</tr>";
					$count = 1;
					while($data = mysql_fetch_array($result,MYSQL_ASSOC)) 
					{
						echo "<tr>";
						echo "<td class='style3'>".$count."</td>";
						echo "<td align='center' class='style3'>".str_ireplace($QuickValue,"<font color=red>".$QuickValue."</font>",$data['ID'])."</td>";
						echo "<td align='center' class='style3'>".substr($data['gene_name'],5,strpos($data['gene_name'],";")-5)."</td>";
						echo "<td class='style3'>".substr($data['protein_name'],14,strpos($data['protein_name'],";")-14)."</td>";
						echo "<td align='center' class='style3'><a href='search_result.php?search_type=db_id&swiss_id=".$data['ID']."' class='style5'>show</a></td>";
						echo "</tr>";
						$count++;
					}
					echo "</table>";
					echo "</form>";
				}

				mysql_free_result($result);
			}
			else
			{
				echo "<div align='center' class='style2'>Please keyin the query value</div>";
			}
			
			
			mysql_close($link);

			echo "</p>";
}
?>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>

</div>

<?php
include("footer.html");
?>

</div>
</body>
</html>
