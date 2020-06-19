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
		font-size:10px;
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
                    
        <p align="justify"><font class="txtTitle1"> Network analysis: Case study 3 - </font> <font class="txtTitle2">The given list contains 15 substrate proteins (Ubi-substrate and non-Ubi-substrate proteins), but no any of E3 ligase.</font></p>
        <p align="justify"><font class="txtTitle4"> (In this case study, the regulatory network, which contains interactions between Ubi-subtrate and non-Ubi-substrate proteins, will be constructed for the investigation) </font></p>

   	<form name='form' method='get' onSubmit="network_ubi_case3.php" >
			<?
                //get the parameters
                $E3_name = $_GET['E3'];
                $quick_search = $_POST['keyword'];
                $substrate=$_POST['substrate'];
                $species = 'Homo sapiens (Human)';
                $example="H2AW_HUMAN\nSPG20_HUMAN\nP53_HUMAN\nARRB2_HUMAN\nDDX58_HUMAN\nJUN_HUMAN\nNFE2_HUMAN\nATF4_HUMAN\nCTBP1_HUMAN\nEF1A1_HUMAN\nTS101_HUMAN\nKLF5_HUMAN\nSMAD5_HUMAN\nAKAP5_HUMAN\nFOXO3_HUMAN";
                echo "<textarea class='input-xlarge span10' rows='6' cols='65' id = 'txtSubstrate' name='substrate[]' wrap='Off' hidden='true' >$example</textarea><br>";

				echo "<table cellpadding='10' border='2' bordercolor='orange' width=98% height='100'><tr><td><font color='black'>";
				echo "<input type='image' img src='./images/ConstructNetwork.png' height='30' width='200'  onclick=this.form.action='network_ubi_case3.php' value='Interacting Network'><p></p>";
				echo "<li><a href=\"net_case1.php\"><strong>Case Study 1</strong></font></a>: The given list contains 20 substrate proteins, wherein 3 E3 ligases and 15 Ubi-substrate proteins</li>";
				echo "<li><a href=\"net_case2.php\"><strong>Case Study 2</strong></font></a>: The given list contains only 3 E3 ligases (no Ubi-substrate proteins; no substrate proteins)</li>";
		 		echo "<li><a href=\"net_case3.php\"><strong>Case Study 3</strong></font></a>: The given list contains 15 substrate proteins (Ubi-substrate and non-Ubi-substrate proteins), but no any of E3 ligase</li>";

				echo "</font></td></tr></table>";
				echo "</td></tr>";
            ?>
 	</form>
 
        <p align="justify">&nbsp;</p>
        <p align="justify"><font class="txtTitle3">The details of the list as described in the table below</font>:</p>
        <table  bgcolor="#FFFFFF" border="2" bordercolor="#333333"  cellpadding="0" cellspacing="0">
          <tr class="tblHeader" bgcolor="#99CCFF" style="tblHeader">
            <td width="24" height="41" align="center" valign="middle"><strong>No.</strong></td>
            <td width="120" align="center" valign="middle"><strong>ID</strong></td>
            <td width="61" align="center" valign="middle"><strong>AC</strong></td>
            <td width="53" align="center" valign="middle"><strong>Gene Name</strong></td>
            <td width="84" align="center" valign="middle"><strong>Anotation</strong></td>
            <td width="328" align="center" valign="middle"><strong>E3 group/Ubi-Sites</strong></td>
            <td width="372" align="center" valign="middle"><strong>PubMed Reference</strong></td>
          </tr>
          <tr bgcolor="#FFFFFF" style="tblContent">
            <td height="35" align="center" valign="middle"><span class="tblContent">1</span></td>
            <td align="center" valign="middle"><span class="tblContent">H2AW_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">Q9P0M6</span></td>
            <td align="center" valign="middle"><span class="tblContent">H2AW</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle"><span class="tblContent">116;123;246;332</span></td>
            <td align="center" valign="middle"><span class="tblContent">116:21906983;123:21906983;246:21890473;332:21890473</span></td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">2</span></td>
            <td align="center" valign="middle"><span class="tblContent">SPG20_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">Q8N0X7</span></td>
            <td align="center" valign="middle"><span class="tblContent">SPG20</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle"><span class="tblContent">29;47;62;82;362;362;362;370;377;440;465;475;578</span></td>
            <td align="center" valign="middle"><span class="tblContent">29:21890473; 47:21890473; 62:21890473; 82:21890473; 362:18781797; 362:18781797; 20972266; 21890473; 21906983; 362:18781797; 370:21890473; 377:21890473; 440:21906983; 465:21890473; 475:21890473; 578:21890473</span></td>
          </tr>
           <tr bgcolor="#FFFFFF" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">3</span></td>
            <td align="center" valign="middle"><span class="tblContent">P53_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">P04637</span></td>
            <td align="center" valign="middle"><span class="tblContent">P53</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle"><span class="tblContent">101; 120; 132; 139; 164; 291; 291; 292; 292; 305; 319; 319; 320; 320; 321; 321; 351; 357; 357; 370; 370; 372; 372; 373; 373; 381; 381; 382; 386; 386; 386</span></td>
            <td align="center" valign="middle"><span class="tblContent">101:17371868; 21890473; 21906983; 120:17371868; 21906983; 132:17371868; 21890473; 139:17371868; 164:17371868; 21890473; 291:19536131; 291:19536131; 292:19536131; 292:19536131; 21890473; 305:19857530; 21890473; 21906983; 319:19927155; 319:17110336; 320:19857530; 19927155; 21890473; 320:17110336; 321:19857530; 19927155; 21890473; 321:17110336; 351:11046142; 357:21906983; 357:11046142; 370:11046142; 12426395; 17371868; 19619542; 19927155; 21731648; 370:17110336; 372:11046142; 11094089; 11971195; 12426395; 17371868; 19619542; 19927155; 21731648; 372:17110336; 373:11046142; 11094089; 11971195; 12426395; 17371868; 19619542; 19927155; 21731648; 373:11094089; 17110330; 381:11046142; 11094089; 11971195; 12426395; 17371868; 19619542; 19927155; 21731648; 381:17110336; 382:11046142; 11094089; 11971195; 12426395; 17371868; 19619542; 19927155; 21731648; 386:10562557; 11046142; 17371868; 19619542; 19927155; 21731648; 386:11046142; 17110330; 386:17110336</span></td>
          </tr>
         <tr bgcolor="#CCCCCC" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">4</span></td>
            <td align="center" valign="middle"><span class="tblContent">ARRB2_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">P32121</span></td>
            <td align="center" valign="middle"><span class="tblContent">ARRB2</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle"><span class="tblContent">78;178</span></td>
            <td align="center" valign="middle"><span class="tblContent">78:21890473; 178:21906983</span></td>
          </tr>
           <tr bgcolor="#FFFFFF" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">5</span></td>
            <td align="center" valign="middle"><span class="tblContent">DDX58_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">O95786</span></td>
            <td align="center" valign="middle"><span class="tblContent">DDX58</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle"><span class="tblContent">99;154;164;169;172;181;190;193;644</span></td>
            <td align="center" valign="middle"><span class="tblContent">99:17392790; 154:19484123; 164:19484123; 169:17392790; 172:17392790; 19484123; 20071582; 20403326; 181:17392790; 190:17392790; 193:17392790; 644:21906983</span></td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">6</span></td>
            <td align="center" valign="middle"><span class="tblContent">JUN_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">P05412</span></td>
            <td align="center" valign="middle"><span class="tblContent">JUN</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent"> 50</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">50:21890473</span></td>
          </tr>
          <tr bgcolor="#FFFFFF" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">7</span></td>
            <td align="center" valign="middle"><span class="tblContent">NFE2_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">Q16621</span></td>
            <td align="center" valign="middle"><span class="tblContent">NFE2</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">108;137;215;234;241</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">108:19966288; 137:19966288; 215:19966288; 234:19966288; 241:19966288</span></td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">8</span></td>
            <td align="center" valign="middle"><span class="tblContent">ATF4_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">P18848</span></td>
            <td align="center" valign="middle"><span class="tblContent">ATF4</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent">45;55;75;88;335</td>
            <td align="center" valign="middle" class="tblContent">45:21906983; 55:21906983; 75:21906983; 88:21906983; 335:21906983</td>
          </tr>
          <tr bgcolor="#FFFFFF" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">9</span></td>
            <td align="center" valign="middle"><span class="tblContent">CTBP1_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">Q13363</span></td>
            <td align="center" valign="middle"><span class="tblContent">CTBP1</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent">273;280</td>
            <td align="center" valign="middle" class="tblContent">273:21906983; 280:21890473; 21906983</td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">10</span></td>
            <td align="center" valign="middle"><span class="tblContent">EF1A1_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">P68104</span></td>
            <td align="center" valign="middle"><span class="tblContent">EF1A1</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent">41; 44; 84; 146; 154; 165; 172; 179; 180; 219; 244; 255; 273; 318; 385; 386; 392; 395; 408; 439; 444; 450</td>
            <td align="center" valign="middle" class="tblContent">41:21890473; 44:21906983; 84:21906983; 146:21890473; 21906983; 154:21906983; 165:21906983; 172:20639865; 21890473; 21906983; 179:21906983; 180:21906983; 219:21906983; 244:20639865; 255:20639865; 20972266; 21890473; 21906983; 273:20639865; 21890473; 21906983; 318:21906983; 385:21906983; 386:21906983; 392:21890473; 21906983; 395:21890473; 408:21906983; 439:21890473; 21906983; 444:21906983; 450:21906983</td>
          </tr>
           <tr bgcolor="#FFFFFF" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">11</span></td>
            <td align="center" valign="middle"><span class="tblContent">TS101_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">Q99816</span></td>
            <td align="center" valign="middle"><span class="tblContent">TS101</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent"> 237; 257; 361</td>
            <td align="center" valign="middle" class="tblContent"> 237:21890473; 257:21890473; 361:21890473</td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">12</span></td>
            <td align="center" valign="middle"><span class="tblContent">KLF5_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">Q13887</span></td>
            <td align="center" valign="middle"><span class="tblContent">KLF5</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent">31</td>
            <td align="center" valign="middle" class="tblContent">31:21906983</td>
          </tr>
           <tr bgcolor="#FFFFFF" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">13</span></td>
            <td align="center" valign="middle"><span class="tblContent">SMAD5_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">Q99717</span></td>
            <td align="center" valign="middle"><span class="tblContent">SMAD5</span></td>
            <td align="center" valign="middle"><span class="tblContent">Ubiquitinated substrate</span></td>
            <td align="center" valign="middle" class="tblContent">418</td>
            <td align="center" valign="middle" class="tblContent">418:21890473</td>
          </tr>
          <tr bgcolor="#CCCCCC" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">14</span></td>
            <td align="center" valign="middle"><span class="tblContent">AKAP5_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">P24588</span></td>
            <td align="center" valign="middle"><span class="tblContent">AKAP5</span></td>
            <td align="center" valign="middle"><span class="tblContent">Substrate protein</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">-</span></td>
            <td align="center" valign="middle" class="tblContent">-</td>
          </tr>
           <tr bgcolor="#FFFFFF" style="tblContent">
            <td align="center" valign="middle"><span class="tblContent">15</span></td>
            <td align="center" valign="middle"><span class="tblContent">FOXO3_HUMAN</span></td>
            <td align="center" valign="middle"><span class="tblContent">O43524</span></td>
            <td align="center" valign="middle"><span class="tblContent">FOXO3</span></td>
            <td align="center" valign="middle"><span class="tblContent">Substrate protein</span></td>
            <td align="center" valign="middle" class="tblContent"><span class="tblContent">-</span></td>
            <td align="center" valign="middle" class="tblContent">-</td>
          </tr>
        </table>
        <br><br>
   		<li><a href=\"net_case1.php\"><strong>Case Study 1</strong></font></a>: The given list contains 20 substrate proteins, wherein 3 E3 ligases and 15 Ubi-substrate proteins</li>
		<li><a href=\"net_case2.php\"><strong>Case Study 2</strong></font></a>: The given list contains only 3 E3 ligases (no Ubi-substrate proteins; no substrate proteins)</li>
 		<li><a href=\"net_case3.php\"><strong>Case Study 3</strong></font></a>: The given list contains 15 substrate proteins (Ubi-substrate and non-Ubi-substrate proteins), but no any of E3 ligase</li>

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
