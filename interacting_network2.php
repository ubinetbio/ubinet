<html>
<link rel="icon" href="images/UbiNet.ico" type="image/x-icon">
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
	


include "mysql_connection.inc";

$E3_ID_List=array();
$E3_AC_List=array();
$E3_GeneName_List=array();
$E3_group_List=array();
$E3_Ensembl_List=array();
$E3_PubMedID_List=array();

$sub_ID_List=array();
$sub_AC_List=array();
$sub_GeneName_List=array();
$sub_UbiSites_List=array();
$sub_UbiPubIDs_List=array();

	for($i=0 ; $i < count($protein) ; $i++)
	{
			 // Get list of E3s and its informations
			 $sql1 = "select distinct E3_ID, E3_AC, GeneName, E3_group, Ensembl, PubMedID from final_E3_Human where E3_ID = '$protein[$i]'";
			 $result1 = mysql_query($sql1) or die("Query failed : " . mysql_error());
			 $num_rows1 = mysql_num_rows($result1);
			 if($num_rows1 > 0)
			 {
					 if($data1 = mysql_fetch_array($result1))
					 {
							$E3_ID_List[count($E3_ID_List)] = $data1[0];
							$E3_AC_List[count($E3_AC_List)] = $data1[1];
							$E3_GeneName_List[count($E3_GeneName_List)] = $data1[2];
							$E3_group_List[count($E3_group_List)]=$data1[3];
							$E3_Ensembl_List[count($E3_Ensembl_List)]=$data1[4];
							$E3_PubMedID_List[count($E3_PubMedID_List)]=$data1[5];
					 }
			 }
	
			 // Get list of UbiSubstrate proteins and its informations
			 $sql2 = "select distinct ID, AC, GeneName, UbSites, Ubi_PubMedIDs from final_UbiSubstrate_Human where ID = '$protein[$i]'";
			 $result2 = mysql_query($sql2) or die("Query failed : " . mysql_error());
			 $num_rows2 = mysql_num_rows($result2);
			 if($num_rows2 > 0)
			 {
					 while($data2 = mysql_fetch_array($result2))
					 {
							$sub_ID_List[count($sub_ID_List)] = $data2[0];
							$sub_AC_List[count($sub_AC_List)] = $data2[1];
							$sub_GeneName_List[count($sub_GeneName_List)] = $data2[2];
							$sub_UbiSites_List[count($sub_UbiSites_List)] = $data2[3];
							$sub_UbiPubIDs_List[count($sub_UbiPubIDs_List)]=$data2[4];
					 }
			 }
	}
	
	/*-----interaction--------*/
	
	$num_E3=count($E3_ID_List);
	$num_subs=count($sub_ID_List);
	$inter=array();
	$arrPPI_Resource=array();
	$arrPPI_PubID=array();
	$arrE3_GeneName=array();
	$arrE3_Group=array(); 
	$arrE3_Ensemble=array();
	$arrE3_PubID=array(); 
	
	$arrUbiSubstrate_Sites=array();
	$arrUbiSubstrate_PubID=array();
	
	//print_r($num_E3);
	//print_r($num_subs);
	
	for($i=0; $i < $num_E3; $i++)
	for($j=0; $j < $num_subs; $j++){
		
		$sql5 = "select E3_ID,Sub_ID,PPI_Resource,PPI_PubID,E3_GeneName, E3_Group, E3_Ensembl,E3_PubID, Sub_UbiSites, Sub_PubID from final_Interaction_E3_Sub_PPI_Human_No_String where E3_ID = '".$E3_ID_List[$i]."' and Sub_ID = '".$sub_ID_List[$j]."'";       
		$result5 = mysql_query($sql5) or die("Query failed : " . mysql_error());
		$num_rows5 = mysql_num_rows($result5);
		if($num_rows5 > 0)
		{
			   if($data5 = mysql_fetch_array($result5))
			   {
				  $inter[$i*$num_subs+$j]=1; 
				  $arrPPI_Resource[$i*$num_subs+$j]=$data5[2];
				  $arrPPI_PubID[$i*$num_subs+$j]=$data5[3];
				  $arrE3_GeneName[$i*$num_subs+$j]=$data5[4];
				  $arrE3_Group[$i*$num_subs+$j]=$data5[5]; 
				  $arrE3_Ensemble[$i*$num_subs+$j]=$data5[6];
				  $arrE3_PubID[$i*$num_subs+$j]=$data5[7]; 
				  $arrUbiSubstrate_Sites[$i*$num_subs+$j]=$data5[8];
				  $arrUbiSubstrate_PubID[$i*$num_subs+$j]=$data5[9];
			   }
		}
		else{
			
			  $inter[$i*$num_subs+$j]=0; 
			  $arrPPI_Resource[$i*$num_subs+$j]="Not given";
			  $arrPPI_PubID[$i*$num_subs+$j]="Not given";
			  $arrE3_GeneName[$i*$num_subs+$j]="Not given";
			  $arrE3_Group[$i*$num_subs+$j]="Not given";
			  $arrE3_Ensemble[$i*$num_subs+$j]="Not given";
			  $arrE3_PubID[$i*$num_subs+$j]="Not given";
			  $arrUbiSubstrate_Sites[$i*$num_subs+$j]="Not given";
			  $arrUbiSubstrate_PubID[$i*$num_subs+$j]="Not given";
			}
			
		}



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
bluetext{
	color:blue;
	}
