<?php

//get the parameter
$ID = $_GET['ID'];
$position = $_GET['position'];
$PTM = $_GET['PTM'];

?>
<table width="800" border=1 cellspacing=0 cellpadding=3 bordercolordark=#ffffff bordercolorlight=#929292>
			<tr> 
				<td colspan="8" height="18" background="images/index_06.gif"> <font color="#005b90" face="Arial, Helvetica, sans-serif" size="3"><b>Predictive Results
					</font></td>
			</tr>
			<tr bgcolor=#c1d0df> 
				<td> 
				  <div align="center">
					<p><font color="#666666" size="2"><b>Location (AA)</b></font></p>
				  </div>
				</td>
				<td> 
				  <div align="center"> <font color="#666666"><b><font size="2">Modification</font></b></font></div>
				</td>
				<td> 
				  <div align="center"> <font color="#666666"><b><font size="2">Substrate Site</font></b></font></div>
				</td>
				<td> 
				  <div align="center">
					<font color="#666666"><b><font size="2">HMMER </font></b></font><br>
					<font color="#666666"><b><font size="2">Bit Score</font></b></font>
				  </div>
				</td>
				<td> 
				  <div align="center"><font color="#666666"><b><font size="2">E-value</font></b></font></div>
				</td>
				<td><div align="center"><font color="#666666"><b><font size="2">Predictive Models</font></b></font></div></td>
			</tr>
<?
//connect to mysql database
$link = mysql_connect("localhost", "DB", "bidlab203") or die("Could not connect : " . mysql_error());
mysql_select_db("dbPTM2") or die("Could not select database");

//get the sequence
$sequence = "";
$sql = "select sequence from Swiss_sequence where ID = '".$ID."'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
while($data = mysql_fetch_array($result)) 
{
	$sequence = $data[0];
}

//get the PTM
$sql = "select * from Swiss_PTM_Pr_Sp100 where ID = '$ID' and position = $position and description = '$PTM'";
$result = mysql_query($sql) or die("Query failed : " . mysql_error());
while($data = mysql_fetch_array($result)) 
{
	echo "<tr align=center class=style11>";
	echo "<td>".$data[1]."</td>";
	echo "<td>".$PTM."</td>";
	echo "<td align='center'>".substr($sequence,$data[1]-5,4)."<font color=blue><b>".substr($sequence,$data[1]-1,1)."</b></font>".substr($sequence,$data[1],4)."</td>";
	echo "<td>".$data[2]."</td>";
	echo "<td>".$data[3]."</td>";
	echo "<td><a href='Swiss_PTM_Pr_Model/".$PTM.".hmm'><img src='Swiss_PTM_Pr_Model/".$PTM.".png' width='240' height='80'></a></td>";
				
}
?>

</table>