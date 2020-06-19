<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!--
<link rel="stylesheet" type="text/css" href="css/andreas01.css" media="screen" title="andreas01 (screen)" />
-->
<link rel="stylesheet" type="text/css" href="css/tabMenus.css" />
<title>UbiNet</title>
</head>  
<body>
<?php
	session_start();
	include("top.html");
?>

</body>
<!--
<link rel="stylesheet" type="text/css" href="css/tabMenus.css" />
-->

<?php   // Get informations to be displayed
		//--!Read & Get information for E3_Associated_Functional_Category: ==>Start >
			// Get informations for E3-associated functional category
			
			$E_ID=array(); $Type=array(); $Category=array(); $Term_ID=array(); $Term_Name=array(); $P_Value=array(); 
			$Num_Subs=array(); $Networks=array();
			$count = 0;
			
			$fi = fopen("./data/E3_Associated_Functional_Category_Full.txt","r");
			$temp = fgets($fi); // Skip first line containing Titles of columns
			while(!feof($fi))
			{
				$temp = fgets($fi);
				$E3_ID[$count]=strtok($temp,"\t");
				$Type[$count]=strtok("\t");
				$Category[$count]=strtok("\t");
				$Term_ID[$count]=strtok("\t"); 
				$Term_Name[$count]=strtok("\t");
				$P_Value[$count]=strtok("\t");
				$Num_Subs[$count]=strtok("\t");
				$Networks[$count]=strtok("\t");
				$count++;
				
			}
			fclose($fi);	
			/*
			
			// Get the number of proteins which were recognized by E3s
			//print_r($TermID);
			for($i=0;$i<$count;$i++) {
				$Num_Subs[$i]=0;
				$Networks[$i]="---";
			}

			$unique_E3_ID=array();
			$unique_E3_ID=array_unique($E3_ID);
			include "mysql_connection.inc";
			
			for($i=0;$i<$count;$i++){
				$sql2 = "select distinct Sub_ID from final_Interaction_E3_Sub_PPI_Human_No_String where E3_ID = '$E3_ID[$i]'";
				$result2 = mysql_query($sql2) or die("Query failed : " . mysql_error());
				$num_rows2 = mysql_num_rows($result2);
				
				if($num_rows2 > 0){
					 $Num_Subs[$i]=$num_rows2;
					 //$Networks[$i]="Construct";
				}else{
					 $Num_Subs[$i]=0;
					 //$Networks[$i]="---";
				}
			}	
			*/
				
			$P_E3_ID=array();	 $P_Num_Subs=array();	 $P_Category=array();	 $P_Term_ID=array();	 $P_Term_Name=array();	 $P_P_Value=array();	$P_Networks=array();
			$D_E3_ID=array();	 $D_Num_Subs=array();	 $D_Category=array();	 $D_Term_ID=array();	 $D_Term_Name=array();	 $D_P_Value=array();	$D_Networks=array();
			$CP_E3_ID=array();	$CP_Num_Subs=array();	$CP_Category=array();	$CP_Term_ID=array();	$CP_Term_Name=array();	$CP_P_Value=array();	$CP_Networks=array();
			$CL_E3_ID=array();	$CL_Num_Subs=array();	$CL_Category=array();	$CL_Term_ID=array();	$CL_Term_Name=array();	$CL_P_Value=array();	$CL_Networks=array();
			$MF_E3_ID=array();	$MF_Num_Subs=array();	$MF_Category=array();	$MF_Term_ID=array();	$MF_Term_Name=array();	$MF_P_Value=array();	$MF_Networks=array();
			$PC_PC_ID=array();	$PC_Num_Subs=array();	$PC_Category=array();	$PC_Term_ID=array();	$PC_Term_Name=array();	$PC_P_Value=array();	$PC_Networks=array();
			$PF_PF_ID=array();	$PF_Num_Subs=array();	$PF_Category=array();	$PF_Term_ID=array();	$PF_Term_Name=array();	$PF_P_Value=array();	$PF_Networks=array();	
			
				
			//$num_P=0;	$num_D=0;	$num_CP=0;	$num_CL=0;	$num_MF=0;	$num_PC=0;	$num_PF=0;
			$num_P=100;	$num_D=44;	$num_CP=1059;	$num_CL=328;	$num_MF=293;	$num_PC=116;	$num_PF=203;
			$id1=0; $id2=$num_P;
			for($i=$id1;$i<$id2;$i++){ //Pathway
				$P_E3_ID[$i-$id1]		=$E3_ID[$i];	 
				$P_Category[$i-$id1]	=$Category[$i];
				$P_Term_ID[$i-$id1]	=$Term_ID[$i];	 
				$P_Term_Name[$i-$id1]	=$Term_Name[$i];
				$P_P_Value[$i-$id1]	=$P_Value[$i];
				$P_Num_Subs[$i-$id1]	=$Num_Subs[$i]; 
				$P_Networks[$i-$id1]	=$Networks[$i]; 
			}
			$id1=$id2; $id2+=$num_D;
			for($i=$id1;$i<$id2;$i++){ //Diseae
				$D_E3_ID[$i-$id1]		=$E3_ID[$i];	 
				$D_Category[$i-$id1]	=$Category[$i];
				$D_Term_ID[$i-$id1]	=$Term_ID[$i];	 
				$D_Term_Name[$i-$id1]	=$Term_Name[$i];
				$D_P_Value[$i-$id1]	=$P_Value[$i];
				$D_Num_Subs[$i-$id1]	=$Num_Subs[$i]; 
				$D_Networks[$i-$id1]	=$Networks[$i];
			}
			$id1=$id2; $id2+=$num_CP;
			for($i=$id1;$i<$id2;$i++){ //Cellular Process
				$CP_E3_ID[$i-$id1]		=$E3_ID[$i];	 
				$CP_Category[$i-$id1]	=$Category[$i];
				$CP_Term_ID[$i-$id1]	=$Term_ID[$i];	 
				$CP_Term_Name[$i-$id1]	=$Term_Name[$i];
				$CP_P_Value[$i-$id1]	=$P_Value[$i];
				$CP_Num_Subs[$i-$id1]	=$Num_Subs[$i]; 
				$CP_Networks[$i-$id1]	=$Networks[$i];
			}
			$id1=$id2; $id2+=$num_CL;
			for($i=$id1;$i<$id2;$i++){ //Cellelar Localization
				$CL_E3_ID[$i-$id1]		=$E3_ID[$i];	 
				$CL_Category[$i-$id1]	=$Category[$i];
				$CL_Term_ID[$i-$id1]	=$Term_ID[$i];	 
				$CL_Term_Name[$i-$id1]	=$Term_Name[$i];
				$CL_P_Value[$i-$id1]	=$P_Value[$i];
				$CL_Num_Subs[$i-$id1]	=$Num_Subs[$i]; 
				$CL_Networks[$i-$id1]	=$Networks[$i];
			}
			$id1=$id2; $id2+=$num_MF;
			for($i=$id1;$i<$id2;$i++){ //Molecular Function
				$MF_E3_ID[$i-$id1]		=$E3_ID[$i];	 
				$MF_Category[$i-$id1]	=$Category[$i];
				$MF_Term_ID[$i-$id1]	=$Term_ID[$i];	 
				$MF_Term_Name[$i-$id1]	=$Term_Name[$i];
				$MF_P_Value[$i-$id1]	=$P_Value[$i];
				$MF_Num_Subs[$i-$id1]	=$Num_Subs[$i]; 
				$MF_Networks[$i-$id1]	=$Networks[$i];
			}
			$id1=$id2; $id2+=$num_PC;
			for($i=$id1;$i<$id2;$i++){ //Protein Complex
				$PC_E3_ID[$i-$id1]		=$E3_ID[$i];	 
				$PC_Category[$i-$id1]	=$Category[$i];
				$PC_Term_ID[$i-$id1]	=$Term_ID[$i];	 
				$PC_Term_Name[$i-$id1]	=$Term_Name[$i];
				$PC_P_Value[$i-$id1]	=$P_Value[$i];
				$PC_Num_Subs[$i-$id1]	=$Num_Subs[$i]; 
				$PC_Networks[$i-$id1]	=$Networks[$i];
			}
			$id1=$id2; $id2=$count;
			for($i=$id1;$i<$id2;$i++){ //Protein Family
				$PF_E3_ID[$i-$id1]		=$E3_ID[$i];	 
				$PF_Category[$i-$id1]	=$Category[$i];
				$PF_Term_ID[$i-$id1]	=$Term_ID[$i];	 
				$PF_Term_Name[$i-$id1]	=$Term_Name[$i];
				$PF_P_Value[$i-$id1]	=$P_Value[$i];
				$PF_Num_Subs[$i-$id1]	=$Num_Subs[$i]; 
				$PF_Networks[$i-$id1]	=$Networks[$i];
			}
			

			//echo "Num All =".$count."  |  ";		
			//echo "Num P =".$num_P."  |  ";			
			//echo "Num D =".$num_D."  |  ";			//print_r($D_Category);
			//echo "Num CP =".$num_CP."  |  ";		//print_r($CP_Category);
			//echo "Num CL =".$num_CL."  |  ";		//print_r($CL_Category);
			//echo "Num MF =".$num_MF."  |  ";		//print_r($MF_Category);
			//echo "Num PC =".$num_PC."  |  ";		//print_r($PC_Category);
			//echo "Num PF =".$num_PF."  |  ";		//print_r($PF_Category);
			
