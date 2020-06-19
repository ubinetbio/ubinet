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

<div id="content2">


	<table width="750">
      <tr>
        <td>
		  <img src="images/news.jpg" align="top"><br>
          <table width="56%"  border="0">
            <tr>
              <td><hr></td>
            </tr>
          </table>
		  <br>
		  
		  <img src="images/hot.png">Jun. 22, 2011<h3>Chen's data sets have been integrated!!!</h3>
		  <p>A total of  <font color=red>586</font> experimentally verified S-nitrosylation sites from SNAP/L-cysteine-stimulated mouse endothelial cells (<a href='http://www.ncbi.nlm.nih.gov/pubmed/20925432' target=_blank>Chen et al., 2010</a>) have been integrated into dbSNO.</p>
		  <br><br>
		  
		  Jun. 20, 2011<h3>Protein disorder region will be annotated on dbSNO!</h3>
		  <p>It was proposed that protein modification is associated with the protein disorder region. Thus, we integrate the protein disorder prediction tool, <a href='http://bioinf.cs.ucl.ac.uk/disopred/'>DISOPRED 2</a>, to comprehensively annotate the protein entries in dbSNO. Users can investigate more structural information for protein modifications. </p>
		  <br><br>
		
		  Jun. 10, 2011<h3>The S-nitrosylation sites in UniProt is integrated in dbSNO!</h3>
		  <p>A total of 37 experimentally verified S-Nitrosylation sites in <a href='http://www.uniprot.org/'>UniProt</a> release 2011-06 were integrated.</p><br><br>
		
		  May 30, 2011<h3> The orthologous conserved region of protein sequences is considered!</h3>
		  <p>In order to observe whether a PTM sites located in the conserved regions of protein orthologous sequences, the <a href='http://www.ncbi.nlm.nih.gov/COG/'>Clusters of Orthologous Groups of proteins</a> (COGs), was integrated. The alignment of the protein sequences in each cluster, which was implemented by ClustalW, is provided in the resource.</p><br><br>
	
			
		  May 15, 2011<h3> dbSNO 1.0 is starting up!</h3>
		  <p>dbSNO is a knowledge base comprising the experimental S-Nitrosylation sites, solvent accessibility of substrate, protein secondary and tertiary structures, protein domains and protein disorder. Literature related to PTM, protein conservations and substrate specificity are also analyzed. The interface is also redesigned and enhanced to facilitate access to the resource.</p><br><br>

          
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
