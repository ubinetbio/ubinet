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

<style type="text/css">
	.container #wrapper .row-fluid .span12 blockquote p strong {
		color: #00F;
		font-size: 16px;
	}
	.tblHeader{
		font-family:Verdana, Geneva, sans-serif;
		font-weight:bold;
		font-size:13px;
		color:#000;
		
	}
	.tblContent{
		font-family:Verdana, Geneva, sans-serif;
		font-weight:normal;
		font-size:11px;
		color:#000;
	}	
	.txtTitle1{
		font-family:Verdana, Geneva, sans-serif;
		font-weight:bold;
		font-size:16px;
		color:#00F;
	}
	.txtTitle2{
		font-family:Verdana, Geneva, sans-serif;
		font-weight:normal;
		font-size:14px;
		color: #000;
	}
	.txtTitle3{
		font-family:Verdana, Geneva, sans-serif;
		font-weight:bold;
		font-size:14px;
		color:#00F;
	}
	.txtTitle4{
		font-family:Verdana, Geneva, sans-serif;
		font-style:italic;
		font-weight:normal;
		font-size:13px;
		color:#F00;
	}
	
</style>


                   
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
	<? 
		include("top.html"); 

	?>
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
         <hr>&nbsp;
                    
        <p align="justify"><font class="txtTitle1"> Network analysis: Case study 1 - </font> <font class="txtTitle2">The given list contains 21 substrate proteins, wherein 4 E3 ligases, 14 Ubi-substrate proteins, and 3 interacting proteins.</font></p>
        <p align="justify"><font class="txtTitle4"> (In this case study, the regulatory network, which contains interactions between all E3 ligases and Ubi-subtrate/interacting proteins, will be constructed for the investigation) </font></p>

   	<form name='form' method='get' onSubmit="network_ubi.php" >
			<?
                //get the parameters
                $E3_name = $_GET['E3'];
                $quick_search = $_POST['keyword'];
                $substrate=$_POST['substrate'];
                $species = 'Homo sapiens (Human)';
                $example="SMURF2\nITCH\nMDM2\nVHL\nHIF1A\nCPSF6\nPIM1\nSKIL\nSPG20\nARRB2\nDDX58\nJUN\nACOX3\nATF4\nCTBP1\nPPM1D\nMAVS\nAKAP5\nFOXO3\nMOB4\nTP53";
				//$example="WWP1_HUMAN\nITCH_HUMAN\nMDM2_HUMAN\nATN1_HUMAN\nCPSF6_HUMAN\nH2AW_HUMAN\nSPG20_HUMAN\nP53_HUMAN\nARRB2_HUMAN\nDDX58_HUMAN\nJUN_HUMAN\nNFE2_HUMAN\nATF4_HUMAN\nCTBP1_HUMAN\nEF1A1_HUMAN\nTS101_HUMAN\nKLF5_HUMAN\nSMAD5_HUMAN\nAKAP5_HUMAN\nFOXO3_HUMAN";
                echo "<textarea class='input-xlarge span10' rows='6' cols='65' id = 'txtSubstrate' name='substrate[]' wrap='Off' hidden='true' >$example</textarea><br>";

				echo "<table cellpadding='10' border='2' bordercolor='orange' width=98% height='100'><tr><td><font color='black'>";
				echo "<input type='image' img src='./images/ConstructNetwork.png' height='30' width='200'  onclick=this.form.action='network_ubi.php' value='Interacting Network'><p></p>";
				echo "<li><a href=\"net_case1.php\"><strong>Case Study 1</strong></font></a>: The given list contains 20 substrate proteins, wherein 4 E3 ligases, 14 Ubi-substrate proteins, and 3 interacting proteins.</li>";
				echo "<li><a href=\"net_case2.php\"><strong>Case Study 2</strong></font></a>: The given list contains only 3 E3 ligases (no Ubi-substrate proteins; no substrate proteins).</li>";
		 		//echo "<li><a href=\"net_case3.php\"><strong>Case Study 3</strong></font></a>: The given list contains 15 substrate proteins (Ubi-substrate and non-Ubi-substrate proteins), but no any of E3 ligase</li>";

				echo "</font></td></tr></table>";
				echo "</td></tr>";
            ?>
 	</form>
 
        <p align="justify">&nbsp;</p>
        <p align="justify"><font class="txtTitle3">The details of the list as described in the table below</font>:</p>
        <table width="98%" bgcolor="#FFFFFF" border="1" bordercolor="#333333"  cellpadding="0" cellspacing="0">
          <tr class="tblHeader" bgcolor="#99CCFF" style="tblHeader">
            <td width="24" height="42" align="center" valign="middle"><strong>No.</strong></td>
            <td width="97" align="center" valign="middle"><strong>ID</strong></td>
            <td width="55" align="center" valign="middle"><strong>AC</strong></td>
            <td width="54" align="center" valign="middle"><strong>Gene Name</strong></td>
            <td width="77" align="center" valign="middle"><strong>Anotation</strong></td>
            <td width="249" align="center" valign="middle"><strong>E3: group-type/<br>
              UbiSubstrate: Ubi-Sites</strong></td>
            <td width="356" align="center" valign="middle"><strong>PubMed Reference</strong></td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td height="32" align="center" valign="middle"><span class="tblContent">1</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=SMUF2_HUMAN" target="_blank"><strong>SMUF2_HUMAN</strong></a></span></td>
            <td width="55" align="center" valign="middle"><span class="tblContent">Q9HAU4</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>SMURF2</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">E3 ligase</span></td>
            <td align="center" valign="middle"><span class="tblContent">E3: HECT-type</span></td>
            <td align="center" valign="middle" class="tblContent">16950122; 18927080; 19583833; 19255252; 20819168; 14562029; 20073064; 11389444; 11163210; 18671942; 14755250; 20858899</td>
          </tr>
         <tr bgcolor="#FFFFFF" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">2</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=ITCH_HUMAN" target="_blank"><strong>ITCH_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">Q96J02</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>ITCH</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">E3 ligase</span></td>
            <td align="center" valign="middle"><span class="tblContent">E3: HECT-type</span></td>
            <td align="center" valign="middle"><span class="tblContent">20650893; 18310276; 15013426; 19592251; 19580544; 19478092; 19433584; 19352540; 16387660; 19340001; 20300110; 19339247; 18278048; 17110928; 16087662; 16055720; 15946939; 20068034; 20818436; 18334649; 18922894; 15703212; 15082780; 21383157; 21212414; 21107885</span></td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">3</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=MDM2_HUMAN" target="_blank"><strong>MDM2_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">Q00987</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>MDM2</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">E3 ligase</span></td>
            <td align="center" valign="middle"><span class="tblContent">E3: RING-type</span></td>
            <td align="center" valign="middle"><span class="tblContent">17545634; 16866370; 18802403; 18981217; 19032150; 14642282; 19713960; 19703557; 19128510; 19683495; 18451149; 18665269; 18948082; 19372219; 19369353; 19363159; 18784257; 19448429; 19345326; 19176998; 19321440; 19247369; 19219073; 17377491; 11927554; 15975924; 15242646; 15456867; 14769800; 20592017; 16678796; 16170383; 17301054; 15577944; 21460856; 21093410; 20453884</span></td>
          </tr>
          <tr bgcolor="#FFFFFF" style="tblContent">
            <td height="37" align="center" valign="middle"><span class="tblContent">4</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=VHL_HUMAN" target="_blank"><strong>VHL_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">P40337</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>VHL</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">E3 ligase</span></td>
            <td align="center" valign="middle"><span class="tblContent">E3: Other-type</span></td>
            <td align="center" valign="middle" class="tblContent">20300531; 19228690; 12912922; 19695223; 19305426; 20026589; 11574546; 11739384; 12604794; 17350623; 15777842</td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td height="34" align="center" valign="middle"><span class="tblContent">5</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=CPSF6_HUMAN" target="_blank"><strong>CPSF6_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">Q16630</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>CPSF6</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle"><span class="tblContent">79;161;185</span></td>
            <td align="center" valign="middle"><span class="tblContent">79:21890473; 161:21890473; 185:21906983</span></td>
          </tr>
          <tr bgcolor="#FFFFFF" style="tblContent">
            <td height="35" align="center" valign="middle"><span class="tblContent">6</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=PIM1_HUMAN" target="_blank"><strong>PIM1_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">P11309</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>PIM1</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle"><span class="tblContent">96;158;274;285</span></td>
            <td align="center" valign="middle"><span class="tblContent">96:21890473; 158:21906983; 274:21906983; 285:21906983</span></td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td height="32" align="center" valign="middle"><span class="tblContent">7</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=SPG20_HUMAN" target="_blank"><strong>SPG20_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent"> Q8N0X7</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>SPG20</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent">29;47;62;82;362;362; 362;370;377;440;465;475;578</td>
            <td align="center" valign="middle" class="tblContent">29:21890473; 47:21890473; 62:21890473; 82:21890473; 362:18781797; 362:18781797; 20972266; 21890473; 21906983; 362:18781797; 370:21890473; 377:21890473; 440:21906983; 465:21890473; 475:21890473; 578:21890473</td>
          </tr>
           <tr bgcolor="#FFFFFF" style="tblContent">
            <td height="34" align="center" valign="middle"><span class="tblContent">8</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=ACOX3_HUMAN" target="_blank"><strong>ACOX3_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">O15254</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>ACOX3</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent">73;291;484</td>
            <td align="center" valign="middle" class="tblContent">73:21906983; 291:21906983; 484:21906983</td>
          </tr>
         <tr bgcolor="#CCCCCC" style="tblContent">
            <td height="32" align="center" valign="middle"><span class="tblContent">9</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=ARRB2_HUMAN" target="_blank"><strong>ARRB2_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">P32121</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>ARRB2</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle"><span class="tblContent">78;178</span></td>
            <td align="center" valign="middle"><span class="tblContent">78:21890473; 178:21906983</span></td>
          </tr>
           <tr bgcolor="#FFFFFF" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">10</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=DDX58_HUMAN" target="_blank"><strong>DDX58_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">O95786</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>DDX58</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle"><span class="tblContent">99;154; 164;169;172; 181;190; 193;644</span></td>
            <td align="center" valign="middle"><span class="tblContent">99:17392790; 154:19484123; 164:19484123; 169:17392790; 172:17392790; 19484123; 20071582; 20403326; 181:17392790; 190:17392790; 193:17392790; 644:21906983</span></td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td height="35" align="center" valign="middle"><span class="tblContent">11</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=JUN_HUMAN" target="_blank"><strong>JUN_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">P05412</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>JUN</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent"> 50</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">50:21890473</span></td>
          </tr>
          <tr bgcolor="#FFFFFF" style="tblContent">
            <td height="34" align="center" valign="middle"><span class="tblContent">12</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=SKIL_HUMAN" target="_blank"><strong>SKIL_HUMAN</strong></a></span></td>
            <td align="center" valign="middle" class="tblContent">P12757</td>
            <td align="center" valign="middle"><span class="tblContent"><strong>SKIL</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent">249;423;440;446;449</td>
            <td align="center" valign="middle" class="tblContent">249:21890473; 423:21890473;440:11691834; 446:11691834; 449:11691834</td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td height="36" align="center" valign="middle"><span class="tblContent">13</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=ATF4_HUMAN" target="_blank"><strong>ATF4_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">P18848</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>ATF4</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">45;55;75;88;335</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">45:21906983; 55:21906983; 75:21906983; 88:21906983; 335:21906983</span></td>
          </tr>
          <tr bgcolor="#FFFFFF" style="tblContent">
            <td height="33" align="center" valign="middle"><span class="tblContent">14</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=CTBP1_HUMAN" target="_blank"><strong>CTBP1_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">Q13363</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>CTBP1</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">273;280</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">273:21906983; 280:21890473; 21906983</span></td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td height="33" align="center" valign="middle"><span class="tblContent">15</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=PPM1D_HUMAN" target="_blank"><strong>PPM1D_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">O15297</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>PPM1D</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent"> 19;238</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">19:21906983;238:21890473;21906983</span></td>
          </tr>
           <tr bgcolor="#FFFFFF" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">16</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=MAVS_HUMAN" target="_blank"><strong>MAVS_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">Q7Z434</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>MAVS</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">362;461;500</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">362:20483786;461:20483786;500:19380491</span></td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td height="33" align="center" valign="middle"><span class="tblContent">17</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=HIF1A_HUMAN" target="_blank"><strong>HIF1A_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">Q16665</span></td>
            <td align="center" valign="middle"><span class="tblContent"><strong>HIF1A</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent">32;71;185;289; 297;377;389; 391;477; 532;532;538;538;547;674;709</td>
            <td align="center" valign="middle" class="tblContent">32:21906983; 71:21906983; 185:21906983; 289:21906983; 297:21906983; 377:21906983; 389:21906983; 391:21906983; 477:21906983; 532:10944113; 16500650; 16862177; 532:10944113; 538:16862177; 18781797; 21890473; 21906983; 538:18781797; 547:16862177; 674:21906983; 709:21906983</td>
          </tr>
           <tr bgcolor="#FFFFFF" style="tblContent">
             <td height="34" align="center" valign="middle"><span class="tblContent">18</span></td>
             <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=P53_HUMAN" target="_blank"><strong>P53_HUMAN</strong></a><a href="http://www.uniprot.org/uniprot/HIF1A_HUMAN"></a></span></td>
             <td align="center" valign="middle" class="tblContent">P04637</td>
             <td align="center" valign="middle" class="tblContent"><strong>TP53</strong></td>
             <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
             <td align="center" valign="middle" class="tblContent">101; 120; 132; 139; 164;  291; 292; 305; 319;  320; 321; 351; 357;  370;   372; 373; 381;  382;  386</td>
             <td align="center" valign="middle" class="tblContent">101:17371868; 21890473; 21906983; 120:17371868; 21906983; 132:17371868; 21890473; 139:17371868; 164:17371868; 21890473; 291:19536131; 292:19536131; 21890473; 305:19857530; 21890473; 21906983; 319:19927155; 17110336; 320:19857530; 19927155; 21890473; 17110336; 321:19857530; 19927155; 21890473; ; 17110336; 351:11046142; 357:21906983; 11046142; 370:11046142; 12426395; 17371868; 19619542; 19927155; 21731648; 17110336; 372:11046142; 11094089; 11971195; 12426395; 17371868; 19619542; 19927155; 21731648; 372:17110336; 373:11046142; 11094089; 11971195; 12426395; 17371868; 19619542; 19927155; 21731648;  17110330; 381:11046142; 11094089; 11971195; 12426395; 17371868; 19619542; 19927155; 21731648; 17110336; 382:11046142; 11094089; 11971195; 12426395; 17371868; 19619542; 19927155; 21731648; 386:10562557; 11046142; 17371868;  19927155; 21731648; 17110330; 17110336</td>
           </tr>
           <tr style="tblContent">
             <td height="34" align="center" valign="middle"><span class="tblContent">19</span></td>
             <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=AKAP5_HUMAN" target="_blank"><strong>AKAP5_HUMAN</strong></a><a href="http://www.uniprot.org/uniprot/HIF1A_HUMAN"></a></span></td>
             <td align="center" valign="middle"><span class="tblContent">P24588</span></td>
             <td align="center" valign="middle" class="tblContent"><strong>AKAP5</strong></td>
             <td align="center" valign="middle"><span class="tblContent">Interacting protein</span></td>
             <td align="center" valign="middle" class="tblContent">-</td>
             <td align="center" valign="middle" class="tblContent">Predicted as Ubiquitinated protein at positions: 50, 119</td>
           </tr>
           <tr bgcolor="#CCCCCC" style="tblContent">
             <td height="36" align="center" valign="middle"><span class="tblContent">20</span></td>
             <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=FOXO3_HUMAN" target="_blank"><strong>FOXO3_HUMAN</strong></a><a href="http://www.uniprot.org/uniprot/AKAP5_HUMAN"></a></span></td>
             <td align="center" valign="middle"><span class="tblContent">O43524</span></td>
             <td align="center" valign="middle" class="tblContent"><strong>FOXO3</strong></td>
             <td align="center" valign="middle"><span class="tblContent">Interacting protein</span></td>
             <td align="center" valign="middle" class="tblContent"><span class="tblContent">-</span></td>
             <td align="center" valign="middle" class="tblContent">Predicted as Ubiquitinated protein at positions: 176, 271, 569</td>
           </tr>
           <tr style="tblContent">
             <td height="36" align="center" valign="middle"><span class="tblContent">21</span></td>
             <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=PHOCN_HUMAN" target="_blank"><strong>PHOCN_HUMAN</strong></a><a href="http://www.uniprot.org/uniprot/FOXO3_HUMAN"></a></span></td>
             <td align="center" valign="middle"><span class="tblContent">Q9Y3A3</span></td>
             <td align="center" valign="middle" class="tblContent"><strong>MOB4</strong></td>
             <td align="center" valign="middle"><span class="tblContent">Interacting protein</span></td>
             <td align="center" valign="middle" class="tblContent"><span class="tblContent">-</span></td>
             <td align="center" valign="middle" class="tblContent">Predicted as Non-Ubiquitinated protein</td>
           </tr>
           </table>
        <br><br>
   		<li><a href=\"net_case1.php\"><strong>Case Study 1</strong></font></a>: The given list contains 21 substrate proteins, wherein 4 E3 ligases, 14 Ubi-substrate proteins, and 3 interacting proteins.</li>
		<li><a href=\"net_case2.php\"><strong>Case Study 2</strong></font></a>: The given list contains only 3 E3 ligases (no Ubi-substrate proteins; no interacting proteins).</li>
 		<!--
        <li><a href=\"net_case3.php\"><strong>Case Study 3</strong></font></a>: The given list contains 15 substrate proteins (Ubi-substrate and non-Ubi-substrate proteins), but no any of E3 ligase</li>
		-->
        <p align="justify">&nbsp; </p>
      
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
