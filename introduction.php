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
	font-size: 16px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #222222;
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
<h2><br>Introduction of dbSNO</h2>
<p align=justify>
S-Nitrosylation, a selective and reversible protein post-translational modification (PTM) by covalent attachment of a nitric oxide (NO) to the sulfur atom of a cysteine, critically regulates the protein activity, localization, and stability. Due to its importance in regulating protein functions and cell signaling, mass spectrometry-based proteomics method rapidly evolved to increase the dataset of experimentally determined S-Nitrosylation sites. 
However, there currently exists no database dedicated to integrate all experimentally verified cysteine S-Nitrosylation sites with their structural or functional information. 
Therefore, dbSNO knowledge base is created to integrate all available datasets as well as to provide their structural analysis. 
The dbSNO has collected more than 3000 manually curated experimental S-Nitrosylation sites from 212 S-nitrosylation-related research articles using a text mining approach. 
In order to solve the heterogeneity among the data gathered from different sources, all of the collected S-Nitrosylated peptides are mapped to UniProt protein entries. 
To delineate the structural correlation and consensus motif of these experimental S-Nitrosylation sites, the dbSNO database also provide structural analyses, including the solvent accessibility of substrate sites, protein secondary and tertiary structures, intrinsic disorder regions, protein domains, and cross-species conservations of each entry. 
dbSNO is now freely accessible via http://dbSNO.mbc.nctu.edu.tw. The database is regularly updated upon collecting new data from continuously surveying research articles.
</p>

<p>
<div class='style37'><img src='images/p_01.gif'> System Flow of dbSNO</div>
<img src='images/dbSNO_Flow.png'>
<br>
</p>


<P>
<div class='style37'><img src='images/p_01.gif'> Developer</div>
<ul>
	<li><b>Tzong-Yi Lee</b>, Assistant Professor, Department of Computer Science and Engineering, Yuan Ze University</li>
	<li><b>Yi-Ju Chen</b>, Institute of Chemistry, Academia Sinica</li>
	<li><b>Yu-Ju Chen</b>, Research Fellow, Institute of Chemistry, Academia Sinica</li>
	<li><b>Hsien-Da Huang</b>, Professor, Institute of Bioinformatics and Systems Biology, National Chiao Tung University</li>
</ul>
</p><br>

<p>&nbsp;</p>

</div>


<?php
include("buttom.html");
?>

</div>
</body>
</html>