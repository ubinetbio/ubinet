<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/andreas01.css" media="screen" title="andreas01 (screen)" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<link rel="icon" href="images/UbiNet.ico" type="image/x-icon">
<title>UbiNet</title>
</head>

                   
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


<body><div id="wrap">

<?php
//---------------------top.html--------------------------//
include("top.html");
include("left_menu.html");
include("left_news.html");
?>

</div>
<div id="content">
        
        <hr>  
        <br /> <br />         
        <p align="justify"><strong><font size="6px" color="#6600FF">Ubi</font><font size="6px" color="#FF3300">Net</font></strong> is a knowledge-based system that could provide potential E3 ligases for ubiquitinated proteins by the information of protein-protein interactions and substrate site specificities. The UbiNet could help users to identify E3 ligase-mediated ubiquitination networks and their roles in biological processes. <em>The current databases of UbiNet contains <strong>499</strong> experimentally verified E3 ligases, <strong>14692</strong> ubiquitinated substrate proteins, <strong>430530</strong> data of protein-protein interaction, and <strong>2143</strong> data of E3-associated functional categories.</em></p>
         <br />
        <p align="justify"><strong>To reconstruct the networks, users just follows the steps as suggested by the pages</strong> :</p>
        <table width="98%" bordercolordark="#FFFFFF" bordercolorlight="#FFFFFF">
          <tbody>
            <tr>
              <td valign="top"><strong> 1.</strong></td>
              <td align="justify">   Input  a list of genes (containing E3 ligases, ubiquitinated substrate proteins, or  interacting proteins).</td>
            </tr>
            <tr>
              <td valign="top"><strong> 2.</strong></td>
              <td align="justify">   Select the organism (<em>At the current version of UbiNet 1.0; only human organism is provided!</em>). </td>
            </tr>
            <tr>
              <td valign="top"><strong> 3. </strong></td>
              <td align="justify">   Submit. </td>
            </tr>
          </tbody>
  </table>
        <p align="justify">If the query list contains only E3s, our system will  visualize networks of these E3s with all possible ubiquitinated substrate  proteins. Otherwise, our system will show networks between E3s ligases,  ubiqtuinated substrate proteins, and interacting protein in the given list. Two case studies (<a href="http://140.138.144.145/~ubinet/net_case1.php"><strong>Case Study 1</strong></a>; <a href="http://140.138.144.145/~ubinet/net_case2.php"><strong>Case Study 2</strong></a>) are provided at the bottom of the pages, users can quickly seek and investigate the regulatory networks through these two case studies.</p>
   <form name='form' method='get' onSubmit="network_ubi.php" >
        <table width = 100% border=2 align=center cellpadding=10>
        <tr><td>
                
        <?
			//get the parameters
			$E3_name = $_GET['E3'];
			$quick_search = $_POST['keyword'];
			$substrate=$_POST['substrate'];
			$species = 'Homo sapiens (Human)';
			
			//$example="WWP1_HUMAN\nITCH_HUMAN\nMDM2_HUMAN\nATN1_HUMAN\nCPSF6_HUMAN\nH2AW_HUMAN\nSPG20_HUMAN\nP53_HUMAN\nARRB2_HUMAN\nDDX58_HUMAN\nJUN_HUMAN\nNFE2_HUMAN\nATF4_HUMAN\nCTBP1_HUMAN\nEF1A1_HUMAN\nTS101_HUMAN\nKLF5_HUMAN\nSMAD5_HUMAN\nAKAP5_HUMAN\nFOXO3_HUMAN";
			//$example="WWP1\nITCH\nMDM2\nSMAD5\nCPSF6\nATN1\nKLF5\nNUMB\nARRB2\nJUN\nSNX9\nDDX58\nTUBB\nGNL3\nTAF1\nPHF20L1\nTP73\nNOTCH1\nAKAP5\nFOXO3\nHSP90AB1";
			
			$example="WWP1\nSMURF2\nMDM2\nSMAD5\nCPSF6\nATN1\nKLF5\nNUMB\nARRB2\nJUN\nEEF1G\nACOX3\nSKIL\nGNL3\nTAF1\nNFE2\nTP73\nSOCS6\nAKAP5\nFOXO3\nZNF638\nDAB2\nVHL\nMOB4\nHIF1A";
			//$example="MDM2\nWWP1\nITCH\nRNF8\nTUBB1\nPIM1\nRPL23\nTBCA\nRPL11\nTP73\nHIF1A\nCTBP1\nRTN4\nCPSF6\nKLF5\nNFE2\nDAZAP2\nZNF638\nSMAD5\nATN1\nERBB4\nJUN\nDDX58\nN4BP1\nSPG20\nARRB2\nPABPC1\nCFLAR\nSGK3\nNUMB";
			
			echo "<table height =100% width=100% border=0 align=center>";
			echo "<tr align=left>";
			echo "<td >";
				echo "<font color='black'><b>Input a group of genes:</b></font><br>&nbsp;";
			
			if($quick_search != "")
				echo "<textarea class='input-xlarge span10' rows='6' cols='70' name='substrate[]' wrap='Off' >$quick_search</textarea><br>";
			else
				echo "<textarea class='input-xlarge span10' rows='6' cols='70' id = 'txtSubstrate' name='substrate[]' wrap='Off' >$example</textarea><br>";
			echo "</td>";
			
			
			echo "<td align='left' valign='top'>";
			echo "&nbsp;";
			echo "<font color='black'><b> Select the organism:</b></font><br>";
			
			echo "&nbsp;<br><table cellpadding='10' border='2' bordercolor='orange' width=100% height='70%'><tr><td>";
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
			echo "<td width=45% >";
				echo "<input type='image' img src='./images/Submit1.png' align=\"top\" valign=\"top\" width=\"100px\" height=\"36px\"  onclick=this.form.action='network_ubi.php' value='Interacting Network';>";
				//echo "<input type=\"submit\" style=\"border:none; width:100px; height:35px;  background-image: url(./images/Submit.png); background-repeat: no-repeat;\" onclick=this.form.action=\"network_ubi.php\">";
				echo "&nbsp;&nbsp;<input type=\"button\" style=\"border:none; align:top; width:100px; height:36px;  background-image: url(./images/Clear1.png); background-repeat: no-repeat;\" onclick=\"clearFunction()\">";
				echo "&nbsp;&nbsp;<input type=\"button\" style=\"border:none; align:top; width:100px; height:36px;  background-image: url(./images/Example1.png); background-repeat: no-repeat;\" onclick=\"exampleFunction()\">";
			echo "</td>";
			echo "</tr>";
			echo "<tr><td colspan='3' align='left' valign='top'><br>";
			echo "<li><a href=\"net_case1.php\"><font color=\"#FF9900\"><strong>Case Study 1</font></a></strong>: The given list contains 21 substrate proteins, wherein 4 E3 ligases, 14 Ubi-substrate proteins, and 3 interacting proteins</em>.</li>";
			echo "<li><a href=\"net_case2.php\"><font color=\"#FF9900\"><strong>Case Study 2</font></a></strong>: The given list contains only 3 E3 ligases (no Ubi-substrate proteins; no interacting proteins)</em>.</li>";
 			//echo "<li><a href=\"net_case3.php\"><font color=\"#FF9900\"><strong>Case Study 3</font></a></strong>: The given list contains 15 substrate proteins (Ubi-substrate and non-Ubi-substrate proteins), but no any of E3 ligase</em>.</li>";
			echo "</td></tr>";
			echo "</table>";
        ?>
        <script>
			function clearFunction() {
				document.getElementById("txtSubstrate").value="";

			}
			function exampleFunction() {
				document.getElementById("txtSubstrate").value="WWP1\nSMURF2\nMDM2\nSMAD5\nCPSF6\nATN1\nKLF5\nNUMB\nARRB2\nJUN\nEEF1G\nACOX3\nSKIL\nGNL3\nTAF1\nNFE2\nTP73\nSOCS6\nAKAP5\nFOXO3\nZNF638\nDAB2\nVHL\nMOB4\nHIF1A";
			}
		</script>
       
        <br>
        </td></tr>
        </table>
            
   </form>
   
    </p> 
    
    
 </div> 
<?php
include("footer.html");
?>
</body>
</html>
