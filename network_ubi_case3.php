<html>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>UbiNet</title>
<head>
<hr />
<?php

	$species = 'Homo sapiens (Human)';
	$E3_tmp = $_GET['E3'];
	$E3_tmp = rtrim($E3_tmp);
	$string = $_GET['substrate'];
		
	$string = str_replace(" ","",$string);
	$string = str_replace(",","\r\n",$string);
	$string = str_replace("\r\n\r\n","\r\n",$string);
		
	if(strstr($string[0],"\r")==true)
			$list = str_replace("\r\n",";",$string[0]);
	else if (strstr($string[0],",")==true)
			$list = str_replace(",",";",$string[0]);
	else	
		$list = implode(";",$string);
	
	//print_r($list);
	
	$tmp = array_unique(explode(";",$list));
	$protein=$tmp;
	
	if($E3_tmp != "")
		array_push($tmp,$E3_tmp);
		
	$num_all=count($protein);
	//echo ($num_all);
	include "mysql_connection.inc";
		
	// PPI interaction between inputted proteins
	$sub_ID=array(); 
	$sub_AC=array();
	$sub_GeneName=array();
		
	for($i=0 ; $i < count($protein) ; $i++)
	{
			 $sql1 = "select distinct ID, AC, GeneName from final_ID_Mapping where ID = '$protein[$i]'";
			 $result1 = mysql_query($sql1) or die("Query failed : " . mysql_error());
			 $num_rows1 = mysql_num_rows($result1);
			 if($num_rows1 > 0)
			 {
					 while($data1 = mysql_fetch_array($result1))
					 {
							$sub_ID[count($sub_ID)] = $data1[0];
							$sub_AC[count($sub_AC)] = $data1[1];
							$sub_GeneName[count($sub_GeneName)] = $data1[2];
					 }
			 }
	
	}
	//print_r ($num_all); 
	//print_r("|1.\n "); print_r ($sub_ID); 
	//print_r("|2.\n "); print_r ($sub_AC); 
	//print_r("|3.\n "); print_r ($sub_GeneName); 
	
	// Get list of UbiSubstrate proteins and its informations
	$UbiSub_ID_List=array();
	$UbiSub_AC_List=array();
	$UbiSub_GeneName_List=array();
	$UbiSub_UbiSites_List=array();
	$UbiSub_UbiPubIDs_List=array();
	
	for($i=0 ; $i < count($protein) ; $i++)
	{
		 $sql1 = "select distinct ID, AC, GeneName, UbSites,  Ubi_PubMedIDs from final_UbiSubstrate_Human where ID = '$protein[$i]'";
		 $result1 = mysql_query($sql1) or die("Query failed : " . mysql_error());
		 $num_rows1 = mysql_num_rows($result1);
		 if($num_rows1 > 0)
		 {
				if($data1 = mysql_fetch_array($result1))
				 {
						$UbiSub_ID_List[count($UbiSub_ID_List)] = $data1[0];
						$UbiSub_AC_List[count($UbiSub_AC_List)] = $data1[1];
						$UbiSub_GeneName_List[count($UbiSub_GeneName_List)] = $data1[2];
						$UbiSub_UbiSites_List[count($UbiSub_UbiSites_List)] = $data1[3];
						$UbiSub_UbiPubIDs_List[count($UbiSub_UbiPubIDs_List)]=$data1[4];
				 }
		 }
	
	}
	//print_r ($UbiSub_GeneName_List);

	$num_UbiSubs=count($UbiSub_ID_List);		
	
	/*-----interaction--------*/
	
	// Interaction between proteins and proteins
	$inter=array();
	$ID_a=array();
	$AC_a=array();
	$Gene_a=array();
	$ID_b=array();
	$AC_b=array();
	$Gene_b=array();
	$pubmedID=array();
	$resource=array();
	
	for($i=0; $i < $num_all; $i++)
	for($j=0; $j < $num_all; $j++){
		$sql2 = "select distinct ID_a, AC_a, GENE_a, ID_b, AC_b,GENE_b, pubmedID, resource from final_PPI_Human_No_String where ID_a= '".$protein[$i]."' and ID_b = '".$protein[$j]."'";       
		$result2 = mysql_query($sql2) or die("Query failed : " . mysql_error());
		$num_rows2 = mysql_num_rows($result2);
		if($num_rows2 > 0){
				if($data2 = mysql_fetch_array($result2)){
					$inter[$i*$num_all+$j]=1; 
					$ID_a[$i*$num_all+$j]=$data2[0];
					$AC_a[$i*$num_all+$j]=$data2[1];
					$Gene_a[$i*$num_all+$j]=$data2[2];
					$ID_b[$i*$num_all+$j]=$data2[3];
					$AC_b[$i*$num_all+$j]=$data2[4];
					$Gene_b[$i*$num_all+$j]=$data2[5];
					$pubmedID[$i*$num_all+$j]=$data2[6];
					$resource[$i*$num_all+$j]=$data2[7];
				}
		}
		else{
					$inter[$i*$num_all+$j]=0; 
					$ID_a[$i*$num_all+$j]="Not given";
					$AC_a[$i*$num_all+$j]="Not given";
					$Gene_a[$i*$num_all+$j]="Not given";
					$ID_b[$i*$num_all+$j]="Not given";
					$AC_b[$i*$num_all+$j]="Not given";
					$Gene_b[$i*$num_all+$j]="Not given";
					$pubmedID[$i*$num_all+$j]="Not given";
					$resource[$i*$num_all+$j]="Not given";
			}

	}
	//print_r ($inter);
	//print_r ($ID_a);
	/*-----------------------*/
	mysql_close($link);

