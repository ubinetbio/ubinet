<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="images/UbiNet.ico" type="image/x-icon">
	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>UbiNet</title> 
	<meta name="description" content="Gravis Bootstrap Theme" />
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="nuinvtnu" />
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
                              </blockquote> 
                            </h2>
    						
                  </div>	
    
                </div>
                <!-- end: Page Title -->				
            
                <!--start: Row -->
                <div class="row-fluid">
            
                    <div class="span12">
                    <blockquote>
        <hr>            
        <p align="justify">Ubiquitin is a small protein that consists of 76 amino acids about 8.5 kDa. Ubiquitin conjugation sites of protein (Ubiquitination/ Ubiquitylation), an essential post-translational modification, is a sequential process that involves a group of enzymes known as E1 (activating enzyme), E2 (conjugating enzyme) and E3 (ubiquitin ligase). The ubiquitination system is well-known for the selective degradation of several short-lived proteins in eukaryotic cells. The ubiquitin-Proteasome Pathway is a complex and multi-step process, involving a highly organized cascade of enzymatic reactions that select, mark, and degrades proteins. Firstly, the ubiquitination pathway is activated by attaching C-terminal residue of ubiquitin to a Cys sulphydryl residue in E1 enzyme. Secondly, ubiquitin attached to an E1 is transferred to an E2, which can be conjugated with various E3s. Ub-protein ligase E3 recognizes a specific protein substrate and catalyzes the transfer of activated Ub to it. Finally, the substrate is sent to 26S proteasome for degradation.</p>
        <p align="justify">In the  ubiquitination process, E3 ligases play key roles in regulating specific  functions by recognizing and regulating substrate proteins for ubiquitination. The presence of  various different E3s and their substrate specificity indicate that the  degradation process, which is one of the important regulatory mechanisms in the  cellular regulatory network, is specifically controlled by E3s. Besides,  protein ubiquitination catalyzed by E3-ligases play cruicial regulatory roles  in intracellular signal transduction. The networks of proteins and small  molecules that transmited information from the cell surface to the nucleus,  where they ultimately effected transcriptional changes. An E3 could regulate  multiple substrates in various functional categories, and each substrate could  be regulated by multiple E3s. These relations could be organized as a network  of E3-specific modular regulatory activities against multiple cellular  pathways. For example, anaphase-promoting complex (APC)/cyclosome targeted key  regulators of the cell cycle such as cyclins and their related kinases.</p>
        <p align="justify">Due to the very important roles of E3 ligases, the relationships between E3 ligases and ubiquitinated substrate  proteins is investigated in this work. Besides, basing on protein-protein  interaction and functional domain, the E3 ligase regulatory networks is  analyzed to provide comprehensively understanding about how E3 ligase recognizes  ubiquitination substrate sites as well as its mechanism in the ubiquitin system. In this study, we propose an approach that incorporates  machine learning method with protein associations (including protein-protein  interaction, domain-domain interaction, E3 ligases - substrate specificities) to  reconstruct the ubiquitination regulatory networks. </p>
        <p align="justify"><strong><font size="14" color="#6600FF">Ubi</font><font size="14" color="#FF3300">Net</font></strong> is a knowledgebased system that can let users input a group of genes/proteins to be explored the ubiquitination network associated with the information of subcellular localization. In this study, a knowledgebase is developed to integrate experimentally verified data (protein ubiquitination, protein-protein interaction; domain-domain interaction, and E3 ligases - substrate specificities data) for constructing the E3 ligases - substrate ubiquitination regulatory networks in Human and Mouse.        </p>
   <form name='form' method='get' onSubmit="network_ubi.php" >
        <table width = 100% border=2 align=center cellpadding=10>
        <tr><td>
<style type="text/css">
.button {
        font-family: Verdana, Arial, sans-serif;
        display: inline-block;
        border: 1px solid #459300 ;
        padding: 5px 7px 5px 7px;
        color: #fff;
        font-size: 12px;
        cursor: pointer;
                }
                
.button:hover {
        text-decoration: none;
                }
                
