<html>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
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

$sub_ID_List=array();
$sub_AC_List=array();
$sub_UbiSites_List=array();
$sub_UbiPubIDs_List=array();



$arrE3_ID=array();
$arrPPI_Resource=array();
$arrPPI_PubID=array();
$arrE3_GeneName=array();
$arrE3_Group=array(); 
$arrE3_Ensemble=array();
$arrE3_PubID=array(); 
$arrUbiSubstrate_ID=array();
$arrUbiSubstrate_Sites=array();
$arrUbiSubstrate_PubID=array();


for($i=0 ; $i < count($protein) ; $i++)
{
         // Get list of E3s and its informations
		 $sql1 = "select distinct E3_ID,E3_AC, GeneName, E3_group, Ensembl from E3_Human_Final where E3_ID = '$protein[$i]'";
         $result1 = mysql_query($sql1) or die("Query failed : " . mysql_error());
         $num_rows1 = mysql_num_rows($result1);
         if($num_rows1 > 0)
         {
                 while($data1 = mysql_fetch_array($result1))
                 {
						$E3_ID_List[count($E3_ID_List)] = $data1[0];
                  	$E3_AC_List[count($E3_AC_List)] = $data1[1];
						$E3_GeneName_List[count($E3_GeneName_List)] = $data1[2];
						$E3_group_List[count($E3_group_List)]=$data1[3];
						$E3_Ensembl_List[count($E3_Ensembl_List)]=$data1[4];
                 }
         }

		 // Get list of UbiSubstrate proteins and its informations
		   $sql2 = "select distinct ID,AC, UbSites, Ubi_PubMedIDs from UbiSubstrate_Human_Final where ID = '$protein[$i]'";
         $result2 = mysql_query($sql2) or die("Query failed : " . mysql_error());
         $num_rows2 = mysql_num_rows($result2);
         if($num_rows2 > 0)
         {
                 while($data2 = mysql_fetch_array($result2))
                 {
						$sub_ID_List[count($sub_ID_List)] = $data2[0];
                  	$sub_AC_List[count($sub_AC_List)] = $data2[1];
						$sub_UbiSites_List[count($sub_UbiSites_List)] = $data2[2];
						$sub_UbiPubIDs_List[count($sub_UbiPubIDs_List)]=$data2[3];
                 }
         }
}


/*
// If having only E3s without any substrate, will find all substrates recognized by these E3s: ---> Start
 if(count($sub_ID_List)<=0)
 	 for($i=0 ; $i < count($protein) ; $i++)
		{
	        // Get list of UbiSubstrate proteins and its informations
			  $sql3 = "select distinct E3_ID, UbiSubstrate_ID,UbiSubstrate_UbiSites, UbiSubstrate_PubID from Interaction_E3_UbiSubstrate_Human_Final where E3_ID = '$protein[$i]'";       
	         $result3 = mysql_query($sql3) or die("Query failed : " . mysql_error());
	         $num_rows3 = mysql_num_rows($result3);
	         if($num_rows3 > 0)
	         {
	                 while($data3 = mysql_fetch_array($result3))
	                 {
							$sub_ID_List[count($sub_ID_List)] = $data3[1];
	                  	//$sub_AC_List[count($sub_AC_List)] = $data3[1];
	                  	//$sub_AC_List[count($sub_AC_List)]=$sub_ID_List[count($sub_ID_List)-1];
							$sub_UbiSites_List[count($sub_UbiSites_List)] = $data3[2];
							$sub_UbiPubIDs_List[count($sub_UbiPubIDs_List)]=$data3[3];
	
	                 }
	         }
		}

 print_r($protein);
 print_r($sub_ID_List);
 
// If having only E3s without any substrate, will find all substrates recognized by these E3s: ---> End
*/

