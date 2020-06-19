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
         <hr>&nbsp;
                    
        <p align="justify"><font class="txtTitle1"> Network analysis: Case study 2 - </font> <font class="txtTitle2">The given list contains only 3 E3 ligases (no Ubi-substrate proteins; no interacting proteins).</font></p>
		<p align="justify"><font class="txtTitle4"> (In this case study, the regulatory network, which contains interactions between all E3 ligases and all possible Ubi-subtrate proteins, will be constructed for the investigation) </font></p>
        
   	<form name='form' method='get' onSubmit="network_ubi.php" >
			<?
                //get the parameters
                $E3_name = $_GET['E3'];
                $quick_search = $_POST['keyword'];
                $substrate=$_POST['substrate'];
                $species = 'Homo sapiens (Human)';
				$example="NEDD4\nSTUB1\nPELI2"; // subs: 42+43+8
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
        <table width="98%" border="1"  cellpadding="0" cellspacing="0" bordercolor="#333333"  bgcolor="#FFFFFF">
          <tr class="tblHeader" bgcolor="#99CCFF" style="tblHeader">
            <td width="24" height="63" align="center" valign="middle"><strong>No.</strong></td>
            <td width="110" align="center" valign="middle"><strong>ID</strong></td>
            <td width="56" align="center" valign="middle"><strong>AC</strong></td>
            <td width="53" align="center" valign="middle"><strong>Gene Name</strong></td>
            <td width="73" align="center" valign="middle"><strong>Anotation</strong></td>
            <td width="177" align="center" valign="middle"><strong>E3: group-type/<br>
UbiSubstrate: Ubi-Sites</strong></td>
            <td width="511" align="center" valign="middle"><strong>PubMed Reference</strong></td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent color: #F00;">
            <td height="86" align="center" valign="middle"><span class="tblContent">1</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=NEDD4_HUMAN" target="_blank"><strong>NEDD4_HUMAN</strong></a></span></td>
            <td width="56" align="center" valign="middle"><span class="tblContent">P46934</span></td>
            <td align="center" valign="middle" style="color: #F00"><span class="tblContent"><strong>NEDD4</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">E3 ligase</span></td>
            <td align="center" valign="middle"><span class="tblContent">E3 HECT-type</span></td>
            <td align="center" valign="middle"><span class="tblContent">19808888; 20086093; 19953087; 15013426; 19193720; 18286479; 12907674; 19125695; 17592138; 17137798; 15060076; 19864419; 20855896; 17996703; 21338354; 21320486; 21212261; 20159449; 18772139; 19787053; 19797085; 19054764; 11598133; 15703212; 15082780; 20559325; 15581898</span></td>
          </tr>
         <tr bgcolor="#FFFFFF" style="tblContent">
            <td height="79" align="center" valign="middle"><span class="tblContent">2</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=CHIP_HUMAN" target="_blank"><strong>CHIP_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">Q9UNE7</span></td>
            <td align="center" valign="middle" style="color: #F00"><span class="tblContent"><strong>STUB1</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">E3 ligase</span></td>
            <td align="center" valign="middle"><span class="tblContent">E3 Other-type</span></td>
            <td align="center" valign="middle"><h1 class="tblContent"><span class="tblContent"> 17525155; 17873020; 18381433; 18655187; 18313385; 19103148; 19741096; 18922468; 18955503; 19706771; 15466472; 19642705; 19536328; 19020010; 19483080; 19153604; 19465479; 19406989; 15538384; 17178836; 16740632; 16280320; 14612456; 15761032; 21358815; 19940151; 21124777; 20924358; 19940115; 19913553; 20588253; 17963781; 20724525; 20075607; 17324930; 16940184; 16207813; 11557750; 12297498; 15781469</span></h1></td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td height="67" align="center" valign="middle"><span class="tblContent">3</span></td>
            <td align="center" valign="middle"><span class="tblContent"><a href="http://140.138.144.145/~ubinet/search_result.php?search_type=db_id&swiss_id=PELI2_HUMAN" target="_blank"><strong>PELI2_HUMAN</strong></a></span></td>
            <td align="center" valign="middle"><span class="tblContent">Q9HAT8</span></td>
            <td align="center" valign="middle" style="color: #F00"><span class="tblContent"><strong>PELI2</strong></span></td>
            <td align="center" valign="middle"><span class="tblContent">E3 ligase</span></td>
            <td align="center" valign="middle"><span class="tblContent">E3 RING-type</span></td>
            <td align="center" valign="middle"><span class="tblContent">16884718; 17997719</span></td>
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
