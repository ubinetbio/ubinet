<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/andreas01.css" media="screen" title="andreas01 (screen)" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<link href="images/UbiSite_icon.ico" rel="SHORTCUT ICON">
<title>RegUbi</title>
</head>

<style type="text/css">
<!--
.style37 {
	font-size: 14px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FFFFFF;
}
.style38 {
	color: #FF0066;
	font-weight: lighter;
}

table tr td.style11{
	border-width: 1px;
	border-style: solid;
	word-break:break-all; 
	border-color: #CCC; /*  #0F6;*/
	/*background: #E7E6E4;*/
		
}

-->
</style>

<body>

<?php
//---------------------top.html--------------------------//
include("top.html");
?>

<? include("left.php"); ?>
<? include("right.php"); ?>

<blockquote>
<div id="content">
	<?php
		$count2 = 0;
		$fi = fopen("./data/KEE_Pathway_Full.txt","r");
		while(!feof($fi))
		{
			$temp = fgets($fi);
			$E3_id[$count2]=strtok($temp,"\t");
			$Organism[$count2]=strtok("\t");
			$Resource[$count2]=strtok("\t");
			$TermID[$count2]=strtok("\t");
			$TermName[$count2]=strtok("\t");
			$Match[$count2]=strtok("\t");
			$In[$count2]=strtok("\t");
			$Subs[$count2]=strtok("\t");
			$Coverage[$count2]=strtok("\t");
			$P_value[$count2]=strtok("\t");
			$count2++;		
		}
		fclose($fi);	
	?>
	<p class="style38"><strong><a href="Pathway_case1.php" target="_blank">Pathway Case study 1</a>: </strong>    Lysine degradation - Reference pathway </p>
	<blockquote>
	  <blockquote>
	    <blockquote>
	      <p class="style38"><span class="style11">Entry: map00310; </span></p>
	      <p class="style38"><span class="style11">Class: Metabolism; Amino acid metabolism; </span></p>
	      <p class="style38"><span class="style11">Module: M00032 Lysine degradation, lysine =&gt; saccharopine =&gt; acetoacetyl-CoA)</span> </p>
        </blockquote>
      </blockquote>
  </blockquote>
	<p class="style38"><strong><a href="Pathway_case2.php" target="_blank">Pathway Case study 2</a>: </strong></p>
	<p class="style38">&nbsp;</p>
	<h2>All E3-Mediated pathway</h2>

		<hr />
        <table width="100%"  align="center" border="1" bordercolor="#666666" cellspacing="0" cellpadding="2">
		<tr bgcolor="#7B7B7B"> <td width="8%" align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>Order</b></font></td>
		<!--
        	<td width="12%" align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>ID</b></font></td>
        -->
        
        <td align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>E3_ID</b></font></td>
		<td align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>Organism</b></font></td>
		<td align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>Resource</b></font></td>
		<td align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>TermID</b></font></td>
		<td align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>TermName</b></font></td>
        <td align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>Match</b></font></td>
		<td align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>In</b></font></td>
		<td align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>Subs</b></font></td>
		<td align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>Coverage</b></font></td>
		<td align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>P_value</b></font></td>
		
	<?php	
        for($x=1;$x<$count2-1;$x++)
        {
            $order=$x;
			if ($x % 2 === 0) $cellcolor="#E8E8D0";
			else $cellcolor="#FFFFFF";			
				echo "<tr  bgcolor=".$cellcolor."> ";				
				echo "<td align=\"center\" class=\"style11\"> <font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\"><b>".$order."</b></font></td>";
				echo "<td align=\"center\" class=\"style11\"><font color=\"red\" face=\"Courier New, Courier, mono\"  size=\"2\"><a href=\"http://www.uniprot.org/uniprot/$E3_id[$x]\" target=\"_blank\" \">".$E3_id[$x]."</a></font></td>";
				echo "<td align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$Organism[$x]."</font></td>";
				echo "<td align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$Resource[$x]."</font></td>";
				echo "<td align=\"center\" class=\"style11\"><font color=\"red\" face=\"Courier New, Courier, mono\"  size=\"2\"><a href=\"http://www.genome.jp/kegg-bin/show_pathway?map$TermID[$x]\" target=\"_blank\" \">".$TermID[$x]."</a></font></td>";
				echo "<td align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$TermName[$x]."</font></td>";
				echo "<td align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$Match[$x]."</font></td>";
				echo "<td align=\"left\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$In[$x]."</font></td>";
				echo "<td align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$Subs[$x]."</font></td>";
				echo "<td align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$Coverage[$x]."</font></td>";
				echo "<td align=\"left\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\">".$P_value[$x]."</font></td>";
				echo "</tr>";
		}  
																									
			    
	?>
	</table>
       	
<?php
include("buttom.html");
?>

</div>
</blockquote>
</body>
</html>