.button:active {
        padding: 5px 7px 5px 7px;
}</style>
                
        <?
			//get the parameters
			$E3_name = $_GET['E3'];
			$quick_search = $_POST['keyword'];
			$substrate=$_POST['substrate'];
			$species = 'Homo sapiens (Human)';
			
			//$example = "WWP1_HUMAN,SMUF2_HUMAN,ITCH_HUMAN,MDM2_HUMAN";
			$example="WWP1_HUMAN\nITCH_HUMAN\nMDM2_HUMAN\nATN1_HUMAN\nCPSF6_HUMAN\nH2AW_HUMAN\nSPG20_HUMAN\nP53_HUMAN\nARRB2_HUMAN\nDDX58_HUMAN\nJUN_HUMAN\nNFE2_HUMAN\nATF4_HUMAN\nCTBP1_HUMAN\nEF1A1_HUMAN\nTS101_HUMAN\nKLF5_HUMAN\nSMAD5_HUMAN\nAKAP5_HUMAN\nFOXO3_HUMAN";
			//$example="WWP1\nITCH\nMDM2\nATN1\nCPSF6\nH2AW\nSPG20\nP53\nARRB2\nDDX58\nJUN\nNFE2\nATF4\nCTBP1\nEF1A1\nTS101\nKLF5\nSMAD5\nAKAP5\nFOXO3";
			
			echo "<table height =80% width=90% border=0 align=center>";
			echo "<tr align=left>";
			echo "<td >";
				echo "<font color='black'><b>Input a list of proteins IDs  (E3s or Substrates):</b></font><br>&nbsp;";
			
			if($quick_search != "")
				echo "<textarea class='input-xlarge span10' rows='6' cols='65' name='substrate[]' wrap='Off' >$quick_search</textarea><br>";
			else
				echo "<textarea class='input-xlarge span10' rows='6' cols='65' id = 'txtSubstrate' name='substrate[]' wrap='Off' >$example</textarea><br>";
			echo "</td>";
			
			
			echo "<td align='left' valign='top'>";
			echo "&nbsp;";
			echo "<font color='black'><b> Select the organism:</b></font><br>";
			
			echo "&nbsp;<br><table cellpadding='10' border='2' bordercolor='orange' width=75% height='100'><tr><td>";
			echo "<font color='black'>";
			echo "<label><input name='species' type='radio' value='Human' checked/>&nbsp;&nbsp; Homo sapiens (Human)</label><p></p>";
			echo "<label><input name='species' type='radio' value='Mouse' disabled/>&nbsp;&nbsp; Mus musculus (Mouse)</label><p></p>";
			echo "</font></td></tr></table>";
			echo "</td></tr>";
			
			echo "<tr><td colspan='3' align='left' valign='top'>";
			
			echo "</td></tr>";
			/*
			echo "<tr valign=top>";
			echo "<td width=45%>";
				echo "<button type=\"submit\" onclick=this.form.action=\"network_ubi.php\"><strong><b>Submit</b></strong></button>";
				echo "&nbsp;&nbsp;<button type=\"button\" onclick=\"clearFunction()\"><strong><b>Clear</b></strong></button>";
				echo "&nbsp;&nbsp;<button type=\"button\" onclick=\"exampleFunction()\"><strong><b>Example</b></strong></button>";
			echo "</td>";
			echo "</tr>";
			*/
				//echo "<input type=\"button\" style=\"border:none; width:112px; height:40px;  background-image: url(./images/Example.png); background-repeat: no-repeat;\" />";

			echo "<tr valign=top>";
			echo "<td width=45%>";
				echo "<input type='image' img src='./images/Submit1.png'  onclick=this.form.action='network_ubi1.php' value='Interacting Network';>";
				//echo "<input type=\"submit\" style=\"border:none; width:100px; height:35px;  background-image: url(./images/Submit.png); background-repeat: no-repeat;\" onclick=this.form.action=\"network_ubi.php\">";
				echo "&nbsp;&nbsp;<input type=\"button\" style=\"border:none; width:100px; height:36px;  background-image: url(./images/Clear1.png); background-repeat: no-repeat;\" onclick=\"clearFunction()\">";
				echo "&nbsp;&nbsp;<input type=\"button\" style=\"border:none; width:100px; height:36px;  background-image: url(./images/Example1.png); background-repeat: no-repeat;\" onclick=\"exampleFunction()\">";
			echo "</td>";
			echo "</tr>";
			echo "<tr><td colspan='3' align='left' valign='top'><br>";
			echo "<li><a href=\"net_case1.php\"><font color=\"#FF9900\"><strong>Case Study 1</font></a></strong>: The given list contains 20 substrate proteins, wherein 3 E3 ligases and 15 Ubi-substrate proteins</em>.</li>";
			echo "<li><a href=\"net_case2.php\"><font color=\"#FF9900\"><strong>Case Study 2</font></a></strong>: The given list contains only 3 E3 ligases (no Ubi-substrate proteins; no substrate proteins)</em>.</li>";
 			echo "<li><a href=\"net_case3.php\"><font color=\"#FF9900\"><strong>Case Study 3</font></a></strong>: The given list contains 15 substrate proteins (Ubi-substrate and non-Ubi-substrate proteins), but no any of E3 ligase</em>.</li>";
			echo "</td></tr>";
			echo "</table>";
        ?>
        <script>
			function clearFunction() {
				document.getElementById("txtSubstrate").value="";

			}
			function exampleFunction() {
				document.getElementById("txtSubstrate").value="WWP1_HUMAN\nITCH_HUMAN\nMDM2_HUMAN\nATN1_HUMAN\nCPSF6_HUMAN\nH2AW_HUMAN\nSPG20_HUMAN\nP53_HUMAN\nARRB2_HUMAN\nDDX58_HUMAN\nJUN_HUMAN\nNFE2_HUMAN\nATF4_HUMAN\nCTBP1_HUMAN\nEF1A1_HUMAN\nTS101_HUMAN\nKLF5_HUMAN\nSMAD5_HUMAN\nAKAP5_HUMAN\nFOXO3_HUMAN";
			}
		</script>
       
        <br>
        </td></tr>
        </table>
            
   </form>
    </blockquote>
   
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