/*search E3 in pathway*/
for($i=0 ; $i<count($E3_ID_List) ; $i++)
{
         $sql = "select E3_ID,Resource, Term_ID, P_value from E3_Pathway_Human_Final where E3_ID = '$E3_ID_List[$i]'";
         $result = mysql_query($sql) or die("Query failed : " . mysql_error());
         $num_rows = mysql_num_rows($result);
         if($num_rows > 0)
         {
              $data = mysql_fetch_array($result);
              $E3_Pathway_ID[count($E3_pathway_ID)] = $data[0];
              $E3_Pathway_Resource[count($E3_pathway_Resource)] = $data[1];
				$E3_Pathway_Term_ID[count($E3_pathway_Term_ID)] = $data[2];
				$E3_Pathway_P_value[count($E3_pathway_P_value)] = $data[3];
	 }
}

/*search E3 in Diseases*/
for($i=0 ; $i<count($E3_ID_List) ; $i++)
{
         $sql = "select E3_ID,Category, Term_ID, Term_Name, P_value from E3_Disease_Human_Final where E3_ID = '$E3_ID_List[$i]'";
         $result = mysql_query($sql) or die("Query failed : " . mysql_error());
         $num_rows = mysql_num_rows($result);
         if($num_rows > 0)
         {
              $data = mysql_fetch_array($result);
              $E3_Disease_ID[count($E3_pathway_ID)] = $data[0];
              $E3_Disease_Category[count($E3_pathway_Category)] = $data[1];
				$E3_Disease_Term_ID[count($E3_pathway_Term_ID)] = $data[2];
				$E3_Disease_Term_Name[count($E3_pathway_Term_Name)] = $data[3];
				$E3_Disease_P_value[count($E3_pathway_P_value)] = $data[4];
	 }
}

/*-----interaction--------*/
for($num=0;$num<count($E3_ID_List);$num++)
{
        for($num2=0;$num2<count($sub_ID_List);$num2++)
        {
			//echo "select E3_ID,UbiSubstrate_ID,PPI_Resource,PPI_PubID,E3_GeneName, E3_Group, E3_Ensemble,E3_PubID, UbiSubstrate_Sites, UbiSubstrate_PubID from Interaction_E3_UbiSubstrate_Human_Final where E3_ID = '".$E3_ID_List[$num]."' and UbiSubstrate_ID = '".$sub_ID_List[$num2]."' \n";
           //$query = mysql_query("select AC_a,ID_a,AC_b,ID_b,resource,pubmedID from RegPhos_PPI_{$species} where ID_a = '$protein[$num]' and ID_b = '$protein[$num2]'");
       $query = mysql_query("select E3_ID,UbiSubstrate_ID,PPI_Resource,PPI_PubID,E3_GeneName, E3_Group, E3_Ensembl,E3_PubID, UbiSubstrate_UbiSites, UbiSubstrate_PubID from Interaction_E3_UbiSubstrate_Human_Final where E3_ID = '".$E3_ID_List[$num]."' and UbiSubstrate_ID = '".$sub_ID_List[$num2]."'");;
//		   $query = mysql_query("select * from Interaction_E3_UbiSubstrate_Human_Final where E3_ID = '".$E3_ID_List[$num]."' and UbiSubstrate_ID = '".$Substrate_ID_List[$num2]."'");;
			  $numrows=mysql_num_rows($query);
	
	//print_r($numrows);

			  while($data=mysql_fetch_array($query))
			  {
				  $arrE3_ID[count($arrE3_ID)]=$data[0];
				  $arrUbiSubstrate_ID[count($arrUbiSubstrate_ID)]=$data[1];
				  $arrPPI_Resource[count($arrPPI_Resource)]=$data[2];
				  $arrPPI_PubID[count($arrPPI_PubID)]=$data[3];
				  $arrE3_GeneName[count($arrE3_GeneName)]=$data[4];
				  $arrE3_Group[count($arrE3_Group)]=$data[5]; 
				  $arrE3_Ensemble[count($arrE3_Ensemble)]=$data[6];
				  $arrE3_PubID[count($arrE3_PubID)]=$data[7]; 
				  $arrUbiSubstrate_Sites[count($arrUbiSubstrate_Sites)]=$data[8];
				  $arrUbiSubstrate_PubID[count($arrUbiSubstrate_PubID)]=$data[9];
			  }

        }
}
//print_r($arrE3_ID);
//print_r($arrUbiSubstrate_ID);
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
	left: 0px;
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
<form>
  <p><b>Graph Layout:</b></p>
  <p><b>
  <select name="layout" size="1" onChange="changed(this)">
    <option selected value="grid">Grid</option>
    <option value="preset">Preset</option>
    <option value="random">Random</option>
    <option value="concentric">Concentric</option>
    <option value="dagre">Dagre</option>
    <option value="cose">Cose</option>
    <option value="cola">Cola</option>
    <option value="spingy">Springy</option>
    <option value="breadthfirst">Breadthfirst </option>
    <option value="circle">Circle</option>
  </select>
  </b></p>
    </form>
