<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>UbiNet</title> 
	<meta name="description" content="Gravis Bootstrap Theme" />
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="ailabF7" />
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

	<link href="css/mystyle.css" rel="stylesheet" />
    
	
     
   <link href="css/mystyle.css" rel="stylesheet" />
	<link href="css/mystyle.css" rel="stylesheet" />
	<link href="css/mystyle.css" rel="stylesheet" />
	
	

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
<? include("top.html"); ?>
	<!--end: Header-->	
	
	
	<!--start: Container -->
	<div class="container">

		<!--start: Wrapper-->
		<div id="wrapper">
			
			<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

						<h2>
						  <blockquote>
						</h2>

			  </div>	

			</div>
			<!-- end: Page Title -->				
		
			<!--start: Row -->
	    	<div class="row-fluid">
		
				<div class="span12">
                <blockquote>
    <p align="justify">Ubiquitin is a small protein that consists of 76 amino acids about 8.5 kDa. Ubiquitin conjugation sites of protein (Ubiquitination/ Ubiquitylation), an essential post-translational modification, is a sequential process that involves a group of enzymes known as E1 (activating enzyme), E2 (conjugating enzyme) and E3 (ubiquitin ligase). The ubiquitination system is well-known for the selective degradation of several short-lived proteins in eukaryotic cells. The ubiquitin-Proteasome Pathway is a complex and multi-step process, involving a highly organized cascade of enzymatic reactions that select, mark, and degrades proteins. Firstly, the ubiquitination pathway is activated by attaching C-terminal residue of ubiquitin to a Cys sulphydryl residue in E1 enzyme. Secondly, ubiquitin attached to an E1 is transferred to an E2, which can be conjugated with various E3s. Ub-protein ligase E3 recognizes a specific protein substrate and catalyzes the transfer of activated Ub to it. Finally, the substrate is sent to 26S proteasome for degradation.</p>
    <p align="justify">In the  ubiquitination process, E3 ligases play key roles in regulating specific  functions by recognizing and regulating substrate proteins for ubiquitination. The presence of  various different E3s and their substrate specificity indicate that the  degradation process, which is one of the important regulatory mechanisms in the  cellular regulatory network, is specifically controlled by E3s. Besides,  protein ubiquitination catalyzed by E3-ligases play cruicial regulatory roles  in intracellular signal transduction. The networks of proteins and small  molecules that transmited information from the cell surface to the nucleus,  where they ultimately effected transcriptional changes. An E3 could regulate  multiple substrates in various functional categories, and each substrate could  be regulated by multiple E3s. These relations could be organized as a network  of E3-specific modular regulatory activities against multiple cellular  pathways. For example, anaphase-promoting complex (APC)/cyclosome targeted key  regulators of the cell cycle such as cyclins and their related kinases.</p>
    <p align="justify">Due to the very important roles of E3 ligases, the relationships between E3 ligases and ubiquitinated substrate  proteins is investigated in this work. Besides, basing on protein-protein  interaction and functional domain, the E3 ligase regulatory networks is  analyzed to provide comprehensively understanding about how E3 ligase recognizes  ubiquitination substrate sites as well as its mechanism in the ubiquitin system. In this study, we propose an approach that incorporates  machine learning method with protein associations (including protein-protein  interaction, domain-domain interaction, E3 ligases - substrate specificities) to  reconstruct the ubiquitination regulatory networks. </p>
    <p align="justify"><strong><font size="14" color="#6600FF">Ubi</font><font size="14" color="#FF3300">Net</strong></font> is a knowledgebased system that can let users input a group of genes/proteins to be explored the ubiquitination network associated with the information of subcellular localization. In this study, a knowledgebase is developed to integrate experimentally verified data (protein ubiquitination, protein-protein interaction; domain-domain interaction, and E3 ligases - substrate specificities data) for constructing the E3 ligases - substrate ubiquitination regulatory networks in Human and Mouse.        </p>
    <p align="justify">
      <script language="JavaScript">
	function toggle(source) {
	checkboxes = document.getElementsByName('GSE[]');
	for(var i=0, n=checkboxes.length;i<n;i++) {
		checkboxes[i].checked = source.checked;
	}
	}
	  </script>
  </p>
    <form name='form' method='get' action='network_ubi.php'>
  <table width = 100% border=2 align=center cellpadding=10>
  <tr><td>
<?
//get the parameters
$E3_name = $_GET['E3'];
$quick_search = $_POST['keyword'];
//$species = $_POST['species'];
$substrate=$_POST['substrate'];

$species = 'Homo sapiens (Human)';
//$example = "WWP1_HUMAN,SMUF2_HUMAN,ITCH_HUMAN,MDM2_HUMAN";
//$example="WWP1_HUMAN,SMUF2_HUMAN,ITCH_HUMAN,MDM2_HUMAN,P20L1_HUMAN,RNF8_HUMAN,CELF2_HUMAN,FLNB_HUMAN,ATPB_HUMAN,DESM_HUMAN,EPHA1_HUMAN,ARI1A_HUMAN,ARRB2_HUMAN,ARHG7_HUMAN,ATN1_HUMAN";
$example="WWP1_HUMAN\nSMUF2_HUMAN\nITCH_HUMAN\nMDM2_HUMAN\nP20L1_HUMAN\nRNF8_HUMAN\nCELF2_HUMAN\nFLNB_HUMAN\nATPB_HUMAN\nDESM_HUMAN\nEPHA1_HUMAN\nARI1A_HUMAN\nARRB2_HUMAN\nARHG7_HUMAN\nATN1_HUMAN";
echo "<table width=90% border=0 align=center>";
echo "<tr align=left><td colspan='2'>";
echo "<h4><font color='black'><b>Step 1. Input a list of proteins IDs(E3s or Substrates):</b></font></h3><br>";

if($quick_search != "")
echo "<textarea class='input-xlarge span10' rows='5' cols='60' name='substrate[]' wrap='Off'>$quick_search</textarea><br>";
else
echo "<textarea class='input-xlarge span10' rows='5' cols='60' name='substrate[]' wrap='Off'>$example</textarea><br>";
echo "</td>";

echo "<td align='left' valign='top'>";
echo "<h4><font color='black'><b>Step 2. Select the organism:</b></font></h3><br>";
echo "<table cellpadding='10' border='2' bordercolor='orange' width=75% height='80%'><tr><td>";
echo "<font color='black'>";
echo "<label><input name='species' type='radio' value='Human' checked/>&nbsp;&nbsp; Homo sapiens (Human)</label><p></p>";
echo "<label><input name='species' type='radio' value='Mouse' disabled/>&nbsp;&nbsp; Mus musculus (Mouse)</label><p></p>";
echo "</font></td></tr></table>";
echo "</td></tr>";

echo "<tr><td colspan='3' align='left' valign='top'>";
echo "<p>&nbsp;</p><h4><font color='black'><b>Step 3. Submit:</b></font></h3><br>";
echo "</td></tr>";

echo "<tr valign=top>";
echo "<td width=25%><input type='image' img src='./images/Submit2.png'  onclick=this.form.action='network_ubi2.php' value='Interacting Network'></td>";
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