greentext{
	color:green;
	}
orangetext{
	color:orange;
	}
redtext{
	color:red;
	}
	
	
#cy {
	height: 85%;
	width: 75%;
	position: absolute;
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
      <td>
	    <!--&nbsp;<b>Graph Layout:</b>-->
        <b><u style="font-size: 16px; font-family: Verdana, Geneva, sans-serif; color:#00F">Graph Layout</u>:</b>
        <p>
        &nbsp;&nbsp;<b>
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
        </b></td>
    </tr>
    <tr>
      <td><p>&nbsp;
        
        	&nbsp;&nbsp; 
        	<input type="button" id="delete" name="Delete node or edge" value="Delete node or edge" onClick="Delete()"/>
        </p>
        </td>
    </tr>
    <td><p>      
        <b><u style="font-size: 16px; font-family: Verdana, Geneva, sans-serif; color:#00F">Legends</u>:</b>
        <p>&nbsp;&nbsp;&nbsp; <span style="color: #000; font-weight: bold;">Hexagon shape</span>: E3 ligase</p>
        <p>&nbsp;&nbsp;&nbsp; <span style="color: #000; font-weight: bold;">Circle shape</span>: General protein</p>
        <p>&nbsp;&nbsp;&nbsp;<strong style="color: #093"> Green color</strong>: Ubiquitinated E3 or protein</p>
        <p>&nbsp;&nbsp;&nbsp;<strong style="color: magenta"> Magenta color</strong>: Interacting protein</p>        
        
        <!--
        <p>&nbsp;&nbsp;&nbsp; <span style="color: #FC0; font-weight: bold;"><strong>Orange line</strong></span>: PPI interaction</p>
        <p>&nbsp;&nbsp;&nbsp; <span style="color: #F00; font-weight: bold;"><strong>Red line</strong></span>: DDI interaction</p>
        -->
        <P>&nbsp;</p></td>
    </tr>
   
  </table>
</FORM>
  </div>
  <blockquote><div id="note">
  <p>Click nodes or edges.</p>
  <script>
    	
  var input_proteins =  ["<?php echo join("\", \"", $tmp); ?>"];
  var E3 = ["<?php echo join("\", \"", $E3); ?>"]; 
  var E3_ID_List = ["<?php echo join("\", \"", $E3_ID_List); ?>"];
  var E3_AC_List = ["<?php echo join("\", \"", $E3_AC_List); ?>"];
  var E3_GeneName_List = ["<?php echo join("\", \"", $E3_GeneName_List); ?>"];
  var E3_group_List = ["<?php echo join("\", \"", $E3_group_List); ?>"];
  var E3_Ensembl_List = ["<?php echo join("\", \"", $E3_Ensembl_List); ?>"];
  var E3_PubMedID_List = ["<?php echo join("\", \"", $E3_PubMedID_List); ?>"];
  var sub_ID_List=["<?php echo join("\", \"", $sub_ID_List); ?>"];
  var sub_AC_List=["<?php echo join("\", \"", $sub_AC_List); ?>"];
  var sub_GeneName_List=["<?php echo join("\", \"", $sub_GeneName_List); ?>"];
  var sub_UbiSites_List=["<?php echo join("\", \"", $sub_UbiSites_List); ?>"];
  var sub_UbiPubIDs_List=["<?php echo join("\", \"", $sub_UbiPubIDs_List); ?>"];

  var interE3_Sub = ["<?php  echo join("\", \"", $inter); ?>"];
  var num_subs=  "<?php  echo  $num_subs; ?>";
   