?>
	
<script type="text/javascript">

function clearLinkDot() {
	var i, a, main;
	for(i=0; (a = document.getElementsByTagName("a")[i]); i++) {
		if(a.getAttribute("onFocus")==null) {
			a.setAttribute("onFocus","this.blur();");
		}else{
			a.setAttribute("onFocus",a.getAttribute("onFocus")+";this.blur();");
		}
		a.setAttribute("hideFocus","hidefocus");
	}
}

function loadTab(obj,n){
	var layer;
	eval('layer=\'S'+n+'\'');

	//? Tab ?????? Blur ??
	var tabsF=document.getElementById('tabsF').getElementsByTagName('li');
	for (var i=0;i<tabsF.length;i++){
		tabsF[i].setAttribute('id',null);
		eval('document.getElementById(\'S'+(i+1)+'\').style.display=\'none\'')
	}

	//????????
	obj.parentNode.setAttribute('id','current');
	document.getElementById(layer).style.display='inline';

}
</script>
<style type="text/css">
	/*
	.auto {overflow: auto; height: 520px; width: 870px; clip: rect( ); padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px}
	.auto2 {overflow: auto; width: 1082px; clip: rect( ); padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px}
	*/
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
            
        <script type="text/javascript"> 
        <!--
            var dragapproved = false;  
            var dragObj;  
            var zIndex = 6;  
            var offX,offY;  
            document.onmousedown = beginDrag;  
            document.onmouseup = function() {dragapproved = false};  
            document.onmousemove = dragDrop;  
            function dragDrop(evt) {  
                if (dragapproved) {  
                    var e = evt || window.event;  
                    dragObj.style.left = e.clientX - offX + document.documentElement.scrollLeft + 'px';
                    dragObj.style.top = e.clientY - offY + document.documentElement.scrollTop + 'px';
                }  
            }  
            function beginDrag(evt) {  
                dragObj = window.event ? event.srcElement : evt.target;  
                if (dragapproved == false && dragObj.className.indexOf("drag") >= 0) {  
                    dragObj.style.zIndex = zIndex++;  
                    offX = window.event ? event.offsetX : evt.layerX;  
                    offY = window.event ? event.offsetY : evt.layerY;  
                    dragapproved = true;  
                }  
                if (dragapproved == false && dragObj.className.indexOf("comment") >= 0) {  
                    dragapproved = false;  
                }  
            }
            function closeItem(obj) {
                document.getElementById(obj).style.display = 'none';
            }
            function openItem(obj) {
                document.getElementById(obj).style.display = 'block';
            }
        //-->
        </script>
