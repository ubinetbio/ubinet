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

.style11 {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #777777;
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
.style22 {color: #FFFFFF; font-size: 14px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style26 {color: #666666}
.style27 {
	font-size: 18px;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;

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
        <td><P><img src="images/tutorial.jpg"><br>
		<table width="56%"  border="0">
            <tr>
              <td><hr></td>
            </tr>
          </table></p>		
		
		<p><img src="images/p_01.gif"><span class="style27">Tutorial in Search Page</span></p>   
        
		<p align="justify" class="style26"><b>Step 1</b>. Three major queries in search page. Users can query their interested protein by input the protein name, gene name, Swiss-Prot ID or AC in search field of homepage. It was also allowed the users to query the amino acid sequence against the release 53.0 of Swiss-Prot protein sequences.</p>
		<div align=center><img src='images/Tutorial_search_1.jpg' /></div>

		<p align="justify" class="style26"><b>Step 2</b>. The search result. Since users input the keyword of protein name or gene name, Swiss-Prot ID or AC in search field of homepage. The proteins matching the query keywords were shown in a table. Then, users can click on the URL link "show" to view the detailed information about the protein, such as protein function, PTM sites, protein doamin, etc.</p>
		<div align=center><img src='images/Tutorial_search_2.jpg'></div>
		
		<p align="justify" class="style26"><b>Step 3</b>. The detail information about PTM.  Users can view the experimental and predicted PTM sites in both tabular and graphical visualizations. Graphical visualization could reveal an overview of the post-translational modification sites, the solvent accessibility of the residues, protein variations, protein secondary structures and protein functional domains in protein sequence.</p>
		<div align=center><img src='images/Tutorial_search_3.jpg'></div>

		<p align="justify" class="style26"><b>Step 4</b>. The orthologous conserved regions. Users can investigate whether a PTM site located in orthologous conserved regions by click on the button "show" in the table of PTM sites.</p>
		<div align=center><img src='images/Tutorial_search_4.jpg'></div>
		
		<br>
		<hr>
		<br>
		
		<p><img src="images/p_01.gif"><span class="style27">Tutorial in Browse Page</span></p>
		
		<p align="justify" class="style26"><b>Step 1</b>. The summary table of PTMs. To facilitate the investigation in each type of PTM, we developed a summary table for users to browse all the types of PTM in the release 2.0 of dbPTM. In the table, each type of PTM was categorized by their modified amino acids with the number of experimentally verified sites. For example, users can choose the acetylation of lysine (K) to take the more detailed information such as the position of modification on amino acid, the location of modification on protein sequence, the modified chemical formula, and the mass difference.</p>
		<div align=center><img src='images/Tutorial_browse_1.jpg'></div>

		<p align="justify" class="style26"><b>Step 2</b>. Users can investigate the detailed information acetylation of lysine (K), such as the position of modification on amino acid, the location of modification on protein sequence, the modified chemical formula, and the mass difference. Especially, the formula structure was visualized by the Jmol program which was implemented in JAVA Applet. However, the most effective knowledge about the PTM is the substrate site specificity including the frequency of amino acids, the average solvent accessibility, and the frequency of secondary structure surrounding the modified site. The sequence logo which represents the frequency of amino acids and the frequency of secondary structure surrounding the modified sites was provided.</p>
		<div align=center><img src='images/Tutorial_browse_2.jpg'></div>

       
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