//	alert(  interE3_Sub[1].toString());
  var arrPPI_Resource = ["<?php echo join("\", \"", $arrPPI_Resource); ?>"];
  var arrPPI_PubID = ["<?php echo join("\", \"", $arrPPI_PubID); ?>"];
  var arrE3_GeneName = ["<?php echo join("\", \"", $arrE3_GeneName); ?>"];
  var arrE3_Group = ["<?php echo join("\", \"", $arrE3_Group); ?>"];
  var arrE3_Ensemble = ["<?php echo join("\", \"", $arrE3_Ensemble); ?>"];
  var arrE3_PubID = ["<?php echo join("\", \"", $arrE3_PubID); ?>"];
  var arrUbiSubstrate_Sites = ["<?php echo join("\", \"", $arrUbiSubstrate_Sites); ?>"];
  var arrUbiSubstrate_PubID = ["<?php echo join("\", \"", $arrUbiSubstrate_PubID); ?>"];
  
  
 $('#cy').cytoscape({
  style: cytoscape.stylesheet()
	.selector('node')
      .css({
        //'content': 'data(id)',
		'content': 'data(text)',
        'text-valign': 'center',
        'color': 'white',
		//'shape': 'circle',
		//'background-color':'green',
		'background-color':'#4169e1',
        'text-outline-width': 2,
        'text-outline-color': '#888',
		'width': 30,
		'height': 30
      })
    .selector('edge')
      .css({
	'width':2,
	'line-color':'red',
	'target-arrow-shape': 'triangle',
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
        'opacity': 0.1,
		'background-image-opacity':0.1,
		'background-blacken':-1,
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
		'target-arrow-shape': 'triangle',
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
		'border-color': '#ffffff'

		
		
      }),
  ready: function(){
		window.cy = this;
		
		
		if(input_proteins[0]!="")
		{
			
			for(var i=0 ; i < sub_ID_List.length ; i++) // Add Substrate nodes
			{
				var node = cy.nodes("[uniprotid*='"+sub_ID_List[i]+"']");
				node.data('checkE3',0);
				node.data('text',sub_GeneName_List[i]);
				node.data('IsE3','false');
				node.data('IsSub','true');
				node.data('Sub_AC',sub_AC_List[i]);
				node.data('Sub_GeneName',sub_GeneName_List[i]);
				node.data('Sub_UbiSites',sub_UbiSites_List[i]);
				node.data('Sub_PubIDs',sub_UbiPubIDs_List[i]);
				node.css('shape','circle'); //substrate proteins
				node.css('background-color','green');
			}
			for(var i=0 ; i < E3_ID_List.length ; i++) // Add E3 nodes
			{
				var node = cy.nodes("[uniprotid*='"+E3_ID_List[i]+"']");
				node.data('checkE3',1);
				node.data('text',E3_GeneName_List[i]);
				node.data('IsE3','true');
				//node.data('IsSub','false');	
				node.data('E3_GeneName',E3_GeneName_List[i]);
				node.data('E3_Group',E3_group_List[i]);
				node.data('E3_Ensembl',E3_Ensembl_List[i]);
				node.data('E3_PubMedID',E3_PubMedID_List[i]);
				node.css('shape','hexagon'); //substrate proteins
				node.css('background-color','blue');
				node.css('width','40');
				node.css('height','40');
			}
		
		}
		
		//Set background image for nodes
		
		cy.nodes("[UbiProtein=1]").css("background-opacity",'0');
		cy.nodes("[UbiProtein=1]").css("background-image","http://140.138.144.145/~ubinet/images/UbiProtein.png");

		cy.nodes("[IsE3='true']").css("background-opacity",'0');
		cy.nodes("[IsE3='true']").css("background-image","http://140.138.144.145/~ubinet/images/UbiE3.png");
		
		cy.nodes("[IsSub='true']").css("background-opacity",'0');
		cy.nodes("[IsSub='true']").css("background-image","http://140.138.144.145/~ubinet/images/UbiSub.png");

		/*interaction*/
       // add edges
	   
	   
		for(var i=0 ; i <E3_ID_List.length ; i++)
		for(var j=sub_ID_List.length-1 ; j <sub_ID_List.length ; j++)
		{
			//print(interE3_Sub[i][j]);
			if(interE3_Sub[i*num_subs+j]==1){//If there exist an interaction, add an edge to the graph
			//if(int_act[i*15+j]==1){//If there exist an interaction, add an edge to the graph
				var tmp1=cy.add({
					group: "edges",
						data: {id:E3_ID_List[i]+sub_ID_List[j],source: E3_ID_List[i], target: sub_ID_List[j],PubMedID:arrPPI_PubID[i*num_subs+j] , resource:arrPPI_Resource[i*num_subs+j], PPI:"E3{"+E3_ID_List[i]+"} &#8594 " + " Substrate{"+sub_ID_List[j]+"}" ,edge_for_PPI: "true"}
					});
				tmp1.data('host',tmp1.data('id'));
			}
			
		}
		
	  //Events processing
	  function handle_click(event) {
		  clear();
		  if(event.cyTarget.isNode()==true && event.cyTarget.data('IsE3') == "true"){
			  print("\tE3_GeneName : "+event.cyTarget.data("E3_GeneName"));
			  //print("\tE3_ID : "+event.cyTarget.data("uniprotid"));
			  print_proteinDetail("\tE3_ID : ", event.cyTarget.data("uniprotid"));
			  print("\tE3_Group : "+event.cyTarget.data("E3_Group"));
			  print("\tE3_Ensembl : "+event.cyTarget.data("E3_Ensembl"));
			  print("\tE3_PubMedID : "+event.cyTarget.data("E3_PubMedID"));
			  
		  }
		  if(event.cyTarget.isNode()==true && event.cyTarget.data('IsSub') == "true"){
			  print("\tUbiSubstrate_GeneName : "+event.cyTarget.data("Sub_GeneName"));
			  //print("\tUbiSubstrate_ID : "+event.cyTarget.data("uniprotid"));
			 // print("\tUbiSubstrate_AC : "+event.cyTarget.data("Sub_AC"));
			  print_proteinDetail("\tUbiSubstrate_ID : ", event.cyTarget.data("uniprotid"));
			  print_uniprotID_AC("\tUbiSubstrate_AC : ", event.cyTarget.data("Sub_AC"));
			  print("\tUbiSubstrate_UbiSites : "+event.cyTarget.data("Sub_UbiSites"));
			  print("\tUbiSubstrate_PubIDs : "+event.cyTarget.data("Sub_PubIDs"));
			  
		  }
		  if(event.cyTarget.isEdge()==true && event.cyTarget.data('edge_for_PPI') == "true"){
			  print("Interactional Relationship : "+event.cyTarget.data("PPI"));
			  print("Resource : "+event.cyTarget.data("resource"));
			  print("PubMed_ID : "+event.cyTarget.data("PubMedID"));
		  }

	  }
	  
	 function clear() {
		  document.getElementById("note").innerHTML = "";
	  }
  
	  function print(msg) {
		  document.getElementById("note").innerHTML += "<p>" + msg + "</p>";
	  }
	  function print_uniprotID_AC(msg,id_ac){
		  var cut = id_ac.split(";");
		  var tmp = "";
		 
		  for(var j=0 ; j < cut.length ; j++)
		  {
			  var a = $.trim(cut[j]);
			  tmp +="<a href=http://www.uniprot.org/uniprot/"+a+"  target=_blank  style=text-decoration:none;color:blue;>"+a +"</a>";
		  }
		  document.getElementById("note").innerHTML += "<p>" + msg + tmp +"</p>";
	  }
	  function print_proteinDetail(msg,id_ac){
		  var cut = id_ac.split(";");
		  var tmp = "";
		 
		  for(var j=0 ; j < cut.length ; j++)
		  {
			  var a = $.trim(cut[j]);
			  //tmp +="<a href=http://www.uniprot.org/uniprot/"+a+"  target=_blank  style=text-decoration:none;color:blue;>"+a +"</a>";
			  tmp +="<a href=search_result.php?search_type=db_id&swiss_id="+a+"  target=_blank  style=text-decoration:none;color:blue;>"+a +"</a>";
			  //search_result.php?search_type=db_id&swiss_id=UBE3A_HUMAN
		  }
		  document.getElementById("note").innerHTML += "<p>" + msg + tmp +"</p>";
	  }
	  function viewUbiSite_prediction(isUbiProtein, ID){
		  var msg = "";
		  var tmp = "";
		  var text="";
		  if(isUbiProtein==1){ 
		  	msg="Predicted (by <a href=http://csb.cse.yzu.edu.tw/UbiSite/ target=_blank  style=text-decoration:none;color:blue;> UbiSite</a>) as <strong><font color=red> Ubiquitinated protein</font></strong>";
			text=" ==> Show detail...";
		  }
		  else{
		  	text="";
			//msg=msg+"Non- Ubiquitinated protein";
			msg="Predicted (by <a href=http://csb.cse.yzu.edu.tw/UbiSite/ target=_blank  style=text-decoration:none;color:blue;> UbiSite</a>) as <strong><font color=red> Non-Ubiquitinated protein</font></strong>";
		  }
		  
		  tmp ="<a href=viewUbiSite_Prediction.php?keyword="+ID+"  target=_blank  style=text-decoration:none;color:blue;>"+text+"</a>";
		  document.getElementById("note").innerHTML += "<p>" + msg + tmp +"</p>";
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
if(input_proteins[0] != "")
{
	// Add subtrate nodes
	for(var i=0 ; i <sub_ID_List.length ; i++)
	{
		var tmp1=cy.add({
			group: "nodes",
				data: {id:sub_ID_List[i], name: sub_ID_List[i], uniprotac: sub_ID_List[i] , uniprotid: sub_ID_List[i] , IsSub:'true', IsE3:'false', shouldhide: 'true' , value:"Null", right_click: "false" , gene: sub_ID_List[i]}
		});
		tmp1.data('host',tmp1.data('id'));
	}
	// Add E3s nodes
	for(var i=0 ; i <E3_ID_List.length ; i++)
	{
		var tmp1=cy.add({
			group: "nodes",
				data: {id:E3_ID_List[i], name: E3_ID_List[i], uniprotac: E3_ID_List[i] , uniprotid: E3_ID_List[i] , IsE3:'true', shouldhide: 'true' , value:"Null", right_click: "false" , gene: E3_ID_List[i]}
		});
		tmp1.data('host',tmp1.data('id'));
	}
	
	// Add edges
	for(var i=0 ; i <E3_ID_List.length ; i++)
	for(var j=sub_ID_List.length-1 ; j <sub_ID_List.length ; j++)
	{
		//print(interE3_Sub[i][j]);
		if(interE3_Sub[i*num_subs+j]==1){//If there exist an interaction, add an edge to the graph
		//if(int_act[i*15+j]==1){//If there exist an interaction, add an edge to the graph
			var tmp1=cy.add({
				group: "edges",
					data: {id:E3_ID_List[i]+sub_ID_List[j],source: E3_ID_List[i], target: sub_ID_List[j],PubMedID:arrPPI_PubID[i*num_subs+j] , resource:arrPPI_Resource[i*num_subs+j], PPI:"E3{"+E3_ID_List[i]+"} &#8594 " + " Substrate{"+sub_ID_List[j]+"}" ,edge_for_PPI: "true"}
				});
			tmp1.data('host',tmp1.data('id'));
		}
		
	}
	

}

if(sub_ID_List.length<40)
	cy.layout({ name: 'arbor' });
else	
	cy.layout({ name: 'circle' });

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

function Expand(event)
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
		alert(m);
	}
	// expand for the selected E3 node
	
}
function Expand_all()
{
	// expand for all E3s nodes
	
}

/*Re-arrange the graph*/

function Re_Arrange()
{
	var node9 = cy.$("#9");
	var node11 = cy.$("#11");
	var node12 = cy.$("#12");
	
	
	cy.center( node9);
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
</div>
</blockquote>
</body>
</html>
