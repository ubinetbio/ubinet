<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/andreas01.css" media="screen" title="andreas01 (screen)" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<title>dbSNO</title>
</head>

<style type="text/css">
<!--
.style1 {
	font-size: 15px;
	font-family: Arial, Helvetica, sans-serif;
}

}
.style24 {color: #444444; font-weight: bold; font-size: 12px; }
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
?>

<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>
<li><a href="index.php">Welcome!</a></li>
<li><a href="introduction.php">Introduction</a></li>
<li><a href="statistics.php">Data Statistics</a></li>
<li><a href="browse.php">Browse</a></li>
<li><a href="advance_search.php">Search</a></li>
<li><a href="download.php">Download</a></li>
<li><a href="tutorial.php">Tutorial</a></li>
<li><a href="http://csb.cse.yzu.edu.tw/SNOSite/">SNOSite Analysis</a></li>
</ul>

<div class="announce">
<h3>Latest news:</h3>
<p><strong>June 15, 2011:</strong><br />
A total of  <font color=red>586</font> experimentally verified S-nitrosylation sites from SNAP/L-cysteine-stimulated mouse endothelial cells (<a href='http://www.ncbi.nlm.nih.gov/pubmed/20925432' target=_blank>Chen et al., 2010</a>) have been integrated into dbSNO.</p>
<p class="textright"><a href="news.php">Read more...</a></p>
</div>

</div>

<div id="extras">
<h3>How to Link:</h3>
<p>Users can directly link to dbSNO by SwissProt ID.<br>
  For example:<br>
</p>

<div align="left"><a 
href="http://dbSNO.mbc.nctu.edu.tw/search_result.php?swiss_id=NOS3_HUMAN">http://dbSNO.mbc.<br>
  nctu.edu.tw/search<br>
  _result.php?swiss_id<br>
  =NOS3_HUMAN</a></div>
<p>&nbsp;</p>
<h3>PTM Resources:</h3>
<p>- <a href='http://dbPTM.mbc.nctu.edu.tw' target='_blank'>dbPTM 2.0</a><br>
   - <a href='http://www.uniprot.org/' target='_blank'>UniProt KB</a><br>
   - <a href='http://phospho.elm.eu.org/' target='_blank'>Phospho.ELM</a><br>
   - <a href='http://RegPhos.mbc.nctu.edu.tw/' target='_blank'>RegPhos</a><br>
   - <a href='http://www.phosphosite.org/' target='_blank'>PhosphoSite</a><br>
   - <a href='http://vigen.biochem.vt.edu/xpd/xpd.htm' target='_blank'>Phosphorylation Site Database</a><br>
   - <a href='http://www.cbs.dtu.dk/databases/OGLYCBASE/' target='_blank'>OGlycBase</a><br>
   - <a href='http://ubiprot.org.ru/' target='_blank'>UbiProt</a><br>
   - <a href='http://KinasePhos.mbc.nctu.edu.tw/' target='_blank'>KinasePhos</a></p>

<p class="small">Version: 1.0<br />
  (June 15, 2011)</p>
</div>

<div id="content">
<h2><br>Browse by Organisms</h2>
<P>

<?
//get parameters
$OS = $_GET['OS'];

//connect to mysql database
$link = mysql_connect("localhost", "DB", "bidlab203") or die("Could not connect : " . mysql_error());
mysql_select_db("dbSNO") or die("Could not select database");
$sql = "";

if($OS != '')
{
	$sql = "select a.Organism,a.ID,b.protein_name,count(*) from Mix_SNO a, SwissProt_201106 b where a.ID=b.ID and a.Organism = '".$OS."' group by a.ID order by count(*) desc";
	$result = mysql_query($sql) or die("Query failed : " . mysql_error());
	echo "<table width=750 align=center border=1 cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>";
	echo "<tr bgcolor='#231122'><td width='50' align='center' class='style36'>#</td>";
	echo "<td width='150' align='center' class='style36'>Organism</td>";
	echo "<td width='150' align='center' class='style36'>SwissProt ID</td>";
	echo "<td width='250' align='center' class='style36'>Protein Name</td>";
	echo "<td width='200' align='center' class='style36'>Number of S-Nitrosylation Instances</td></tr>";
	$count = 1;
	while($data = mysql_fetch_array($result))
	{
		$ProteinName = substr($data[2],14,strpos($data[2],";")-14);
		echo "<tr><td align='center' class='style24'>".$count."</td>";
		echo "<td align='center' class='style24'>".$data[0]."</td>";
		echo "<td align='center' class='style24'>".$data[1]."</td>";
		echo "<td align='center' class='style24'>".$ProteinName."</td>";
		echo "<td align=right><a href='search_result.php?swiss_id=".$data[1]."'>".$data[3]."</a></td></tr>";
		$count++;
	}
	mysql_free_result($result);
	echo "</table>";
}
else
{
	$sql = "select Organism,count(*) from Mix_SNO group by Organism order by count(*) desc";
	$result = mysql_query($sql) or die("Query failed : " . mysql_error());
	echo "<table width=750 align=center border=1 cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>";
	echo "<tr bgcolor='#231122'><td width='350' align='center' class='style36'>Organism</td><td width='400' align='center' class='style36'>Number of Cysteine S-Nitrosylation Instances</td></tr>";
	while($data = mysql_fetch_array($result))
	{
		echo "<tr><td>";
		switch($data[0])
		{
			case "M. musculus": echo $data[0]." (Mouse)"; break;
			case "H. sapiens": echo $data[0]." (Human)"; break;
			case "R. norvegicus": echo $data[0]." (Rat)"; break;
			default: echo $data[0];
		}
		echo "</td><td align='center'><a href='browse.php?OS=".$data[0]."'>".$data[1]."</a></td></tr>";
	}
	mysql_free_result($result);
	echo "</table>";
}
mysql_close($link);

?>

</p><br>

<p>&nbsp;</p>

</div>


<?php
include("buttom.html");
?>

</div>
</body>
</html>