<b></b>
<FORM NAME="my_form" METHOD=POST TARGET>
    <p><b> Type of protein interactions: </b></br>
    </p>
    <p>
      <INPUT TYPE="checkbox"  NAME="chkPPI" width=50 height=50 onClick="checkbox(this)" checked value="PPI_Interaction">
      protein-protein interaction </p>
<P> 
      <b>
      <INPUT TYPE="checkbox"  NAME="chkDDI" width=50 height=50 onClick="checkbox(this)" checked value="DDI_Interaction">
    </b>domain-domain interaction
    </FORM>
<FORM NAME="my_form" METHOD=POST TARGET>
  <p>
    <input type="button" id="delete" name="Delete node or edge" value="Delete node or edge" onClick="Delete()"/>
  </p>
  <p>&nbsp;</p>
</FORM>
<form>
  <p>&nbsp;</p>
  <p><b><u style="font-size: 16px; font-family: Verdana, Geneva, sans-serif;">Legends</u>:</b>  </p>
  <p>
  <P><span style="color: #00C"><strong>Blue hexagon</strong></span>: E3 ligase</p>
  <P><span style="font-size: 14px; color: #093;"><strong>Green circle</strong></span>: Substrate  
  <P><span style="color: #FC0"><strong>Orange line</strong></span>: PPI interaction
  <P><span style="color: #F00"><strong>Red line</strong></span>: DDI interaction 
</form>
  </div>
  <div id="note">
  <p>Click nodes or edges.</p>
