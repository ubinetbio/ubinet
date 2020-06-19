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
<style type="text/css">
<!--
.style1 {
        font-size: 14px;
        text-align: justify;
}
.style2 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 14px; color: #003399;}
-->
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

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

                                                <h2>Network with Metabolic Pathway and Protein-Protein Interaction</h2>

                                </div>

                        </div>
                        <!-- end: Page Title -->

                        <!--start: Row -->
                <div class="row-fluid">

                                <div class="span12">

<?php
include "mysql_connection.inc";

$species = $_GET['species'];
$kinase_tmp = $_GET['kinase'];
$kinase_tmp = rtrim($kinase_tmp);
$string = $_GET['substrate'];

$string = str_replace(" ","",$string);

if(strstr($string[0],"\r")==true)
        $list = str_replace("\r\n",";",$string[0]);
else if (strstr($string[0],",")==true)
        $list = str_replace(",",";",$string[0]);
else
        $list = implode(";",$string);

$genes = array_unique(explode(";",$list));

if($kinase_tmp != "")
array_push($genes,$kinase_tmp);

set_time_limit(0);

$all_input = strtoupper(implode(",",$genes));

//print_r($genes);

// Get all of Pathway Names
$all_map_name=array();
$all_map_count=0;

$sql = "select distinct map_name from RegPhos_kegg_{$species}";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
$num_all_pathway = mysql_num_rows($result);


while($data = mysql_fetch_array($result))
{
	$all_map_name[rtrim($data[0])] = 0;
}
mysql_free_result($result);
sort($genes);
$input_string = implode(",",$genes);
echo "<table width='98%' cellpadding=5 align=center><tr><td class='style1'>";
echo "<b>Your input:<font color='red'> {$input_string}. </font></b><br>";
echo "<b>Organism:<font color='blue'> ".strtoupper($species)."</font></b>";
echo "<br><br></td></tr></table>";
//print_r($all_map_ID);

	//echo "<form action='network_pathway.php' method='GET'>";
	//echo "<input type='hidden' name='species' value='".$species."'>"; 


?>
        <div align="center">
                <table width="98%" border="1"  align="center" style="word-break:break-all" >

                    <tr bgcolor=#c1d0df class='style2' align='center'>
                      <td width="25%" height="30"> <div align="center"><b>Pathway</b></div></td>
                      <!--<td width="10%"><div align="center"><b>Sample Icon</b></div></td>-->
                      <td width="18%"><div align="center"><b>Number of Matched Genes</b></div></td>
                      <!--<td width="15%" scope="col"><div align="center">Member in pathyway</div></td>-->
                      <td> <div align="center"><b>Matched Genes</b></div></td>
                      <td width="20%"><div align="center"><b>Regulatory Network Analysis</b></div></td>
                    </tr>

<?
// Count of Pathway
$match_map_name=array();
$match_genes=array();
$match_map_count=0;

for($i=0 ; $i < count($genes) ; $i++){
$sql = "select distinct map_ID , map_name from RegPhos_kegg_{$species} where Gene_name = '{$genes[$i]}'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
$num_match_pathway = mysql_num_rows($result);

         if($num_match_pathway > 0)
         {
		while($data = mysql_fetch_array($result))
                {
			$all_map_name[$data[1]] += 1;
		}

		$match_map_count++;
		mysql_free_result($result);
		arsort($all_map_name);
         }

} // end while

$list_count = 0;
$tmp_map_name = array();
$tmp_times = array();

foreach($all_map_name as $key => $value)
{
	if($value > 0)
	{
		$tmp_map_name[$list_count] = $key;
		$tmp_times[$list_count] = $value;
		$list_count++;
	}
}

for($j=0 ; $j < $list_count ; $j++)
{
                echo "<tr class='style1'>";
		echo "<td>{$tmp_map_name[$j]}</td>";

		$sql = "select distinct map_ID from RegPhos_kegg_{$species} where map_name = \"{$tmp_map_name[$j]}\"";
		$result1 = mysql_query($sql) or die("Query failed : " . mysql_error());
		$data1 = mysql_fetch_array($result1);

		//echo "<td><img src='pathway/{$data1[0]}.png' height='30px'></td>";
                $sql = "select distinct map_ID from RegPhos_kegg_{$species} where map_name = \"{$tmp_map_name[$j]}\"";
                $result2 = mysql_query($sql) or die("Query failed : " . mysql_error());
                $data2 = mysql_fetch_array($result2);

                echo "<td align=center>$tmp_times[$j]</td>";
		
		$sql2 = "select distinct Gene_name from RegPhos_kegg_{$species} where map_name = \"{$tmp_map_name[$j]}\" order by Gene_name";
                $result3 = mysql_query($sql2) or die("Query failed : " . mysql_error());
                
		echo "<td>";
		$tmp ="";
		while($data3 = mysql_fetch_array($result3))
		{
			//print_r($data3);
			$tmp ="";
			$tmp = rtrim(strtoupper($data3[0]));
			//if(stripos($list,"$tmp","0") != false)
			//$tmp = rtrim(strtoupper($tmp));
			$list = rtrim(strtoupper($list));
			if(ereg($tmp,$all_input) != false)
				echo "<font><b>$tmp\t</b></font>";
			//else
			//	echo "$tmp\t";

		}

		echo "</td>";
                //echo "<input type='hidden' name='path' value='{$data2[0]}'>";
                echo "<td><div align='center'><input type='submit' value='Construct' align='middle' onclick=self.location.href='network_pathway.php?species={$species}&path={$data2[0]},{$input_string}' /></div></td>";
		echo "</tr>";
}


mysql_free_result($result2);
mysql_free_result($result3);
?>

                </table>
        </div>
</form>

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

