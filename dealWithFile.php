<!DOCTYPE >
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
        <title>Read Text File</title>
        <link href="js/style.css" rel="stylesheet"> 
        <script src="js/jquery.js"></script>
        <script src="js/cytoscape.js"></script>

        <?php
		 
                $E_ID=array(); $Type=array(); $Category=array(); $TermID=array(); $TermName=array(); $P_Value=array(); 
                $Num_Subs=array();
                $count = 0;

                  
                $fi = fopen("./data/E3_Associated_Functional_Category.txt","r");
                $temp = fgets($fi); // Skip first line containing Titles of columns
                while(!feof($fi))
                {
                    $temp = fgets($fi);
                   // if($temp.length>0){ // If not an empty line
                        $E3_ID[$count]=strtok($temp,"\t");
                        $Type[$count]=strtok("\t");
                        $Category[$count]=strtok("\t");
                        $TermID[$count]=strtok("\t");
                        $TermName[$count]=strtok("\t");
                        $P_Value[$count]=strtok("\t");
                        $count++;
						//echo $temp;
                   // }
                }
                fclose($fi);	
                
				echo "Num all =".$count."  |  ";
				/*
                // Get the number of proteins which were recognized by E3s
                $unique_E3_ID=array();
                $unique_E3_ID=array_unique($E3_ID);
                
				include "mysql_connection.inc";
                for($i=0;$i<$count;$i++){
                    $sql2 = "select distinct UbiSubstrate_ID from Interaction_E3_UbiSubstrate_Human_Final where E3_ID = '$E3_ID[$i]'";
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
                $P_E3_ID=array();	 $P_Num_Subs=array();	 $P_Category=array();	 $P_Term_ID=array();	 $P_Term_Name=array();	 $P_P_Value=array();
                $D_E3_ID=array();	 $D_Num_Subs=array();	 $D_Category=array();	 $D_Term_ID=array();	 $D_Term_Name=array();	 $D_P_Value=array();
                $CP_E3_ID=array();	$CP_Num_Subs=array();	$CP_Category=array();	$CP_Term_ID=array();	$CP_Term_Name=array();	$CP_P_Value=array();
                $CL_E3_ID=array();	$CL_Num_Subs=array();	$CL_Category=array();	$CL_Term_ID=array();	$CL_Term_Name=array();	$CL_P_Value=array();
                $MF_E3_ID=array();	$MF_Num_Subs=array();	$MF_Category=array();	$MF_Term_ID=array();	$MF_Term_Name=array();	$MF_P_Value=array();
                $PC_PC_ID=array();	$PC_Num_Subs=array();	$PC_Category=array();	$PC_Term_ID=array();	$PC_Term_Name=array();	$PC_P_Value=array();
                $PF_PF_ID=array();	$PF_Num_Subs=array();	$PF_Category=array();	$PF_Term_ID=array();	$PF_Term_Name=array();	$PF_P_Value=array();		
                
                $num_P=0;	$num_D=0;	$num_CP=0;	$num_CL=0;	$num_MF=0;	$num_PC=0;	$num_PF=0;
				
                for($i=0;$i<$count;$i++){
                    if(strcmp($Type[$i],"Pathway")){
                        $P_E3_ID[$num_P]		=$E3_ID[$i];	 
                        $P_Num_Subs[$num_P]	=$Num_Subs[$i]; 
                        $P_Category[$num_P]	=$Category[$i];
                        $P_Term_ID[$num_P]	=$Term_ID[$i];	 
                        $P_Term_Name[$num_P]	=$Term_Name[$i];
                        $P_P_Value[$num_P]	=$P_Value[$i];
                        $num_P++;
                    }
                    if(strcmp($Type[$i],"Disease")){
                        $D_E3_ID[$num_D]		=$E3_ID[$i];	 
                        $D_Num_Subs[$num_D]	=$Num_Subs[$i]; 
                        $D_Category[$num_D]	=$Category[$i];
                        $D_Term_ID[$num_D]	=$Term_ID[$i];	 
                        $D_Term_Name[$num_D]	=$Term_Name[$i];
                        $D_P_Value[$num_D]	=$P_Value[$i];
                        $num_D++;
                    }
                    if(strcmp($Type[$i],"CellularProcess")){
                        $CP_E3_ID[$num_CP]		=$E3_ID[$i];	 
                        $CP_Num_Subs[$num_CP]	=$Num_Subs[$i]; 
                        $CP_Category[$num_CP]	=$Category[$i];
                        $CP_Term_ID[$num_CP]	=$Term_ID[$i];	 
                        $CP_Term_Name[$num_CP]	=$Term_Name[$i];
                        $CP_P_Value[$num_CP]	=$P_Value[$i];
                        $num_CP++;
                    }
                    if(strcmp($Type[$i],"CellularLocalization")){
                        $CL_E3_ID[$num_CL]		=$E3_ID[$i];	 
                        $CL_Num_Subs[$num_CL]	=$Num_Subs[$i]; 
                        $CL_Category[$num_CL]	=$Category[$i];
                        $CL_Term_ID[$num_CL]	=$Term_ID[$i];	 
                        $CL_Term_Name[$num_CL]	=$Term_Name[$i];
                        $CL_P_Value[$num_CL]	=$P_Value[$i];
                        $num_CL++;
                    }
                    if(strcmp($Type[$i],"MolecularFunction")){
                        $MF_E3_ID[$num_MF]		=$E3_ID[$i];	 
                        $MF_Num_Subs[$num_MF]	=$Num_Subs[$i]; 
                        $MF_Category[$num_MF]	=$Category[$i];
                        $MF_Term_ID[$num_MF]	=$Term_ID[$i];	 
                        $MF_Term_Name[$num_MF]	=$Term_Name[$i];
                        $MF_P_Value[$num_MF]	=$P_Value[$i];
                        $num_MF++;
                    }
                    if(strcmp($Type[$i],"ProteinComplex")){
                        $PC_E3_ID[$num_PC]		=$E3_ID[$i];	 
                        $PC_Num_Subs[$num_PC]	=$Num_Subs[$i]; 
                        $PC_Category[$num_PC]	=$Category[$i];
                        $PC_Term_ID[$num_PC]	=$Term_ID[$i];	 
                        $PC_Term_Name[$num_PC]	=$Term_Name[$i];
                        $PC_P_Value[$num_PC]	=$P_Value[$i];
                        $num_PC++;
                    }
                    if(strcmp($Type[$i],"ProteinFamily")){
                        $PF_E3_ID[$num_PF]		=$E3_ID[$i];	 
                        $PF_Num_Subs[$num_PF]	=$Num_Subs[$i]; 
                        $PF_Category[$num_PF]	=$Category[$i];
                        $PF_Term_ID[$num_PF]	=$Term_ID[$i];	 
                        $PF_Term_Name[$num_PF]	=$Term_Name[$i];
                        $PF_P_Value[$num_PF]	=$P_Value[$i];
                        $num_PF++;
                    }
                    
                }
				echo "Num P =".$num_P."  |  ";
				echo "Num D =".$num_D."  |  ";
				echo "Num CP =".$num_CP."  |  ";
				echo "Num CL =".$num_CL."  |  ";
				echo "Num MF =".$num_MF."  |  ";
				echo "Num PC =".$num_PC."  |  ";
				echo "Num PF =".$num_PF."  |  ";
			 
			?>
    </head>
    <body>
        <div id="demo"></div>    
    </body>
</html>