<?php
// Start the session
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/andreas01.css" media="screen" title="andreas01 (screen)" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<link rel="icon" href="images/UbiNet.ico" type="image/x-icon">
<title>UbiNet</title>
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

<body><div id="wrap">

<?php
//---------------------top.html--------------------------//
include("top.html");
include("left_menu.html");
?>
</div>

<br />


<div id="content">
	<?php
		
		
		$e3list=$_SESSION ["e3list"];
		$index = $_GET["index"]-1;
	
		$sub_list = array(); 
		$ppi_resource_list = array(); 
		$ppi_pubid_list = array(); 
		
		include "mysql_connection.inc";
    
		// Get all substrates which are recognized by this E3
		$sql = "select distinct Sub_ID,PPI_Resource, PPI_PubID from final_Interaction_E3_Sub_PPI_Human_No_String where E3_ID = '".$e3list[$index]."'";
		$result = mysql_query($sql) or die("Query failed : " . mysql_error());
 		 	 
		$num_rows = mysql_num_rows($result);
		
      	$count=0;
		if($num_rows > 0)
         {
               $count=$num_rows;
					while($data = mysql_fetch_array($result)){
	                 $sub_list[count($sub_list)] = $data[0];
						  $ppi_resource_list[count($ppi_resource_list)] = $data[1];
						  $ppi_pubid_list[count($ppi_pubid_list)] = $data[2];
					}
         }
		
		$stt="List of substrate proteins which are recognized (PPI) by E3 ligase: <strong>".$e3list[$index]."</strong>"." (".$count." proteins)";
		echo $stt;
		
		//<==Get parameters for the interacting network
		$param="substrate%5B%5D=".$e3list[$index];
		include "mysql_connection.inc";
		$subs=array(); 
		$UbiSubstrate_UbiSites=array();
		$UbiSubstrate_PubID=array();
		$ppi_resource=array(); 
		$ppi_pub_id=array();
		
		// Get all substrates which are recognized by this E3
		$sql = "select Sub_ID, Sub_UbiSites, Sub_PubID, PPI_Resource, PPI_PubID from final_Interaction_E3_Sub_PPI_Human_No_String where E3_ID = '".$e3list[$index]."'";
		$result = mysql_query($sql) or die("Query failed : " . mysql_error());
		$dd=0;
		while($data = mysql_fetch_array($result)){
			$subs[count($subs)] = $data[0];
			$st=$data[0];
			$UbiSubstrate_UbiSites[$dd] =$data[1];
			$UbiSubstrate_PubID[$dd] =$data[2];
			$ppi_resource[$dd] = $data[3];
			$ppi_pub_id[$dd] = $data[4];
			$dd++;
			$param=$param."%0D%0A".$st;
		  }
	  
		$param=$param."&species=Human&x=54&y=22";
		//print_r($subs);

		echo "&nbsp &nbsp &nbsp";
		echo "<a href=\"interacting_network.php?".$param."\" target=\"_blank\" \"><strong><font color=green>Construct Network </font></strong></a>";
			
		 
	?>
   
	<p class="style38"> </p>

		<hr />
        <table width="100%"  align="center" border="1" bordercolor="#666666" cellspacing="0" cellpadding="2">
		<tr bgcolor="#7B7B7B"> 
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>No.</b></font></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>E3_ID</b></font></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>Sub_ID</b></font></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>Sub_UbiSites</b></font></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>Sub_UbiPubIDs</b></font></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>PPI_Resource</b></font></td>
            <td  align="center" class="style11" style="padding: 10px 2px;"><font color=white><b>PPI_PubID</b></font></td>
        <?php	
        for($x=0;$x<$count;$x++)
        {
			if (($x+1) % 2 === 0) $cellcolor="#E8E8D0";
			else $cellcolor="#FFFFFF";
						
			echo "<tr  bgcolor=".$cellcolor."> ";				
			echo "<td width= 4% align=\"center\" class=\"style11\"> <font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\"><b>".($x+1)."</b></font></td>";
			//echo "<td width= 12% align=\"center\" class=\"style11\"><font color=\"red\" face=\"Courier New, Courier, mono\"  size=\"2\"><a href=\"http://www.uniprot.org/uniprot/$e3list[$index]\" target=\"_blank\" \">".$e3list[$index]."</a></font></td>";
			//echo "<td width= 12% align=\"center\" class=\"style11\"><font color=\"red\" face=\"Courier New, Courier, mono\"  size=\"2\"><a href=\"http://www.uniprot.org/uniprot/$e3list[$index]\" target=\"_blank\" \">".$e3list[$index]."</a></font></td>";
			echo "<td width= 12% align=\"center\" class=\"style11\"><font color=\"red\" face=\"Courier New, Courier, mono\"  size=\"2\"><a href=search_result.php?search_type=db_id&swiss_id=$e3list[$index] target=\"_blank\" \">".$e3list[$index]."</a></font></td>";
			//echo "<td width= 12% align=\"center\" class=\"style11\"><font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\"><a href=\"http://www.uniprot.org/uniprot/$sub_list[$x]\" target=\"_blank\" \">".$sub_list[$x]."</font></td>";
			echo "<td width= 12% align=\"center\" class=\"style11\"><font color=\"red\" face=\"Courier New, Courier, mono\"  size=\"2\"><a href=search_result.php?search_type=db_id&swiss_id=$sub_list[$x] target=\"_blank\" \">".$sub_list[$x]."</a></font></td>";
			echo "<td width= 16% align=\"center\" class=\"style11\"> <font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\"><b>".$UbiSubstrate_UbiSites[$x]."</b></font></td>";
			echo "<td width= 26% align=\"center\" class=\"style11\"> <font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\"><b>".$UbiSubstrate_PubID[$x]."</b></font></td>";
			echo "<td width= 13% align=\"center\" class=\"style11\"> <font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\"><b>".$ppi_resource_list[$x]."</b></font></td>";
			echo "<td width= 17% align=\"center\" class=\"style11\"> <font color=\"#000000\" face=\"Courier New, Courier, mono\" size=\"2\"><b>".$ppi_pubid_list[$x]."</b></font></td>";
			echo "</tr>";
		}  
																									
		// destroy the session
		//session_destroy(); 	    
	?>
	</table>
       	


</div>
<?php
include("footer.html");
?>
</body>
</html>

