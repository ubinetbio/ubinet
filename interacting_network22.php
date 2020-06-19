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

<body><div id="wrap">

  <?php
		
		
		$e3list=$_SESSION ["e3list"];
		$index = $_GET["index"]-1;
	
		$list_Subs = array(); 
		$list_PPI_Resource = array(); 
		$list_PPI_PubID = array(); 
		
		include "mysql_connection.inc";
		
	   // Get informations for the query E3
	   $E3_ID=array();
	   $E3_AC=array();
	   $E3_GeneName=array();
	   $E3_group=array();
	   $E3_Ensembl=array();
	   
	   $sql1 = "select E3_ID,E3_AC, GeneName, E3_group, Ensembl from E3_Human_Final where E3_ID = '".$e3list[$index]."'";
	   $result1 = mysql_query($sql1) or die("Query failed at the extraction of E3's informations : " . mysql_error());
	   $num_rows1 = mysql_num_rows($result1);
	   if($num_rows1 > 0)
	   {
			   while($data1 = mysql_fetch_array($result1))
			   {
					  $E3_ID[count($E3_ID)] = $data1[0];
					  $E3_AC[count($E3_AC)] = $data1[1];
					  $E3_GeneName[count($E3_GeneName)] = $data1[2];
					  $E3_group[count($E3_group)]=$data1[3];
					  $E3_Ensembl[count($E3_Ensembl)]=$data1[4];
			   }
	   }		
		//print_r($E3_ID);
				 
		// Get all substrates which are recognized by this E3
		$sql = "select UbiSubstrate_ID,PPI_Resource, PPI_PubID from Interaction_E3_UbiSubstrate_Human_Final where E3_ID = '".$e3list[$index]."'";
		$result = mysql_query($sql) or die("Query failed : " . mysql_error());
		$num_rows = mysql_num_rows($result);
        $count=0;
		if($num_rows > 0)
         {
               $count=$num_rows;
					while($data = mysql_fetch_array($result)){
	                 	$list_Subs[count($list_Subs)] = $data[0];
						$list_PPI_Resource[count($list_PPI_Resource)] = $data[1];
						$list_PPI_PubID[count($list_PPI_PubID)] = $data[2];
					}
         }
		//print_r($list_Subs);

		$list_E3_ID=array();
		$list_E3_AC=array();
		$list_E3_GeneName=array();
		$list_E3_group=array();
		$list_E3_Ensembl=array();

		//Get informations for Substrates
		$list_Sub_ID=array();
		$list_Sub_AC=array();
		$list_Sub_UbiSites=array();
		$list_Sub_UbiPubIDs=array();
		
		for($i=0;$i<count($list_Subs);$i++){
			$sql3 = "select ID,AC, UbSites, Ubi_PubMedIDs from UbiSubstrate_Human_Final where ID = '".$list_Subs[$i]."'";
			$result3 = mysql_query($sql3) or die("Query failed at the extraction of substrate's informations: " . mysql_error());
			$num_rows3 = mysql_num_rows($result3);
			if($num_rows3 > 0)
			 {
					 while($data3 = mysql_fetch_array($result3))
					 {
							$list_E3_ID[count($list_E3_ID)]=$E3_ID[0];
							$list_E3_AC[count($list_E3_AC)]=$E3_AC[0];
							$list_E3_GeneName[count($list_E3_GeneName)]=$E3_GeneName[0];
							$list_E3_group[count($list_E3_group)]=$E3_group[0];
							$list_E3_Ensembl[count($list_E3_Ensembl)]=$E3_Ensembl[0];	
													
							$list_Sub_ID[count($list_Sub_ID)] = $data3[0];
							$list_Sub_AC[count($list_Sub_AC)] = $data3[1];
							$list_Sub_UbiSites[count($list_Sub_UbiSites)] = $data3[2];
							$list_Sub_UbiPubIDs[count($list_Sub_UbiPubIDs)]=$data3[3];
		
					 }
			 }
	   }
	   
	   $stt="Networks between E3 ligase (<strong>".$e3list[$index].") and ".count($list_Sub_ID)." </strong>substrate proteins";
	   echo $stt;
		
	   print_r("<br> E3_IDs: ");
	   print_r($list_E3_ID);
	   print_r("<br> Substrate_IDs: ");
	   print_r($list_Sub_ID);
	   	 //$list_E3_ID[1]= "HECD1_HUMAN";
		 //$list_E3_ID[2]= "HERC2_HUMAN";
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

  var E3_ID = ["<?php echo join(" ", $E3_ID); ?>"];
  var E3_AC = ["<?php echo join(" ", $E3_AC); ?>"];
  var E3_GeneName = ["<?php echo join(" ", $E3_GeneName); ?>"];
  var E3_group = ["<?php echo join(" ", $E3_group); ?>"];
  var E3_Ensembl = ["<?php echo join(" ", $E3_Ensembl); ?>"];
  
  var list_Subs = ["<?php echo join(" ", $list_Subs); ?>"];
  var list_PPI_Resource = ["<?php echo join(" ", $list_PPI_Resource); ?>"];
  var list_PPI_PubID = ["<?php echo join(" ", $list_PPI_PubID); ?>"];
  
  var list_Sub_ID = ["<?php echo join(" ", $list_Sub_ID); ?>"];
  var list_Sub_AC = ["<?php echo join(" ", $list_Sub_AC); ?>"];
  var list_Sub_UbiSites = ["<?php echo join(" ", $list_Sub_UbiSites); ?>"];
  var list_Sub_UbiPubIDs = ["<?php echo join(" ", $list_Sub_UbiPubIDs); ?>"];  
  
 $('#cy').cytoscape({
	style: cytoscape.stylesheet()
	  .selector('node')
		.css({
		  'content': 'data(name)',
		  'text-valign': 'center',
		  'color': 'white',
		  'background-color':'#4169e1',
		  'text-outline-width': 2,
		  'text-outline-color': '#888',
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
		  
				  
		  for(var i=0 ; i < count(list_Sub_ID.length) ; i++) 
		  {
			  var node = cy.nodes("[uniprotid*='"+list_Sub_ID[i]+"']");
			  node.data('text',list_Sub_ID[i]);
			  node.data('IsE3','false');
			  node.css('shape','circle'); //substrate proteins
			  node.css('background-color','green');
			  node.css('width','40');
			  node.css('height','40');
		  }
		 
		  for(var i=0 ; i < E3_ID.length ; i++) 
		  {		  
			  var node = cy.nodes("[uniprotid*='"+$E3_ID[$i]+"']");
			  node.data('text',$e3list[$index]);
			  node.data('IsE3','true');
			  node.css('shape','hexagon'); // E3 ligases
			  node.css('background-color','blue');
			  node.css('width','60');
			  node.css('height','60');	
		  }				  			
  
  
	  }		
  });

				   
var cy = $("#cy").cytoscape("get");
if(E3_ID[0] != "")
{
	// add subtrate nodes
	for(var i=0 ; i <list_Sub_ID.length ; i++)
	{
		var tmp1=cy.add({
			group: "nodes",
				data: {id:list_Sub_ID[i], name: list_Sub_ID[i], uniprotac: list_Sub_AC[i] , uniprotid: list_Sub_ID[i] , IsE3:'false', shouldhide: 'true' , value:"Null", right_click: "false" , gene: list_E3_GeneName[i]}
		});
		tmp1.data('host',tmp1.data('id'));
	}
	// add E3s nodes
	for(var i=0 ; i <E3_ID.length ; i++)
	{
		var tmp1=cy.add({
			group: "nodes",
				data: {id:E3_ID[i], name: E3_ID[i], uniprotac: E3_ID[i] , uniprotid: E3_ID[i] , IsE3:'true', shouldhide: 'true' , value:"Null", right_click: "false" , gene: E3_GeneName[i]}
		});
		tmp1.data('host',tmp1.data('id'));
	}
	// add edges
				  
	for(var i=0 ; i <E3_ID.length ; i++)
	for(var j=0 ; j <list_Sub_ID.length ; j++)
	{
		var tmp1=cy.add({
		group: "edges",
			data: {id:E3_ID[i]+list_Sub_ID[j],source: E3_ID[i], target: list_Sub_ID[j],pubmedid:list_PPI_PubID[i] , resource:list_PPI_Resource[i], PPI:E3_ID[i]+" and "+list_Sub_ID[i] ,edge_for_PPI: "true"}
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



</script>   
   
	



</body>
</html>

