<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/andreas01.css" media="screen" title="andreas01 (screen)" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<link rel="icon" href="images/UbiNet.ico" type="image/x-icon">
<title>UbiNet</title>
</head>

<SCRIPT src="show_tips.js" type=text/javascript></SCRIPT>
<style type="text/css">
<!--
.style1 {
	font-size: 15px;
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 14px; color: #003399;}
.style3 {font-family: Courier, mono; font-size: 14px; color: #003399;}
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #888888;
}
.style11 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #888888;
}
.style12 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #ffffff;
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
?>
</div>

<div id="content">

<?
//get the parameters
$SwissID = $_GET['swiss_id'];
$EnsGeneID = "";
$EnsProtID = "";
$Seq = "";
$ASA = "";
$Second = "";
$Disorder = "";

//connect to mysql database
$link = mysql_connect("localhost", "DB", "bidlab203") or die("Could not connect : " . mysql_error());
mysql_select_db("dbSNO") or die("Could not select database");
$sql = "";

//--------------------show the substrate---------------------//
$sql = "select ID,AC,protein_name,gene_name,OS,function,localization,PDB from SwissProt_201106 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result,MYSQL_ASSOC))
{
	echo "<table width='98%'  border='0' align=center>";
	echo "<tr>";
    echo "<td align=left><br><span class='style1'><b>Protein Name</b>: <b><font color=blue>".substr($data['protein_name'],14,strpos($data['protein_name'],";")-14)."</font></b></span><br><br></td>";
	echo "</tr>";
	echo "<tr>";
    echo "<td>";
	
		echo "<table width=100%><tr>";
		echo "<td width='60%' valign='top' class='style2'>";
		echo "<b>UniprotKB/SwissProt ID</b>: <a href='http://www.uniprot.org/uniprot/".$SwissID."' target='_blank'>".$SwissID."</a> (".substr($data[AC],0,strpos($data['AC'],";")).")<br><br>";
		echo "<b>Gene Name</b>: ".substr($data['gene_name'],5,strpos($data['gene_name'],";")-5)."<br><br>";
		if(strpos($data['gene_name'],"Synonyms") !== false)
		{
			$temp_pos1 = strpos($data['gene_name'],"Synonyms");
			$temp_pos2 = strpos($data['gene_name'],";",$temp_pos1+1);
			echo "<b>Synonyms</b>: ".substr($data['gene_name'],$temp_pos1+9,$temp_pos2-$temp_pos1-9)."<br><br>";
		}

		echo "<b>Organism</b>: ".$data['OS']."<br><br>";
		echo "<b>Function</b>: ".$data['function']."<br><br>";
		echo "<b>Other Modifications</b>: View all modification sites in <a href='http://dbptm.mbc.nctu.edu.tw/search_result.php?swiss_id=".$SwissID."' target='_blank'>dbPTM</a><br><br>";
		echo "<b>Protein Subcellular Localization</b>: ".$data['localization']."<br>";
		echo "</td>";

		//show PDB
		echo "<td align='left' valign='top' class='style2'>";	
		if($data['PDB'] != '')	//If there are PDB entry
		{
			$temp = explode("PDB;",$data['PDB']);
			for($i=1;$i<count($temp);$i++)
			{
				$PDB[$i] = trim(substr($temp[$i],0,strpos($temp[$i],";")));
			}

			echo "<div id='PDB'>";
			echo "<b>PDB</b>:<a href='http://www.pdb.org/pdb/explore/explore.do?structureId=".$PDB[1]."'>".$PDB[1]."</a><br>";
			echo "<applet name='jmol' code='JmolApplet' archive='JmolApplet.jar' codebase='./jmol-11.2.4/' width='400' height='400' mayscript='true'>";
			echo "<param name='progressbar' value='true'/>";
			echo "<param name='load' value='http://RegPhos.mbc.nctu.edu.tw/PDB/all/pdb".strtolower($PDB[1]).".ent'/>";
			echo "<param name='script' value='wireframe 0;spacefill off;cartoon on;select helix;color [77,166,255];select sheet;color yellow;'>";
			echo "</applet>";
			echo "</div>";
		}
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	
	echo "</td>";
	echo "</tr>";
	echo "<tr><td valign='top' class='style2'><b>Graphical Visualization of S-Nitrosylation Sites</b>:<br><img src='show_image.php?SwissID=".$SwissID."'></td></tr>";
	echo "</table><hr>";
}
mysql_free_result($result);


//--------------------get the protein sequence--------------------//
$sql = "select sequence from Swiss_sequence_201106 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result,MYSQL_NUM))
	$Seq = $data[0];