?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="cytoscape.js/cytoscape.min.js"></script>
		<script src="cytoscape.js/arbor.js"></script>
		<script src="cytoscape.js/cytoscape.js"></script>
		<script src="cytoscape.js/jquery.cxtmenu.js"></script>
		<script src="cytoscape.js/jquery.cxtmenu.min.js"></script>
		<script src="cytoscape.js/jquery.cytoscape-edgehandles.js"></script>
		<script src="cytoscape.js/jquery.cytoscape-edgehandles.js"></script>
		<script src="cytoscape.js/jquery.cytoscape-edgehandles.min.js"></script>
		<script src="cytoscape.js/jquery.cytoscape-panzoom.js"></script>
		<script src="cytoscape.js/jquery.cytoscape-panzoom.min.js"></script>

<style id="jsbin-css">
	body { 
	  font: 14px helvetica neue, helvetica, arial, sans-serif;
	  background-repeat:no-repeat;
	}
	
	#cy {
		height: 85%;
		width: 75%;
		position: absolute;
		left: 10px;
		top: 0px;
	}
	#note {
		width: 100%;
		height: 20%;
		position: absolute;
		background-color: #f0f0f0;
		top: 80%;
		left: 10px;
	}
	#fun{
		float: right;
		width: 25%;
		height: 85%;
	}
