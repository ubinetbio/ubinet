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
<p><img src='images/dbSNO_SNO.png' class="right" /></p>
<h2><br>Welcome to dbSNO!</h2>
<p><b>dbSNO</b> is a database that integrates the experimentally verified cysteine S-Nitrosylation sites from multiple species. 
Based on the S-Alkylating Labeling Strategy (<a href='http://www.ncbi.nlm.nih.gov/pubmed/20925432' target=_blank>Chen et al., 2010</a>), a total of <b>586</b> unique S-nitrosylation sites, which are corresponding to 384 proteins in S-nitroso-N-acetylpenicillamine (SNAP)/L-cysteinetreated mouse MS-1 endothelial cells, have been integrated. 
More than <b>3000</b> experimental S-Nitrosylation sites are manually curated from pertinent literatures using text mining method to systematically filter research articles related to cystein S-nitrosylation.
To solve the heterogeneity of different data formats, all of the collected S-Nitrosylated peptides are mapped to UniProt protein entries.
<p>In addition to the collection of S-nitrosylation sites, dbSNO comprises the solvent accessibility of substrate sites, protein secondary and tertiary structures, protein domains, instric disorder regions, and cross-species conservations of substrate sites.<br></p>
<hr color=#0000ff>
<font size=3 color=#ff0000><strong>Site-speciﬁc Identiﬁcation of the S-nitrosoproteome</strong></font><br>
Yi-Ju Chen, Wei-Chi Ku, Pei-Yi Lin, Hsiao-Chiao Chou, Kay-Hooi Khoo, and Yu-Ju Chen* (2010) "S-Alkylating Labeling Strategy for Site-Speciﬁc Identiﬁcation of the S-Nitrosoproteome", Journal of Proteome Research, Vol. 9(12):6417-39. <a href='http://www.ncbi.nlm.nih.gov/pubmed/20925432' target=_blank> [PubMed] <a>

<P>
<table width="98%"  align=center border=1 cellspacing=0 cellpadding=1 bordercolordark=#99CCFF bordercolorlight=#99CCFF>
                <tr>
                  <td align=center bgcolor="#99CCFF" class="style37">Workflow for the site-speciﬁc identiﬁcation of the S-nitrosoproteome by a modiﬁed biotin switch method </td>
                </tr>
                <tr>
                  <td><p><img src='images/dbSNO_biotin.png' class="center" /></p></td>
				</tr>  
				  <td>
				  Three forms of cysteine residues on an S-nitrosylated protein are shown: free thiols (open circles), disulﬁde bonds (solid lines), and S-nitrosylated
thiols (ﬁlled circles). The free cysteine thiols were ﬁrst blocked by S-alkylation with IAM. Site-speciﬁc labeling of the S-nitrosylated
cysteine thiols was performed by reduction with ascorbate followed by irreversible biotinylation with PEO-iodoacetyl-biotin. The disulﬁde
bonds were further reduced by TCEP and S-alkylated by IAM. After tryptic digestion, the biotinylated peptides were enriched by avidin
afﬁnity puriﬁcation and analyzed by LC-MS/MS. Based on the characteristic mass shift (517.2 Da) of the fragment ion from a biotinylated
cysteine residue in the MS/MS spectrum, the S-nitrosylation site could be unambiguously determined.
				  </td>
                </tr>
</table>
</p><br>

<p>&nbsp;</p>

</div>


<?php
include("buttom.html");
?>

</div>
</body>
</html>