mysql_free_result($result);

//--------------------get the secondary structure--------------------//
$sql = "select secondary from Swiss_secondary_v55 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result,MYSQL_NUM))
	$Second = $data[0];
mysql_free_result($result);

//--------------------get the ASA values--------------------//
$sql = "select ASA from Swiss_ASA_v55 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result,MYSQL_NUM))
	$ASA = $data[0];
mysql_free_result($result);
$ASA_value = explode(":",$ASA);

//--------------------get the disorder--------------------//
$sql = "select disorder from Swiss_disorder_v55 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result,MYSQL_NUM))
	$Disorder = $data[0];
mysql_free_result($result);


//--------------------show the substrate sites---------------------//
$sql = "select ID,Organism,position,PMID,sequence from Mix_SNO where ID like '%".$SwissID."%' order by position";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
$num_rows = mysql_num_rows($result);
if($num_rows > 0)
{
	echo "<table width='98%'  border='0' align=center>";
	echo "<tr>";
	echo "<td align=left><span class='style1'>The S-nitrosylation sites of <b>".$SwissID."</b></span><br><br></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";

	echo "<table width= 900 border=1 cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>";
	echo "<tr align=center bgcolor=#c1d0df><td class='style2'>No.</td><td class='style2'><b>Position</b></td><td class='style2'><b>S-nitrosylated Peptide</b></td><td class='style2'><b>Secondary Structure of S-nitrosylated Peptide</b></td><td class='style2'><b>Solvent Accessibility of S-nitrosylated Site</b></td><td class='style2'><b>PubMed ID</b></td></tr>";
	$count = 1;
	while($data = mysql_fetch_array($result,MYSQL_ASSOC))
	{
		$temp_seq = "";
		$temp_ASA = "";
		$temp_second = "";
		
		//get the peptide
		for($i=$data['position']-11;$i<$data['position']+10;$i++)
		{
			if($i<0)
				$temp_seq .= "-";
			elseif($i == $data['position']-1)
				$temp_seq .= " <b>".$data['sequence'][$i]."</b> ";
			else
				$temp_seq .= $data['sequence'][$i];
		}
		
		//get the secondary
		for($i=$data['position']-11;$i<$data['position']+10;$i++)
		{
			if($i<0)
				$temp_second .= "-";
			elseif($i == $data['position']-1)
				$temp_second .= " <b>".$Second[$i]."</b> ";
			else
				$temp_second .= $Second[$i];
		}

		$temp_ASA = $ASA_value[$data['position']-1];
		/*
		if(strpos($data[4],"Phospho") !== false)
			$temp_source = "<a href='http://phospho.elm.eu.org/cgimodel.py?substrate=&accession=".$SwissID."' target='_blank'>".$data[4]."</a>";
		elseif(strpos($data[4],"Swiss-Prot") !== false)
			$temp_source = "<a href='http://us.expasy.org/uniprot/".$SwissID."' target='_blank'>".str_replace("(Experiment)","",$data[4])."</a>";
		elseif(strpos($data[4],"HPRD") !== false)
			$temp_source = "<a href='http://www.hprd.org/query?".$SwissID."' target='_blank'>".$data[4]."</a>";
		*/
		
		echo "<tr><td class='style2'>".$count."</td>";
		echo "<td class='style2' align='center'>".$data['position']."</td>";
		echo "<td width= 200 class='style3' align='center'>".$temp_seq."&nbsp;</td>";
		echo "<td width= 200 class='style3' align='center'>".$temp_second."&nbsp;</td>";
		echo "<td class='style2' align='right'>".$temp_ASA."%</td>";
		echo "<td class='style2' align='left'>";
		
		if(strpos($data['PMID'],";") !== false)
		{
			$temp_pmid = explode(";",$data['PMID']);
			for($i=0;$i<count($temp_pmid);$i++)
			{
				echo "<a href='http://www.ncbi.nlm.nih.gov/pubmed/".$temp_pmid[$i]."'>".$temp_pmid[$i]."</a>&nbsp;";
			}
		}
		else
		{
			echo "<a href='http://www.ncbi.nlm.nih.gov/pubmed/".$data['PMID']."'>".$data['PMID']."</a>&nbsp;";
		}
		
		echo "</td></tr>";
		$count++; 
	}
	echo "</table>";

	echo "</td>";
	echo "</tr>";
	echo "</table><br><br>";
	mysql_free_result($result);
}


?>


</div>

<?php
include("footer.html");
?>

</div>
</body>
</html>