</style>
</head>
<body>
  <div id="cy"></div>
  <div id="fun">
    <FORM NAME="my_form" METHOD=POST TARGET>
      <table height="90%" width="95%"  border="1"  style="border: solid thin; font-size: 14px;" cellpadding="2" cellspacing="0">
        <tr>
          <td><p> &nbsp;&nbsp;<b>Graph Layout:</b></p>
            <p>&nbsp;&nbsp;<b>
            <select name="layout" size="1" onChange="changed(this)">
              <option selected value="arbor">Arbor</option>
              <option value="circle">Circle</option>
              <option value="grid">Grid</option>
              <option value="preset">Preset</option>
              <option value="random">Random</option>
              <option value="concentric">Concentric</option>
              <option value="dagre">Dagre</option>
              <option value="cose">Cose</option>
              <option value="cola">Cola</option>
              <option value="spingy">Springy</option>
              <option value="breadthfirst">Breadthfirst </option>
            </select>
            </b></p></td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <b>Type of interaction:</b>
            <p>
              <input type="checkbox"  name="chkPPI" width=50 height=50  onClick="checkbox(this)" checked value="PPI_Interaction" >
              <strong>P</strong>rotein - <strong>P</strong>rotein <strong>I</strong>nteraction (PPI)</p>
            <p> 
              <input type="checkbox"  name="chkDDI" width=50 height=50 onClick="checkbox(this)"  disabled unchecked value="DDI_Interaction" hidden="true">
            </td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <!--
            <p>&nbsp;&nbsp;
                <input type="button" id="expand" name="Expand one E3 node" value="Expand one E3 node"  onClick="Expand()"/>
                </p>
            <p>&nbsp;&nbsp;
                <input type="button" id="expand_all" name="Expand all E3s nodes" value="Expand all E3s nodes"  onClick="Expand_all()"/>
            -->
            <p>&nbsp;&nbsp;	
                <input type="button" id="delete" name="Delete node or edge" value="Delete node or edge" onClick="Delete()"/>
            </p>
            
            <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td><p>      
            <p><b><u style="font-size: 16px; font-family: Verdana, Geneva, sans-serif;">Legends</u>:</b>
            <p>&nbsp;&nbsp;&nbsp; <span style="color: #00C; font-weight: bold;">Blue exagon</span>: E3 ligase        
            <P>&nbsp;&nbsp;&nbsp; <span style="color: #EE82EE; font-weight: bold;">Violet Circle</span>: Substrate protein        
            <P>&nbsp;&nbsp;&nbsp; <span style="color: #093; font-weight: bold;">Green Circle</span>: UbiSubstrate protein
            <P>&nbsp;&nbsp;&nbsp; <span style="color: #FC0; font-weight: bold;">Orange line</span></span>: PPI interaction
            <P>&nbsp;&nbsp;&nbsp; <span style="color: #F00; font-weight: bold;">Red line</strong></span>: DDI interaction</p>
            <P>&nbsp;</p></td>
        </tr>
       
      </table>
    </FORM>
  </div> <!--End of div="fun" -->
  <div id="note">
      <P>&nbsp;</p>
      <p>Click nodes or edges.</p>
        <script>
          var num_all=["<?php echo join("\", \"", $num_all); ?>"];
		  var input_proteins =  ["<?php echo join("\", \"", $tmp); ?>"];
			
          //substrate proteins
		  var sub_ID =  ["<?php echo join("\", \"", $sub_ID); ?>"];
		  var sub_AC =  ["<?php echo join("\", \"", $sub_AC); ?>"];
		  var sub_GeneName =  ["<?php echo join("\", \"", $sub_GeneName); ?>"];
		  
		  //UbiSubstrate proteins
		  var UbiSub_ID_List=["<?php echo join("\", \"", $UbiSub_ID_List); ?>"];
          var UbiSub_AC_List=["<?php echo join("\", \"", $UbiSub_AC_List); ?>"];
          var UbiSub_GeneName_List=["<?php echo join("\", \"", $UbiSub_GeneName_List); ?>"];
          var UbiSub_UbiSites_List=["<?php echo join("\", \"", $UbiSub_UbiSites_List); ?>"];
          var UbiSub_UbiPubIDs_List=["<?php echo join("\", \"", $UbiSub_UbiPubIDs_List); ?>"];
          
		  //Interactions
          var inter=["<?php echo join("\", \"", $inter); ?>"];
          var ID_a=["<?php echo join("\", \"", $ID_a); ?>"];
          var AC_a=["<?php echo join("\", \"", $AC_a); ?>"];
          var Gene_a=["<?php echo join("\", \"", $Gene_a); ?>"];
          var ID_b=["<?php echo join("\", \"", $ID_b); ?>"];
          var AC_b=["<?php echo join("\", \"", $AC_b); ?>"];
          var Gene_b=["<?php echo join("\", \"", $Gene_b); ?>"];  
          var pubmedID=["<?php echo join("\", \"", $pubmedID); ?>"];
          var resource=["<?php echo join("\", \"", $resource); ?>"];
		  var chkExpandAll=0;
		  
          
         $('#cy').cytoscape({
          style: cytoscape.stylesheet()
            .selector('node')
              .css({
                'content': 'data(id)',
                'text-valign': 'center',
                'color': 'white',
                'shape': 'circle',
                'background-color':'green',
                'text-outline-width': 2,
                'text-outline-color': '#888',
                'width': 30,
                'height': 30
              })
            .selector('edge')
              .css({
				'width':2,
				'line-color':'orange',
				'opacity': 0.8
              })
            .selector(':selected')
              .css({
                'border-color': 'black',
                'border-width': 3,
                'line-color': 'black',
                'target-arrow-color': 'black',
                'source-arrow-color': 'black'
              })
            .selector('.faded')
              .css({
                'opacity': 0.8,
              })
            .selector('.faded_node')
              .css({
                'opacity': 0.08,
                'text-opacity': 0
              })
            .selector('.ubi')
              .css({
                'width': 10,
                'height': 10,
                'background-color': '#000000',
                'opacity': 1.0
              })
              .selector('.ubi_edge')
              .css({
                'width':3,
                'line-color': 'red',
                'target-arrow-shape': 'none',
                'target-arrow-color': 'red'
              })
            .selector('.substrate')
              .css({
                'content': 'data(name)',
                'text-valign': 'center',
                'color': 'white',
                'background-color':'#4169e1',
                'text-outline-width': 2,
                'text-outline-color': '#888',
                'width': 30,
                'height': 30
              })
              .selector('.background')
              .css({
                'border-width':0.0001,
                'border-color': '#ffffff',
              }),
          ready: function(){
                window.cy = this;
                if(input_proteins[0]!="") // If the given list is not empty
                {
                    for(var i=0 ; i < sub_ID.length ; i++) // Add protein nodes
                    {
                        var node = cy.nodes("[uniprotid*='"+sub_ID[i]+"']");
                        node.data('text',sub_ID[i]);
                        node.data('IsProtein','true');
                        node.data('IsE3','false');
                        node.data('IsSub','false');
						node.data('sub_AC',sub_AC[i]);
                        node.data('sub_GeneName',sub_GeneName[i]);
                        node.css('shape','circle'); // proteins
                        node.css('background-color','#EE82EE');
                    }
                    for(var j=0 ; j < UbiSub_ID_List.length ; j++) // Add UbiSubstrate nodes
                    {
                        var node = cy.nodes("[uniprotid*='"+UbiSub_ID_List[j]+"']");
                        node.data('text',UbiSub_GeneName_List[j]);
                        node.data('IsE3','false');
                        node.data('IsSub','true');
                        node.data('UbiSub_AC',UbiSub_AC_List[j]);
                        node.data('UbiSub_GeneName',UbiSub_GeneName_List[j]);
                        node.data('UbiSub_UbiSites',UbiSub_UbiSites_List[j]);
                        node.data('UbiSub_PubIDs',UbiSub_UbiPubIDs_List[j]);
                        node.css('shape','circle'); //Ubisubstrate proteins
                        node.css('background-color','green');
                    }
					// Add subtrate nodes
					for(var i=0 ; i <sub_ID.length ; i++)
					{
						var tmp1=cy.add({
							group: "nodes",
								data: {id:sub_ID[i], name: sub_ID[i], uniprotac: sub_AC[i] , uniprotid: sub_ID[i] , IsProtein:'true', IsSub:'false', IsE3:'false', shouldhide: 'true' , value:"Null", right_click: "false" , gene: sub_GeneName[i]}
						});
						tmp1.data('host',tmp1.data('id'));
						
					}
					// Add UbiSubstrate nodes
					for(var i=0 ; i <UbiSub_ID_List.length ; i++)
					{
						var tmp1=cy.add({
							group: "nodes",
								data: {id:UbiSub_ID_List[i], name: UbiSub_ID_List[i], uniprotac: UbiSub_AC_List[i] , uniprotid: UbiSub_ID_List[i] , IsProtein:'true', IsSub:'true', IsE3:'false', shouldhide: 'true' , value:"Null", right_click: "false" , gene: UbiSub_GeneName_List[i]}			
						});
						tmp1.data('host',tmp1.data('id'));
					}
					// Add edges
					for(var i=0 ; i <sub_ID.length ; i++)
					for(var j=0 ; j <sub_ID.length ; j++)
					{
						if(inter[i*num_all+j]==1){//If there exist an interaction between node i and node j, add an edge to the graph
							var tmp1=cy.add({
								group: "edges",
									data: {id:sub_ID[i]+sub_ID[j],source: sub_ID[i], target: sub_ID[j],PubMedID:pubmedID[i*num_all+j] , resource:resource[i*num_all+j], PPI:"Protein{"+sub_ID[i]+"} &rArr; " + " Protein{"+sub_ID[j]+"}" ,edge_for_PPI: "true"}			
								});
							tmp1.data('host',tmp1.data('id'));
						}
						
					}
				
                }
                
                //Set background image for nodes
                cy.nodes("[IsSub='true']").css("background-opacity",'0');
                cy.nodes("[IsSub='true']").css("background-image","http://140.138.144.145/~ubinet/images/UbiSub.png");
                /*interaction*/
               
				
            
               //Events processing
			  function handle_click(event) {
				  clear();
				  if(event.cyTarget.isNode()==true && event.cyTarget.data('IsProtein') == "true" && event.cyTarget.data('IsSub') == "false" && event.cyTarget.data('IsE3') == "false"){
					  print("\tProtein_ID : "+event.cyTarget.data("uniprotid"));
					  print("\tProtein_AC : "+event.cyTarget.data("sub_AC"));
					  print("\tProtein_GeneName : "+event.cyTarget.data("sub_GeneName"));
				  }
				  if(event.cyTarget.isNode()==true && event.cyTarget.data('IsProtein') == "true" && event.cyTarget.data('IsSub') == "true" && event.cyTarget.data('IsE3') == "false"){
					  print("\tUbiSubstrate_ID : "+event.cyTarget.data("uniprotid"));
					  print("\tUbiSubstrate_AC : "+event.cyTarget.data("UbiSub_AC"));
					  print("\tUbiSubstrate_GeneName : "+event.cyTarget.data("UbiSub_GeneName"));
					  print("\tUbiSubstrate_UbiSites : "+event.cyTarget.data("UbiSub_UbiSites"));
					  print("\tUbiSubstrate_PubIDs : "+event.cyTarget.data("UbiSub_PubIDs"));
				  }
				 if(event.cyTarget.isEdge()==true && event.cyTarget.data('edge_for_PPI') == "true"){
					  print("\tInteractional Relationship : "+event.cyTarget.data("PPI"));
					  print("\tResource : "+event.cyTarget.data("resource"));
					  print("\tPubmed_ID : "+event.cyTarget.data("PubMedID"));
				  }
						  
			  }
              
              function clear() {
                  document.getElementById("note").innerHTML = "";
              }
          
              function print(msg) {
                  document.getElementById("note").innerHTML += "<p>" + msg + "</p>";
              }
              
             cy.on('select' , 'node' , function(e){
                  var node = cy.$(':selected');
                  var neighborhood = node.neighborhood().add(node);
                  cy.elements().addClass('faded_node');
                  neighborhood.removeClass('faded_node');
                  cy.nodes("[background='true']").removeClass('faded_node');
              });
              
              cy.on('tap', function(e){
                  if( e.cyTarget === cy ){
                      cy.elements().removeClass('faded_node');//??????
                  }
              });
              
              cy.on('tap','node' ,function(e){
                  handle_click(e); 
              });
              
              cy.on('tap','edge' ,function(e){
                 handle_click(e);
              });
            
            }
            
        });	
                    
        
        var cy = $("#cy").cytoscape("get");
			if(input_proteins[0] != ""){
				// Add subtrate nodes
				for(var i=0 ; i <sub_ID.length ; i++)
				{
					var tmp1=cy.add({
						group: "nodes",
							data: {id:sub_ID[i], name: sub_ID[i], uniprotac: sub_AC[i] , uniprotid: sub_ID[i] , IsProtein:'true', IsSub:'false', IsE3:'false', shouldhide: 'true' , value:"Null", right_click: "false" , gene: sub_GeneName[i]}
					});
					tmp1.data('host',tmp1.data('id'));
					
				}
				// Add UbiSubstrate nodes
				for(var i=0 ; i <UbiSub_ID_List.length ; i++)
				{
					var tmp1=cy.add({
						group: "nodes",
							data: {id:UbiSub_ID_List[i], name: UbiSub_ID_List[i], uniprotac: UbiSub_AC_List[i] , uniprotid: UbiSub_ID_List[i] , IsProtein:'true', IsSub:'true', IsE3:'false', shouldhide: 'true' , value:"Null", right_click: "false" , gene: UbiSub_GeneName_List[i]}			
					});
					tmp1.data('host',tmp1.data('id'));
				}
				// Add edges
				for(var i=0 ; i <sub_ID.length ; i++)
				for(var j=0 ; j <sub_ID.length ; j++)
				{
					if(inter[i*num_all+j]==1){//If there exist an interaction between node i and node j, add an edge to the graph
						var tmp1=cy.add({
							group: "edges",
								data: {id:sub_ID[i]+sub_ID[j],source: sub_ID[i], target: sub_ID[j],PubMedID:pubmedID[i*num_all+j] , resource:resource[i*num_all+j], PPI:"Protein{"+sub_ID[i]+"} &rArr; " + " Protein{"+sub_ID[j]+"}" ,edge_for_PPI: "true"}			
							});
						tmp1.data('host',tmp1.data('id'));
					}
					
				}
					
		}
        
        
        cy.layout({ name: 'arbor' });
        
        
        function changed(theselect){
            cy.layout({
                name: theselect.value,
                fit: true
            });
        }
        
        
        function checkbox(theselect)
        {
            if(theselect.checked==true && theselect.value=="PPI_Interaction")
                cy.edges("[edge_for_PPI='true']").show();
            if(theselect.checked==false && theselect.value=="PPI_Interaction")
                cy.edges("[edge_for_PPI='true']").hide();
            if(theselect.checked==true && theselect.value=="DDI_Interaction")
                        cy.edges("[edge_for_DDI='true']").show();
                if(theselect.checked==false && theselect.value=="DDI_Interaction")
                        cy.edges("[edge_for_DDI='true']").hide();
        }
        
        /*Expand E3 node*/
        
        function Expand()
        {
                var selected = cy.$(':selected');
            //if(cy.$(':selected').data("uniprotid") == undefined)
              
            //if(cy.$(':selected').isNode()==false)
            if((cy.$(':selected').isNode()==false)||(cy.$(':selected').data('IsE3')=="false")||selected.length>1){
                if(selected.length>1) alert("Number of selected nodes is too much. Only one E3 node is accepted!");
                else
                    if(cy.$(':selected').isNode()==false) alert("The selected is not a node. Please select a E3 node to be expanded")
                    else alert("The selected is not a E3 node. Only one E3 node is accepted!")
                //alert("Please select a E3 node to be expanded")
            }
            else{ 
                var n = cy.nodes("[host='"+selected[0].data('id')+"']").add(selected)
                for(var i=1 ; i < selected.nodes().length ; i++)
                {
                    var m = cy.nodes("[host='"+selected[i].data('id')+"']").add(n);
                    n = m;
                }
                var m=cy.nodes.length;
                var id=cy.$(':selected').data('id');
                var text=cy.$(':selected').data('text');
                var msg="You have selected an E3 node with ID = " + id + " Are you sure to expand for this E3 node?";
                alert("You have selected an E3 node with ID");
                alert(id);
                alert(text);
                //if(confirm("Are you sure to expand?"))
                //{
                //	alert("Expand network for all proteins being recognized by the E3 node {ID=".id."}!");
                    
                //}
                
            }
        }
        function Expand_all()
        {
            // expand for all E3s nodes
           
        }
        
        
        /*delete node or edge*/
        
        function Delete()
        {
            var selected = cy.$(':selected');
            if(cy.$(':selected').data("id") == undefined)
                        alert("Please select a node or edge")
            else
            if(confirm("Sure to delete?"))
            {
                var n = cy.nodes("[host='"+selected[0].data('id')+"']").add(selected)
                for(var i=1 ; i < selected.nodes().length ; i++)
                {
                    var m = cy.nodes("[host='"+selected[i].data('id')+"']").add(n);
                    n = m;
                }
                n.remove();
            }
        }
        
        </script>
	</div> <!--End of div="note" -->
</body>
</html>