<script>
  
  	
  var input_proteins =  ["<?php echo join("\", \"", $tmp); ?>"];

  var E3 = ["<?php echo join("\", \"", $E3); ?>"]; 
  var E3_ID_List = ["<?php echo join("\", \"", $E3_ID_List); ?>"];
  var E3_AC_List = ["<?php echo join("\", \"", $E3_AC_List); ?>"];
  var E3_GeneName_List = ["<?php echo join("\", \"", $E3_GeneName_List); ?>"];
  var E3_group_List = ["<?php echo join("\", \"", $E3_group_List); ?>"];
  var E3_Ensembl_List = ["<?php echo join("\", \"", $E3_Ensembl_List); ?>"];
  var sub_ID_List=["<?php echo join("\", \"", $sub_ID_List); ?>"];
  var sub_AC_List=["<?php echo join("\", \"", $sub_AC_List); ?>"];
  var sub_UbiSites_List=["<?php echo join("\", \"", $sub_UbiSites_List); ?>"];
  var sub_UbiPubIDs_List=["<?php echo join("\", \"", $sub_UbiPubIDs_List); ?>"];
   
  var arrE3_ID = ["<?php echo join("\", \"", $arrE3_ID); ?>"];
  var arrUbiSubstrate_ID = ["<?php echo join("\", \"", $arrUbiSubstrate_ID); ?>"];
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
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
		'shape': 'circle',
		'background-color':'green',
        'text-outline-width': 2,
        'text-outline-color': '#888',
		//'background-image': 'https://farm8.staticflickr.com/7272/7633179468_3e19e45a0c_b.jpg',
		'width': 40,
		'height': 40
      })
    .selector('edge')
      .css({
	'width':2,
	'line-color':'orange',
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
        'text-opacity': 0
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
		/*find E3 and set gene name*/
		
		
		if(input_proteins[0]!="")
		{
			for(var i=0 ; i < sub_ID_List.length ; i++) 
			{
				var node = cy.nodes("[uniprotid*='"+sub_ID_List[i]+"']");
				node.data('text',sub_ID_List[i]);
				node.data('IsE3','false');
				node.css('shape','circle'); //substrate proteins
				node.css('background-color','green');
				node.css('width','40');
				node.css('height','40');
			}
			for(var i=0 ; i < E3_ID_List.length ; i++) 
			{
				var node = cy.nodes("[uniprotid*='"+E3_ID_List[i]+"']");
				node.data('text',E3_ID_List[i]);
				node.data('IsE3','true');
				node.css('shape','hexagon'); // E3 ligases
				node.css('background-color','blue');
				node.css('width','60');
				node.css('height','60');				
			}
		}
		
		/*interaction*/
       	/*
	    for(var i =0 ; i < count($arrE3_ID) ; i++)
        {
                var n1 = cy.nodes("[uniprotac*="+"'"+$arrE3_ID[i]+"'"+"]");
                var n2 = cy.nodes("[uniprotac*="+"'"+$arrUbiSubstrate_ID[i]+"'"+"]");
                cy.add({
                        group: "edges",
                        data: { id: n1.data("id")+n2.data("id"), source:n1.data("id"), target:n2.data("id"), pubmedid:$arrPPI_PubID[i] , resource:$arrPPI_Resource[i], PPI:$arrE3_ID[i]+" and "+$arrUbiSubstrate_ID[i] ,edge_for_inter: "true"}
        }
			
		*/
	}		
});

var cy = $("#cy").cytoscape("get");
if(input_proteins[0] != "")
{
	
	// add subtrate nodes
	for(var i=0 ; i <sub_ID_List.length ; i++)
	{
		var tmp1=cy.add({
			group: "nodes",
				data: {id:sub_ID_List[i], name: sub_ID_List[i], uniprotac: sub_ID_List[i] , uniprotid: sub_ID_List[i] , IsE3:'false', shouldhide: 'true' , value:"Null", right_click: "false" , gene: sub_ID_List[i]}
		});
		tmp1.data('host',tmp1.data('id'));
	}
	// add E3s nodes
	for(var i=0 ; i <E3_ID_List.length ; i++)
	{
		var tmp1=cy.add({
			group: "nodes",
				data: {id:E3_ID_List[i], name: E3_ID_List[i], uniprotac: E3_ID_List[i] , uniprotid: E3_ID_List[i] , IsE3:'true', shouldhide: 'true' , value:"Null", right_click: "false" , gene: E3_ID_List[i]}
		});
		tmp1.data('host',tmp1.data('id'));
	}
	// add edges
	
	for(var i=0 ; i <arrE3_ID.length ; i++)
	for(var j=0 ; j <arrUbiSubstrate_ID.length ; j++)
	{
		var tmp1=cy.add({
		group: "edges",
			data: {id:arrE3_ID[i]+arrUbiSubstrate_ID[j],source: arrE3_ID[i], target: arrUbiSubstrate_ID[j],pubmedid:arrPPI_PubID[i] , resource:arrPPI_Resource[i], PPI:arrE3_ID[i]+" and "+arrUbiSubstrate_ID[i] ,edge_for_PPI: "true"}
		});
		tmp1.data('host',tmp1.data('id'));
	}
	
}


cy.layout({ name: 'grid' });
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
</body>
</html>