<body onload="clearLinkDot();">
        <div id="wrapper" > <!-- Begin Wrapper -->
        <div id="faux" > <!-- Begin Faux Columns -->
           <div id="content"> <!-- Begin Content Column -->
             <div id="tabsF">
               <ul>
                 <?php
                     echo "<li id=\"current\"><a href=\"javascript://\" onclick=\"loadTab(this,1);\"><span>Pathway</span></a></li>";
                     echo "<li ><a href=\"javascript://\" onclick=\"loadTab(this,2);\"><span>Disease</span></a></li>";
                     echo "<li><a href=\"javascript://\" onclick=\"loadTab(this,3);\"><span>CellularProcess</span></a></li>";
                     echo "<li><a href=\"javascript://\" onclick=\"loadTab(this,4);\"><span>CellularLocalization</span></a></li>";
                     echo "<li><a href=\"javascript://\" onclick=\"loadTab(this,5);\"><span>MolecularFunction</span></a></li>";
                     echo "<li><a href=\"javascript://\" onclick=\"loadTab(this,6);\"><span>ProteinComplex</span></a></li>";
                     echo "<li><a href=\"javascript://\" onclick=\"loadTab(this,7);\"><span>ProteinFamily</span></a></li>";
                     echo "<p>&nbsp;</p>";
                      
                 ?>
               </ul>
             </div> <!-- End of did id=tabsF-->
             <!-- Session parameters for calling list of all substrates which are recognized by E3-->
			 <?php
			 	$index_all=0;
				session_register ("e3list");
				$_SESSION ["e3list"] = $E3_ID;
			 ?>	
             <!-- Session parameters... : End-->
             <div id="tabsC">
                <div id="S1" style="display:inline; "> <!-- Pathway information -->
                  <table width="1150" align="left" border="1" bordercolor="#999999" cellspacing="0" cellpadding ="0">
                      <tr bgcolor="#4682B4">
                        <td width=5% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No.</span></td>
                        <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">E3_ID</span></td>
                        <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
                        <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
                        <td width=45% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_Name</span></td>
                        <td width=20% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No. of proteins <br /> recognized by E3 via PPI</span></td>
                      </tr>
                          <?
                              $index_all=0;
                              for($x=0;$x<$num_P;$x++){
                                  if (($x+1) % 2 === 0) $cellcolor="#E8E8D0"; 
                                  else $cellcolor="#FFFFFF";			
									  echo "<tr height=\"25\" bgcolor=".$cellcolor."> ";
                                      echo "<td  align=\"center\" class=\"styleTblVal\"><b>".($x+1)."</b></td>";
                                      echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/uniprot/$P_E3_ID[$x]\" target=\"_blank\" \">".$P_E3_ID[$x]."</a></td>";
                                      echo "<td  align=\"center\" class=\"styleTblVal\">".$P_Category[$x]."</a></td>";
                                      echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://www.genome.jp/kegg-bin/show_pathway?map$P_Term_ID[$x]\" target=\"_blank\" \"><b>".$P_Term_ID[$x]."</b></a></td>";
                                      echo "<td  align=\"center\" class=\"styleTblVal\">".$P_Term_Name[$x]."</a></td>";
                                      //echo "<td  align=\"center\" class=\"styleTblVal\">".$P_Num_Subs[$x]."</a></td>";
                                      if($P_Num_Subs[$x]>0){
                                          echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"viewPPI.php?index=".($x+1+$index_all)."\" target=\"_blank\" \"><strong>".$P_Num_Subs[$x]."</a></td>";
                                      }else
                                          echo "<td  align=\"center\" class=\"styleTblVal\">".$P_Num_Subs[$x]."</a></td>";
                                        
                                      //echo "<td  align=\"center\" class=\"styleTblVal\">".$P_P_Value[$x]."</a></td>";
                                  echo "</tr>";
                              }
                          ?>
                                        
                   </table> 
  
               
              </div> <!-- End of did id="S1" -->
                <div id="S2" style="display:none;"> <!-- Disease information -->
                      <table width="1150" align="left" border="1" bordercolor="#999999" cellspacing="0" cellpadding ="0">
                        <tr bgcolor="#4682B4">
                          <td width=5% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No.</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">E3_ID</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
                          <td width=45% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_Name</span></td>
                          <td width=20% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No. of proteins <br /> recognized by E3 via PPI</span></td>
                        </tr>
                            <?
                                $index_all=$num_P;
                                for($x=0;$x<$num_D;$x++){
                                    if (($x+1) % 2 === 0) $cellcolor="#E8E8D0"; 
                                    else $cellcolor="#FFFFFF";			
                                        echo "<tr height=\"25\" bgcolor=".$cellcolor."> ";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><b>".($x+1)."</b></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/uniprot/$D_E3_ID[$x]\" target=\"_blank\" \">".$D_E3_ID[$x]."</a></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$D_Category[$x]."</a></td>";
                                        if(strcmp($D_Category[$x],"OMIM")==0)
                                            echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://omim.org/entry/$D_Term_ID[$x]\" target=\"_blank\" \">".$D_Term_ID[$x]."</a></td>";
                                        else if(strcmp($D_Category[$x],"KWDI")==0)
                                            echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/keywords/$D_Term_ID[$x]\" target=\"_blank\" \">".$D_Term_ID[$x]."</a></td>";
                                        else 
                                            echo "<td  align=\"center\" class=\"styleTblVal\">".$D_Term_ID[$x]."</td>";
                                
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$D_Term_Name[$x]."</a></td>";
                                        //echo "<td  align=\"center\" class=\"styleTblVal\">".$D_Num_Subs[$x]."</a></td>";
                                        if($D_Num_Subs[$x]>0){
                                            echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"viewPPI.php?index=".($x+1+$index_all)."\" target=\"_blank\" \"><strong>".$D_Num_Subs[$x]."</a></td>";
                                        }else
                                            echo "<td  align=\"center\" class=\"styleTblVal\">".$D_Num_Subs[$x]."</a></td>";
                                        //echo "<td  align=\"center\" class=\"styleTblVal\">".$D_P_Value[$x]."</a></td>";
                                    echo "</tr>";
                                }
                            ?>
                                          
                     </table> 
                
                </div><!-- End of did id="S2" -->
                <div id="S3" style="display:none;"> <!-- CellularProcess information -->
                      <table width="1150" align="left" border="1" bordercolor="#999999" cellspacing="0" cellpadding ="0">
                        <tr bgcolor="#4682B4">
                          <td width=5% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No.</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">E3_ID</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
                          <td width=45% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_Name</span></td>
                          <td width=20% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No. of proteins <br /> recognized by E3 via PPI</span></td>
                        </tr>
                            <?
                                $index_all=$num_P+$num_D;
                                for($x=0;$x<$num_CP;$x++){
                                    if (($x+1) % 2 === 0) $cellcolor="#E8E8D0"; 
                                    else $cellcolor="#FFFFFF";			
                                        echo "<tr height=\"25\" bgcolor=".$cellcolor."> ";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><b>".($x+1)."</b></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/uniprot/$CP_E3_ID[$x]\" target=\"_blank\" \">".$CP_E3_ID[$x]."</a></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$CP_Category[$x]."</a></td>";
                                        if(strcmp($CP_Category[$x],"KWBP")==0)
                                            echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/keywords/$CP_Term_ID[$x]\" target=\"_blank\" \">".$CP_Term_ID[$x]."</a></td>";
                                        else if(strcmp($CP_Category[$x],"GOBP")==0)
                                            echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://amigo.geneontology.org/amigo/term/$CP_Term_ID[$x]\" target=\"_blank\" \">".$CP_Term_ID[$x]."</a></td>";
                                        else 
                                            echo "<td  align=\"center\" class=\"styleTblVal\">".$CP_Term_ID[$x]."</td>";
                                
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$CP_Term_Name[$x]."</a></td>";
                                        //echo "<td  align=\"center\" class=\"styleTblVal\">".$CP_Num_Subs[$x]."</a></td>";
                                        if($CP_Num_Subs[$x]>0){
                                            echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"viewPPI.php?index=".($x+1+$index_all)."\" target=\"_blank\" \"><strong>".$CP_Num_Subs[$x]."</a></td>";
                                        }else
                                            echo "<td  align=\"center\" class=\"styleTblVal\">".$CP_Num_Subs[$x]."</a></td>";
                                        //echo "<td  align=\"center\" class=\"styleTblVal\">".$CP_P_Value[$x]."</a></td>";
                                    echo "</tr>";
                                }
                            ?>
                                          
                     </table> 
                
                </div><!-- End of did id="S3" -->
                <div id="S4" style="display:none;"> <!-- CellularLocalization information -->
                      <table width="1150" align="left" border="1" bordercolor="#999999" cellspacing="0" cellpadding ="0">
                        <tr bgcolor="#4682B4">
                          <td width=5% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No.</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">E3_ID</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
                          <td width=45% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_Name</span></td>
                          <td width=20% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No. of proteins <br /> recognized by E3 via PPI</span></td>
                        </tr>
                            <?
                                $index_all=$num_P+$num_D+$num_CP;
                                for($x=0;$x<$num_CL;$x++){
                                    if (($x+1) % 2 === 0) $cellcolor="#E8E8D0"; 
                                    else $cellcolor="#FFFFFF";			
                                        echo "<tr height=\"25\" bgcolor=".$cellcolor."> ";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><b>".($x+1)."</b></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/uniprot/$CL_E3_ID[$x]\" target=\"_blank\" \">".$CL_E3_ID[$x]."</a></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$CL_Category[$x]."</a></td>";
                                        if(strcmp($CL_Category[$x],"KWCC")==0)
                                            echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/keywords/$CL_Term_ID[$x]\" target=\"_blank\" \">".$CL_Term_ID[$x]."</a></td>";
                                        else if(strcmp($CL_Category[$x],"GOCC")==0)
                                            echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://amigo.geneontology.org/amigo/term/$CL_Term_ID[$x]\" target=\"_blank\" \">".$CL_Term_ID[$x]."</a></td>";
                                        else 
                                            echo "<td  align=\"center\" class=\"styleTblVal\">".$CL_Term_ID[$x]."</td>";
                                
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$CL_Term_Name[$x]."</a></td>";
                                        //echo "<td  align=\"center\" class=\"styleTblVal\">".$CL_Num_Subs[$x]."</a></td>";
                                        if($CL_Num_Subs[$x]>0){
                                            echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"viewPPI.php?index=".($x+1+$index_all)."\" target=\"_blank\" \"><strong>".$CL_Num_Subs[$x]."</a></td>";
                                        }else
                                            echo "<td  align=\"center\" class=\"styleTblVal\">".$CL_Num_Subs[$x]."</a></td>";
                                        //echo "<td  align=\"center\" class=\"styleTblVal\">".$CL_P_Value[$x]."</a></td>";
                                    echo "</tr>";
                                }
                            ?>
                                          
                     </table> 
                
                </div><!-- End of did id="S4" -->
                <div id="S5" style="display:none;"> <!-- MolecularFunction information -->
                      <table width="1150" align="left" border="1" bordercolor="#999999" cellspacing="0" cellpadding ="0">
                        <tr bgcolor="#4682B4">
                          <td width=5% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No.</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">E3_ID</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
                          <td width=45% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_Name</span></td>
                          <td width=20% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No. of proteins <br /> recognized by E3 via PPI</span></td>
                        </tr>
                            <?
                                $index_all=$num_P+$num_D+$num_CP+$num_CL;
                                for($x=0;$x<$num_MF;$x++){
                                    if (($x+1) % 2 === 0) $cellcolor="#E8E8D0"; 
                                    else $cellcolor="#FFFFFF";			
                                        echo "<tr height=\"25\" bgcolor=".$cellcolor."> ";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><b>".($x+1)."</b></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/uniprot/$MF_E3_ID[$x]\" target=\"_blank\" \">".$MF_E3_ID[$x]."</a></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$MF_Category[$x]."</a></td>";
                                        if(strcmp($MF_Category[$x],"KWMF")==0)
                                                echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/keywords/$MF_Term_ID[$x]\" target=\"_blank\" \">".$MF_Term_ID[$x]."</a></td>";
                                        else if(strcmp($MF_Category[$x],"GOMF")==0)
                                                    echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://amigo.geneontology.org/amigo/term/$MF_Term_ID[$x]\" target=\"_blank\" \">".$MF_Term_ID[$x]."</a></td>";
                                        else 
                                            echo "<td  align=\"center\" class=\"styleTblVal\">".$MF_Term_ID[$x]."</td>";
                                
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$MF_Term_Name[$x]."</a></td>";
                                        //echo "<td  align=\"center\" class=\"styleTblVal\">".$MF_Num_Subs[$x]."</a></td>";
                                        if($MF_Num_Subs[$x]>0){
                                            echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"viewPPI.php?index=".($x+1+$index_all)."\" target=\"_blank\" \"><strong>".$MF_Num_Subs[$x]."</a></td>";
                                        }else
                                            echo "<td  align=\"center\" class=\"styleTblVal\">".$MF_Num_Subs[$x]."</a></td>";
                                        //echo "<td  align=\"center\" class=\"styleTblVal\">".$$MF_P_Value[$x]."</a></td>";
                                    echo "</tr>";
                                }
                            ?>                    
                     </table> 
                </div><!-- End of did id="S5" -->
                <div id="S6" style="display:none;"> <!-- ProteinComplex information -->
                      <table width="1150" align="left" border="1" bordercolor="#999999" cellspacing="0" cellpadding ="0">
                        <tr bgcolor="#4682B4">
                          <td  width=5% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No.</span></td>
                          <td  width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">E3_ID</span></td>
                          <td  width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
                          <td  width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
                          <td width=45% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_Name</span></td>
                          <td width=20% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No. of proteins <br /> recognized by E3 via PPI</span></td>
                        </tr>
                            <?
                                $index_all=$num_P+$num_D+$num_CP+$num_CL+$num_MF;
                                for($x=0;$x<$num_PC;$x++){
                                    if (($x+1) % 2 === 0) $cellcolor="#E8E8D0"; 
                                    else $cellcolor="#FFFFFF";			
                                        echo "<tr height=\"25\" bgcolor=".$cellcolor."> ";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><b>".($x+1)."</b></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/uniprot/$PC_E3_ID[$x]\" target=\"_blank\" \">".$PC_E3_ID[$x]."</a></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$PC_Category[$x]."</a></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"http://pnet.kaist.ac.kr/e3net/viewControl.jsp?View=functionSearch\" target=\"_blank\" \">E3Net</a>:  ".$PC_Term_ID[$x]."</td>";
                                        
                                        /*
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$PC_Term_ID[$x]."</td>";
                                        if(stripos($PC_Term_ID[$x],"rt_*")>=0)
                                            echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://mips.helmholtz-muenchen.de/genre/proj/corum/complexdetails.html?id=$PC_Term_ID[$x]\" target=\"_blank\" \">".$PC_Term_ID[$x]."</a></td>";
                                        else if(stripos($PC_Term_ID[$x],"cc_*")>=0)
                                            echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://mips.helmholtz-muenchen.de/genre/proj/corum/complexdetails.html?id=$PC_Term_ID[$x]\" target=\"_blank\" \">".$PC_Term_ID[$x]."</a></td>";
                                        else if(stripos($PC_Term_ID[$x],"GO:*")>=0)
                                            echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://amigo.geneontology.org/amigo/term/$PC_Term_ID[$x]\" target=\"_blank\" \">".$PC_Term_ID[$x]."</a></td>";
                                        else
                                            echo "<td  align=\"center\" class=\"styleTblVal\">".$PC_Term_ID[$x]."</td>";
                                        */
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$PC_Term_Name[$x]."</a></td>";
                                        //echo "<td  align=\"center\" class=\"styleTblVal\">".$PC_Num_Subs[$x]."</a></td>";
                                        if($PC_Num_Subs[$x]>0){
                                            echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"viewPPI.php?index=".($x+1+$index_all)."\" target=\"_blank\" \"><strong>".$PC_Num_Subs[$x]."</a></td>";
                                        }else
                                            echo "<td  align=\"center\" class=\"styleTblVal\">".$PC_Num_Subs[$x]."</a></td>";
                                        //echo "<td  align=\"center\" class=\"styleTblVal\">".$PC_P_Value[$x]."</a></td>";
                                    echo "</tr>";
                                }
                            ?>                    
                     </table> 
                </div><!-- End of did id="S6" -->
                <div id="S7" style="display:none;"> <!-- ProteinFamily information -->
                     <table width="1150" align="left" border="1" bordercolor="#999999" cellspacing="0" cellpadding ="0">
                        <tr bgcolor="#4682B4">
                          <td width=5% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No.</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">E3_ID</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Category</span></td>
                          <td width=10% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_ID</span></td>
                          <td width=45% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">Term_Name</span></td>
                          <td width=20% align="center" class="styleTblVal" style="padding: 10px 2px;"><span class="styleTableHeader">No. of proteins <br /> recognized by E3 via PPI</span></td>
                        </tr>
                            <?
                                $index_all=$num_P+$num_D+$num_CP+$num_CL+$num_MF+$num_PC;
                                for($x=0;$x<$num_PF;$x++){
                                    if (($x+1) % 2 === 0) $cellcolor="#E8E8D0"; 
                                    else $cellcolor="#FFFFFF";			
                                        echo "<tr height=\"25\" bgcolor=".$cellcolor."> ";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><b>".($x+1)."</b></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/uniprot/$PF_E3_ID[$x]\" target=\"_blank\" \">".$PF_E3_ID[$x]."</a></td>";
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$PF_Category[$x]."</a></td>";
                                        if(strcmp($PF_Category[$x],"KWDOM")==0)
                                            echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://www.uniprot.org/keywords/$PF_Term_ID[$x]\" target=\"_blank\" \">".$PF_Term_ID[$x]."</a></td>";
                                        else if(strcmp($PF_Category[$x],"PFAM")==0)
                                            echo "<td align=\"center\" class=\"styleTblVal\"><a href=\"http://pfam.xfam.org/family/$PF_Term_ID[$x]\" target=\"_blank\" \">".$PF_Term_ID[$x]."</a></td>";
                                        else 
                                            echo "<td  align=\"center\" class=\"styleTblVal\">".$PF_Term_ID[$x]."</td>";
                                
                                        echo "<td  align=\"center\" class=\"styleTblVal\">".$PF_Term_Name[$x]."</a></td>";
                                        //echo "<td  align=\"center\" class=\"styleTblVal\">".$PF_Num_Subs[$x]."</a></td>";
                                        if($PF_Num_Subs[$x]>0){
                                            echo "<td  align=\"center\" class=\"styleTblVal\"><a href=\"viewPPI.php?index=".($x+1+$index_all)."\" target=\"_blank\" \"><strong>".$PF_Num_Subs[$x]."</a></td>";
                                        }else
                                            echo "<td  align=\"center\" class=\"styleTblVal\">".$PF_Num_Subs[$x]."</a></td>";
                                        //echo "<td  align=\"center\" class=\"styleTblVal\">".$PF_P_Value[$x]."</a></td>";
                                    echo "</tr>";
                                }
                            ?>                    
                     </table> 
                </div><!-- End of did id="S7" -->                        
          	 </div> <!-- End of tabsC div -->
          </div> <!-- End of content div -->
        </div> <!-- End of faux div --> 
        </div> <!-- End of wrapper div -->

</body>             
<?php
	include("footer.html");
?>   

</html>
