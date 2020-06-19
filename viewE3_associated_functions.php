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
<link href="images/UbiSite_icon.ico" rel="SHORTCUT ICON">
<title>UbiNet</title>
</head>
<hr />
<style type="text/css">

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
.styleTblVal {
	font-size: 12px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000 ;
}
.styleTableHeader {
	font-size: 14px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	/*color: #00F; */
 	color: #FFFFFF;
}
table tr td.style11{
	border-width: 1px;
	border-style: solid;
	word-break:break-all; 
	border-color: #CCC; /*  #0F6;*/
	/*background: #E7E6E4;*/
		
}


</style>

<body><div id="wrap">

<?php
//---------------------top.html--------------------------//
include("top.html");
?>

<blockquote>
<div id="content">
	<?php
		include "mysql_connection.inc";
			

		// Get informations for E3-associated functional category
		$list_E3_ID=array();
		$list_Type=array();
		$list_Category=array();
		$list_Term_ID=array();
		$list_Term_Name=array();
		$list_P_Value=array();
		
		$list_Num_Subs=array();
		
		$list_Pathway_Resource=array();
		$list_Pathway_Term_ID=array();
		$list_Pathway_Term_Name=array();
		
		$list_Disease_Category=array();
		$list_Disease_Term_ID=array();
		$list_Disease_Term_Name=array();
		
		$list_Process_Category=array();
		$list_Process_Term_ID=array();
		$list_Process_Term_Name=array();
		
		$list_Localization_Category=array();
		$list_Localization_Term_ID=array();
		$list_Localization_Term_Name=array();
		
		$list_Function_Category=array();
		$list_Function_Term_ID=array();
		$list_Function_Term_Name=array();
		
		$list_Complex_Category=array();
		$list_Complex_Term_ID=array();
		$list_Complex_Term_Name=array();
		
		$list_Family_Category=array();
		$list_Family_Term_ID=array();
		$list_Family_Term_Name=array();
		
		$sql3 = "select E3_ID,Type,Category,Term_ID,Term_Name,P_Value from E3_Associated_Functional_Category";
		$result3 = mysql_query($sql3) or die("Query failed : " . mysql_error());
        $num_rows3 = mysql_num_rows($result3);
		//print_r($num_rows3);
		
		if($num_rows3 > 0)
         {
			 $idx=0;
			 while($data3 = mysql_fetch_array($result3))
			 {
				  $list_E3_ID[$idx]=$data3[0];
				  $list_Type[$idx]=$data3[1];
				  $list_Category[$idx]=$data3[2];
				  $list_Term_ID[$idx]=$data3[3];
				  $list_Term_Name[$idx]=$data3[4];
				  $list_P_Value[$idx]=$data3[5];
				  $idx++;
			 }
         }

		$num_all=count($list_E3_ID);;
		$num_Pathway=100;
		$num_Disease=44;
		$num_CellularProcess=1059;
		$num_CellularLocalization=328;
		$num_MolecularFunction=293;
		$num_ProteinComplex=116;
		$num_ProteinFamily=203;
		
		// Get the number of proteins which were recognized by E3s
		
		$unique_E3_ID=array();
		$unique_E3_ID=array_unique($list_E3_ID);
		//echo count($unique_E3_ID);
		
		for($i=0;$i<count($list_E3_ID);$i++){
			
			$sql2 = "select distinct UbiSubstrate_ID from Interaction_E3_UbiSubstrate_Human_Final where E3_ID = '$list_E3_ID[$i]'";
			
			$result2 = mysql_query($sql2) or die("Query failed : " . mysql_error());
			$num_rows2 = mysql_num_rows($result2);
			
			if($num_rows2 > 0){
                 $list_Num_Subs[$i]=$num_rows2;
				 //$Networks[$i]="Construct";
			}else{
				 $list_Num_Subs[$i]=0;
				 //$Networks[$i]="---";
			}
			           
		}			
		 
		 
		 
		/*
		for($i=0;$i<$num_all;$i++)
		{
			if(strcmp($list_E3_ID[$i],"Pathway")==0) $num_Pathway++;
			if(strcmp($list_E3_ID[$i],"Disease")==0) $num_Disease++;
			if(strcmp($list_E3_ID[$i],"CellularProcess")==0) $num_CellularProcess++;
			if(strcmp($list_E3_ID[$i],"CellularLocalization")==0) $num_CellularLocalization++;
			if(strcmp($list_E3_ID[$i],"MolecularFunction")==0) $num_MolecularFunction++;
			if(strcmp($list_E3_ID[$i],"ProteinComplex")==0) $num_ProteinComplex++;	
			if(strcmp($list_E3_ID[$i],"ProteinFamily")==0) $num_ProteinFamily++;
		}
		*/
		
		
		// Initialization
		for($i=0;$i<$num_all;$i++)
		{
		
			$list_Pathway_Resource[$i]="-";
			$list_Pathway_Term_ID[$i]="-";
			$list_Pathway_Term_Name[$i]="-";
			
			$list_Disease_Category[$i]="-";
			$list_Disease_Term_ID[$i]="-";
			$list_Disease_Term_Name[$i]="-";
			
			$list_Process_Category[$i]="-";
			$list_Process_Term_ID[$i]="-";
			$list_Process_Term_Name[$i]="-";
			
			$list_Localization_Category[$i]="-";
			$list_Localization_Term_ID[$i]="-";
			$list_Localization_Term_Name[$i]="-";
			
			$list_Function_Category[$i]="-";
			$list_Function_Term_ID[$i]="-";
			$list_Function_Term_Name[$i]="-";
			
			$list_Complex_Category[$i]="-";
			$list_Complex_Term_ID[$i]="-";
			$list_Complex_Term_Name[$i]="-";
			
			$list_Family_Category[$i]="-";
			$list_Family_Term_ID[$i]="-";
			$list_Family_Term_Name[$i]="-";
		}
		
		
		
		  
		$id1=0;
		$id2=$num_Pathway;
		for($i=$id1;$i<$id2;$i++){
			$list_Pathway_Resource[$i]=$list_Category[$i];
			$list_Pathway_Term_ID[$i]=$list_Term_ID[$i];
			$list_Pathway_Term_Name[$i]=$list_Term_Name[$i];
		}
		
		$id1=$id2;
		$id2=$num_Pathway+$num_Disease;
		for($i=$id1;$i<$id2;$i++){
			$list_Disease_Category[$i]=$list_Category[$i];
			$list_Disease_Term_ID[$i]=$list_Term_ID[$i];
			$list_Disease_Term_Name[$i]=$list_Term_Name[$i];
		}
		
		$id1=$id2;
		$id2=$num_Pathway+$num_Disease+$num_CellularProcess;
		for($i=$id1;$i<$id2;$i++){
			$list_Process_Category[$i]=$list_Category[$i];
			$list_Process_Term_ID[$i]=$list_Term_ID[$i];
			$list_Process_Term_Name[$i]=$list_Term_Name[$i];
		}
		
		$id1=$id2;
		$id2=$num_Pathway+$num_Disease+$num_CellularProcess+$num_CellularLocalization;
		for($i=$id1;$i<$id2;$i++){
			$list_Localization_Category[$i]=$list_Category[$i];
			$list_Localization_Term_ID[$i]=$list_Term_ID[$i];
			$list_Localization_Term_Name[$i]=$list_Term_Name[$i];
		}
		
		$id1=$id2;
		$id2=$num_Pathway+$num_Disease+$num_CellularProcess+$num_CellularLocalization+$num_MolecularFunction;
		for($i=$id1;$i<$id2;$i++){
			$list_Function_Category[$i]=$list_Category[$i];
			$list_Function_Term_ID[$i]=$list_Term_ID[$i];
			$list_Function_Term_Name[$i]=$list_Term_Name[$i];
		}
		
		$id1=$id2;
		$id2=$num_Pathway+$num_Disease+$num_CellularProcess+$num_CellularLocalization+$num_MolecularFunction+$num_ProteinComplex;
		for($i=$id1;$i<$id2;$i++){
			$list_Complex_Category[$i]=$list_Category[$i];
			$list_Complex_Term_ID[$i]=$list_Term_ID[$i];
			$list_Complex_Term_Name[$i]=$list_Term_Name[$i];
		}
		
		$id1=$id2;
		$id2=$num_all;
		for($i=$id1;$i<$id2;$i++){
			$list_Family_Category[$i]=$list_Category[$i];
			$list_Family_Term_ID[$i]=$list_Term_ID[$i];
			$list_Family_Term_Name[$i]=$list_Term_Name[$i];
		}
		
		
	mysql_close($link);			
	?>
	<!-- 
    	<p class="style38">E3-Associated Functional Category</p> 
		<hr />
    -->
        <table width="100%"  align="center" border="1" bordercolor="#666666" cellspacing="0" cellpadding ="1">
		<tr bgcolor="#7B7B7B"> 
            <td rowspan="2"  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader"><b>No.</b></font></span></td>
            <td rowspan="2"  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader"><b>E3_ID</b></font></span></td>
            <td rowspan="2"  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">#_of_Subs</font></span></td>
            <td colspan="2"  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Pathway</span></td>
            <td colspan="2"  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Disease</span></td>
            <td colspan="2"  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">CellularProcess</span></td>
            <td colspan="2"  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">CellularLocalization</span></td>
            <td colspan="2"  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">MolecularFunction</span></td>
            <td colspan="2"  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">ProteinComplex</span></td>
            <td colspan="2"  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">ProteinFamily</span></td>
          <tr bgcolor="#7B7B7B">
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Resource</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
	      <td  align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
	    <?php	
       	echo "E3-Associated Functional Category: ".count($unique_E3_ID)." unique E3 Ligase(s) with ".$num_all." record(s)";
  		session_register ("e3list");
        $_SESSION ["e3list"] = $list_E3_ID;	
        $stt=array();
		for($x=0;$x<$num_all;$x++){
			
				if (($x+1) % 2 === 0) $cellcolor="#E8E8D0"; 
				else $cellcolor="#FFFFFF";			
					echo "<tr  bgcolor=".$cellcolor."> ";				
					  echo "<td  align=\"center\" class=\"styleTblVal\"><b>".($x+1)."</b></td>";
					  $stt[$x]=$x."*";
					  echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/uniprot/$list_E3_ID[$x]\" target=\"_blank\" \">".$list_E3_ID[$x]."</a></td>";
					  //echo "<td  align=\"center\" class=\"styleTblVal\"><font color=red>".$list_Num_Subs[$x]."</font></td>";
					  if($list_Num_Subs[$x]>0){
						  echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"viewPPI.php?index=".($x+1)."\" target=\"_blank\" \"><strong>".$list_Num_Subs[$x]."</a></td>";
					  }else
						  echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Num_Subs[$x]."</a></td>";
					  
					  // Display 7 Functional Categories	  
					  //1. Pathway
					  echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Pathway_Resource[$x]."</td>";
					  if(strcmp($list_Pathway_Term_ID[$x],"-")!=0)
					  	  	echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://www.genome.jp/kegg-bin/show_pathway?map$list_Pathway_Term_ID[$x]\" target=\"_blank\" \">".$list_Pathway_Term_ID[$x]."</a></td>";
					  else
					  		echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Pathway_Term_ID[$x]."</td>";
							
					  //2. Disease
					  echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Disease_Category[$x]."</td>";
					  if(strcmp($list_Disease_Category[$x],"OMIM")==0)
							echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://omim.org/entry/$list_Disease_Term_ID[$x]\" target=\"_blank\" \">".$list_Disease_Term_ID[$x]."</a></td>";
					  else if(strcmp($list_Disease_Category[$x],"KWDI")==0)
					  			echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/keywords/$list_Disease_Term_ID[$x]\" target=\"_blank\" \">".$list_Disease_Term_ID[$x]."</a></td>";
					  else 
						  	echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Disease_Term_ID[$x]."</td>";
					  					  
					  //3. Cellular Process
					  echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Process_Category[$x]."</td>";
					  if(strcmp($list_Process_Category[$x],"KWBP")==0)
							echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/keywords/$list_Process_Term_ID[$x]\" target=\"_blank\" \">".$list_Process_Term_ID[$x]."</a></td>";
					  else if(strcmp($list_Process_Category[$x],"GOBP")==0)
					  			echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://amigo.geneontology.org/amigo/term/$list_Process_Term_ID[$x]\" target=\"_blank\" \">".$list_Process_Term_ID[$x]."</a></td>";
					  else 
						  	echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Process_Term_ID[$x]."</td>";
					  
					  //4. Cellular Localization
					  echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Localization_Category[$x]."</td>";
					  if(strcmp($list_Localization_Category[$x],"KWCC")==0)
							echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/keywords/$list_Localization_Term_ID[$x]\" target=\"_blank\" \">".$list_Localization_Term_ID[$x]."</a></td>";
					  else if(strcmp($list_Localization_Category[$x],"GOCC")==0)
					  			echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://amigo.geneontology.org/amigo/term/$list_Localization_Term_ID[$x]\" target=\"_blank\" \">".$list_Localization_Term_ID[$x]."</a></td>";
					  else 
						  	echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Localization_Term_ID[$x]."</td>";

					  //5. Molecular Function
					  echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Function_Category[$x]."</td>";
					  if(strcmp($list_Function_Category[$x],"KWMF")==0)
							echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/keywords/$list_Function_Term_ID[$x]\" target=\"_blank\" \">".$list_Function_Term_ID[$x]."</a></td>";
					  else if(strcmp($list_Function_Category[$x],"GOMF")==0)
					  			echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://amigo.geneontology.org/amigo/term/$list_Function_Term_ID[$x]\" target=\"_blank\" \">".$list_Function_Term_ID[$x]."</a></td>";
					  else 
						  	echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Function_Term_ID[$x]."</td>";

					  //6. Protein Complex
					  echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Complex_Category[$x]."</td>";
					  if(stripos($list_Complex_Term_ID[$x],"rt_*")>=0)
					  		echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://mips.helmholtz-muenchen.de/genre/proj/corum/complexdetails.html?id=$list_Complex_Term_ID[$x]\" target=\"_blank\" \">".$list_Complex_Term_ID[$x]."</a></td>";
					  else if(stripos($list_Complex_Term_ID[$x],"cc_*")>=0)
					  		echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://mips.helmholtz-muenchen.de/genre/proj/corum/complexdetails.html?id=$list_Complex_Term_ID[$x]\" target=\"_blank\" \">".$list_Complex_Term_ID[$x]."</a></td>";
					  else if(stripos($list_Complex_Term_ID[$x],"GO:*")>=0)
					  		echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://amigo.geneontology.org/amigo/term/$list_Complex_Term_ID[$x]\" target=\"_blank\" \">".$list_Complex_Term_ID[$x]."</a></td>";
					  else
					  	echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Complex_Term_ID[$x]."</td>";
					  		  

					  //7. Protein Family
					  echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Family_Category[$x]."</td>";
					  if(strcmp($list_Family_Category[$x],"KWDOM")==0)
							echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/keywords/$list_Family_Term_ID[$x]\" target=\"_blank\" \">".$list_Family_Term_ID[$x]."</a></td>";
					  else if(strcmp($list_Family_Category[$x],"PFAM")==0)
					  			echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://pfam.xfam.org/family/$list_Family_Term_ID[$x]\" target=\"_blank\" \">".$list_Family_Term_ID[$x]."</a></td>";
					  else 
						  	echo "<td  align=\"center\" class=\"styleTblVal\">".$list_Family_Term_ID[$x]."</td>";
							
					  
					echo "</tr>";

					
		}  
																									
			    
	?>
	</table>
       	

</div>
</blockquote>
</body>
</html>