<feff><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/andreas01.css" media="screen" title="andreas01 (screen)" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<link rel="icon" href="images/UbiNet.ico" type="image/x-icon">
<title>UbiNet</title>
</head>

<SCRIPT src="show_tips.js" type=text/javascript></SCRIPT>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>

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



<div id="content2">

<?
//get the parameters
$SwissID = $_GET['swiss_id'];
$EnsGeneID = "";
$EnsProtID = "";
$Seq = "";
$ASA = "";
$Second = "";
$Disorder = "";

if(strpos($SwissID,"_HUMAN") !== false)
{
//connect to mysql database
$link = mysql_connect("140.138.144.145", "ubinet", "ubinet1706c") or die("Could not connect : " . mysql_error());
mysql_select_db("RegUbi") or die("Could not select database");
$sql = "";

//--------------------show the substrate---------------------//
$sql = "select ID,AC,protein_name,gene_name,OS,function,localization,PDB from SwissProt_1030319 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());

	$sqlPDB = "select PDB_ID from Swiss_PDB where ID='".$SwissID."'";         
	$resultPDB = mysql_query($sqlPDB) or die("Query failed : " . mysql_error());
	
	if($data = mysql_fetch_array($resultPDB)) 
	{
		$PDB123 = $data[0];
	}

if($data = mysql_fetch_array($result,MYSQL_ASSOC))
{
	echo "<table width='98%'  border='0' align=center>";
	echo "<tr>";
    echo "<td align=left><br><span class='style1'><b>Protein Name</b>: <b><font color=blue>".substr($data['protein_name'],14,strpos($data['protein_name'],";")-14)."</font></b></span><br><br></td>";
	echo "</tr>";
	echo "<tr>";
    echo "<td>";
	
		echo "<table width='98%' cellpadding='10'><tr>";
		echo "<td width='60%' align='justify' valign='top' class='style2'>";
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
		echo "<td align='justify' valign='top' class='style2'>";	
		/*if($data['PDB'] != '')	//If there are PDB entry
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
		}*/
		//取得protein PDB ID
		$PDB_ID = "";
		$PDB_start = 0;
		$PDB_end = 0;
		$PDB_SS = "";
		$PDB_ASA = "";
		$PDB_sql = "SELECT * FROM `Swiss_PDB` WHERE `ID` LIKE '%".$SwissID."%'  ORDER BY `ID`";
		$PDB_result = mysql_query($PDB_sql);
		$count = mysql_num_rows($result);
		$num_PDB = mysql_num_rows($PDB_result);
		
		for($i=1; $i<=$num_PDB; $i++)
		{
        	if($i==1)
        	{
           		$row1 = mysql_fetch_array($PDB_result);
        	}
        	else
        	{
           		$row2 = $row1;
           		$row1 = mysql_fetch_array($PDB_result);
        	}
        	if ($row1['PDB_ID']!=$row2['PDB_ID'])
        	{
           		if($row1['PDB_ID'] != NULL)
           		{
                   	$PDB_ID = $PDB_ID.$row1['PDB_ID'].";";
           		}
        	}
		}
		$PDB_ID = explode(";", $PDB_ID);
		$filecheck = 0;
		
		if($row1['PDB_ID'] != "")
		{	
			echo "<applet name='jmol' code='JmolApplet' archive='JmolApplet.jar' codebase='./jsmol/java/' width='400' height='400' mayscript='true'>";
			echo "<param name='progressbar' value='true'/>";
			if($_GET['PDB'] == NULL) 
			{
				while(!is_file("PDB/all/pdb".strtolower($PDB_ID[$filecheck]).".ent"))
				{
					$filecheck++;
					if($filecheck > 10)
					{
						$filecheck = 0;
						break;
					}
				}
				echo "<param name='load' value='./PDB/all/pdb".strtolower($PDB_ID[$filecheck]).".ent'/>";
			}
			else 
				echo "<param name='load' value='./PDB/all/pdb".strtolower($_GET['PDB']).".ent'/>";
			echo "<param name='script' value='wireframe 0;spacefill off;cartoon on;select helix;color [77,166,255];select sheet;color yellow;'>";
			echo "</applet>";
			echo "<br><b>PDB</b> : <select name=\"jumpMenu\" id=\"jumpMenu\" onchange=\"MM_jumpMenu('parent',this,0)\">";
            
			if($_GET['PDB'] != NULL)
			{
				for($i=1; $i<=$num_PDB; $i++)
				{
					if($_GET['PDB'] == $PDB_ID[$i-1])
						echo "<option selected=\"selected\" value=\"search_result.php?swiss_id=".$SwissID."&PDB=".$PDB_ID[$i-1]."\">".$PDB_ID[$i-1]."</option>";
					else
						echo "<option value=\"search_result.php?swiss_id=".$SwissID."&PDB=".$PDB_ID[$i-1]."\">".$PDB_ID[$i-1]."</option>";
				}
			}
			else
			{
				for($i=1; $i<=$num_PDB; $i++)
				{
					if($i - 1 == $filecheck)
						echo "<option selected=\"selected\" value=\"search_result.php?swiss_id=".$SwissID."&PDB=".$PDB_ID[$i-1]."\">".$PDB_ID[$i-1]."</option>";
					else
						echo "<option value=\"search_result.php?swiss_id=".$SwissID."&PDB=".$PDB_ID[$i-1]."\">".$PDB_ID[$i-1]."</option>";
				}
			}
			echo "</select>";
			echo "<br>";
			echo "( If your security settings prevent Jmol from running, please register http://140.138.144.145/ as a safe location in your Java settings. )";

		}
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	
	echo "<br></td>";
	echo "</tr>";
	////////////////////////////////disease///////////////////////////
	$sql_dis="select * from disease_map where ID like '".$SwissID."'";
	$result_dis = mysql_query($sql_dis) or die("Query failed : " . mysql_error());
	$num_match_dis = mysql_num_rows($result_dis);	
	if($num_match_dis > 0)
	{
		while($data_dis = mysql_fetch_array($result_dis))
		{
			$disName=explode(";",$data_dis[1]);
			$disNB=count($disName);
			for($d=0;$d<$disNB;$d++)
			{
				if((strpos($disName[$d], "hsa:"))!==false)
				{
					$disName[$d]=str_replace(";","",$disName[$d]);
					///////////KEGG/////////////
					$sql_dis_kegg="select Entry_ID,disease from disease_kegg where KeggID like '".$disName[$d]."'";
					$result_dis_kegg = mysql_query($sql_dis_kegg) or die("Query failed KEGG : " . mysql_error());
					$num_match_dis_kegg = mysql_num_rows($result_dis_kegg);	
					$k=0;
					if($num_match_dis_kegg > 0)
					{
						while($data_dis_kegg = mysql_fetch_array($result_dis_kegg))
						{
							$Entry_IDK[$k]=$data_dis_kegg[0];
							$diseaseK[$k]=$data_dis_kegg[1];
							$k++;
						}
					}
					mysql_free_result($result_dis_kegg);
					/////////OMIM//////////
					$sql_dis_omim="select Entry_ID,disease from disease_omim where KeggID like '".$disName[$d]."'";
					$result_dis_omim = mysql_query($sql_dis_omim) or die("Query failed OMIM : " . mysql_error());
					$num_match_dis_omim = mysql_num_rows($result_dis_omim);	
					$o=0;
					if($num_match_dis_omim > 0)
					{
						while($data_dis_omim = mysql_fetch_array($result_dis_omim))
						{
							$Entry_IDO[$o]=$data_dis_omim[0];
							$diseaseO[$o]=$data_dis_omim[1];
							$o++;
						}
					}
					mysql_free_result($result_dis_omim);
				}
			}
		}
	}
	mysql_free_result($result_dis);
	/////////HPRD//////////
	$sql_dis_hprd="select HPRD_ID,disease from disease_human_HPRD where ID like '".$SwissID."'";
	$result_dis_hprd = mysql_query($sql_dis_hprd) or die("Query failed HPRD : " . mysql_error());
	$num_match_dis_hprd = mysql_num_rows($result_dis_hprd);	
	$h=0;
	if($num_match_dis_hprd > 0)
	{
		while($data_dis_hprd = mysql_fetch_array($result_dis_hprd))
		{
			$HPRD_IDH[$h]=$data_dis_hprd[0];
			$diseaseH[$h]=$data_dis_hprd[1];
			$h++;
		}
	}
	mysql_free_result($result_dis_hprd);

	if($o!=0|$k!=0|$h!=0)
	{
		echo "<tr><td valign='top' class='style2'><b>Protein disease</b>:<br></td></tr>";
		echo "<tr><td valign='top' class='style2'>";
		echo "<table width='98%' border=0 cellspacing=3 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292 style='table-layout:fixed'>";
		echo "<tr align=center bgcolor=#003399><td width='20%' class='style24'><b>Disease database</b></td>
		<td width='20%' class='style24'><b>Database Entry</b></td>
		<td width='60%' class='style24'><b>Disease information</b></td></tr>";
        if($k!=0)
		{
			for($dis=0;$dis<$k;$dis++)
			{
				echo "<tr><td width='20%' class='style2' bgcolor='#F1F1F1' align='center'>KEGG</td>";
				echo "<td width='20%' class='style2' bgcolor='#FFFFFF' align='center'><a target='_blank' href='http://www.genome.jp/dbget-bin/www_bget?ds:".$Entry_IDK[$dis]."'>".$Entry_IDK[$dis]."</a></td>";
    	        echo "<td width='60%' class='style2' bgcolor='#FFFFFF' align='left'>".$diseaseK[$dis]."</td></tr>";
			}
		}
        if($o!=0)
		{
			for($dis=0;$dis<$o;$dis++)
			{
				echo "<tr><td width='20%' class='style2' bgcolor='#F1F1F1' align='center'>OMIM</td>";
				echo "<td width='20%' class='style2' bgcolor='#FFFFFF' align='center'><a target='_blank' href='http://omim.org/entry/".$Entry_IDO[$dis]."'>".$Entry_IDO[$dis]."</a></td>";
    	        echo "<td width='60%' class='style2' bgcolor='#FFFFFF' align='left'>".$diseaseO[$dis]."</td></tr>";
			}
		}
		if($h!=0)
		{
			for($dis=0;$dis<$h;$dis++)
			{
				echo "<tr><td width='20%' class='style2' bgcolor='#F1F1F1' align='center'>HPRD</td>";
				echo "<td width='20%' class='style2' bgcolor='#FFFFFF' align='center'><a target='_blank' href='http://www.hprd.org/diseases?hprd_id=".$HPRD_IDH[$dis]."&isoform_id=".$HPRD_IDH[$dis]."_1&isoform_name='>".$HPRD_IDH[$dis]."</a></td>";
    	        echo "<td width='60%' class='style2' bgcolor='#FFFFFF' align='left'>".$diseaseH[$dis]."</td></tr>";
			}
		}
		echo "</table>";		
	}
	///////////////////////////////Pathway////////////////////////////
	$species1=strtok($SwissID,"_");
	$species=strtok("_");
	if($species=="HUMAN"||$species=="MOUSE"||$species=="RAT")
	{
		if($species=="HUMAN")
			$sp = "human";
		elseif($species=="MOUSE")
			$sp = "mouse";
		else
			$sp="rat";

		$gn[0]=substr($data['gene_name'],5,strpos($data['gene_name'],";")-5);
		$sql_pw="select distinct map_ID , map_name from RegPhos_kegg_".$sp." where Gene_name = '".$gn[0]."'";
		$result_pw = mysql_query($sql_pw) or die("Query failed : " . mysql_error());
		$num_match_pathway = mysql_num_rows($result_pw);
        if($num_match_pathway > 0)
        {
			echo "<tr><td valign='top' class='style2'><b>Network with metabolic pathway</b>:<br></td></tr>";
			echo "<tr><td valign='top' class='style2'>";
			echo "<table width='98%' border=0 cellspacing=3 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292 style='table-layout:fixed'>";
			echo "<tr align=center bgcolor=#003399><td width='20%' class='style24'><b>Kegg map ID</b></td>
			<td width='80%' class='style24'><b>Pathway</b></td>
			<!--<td width='20%' class='style24'><b>Link</b></td></tr>-->";

			while($data_pw = mysql_fetch_array($result_pw))
            {

				echo "<tr><td width='20%' class='style2' bgcolor='#F1F1F1' align='center'><a href='http://www.genome.jp/kegg-bin/show_pathway?scale=1.0&query={$gn[0]}&map={$data_pw[0]}' target='_blank'>".$data_pw[0]."</td>";
				echo "<td width='60%' class='style2' bgcolor='#FFFFFF' align='center'>".$data_pw[1]."</td>";
                echo "<!--<td width='80%' align='center'><input type='button' value='Link' align='middle' onclick='location.href='http://www.genome.jp/kegg-bin/show_pathway?scale=1.0&query={$gn[0]}&map={$data_pw[0]}'' /></td></tr>-->";
			}
			mysql_free_result($result_pw);
        	echo "</table>";
		}
	}

	echo "<tr><td valign='top' class='style2'><b>Graphical Visualization of Ubiquitination Sites</b>:<br></td></tr>";
//	<img src='show_image.php?SwissID=".$SwissID."'>
	echo "<tr><td valign='top' class='style2'>";
	echo "<table width='98%' border=0 cellspacing=3 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292 style='table-layout:fixed'>";
	echo "<tr align=center bgcolor=#003399><td class='style24'><b>Overview of Protein Ubiquitination Sites with Functional and Structural Information</b></td></tr>";
	echo "<tr align=center bgcolor=#FFFFFF><td class='style2'><img src='show_image.php?SwissID=".$SwissID."&Domain=0'></td></tr></table>";

	echo "<table width='98%' border=0 cellspacing=3 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292 style='table-layout:fixed'>";
	$sql_domain_count = "select count(distinct InterPro_ID) from InterPro where Swiss_ID='".$SwissID."'";
	$result_domain_count = mysql_query($sql_domain_count) or die("Query failed : " . mysql_error());
	$data_domain_count = mysql_fetch_array($result_domain_count,MYSQL_ASSOC);
	$countDomain = $data_domain_count["count(distinct InterPro_ID)"];
	mysql_free_result($result_domain_count);
	if($countDomain != "0")
	{
		echo "<tr align=center bgcolor=#003399>
			  <td width='15%' class='style24'><b>InterPro ID</b></td>
			  <td width='85%' class='style24'><b>Domain</b></td></tr>";

		$sql_domain = "select distinct InterPro_ID from InterPro where Swiss_ID='".$SwissID."'";
		$result_domain = mysql_query($sql_domain) or die("Query failed : " . mysql_error());
		for($i=1;$i<$countDomain+1;$i++)
		{
			$data_domain = mysql_fetch_array($result_domain,MYSQL_ASSOC);
			$InterPro = $data_domain['InterPro_ID'];
			echo "<tr><td width='15%' class='style2' bgcolor='#F1F1F1' align='center'><a href='http://www.ebi.ac.uk/interpro/entry/".$InterPro."'>".$InterPro."</a></td>";
			echo "<td width='85%' class='style2' bgcolor='#FFFFFF' align='center'><img src='show_image.php?SwissID=".$SwissID."&Domain=".$InterPro."&count=".$i."'></td></tr>";
		}
	}
	mysql_free_result($result_domain);
	echo "</table><hr></td></tr></table>";
}
mysql_free_result($result);


//--------------------get the protein sequence--------------------//
$sql = "select sequence from Swiss_sequence_1030319 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result,MYSQL_NUM))
	$Seq = $data[0];
mysql_free_result($result);

//--------------------get the secondary structure--------------------//
$sql = "select secondary from Swiss_secondary_dbPTM3 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result,MYSQL_NUM))
	$Second = $data[0];
mysql_free_result($result);

//--------------------get the ASA values--------------------//
$sql = "select ASA from Swiss_ASA_dbPTM3 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result,MYSQL_NUM))
	$ASA = $data[0];
mysql_free_result($result);
$ASA_value = explode(":",$ASA);

//--------------------get the disorder--------------------//
$sql = "select disorder from Swiss_disorder_dbPTM3 where ID='".$SwissID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
if($data = mysql_fetch_array($result,MYSQL_NUM))
	$Disorder = $data[0];
mysql_free_result($result);

/*
///3D DB

if($PDB123 != '')	
		{
			echo "<table width=100%><tr>";
			echo "<tr><td valign='top' class='style2'><b>3D Structure Databases</b>:<br><img src='show_image_PDB.php?SwissID=".$SwissID."'></td></tr>";
		
			echo "</table>";
		
			echo "<table width=60%><tr>";
			echo "<td width='15%' valign='top' class='style4' >";
			echo "<tr><td bgcolor=EBFFEB align='center' colspan='6'><b>3D structure databases</b></td></tr>";
			echo "<tr><td bgcolor=FFF8D7 align='center'><b>Entry</b></td><td bgcolor=FFF8D7 align='center'><b>Method</b></td><td bgcolor=FFF8D7 align='center'><b>Resolution (A)</b></td><td bgcolor=FFF8D7 align='center'><b>Chain</b></td><td bgcolor=FFF8D7 align='center'><b>Positions</b></td>"."<td bgcolor=FFF8D7 align='center'><b>View</b></a></td></tr>";
			
			$countPDB = 0;for($PDB1=0;$PDB1<strlen($PDB123);$PDB1++){if(substr($PDB123,$PDB1,4)=="pdb;")$countPDB++;}		
			
			for($PDBnumber=1;$PDBnumber<$countPDB+1;$PDBnumber++)
			{
			  $C_PDB = explode("pdb;",$PDB123);
			  $C_PDB1 = $C_PDB[$PDBnumber];
			  
			 
			  
			  $C_PDBc = explode(";",$C_PDB1);		  
			  $C_PDBc0 = trim($C_PDBc[0]);
			  $C_PDBc3 = explode("=",$C_PDBc[3]);
			  
			   $countPDBA = 0;for($PDB1A=0;$PDB1A<strlen($C_PDB1);$PDB1A++){if(substr($C_PDB1,$PDB1A,1)==",")$countPDBA++;}
			  if($countPDBA != 0)
			  {
					$C_PDBp = explode(",",$C_PDBc3[1]); 
					$C_PDBp0 = $C_PDBp[0];
			  }else{
					$C_PDBp = explode(".",$C_PDBc3[1]); 
					$C_PDBp0 = $C_PDBp[0];
			  }
			  
			  if($PDBnumber%2==1){
				//echo "<tr><td bgcolor=#DDDDFF align='center'><a href='http://www.pdb.org/pdb/explore/explore.do?structureId=".$C_PDBc0."' target='newwin''>".$C_PDBc0."</a></td><td bgcolor=#DDDDFF align='center'>".$C_PDBc[1]."</td><td bgcolor=#DDDDFF align='center'>".$C_PDBc[2]."</td><td bgcolor=#DDDDFF align='center'>".$C_PDBc3[0]."</td><td bgcolor=#DDDDFF align='center'>".$C_PDBp0."</td><td bgcolor=#DDDDFF align='center'><a href='http://www.pdb.org/pdb/explore/explore.do?structureId=".$C_PDBc0."' target='newwin''>Link</a></td></tr>";
				
				echo "<tr><td bgcolor=#DDDDFF align='center'><a href='http://www.pdb.org/pdb/explore/explore.do?structureId=".$C_PDBc0."' target='newwin''>".$C_PDBc0."</a></td><td bgcolor=#DDDDFF align='center'>".$C_PDBc[1]."</td><td bgcolor=#DDDDFF align='center'>".$C_PDBc[2]."</td><td bgcolor=#DDDDFF align='center'>".$C_PDBc3[0]."</td><td bgcolor=#DDDDFF align='center'>".$C_PDBp0."</td><td bgcolor=#DDDDFF align='center'><a href='http://140.138.144.145/~s1018302/dbSNO_web/Nsearch_resultPDB.php?PDB_ID=".$C_PDBc0."' target='newwin''>Link</a></td></tr>";//<a href='search_result_SAlign.php?File=1BUW_1DXT.sup_all_atm' target='newwin' >View</a>
  
			  }else{
				echo "<tr><td bgcolor=#CDCD9A align='center'><a href='http://www.pdb.org/pdb/explore/explore.do?structureId=".$C_PDBc0."' target='newwin''>".$C_PDBc0."</a></td><td bgcolor=#CDCD9A align='center'>".$C_PDBc[1]."</td><td bgcolor=#CDCD9A align='center'>".$C_PDBc[2]."</td><td bgcolor=#CDCD9A align='center'>".$C_PDBc3[0]."</td><td bgcolor=#CDCD9A align='center'>".$C_PDBp0."</td><td bgcolor=#CDCD9A align='center'><a href='http://140.138.144.145/~s1018302/dbSNO_web/Nsearch_resultPDB.php?PDB_ID=".$C_PDBc0."' target='newwin''>Link</a></td></tr>";
				if($countPDBA != 0)
				 {	
					for($PDBnumberA=1;$PDBnumberA<$countPDBA+1;$PDBnumberA++)
					{
						$C_PDBTWO = explode(",",$C_PDB1);
						$C_PDB1two = $C_PDBTWO[$PDBnumberA];
						$C_PDB1two = trim($C_PDB1two);
						$C_PDB1two1 = explode("=",$C_PDB1two);
						$C_PDB1two11 = substr($C_PDB1two1[1], 0, -1);  
						echo "<tr><td></td><td></td><td></td><td bgcolor=#999966 align='center' >".$C_PDB1two1[0]."</td><td bgcolor=#999966 align='center'>".$C_PDB1two11."</td></tr>";
					}
				 }
			  }
			}		
			echo "</table><hr>";	
		}
	
	mysql_free_result($result);
*/
//--------------------show the substrate sites---------------------//
$sql = "select ID, Organism, Position, PubMedID, UbiquitinatedPeptide, SubstrateMotif from final_UbiSubs_Frag_Human where ID like '%".$SwissID."%' order by Position";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
$num_rows = mysql_num_rows($result);

if($num_rows > 0)
{
	echo "<table width='98%'  border='0' align=center>";
	echo "<tr>";
	echo "<td align=left><span class='style1'>The ubiquitination sites of <b>".$SwissID."</b></span><br><br></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";

	echo "<table width='98%' border=0 cellspacing=3 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292 style='table-layout:fixed'>";
	echo "<tr align=center bgcolor=#c1d0df><td width= 30 class='style2'><b>No.</b></td>
		  <td width=10% class='style2'><b>Position</b></td>
		  <td width=15% class='style2'><b>Ubiquitinated Peptide</b></td>
		  <td width=15% class='style2'><b>Secondary Structure</b></td>
		  <td width=15% class='style2'><b>Solvent Accessibility</b></td>
		  <td width=35% class='style2'><b>Substrate Motifs</b></td>
		  <td width=10% class='style2'><b>PubMed ID</b></td>
		  <!--<td width= 80 class='style2'><b>Experiment</b></td>-->";
	echo "</tr>";

	$count = 1;
	while($data = mysql_fetch_array($result,MYSQL_ASSOC))
	{
		$temp_seq = "";
		$temp_ASA = "";
		$temp_second = "";
		
		//get the peptide
		$seqlen = strlen($data['UbiquitinatedPeptide']);
		for($i=0;$i<13;$i++)
		{
			if($i == 6)
				$temp_seq .= " <b>".$data['UbiquitinatedPeptide'][$i]."</b> ";
			else
				$temp_seq .= $data['UbiquitinatedPeptide'][$i];
		}
		
		//get the secondary
		for($i=$data['Position']-7;$i<$data['Position']+6;$i++)
		{
			if($i<0)
				$temp_second .= "-";
			elseif($i == $data['Position']-1)
				$temp_second .= " <b>".$Second[$i]."</b> ";
			else
				$temp_second .= $Second[$i];
		}

		$temp_ASA = $ASA_value[$data['Position']-1];
		
		echo "<tr><td class='style2' bgcolor='#F1F1F1'>".$count."</td>";
		echo "<td class='style2' bgcolor='#F1F1F1' align='center'>".$data['Position']."</td>";
		echo "<td class='style3' bgcolor='#F1F1F1' align='center'>".$temp_seq."&nbsp;</td>";
		echo "<td class='style3' bgcolor='#F1F1F1' align='center'>".$temp_second."&nbsp;</td>";
		echo "<td class='style2' bgcolor='#F1F1F1' align='right'>".$temp_ASA."%</td>";

		if($data['MDD'] == "0")
		{
			echo "<td class='style2' bgcolor='#F1F1F1' align='center'>-</td>";
		}
		else
		{
			echo "<td class='style2' bgcolor='#F1F1F1' align='center'><img src='data/MDD_motif/{$data['SubstrateMotif']}' width='98%'></td>";
		}
		
		echo "<td class='style2' bgcolor='#F1F1F1' align='center' style='word-WRAP: break-word'>";
		if(strpos($data['PubMedID'],";") !== false)
		{
			$temp_pmid = explode(";",$data['PubMedID']);
			for($i=0;$i<count($temp_pmid);$i++)
			{
				echo "<a href='http://www.ncbi.nlm.nih.gov/pubmed/".$temp_pmid[$i]."'>".$temp_pmid[$i]."</a><br>";
			}
		}
		else
				echo "<a href='http://www.ncbi.nlm.nih.gov/pubmed/".$data['PubMedID']."'>".$data['PubMedID']."</a>";
/*
		$experiment="";
		if($data['in_vivo'] == "" | $data['in_vivo'] == " ")
			$experiment.="0";
		else
			$experiment.="1";
		if($data['in_vitro'] == "" | $data['in_vitro'] == " ")
			$experiment.="0";
		else
			$experiment.="1";
		switch($experiment)
		{
			case'00':
				echo "<td class='style2' bgcolor='#F1F1F1' align='center'>-</td>";
				break;
			case'10':
				echo "<td class='style2' bgcolor='#F1F1F1' align='center'><font color=red>in vivo</font></td>";
				break;
			case'01':
				echo "<td class='style2' bgcolor='#F1F1F1' align='center'><font color=green>in vitro</font></td>";
				break;
			default:
				echo "<td class='style2' bgcolor='#F1F1F1' align='center'><font color=red>in vivo</font><br><font color=green>in vitro</font></td>";
		}
*/
		echo "</tr>";
		$count++; 
	}
	
	echo "</table>";
	echo "</td></tr></table>";
	echo "<hr>";
	
	
	
	
}

//------SHOW THE NETWORK-------

//echo "<div id='network'>";
        echo "<table width='98%'  border='0' align=center>";
        echo "<tr>";
	        echo "<td align=left><span class='style1'>The Interacting Proteins of <b>".$SwissID."</b></span><br><br></td>";
        echo "</tr>";
        echo "<tr><td>";


                        $param="substrate%5B%5D=".$SwissID;
                        include "mysql_connection.inc";
                        $subs=array(); $ppi_resource=array(); $ppi_pub_id=array();
                        // Get all substrates which are recognized by this E3
                        $sql = "select Sub_ID,PPI_Resource, PPI_PubID from final_Interaction_E3_Sub_PPI_Human_No_String where E3_ID = '".$SwissID."'";
                        $result = mysql_query($sql) or die("Query failed : " . mysql_error());

                        //$dd=0;
                        while($data = mysql_fetch_array($result))
                        {
                                        $subs[count($subs)] = $data[0];
                                        $st=$data[0];
                                        $ppi_resource[count($ppi_resource)] = $data[1];
                                        $ppi_pub_id[count($ppi_pub_id)] = $data[2];
                                        $param=$param."%0D%0A".$st;
                        }

                        $param = $param."&species=Human&x=854&y=22";
                        //print_r($subs);
                        mysql_close($link);

                        $chkNet=count($subs);
                        if($chkNet>0){ //Construct and Show the network if having
                                //echo "$param";
                                echo "<iframe src='interacting_network.php?{$param}' width='98%' height='1080px' scrolling='auto'></iframe>";
                        }

        echo "</td></tr>";
	echo "</table>";

//echo "</div>";
//------End: SHOW THE NETWORK------->


}

else
        echo "error, plz input the query.";



?>

<?php
include("footer.html");
?>

</div>
</body>
</html>

