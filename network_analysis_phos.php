<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>RegPhos 2.0</title> 
	<meta name="description" content="Gravis Bootstrap Theme" />
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:type" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic" />
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/bootstrap-responsive.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/parallax-slider.css" rel="stylesheet" />
	
	<!--[if lt IE 9 ]>
	  <link href="css/styleIE.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9 ]>
	  <link href="css/styleIE9.css" rel="stylesheet">
	<![endif]-->
	
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<script language="JavaScript">
function Localization(objform)
{
        //var objform = document.form;
        objform.action = "network_cell.php";
        objform.submit();
}

function Pathway(objform)
{
        //var objform = document.form;
        objform.action = "select_pathway.php";
        objform.submit();
}

</script>
</head>
<body>
	
	<!--start: Header -->
	<? include("top.html"); ?>
	<!--end: Header-->	
	
	
	<!--start: Container -->
	<div class="container">

		<!--start: Wrapper-->
		<div id="wrapper">
			
			<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

						<h2>Network Analysis</h2>

				</div>	

			</div>
			<!-- end: Page Title -->				
		
			<!--start: Row -->
	    	<div class="row-fluid">
		
				<div class="span12">
	<p><h4>The kinome annotation in 
		<a href='http://kinase.com/kinbase/'><font color='blue'>KinBase</font></a> provides a starting point for investigating protein phosphorylation networks in mammals. Given the experimentally validated kinase-specific phosphorylation sites, the intracellular phosphorylation networks between kinases and substrates could be reconstructed. In addition to the kinase-substrate phosphorylations, this update has integrated the information of metabolic pathways and protein-protein interactions (PPIs) to implement the network analysis for a group of interested genes/proteins. In this work, a public network visualization software, <a href='http://www.cytoscape.org/'><font color='blue'>Cytoscape</font></a>, is utilized to design a user interface for exploring the protein kinase-substrate phosphorylation networks, as well as the associated metabolic pathways and PPIs. The information of metabolic pathways associated with <b>human</b>, <b>mouse</b> and <b>rat</b> refers to the annotations in <a href='http://www.genome.jp/kegg/'><font color='blue'>KEGG</font></a>. For the information of experimentally verified physical interactions, over ten PPI databases have been integrated. In addition to physical interactions, the <a href='http://string-db.org/'><font color='blue'>STRING</font></a> database also consists of predicted functional associations (co-regulation in curated pathway, co-occurrence in literature abstracts, mRNA co-expression and genomic context) with confidence scores between proteins. In order to make the construction of phosphorylation networks feasible, a graph theory has been adopted to formalize the networks between kinases and substrates, based on a KEGG pathway map. RegPhos can let users input a group of proteins/genes and the system efficiently returns the protein phosphorylation networks associated with three network models, such as <b>network with protein-protein interactions</b>, <b>network with subcellular localization</b>, and <b>network with metabolic pathway and protein-protein interactions</b>. Furthermore, in order to provide a cancer analysis for kinases and phosphoproteins, a total of 30 experiment series involved in 39 cancer types from Affymetrix Human Genome U133 Plus 2.0 Array (<a href='http://www.ncbi.nlm.nih.gov/geo/query/acc.cgi?acc=GPL570'><font color='blue'>GPL570</font></a>), in which consisting of 54675 probe set for over 47000 transcripts, are integrated in this work. 
	</h4></p>
<br>

<p align=left>
	<form name='form' method='get' action='network_phos.php'>
	
	<script language="JavaScript">
	function toggle(source) {
	checkboxes = document.getElementsByName('GSE[]');
	for(var i=0, n=checkboxes.length;i<n;i++) {
		checkboxes[i].checked = source.checked;
	}
	}
	</script>

<table width = 95% border=2 align=center cellpadding=10>
<tr><td>
<?
//get the parameters
$kinase_name = $_GET['kinase'];
$quick_search = $_POST['keyword'];
$species = $_POST['species'];
$example = "LYN,SYK,BLNK,PLCG2,RASGRP3,HRAS,RAF1,MAP2K1,MAPK1,FOS,TPR,SRC";


//include "mysql_connection.inc";
//show the kinase

echo "<table width=90% border=0 align=center>";
echo "<tr align=left><td colspan='2'>";
echo "<h3><font color='black'><b>Step 1. Input a group of genes:</b></font></h3><br>";


if($quick_search != "")
echo "<textarea class='input-xlarge span10' rows='4' name='substrate[]' wrap='Off'>$quick_search</textarea><br>";
else
echo "<textarea class='input-xlarge span10' rows='4' name='substrate[]' wrap='Off'>$example</textarea><br>";
echo "</td>";

echo "<td align='left' valign='top'>";
echo "<h3><font color='black'><b>Step 2. Select the organism:</b></font></h3><br>";
echo "<table cellpadding='10' border='2' bordercolor='orange' width=75% height='80'><tr><td>";
echo "<font color='black'>";
echo "<label><input name='species' type='radio' value='human' checked/>&nbsp;&nbsp; Homo sapiens (Human)</label>";
echo "<label><input name='species' type='radio' value='mouse' />&nbsp;&nbsp; Mus musculus (Mouse)</label>";
echo "<label><input name='species' type='radio' value='rat' />&nbsp;&nbsp; Rattus norvegicus (Rat)</label>";
echo "</font></td></tr></table>";
echo "</td></tr>";

echo "<tr><td colspan='3' align='left' valign='top'>";
echo "<h3><font color='black'><b>Step 3. Choose the type of network analysis:</b></font></h3><br>";
echo "</td></tr>";

echo "<tr valign=top>";
echo "<td width=25%><input type='image' img src='./images/network_phos.png'  onclick=this.form.action='network_phos.php' value='Interacting Network'></td>";
echo "<td width=25%><input type='image' img src='./images/network_cell.png' onclick=Localization(this.form)></td>";
echo "<td width=25%><input type='image' img src='./images/network_pathway.png' onclick=Pathway(this.form)></td>";
echo "</tr>";
echo "</table>";

?>
<br>
</td></tr>
</table>
	
	</form>
</p> 


				</div>	
			</div>
			<!--end: Row -->
	
		</div>
		<!-- end: Wrapper  -->	
      			
	</div>
	<!--end: Container-->	

		<!-- start: Footer -->
		<? include("footer.html"); ?>
		<!-- end: Under Footer -->
		

<!-- start: Java Script -->
<? include("js.html"); ?>
<!-- end: Java Script -->

</body>
</html>
