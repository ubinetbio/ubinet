<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>topPTM<? echo ":".$_GET["q"]?></title>
<link rel="stylesheet" type="text/css" href="css/tabMenus.css" />

<?php
			/*$dbuser="DB";
			$dbpass="DB1706c";
			$dbname="tmPTM"; */
  if($_GET["q"] != NULL){
	$name = $_GET["q"].".txt";
	$id = $_GET["q"];
  }
  else if($_POST["textfield3"] != NULL){
	$name = $_POST["textfield3"].".txt";
	$id = $_POST["textfield3"];
  }
  else $name = $_POST["textfield2"].".txt";
  
			$chandle = mysql_connect("localhost", "root", "biolab") or die("Connection Failure to Database");
			mysql_select_db("tmPTM", $chandle) or die ("tmPTM" . " Database not found." . "DB");
	
			$sql = "SELECT * FROM `membrane_20130731` WHERE `ID` LIKE '".$id."' ORDER BY `ID`";
			$result1 = mysql_query($sql);
			$row1 = mysql_fetch_array($result1);
			
?>

<script language="JavaScript">
function change_image(index,id,length,obj)
{
	if(obj.checked == true) eval('document.pic'+index+'.src = "fd.php?id="+id+"&l="+length+"&mark=1"'); 
	else eval('document.pic'+index+'.src = "fd.php?id="+id+"&l="+length+"&mark=0"');
}

function chkall(input1,input2)
{
	var objForm = document.forms[input1];
    var objLen = objForm.length;
	for (var iCount = 0; iCount < objLen; iCount++)
    {
		if (input2.checked == true)
        {
			if ((input2.value == "intID") && (objForm.elements[iCount].type == "checkbox") && (objForm.elements[iCount].name == "intID[]"))
		       objForm.elements[iCount].checked = true;
        }     
        else
        {
			if ((input2.value == "intID") && (objForm.elements[iCount].type == "checkbox") && (objForm.elements[iCount].name == "intID[]"))
		       objForm.elements[iCount].checked = false;

        }
	}
}
function OpenWindow(tmp){
	window.status = "";
	strFeatures = "top=300,left=900,width=610,height=660,toolbar=0,menubar=0,location=0,directories=0,status=0"; objNewWindow = window.open("1.php"+tmp, "MyNew", strFeatures);
	window.status = "Jmol";
	window.event.cancelBubble = true;
	window.event.returnValue = false;
	}
</script>

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
.auto {overflow: auto; height: 520px; width: 870px; clip: rect( ); padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px}
.auto2 {overflow: auto; width: 1082px; clip: rect( ); padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px}
</style>
</head>  
	 
<script type="text/javascript"> 
<!--
	var dragapproved = false;  
	var dragObj;  
	var zIndex = 3;  
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

   <!-- Begin Wrapper -->
<div id="wrapper">
   
         <!-- Begin Header -->
         <div id="header"><a href="index.php"><img border="0" src="webimg/click.png" alt="" width="230" height="90" /></a></div>
		 <!-- End Header -->
		 
		 <!-- Begin Navigation -->
		 <?
		 include("navigation.php");
		 ?>
		 <!-- End Navigation -->
		 
         <!-- Begin Faux Columns -->
		 <div id="faux">
		 
		 
		       <!-- Begin Content Column -->
	     <div id="content">
<?
  $today = date("Ymd");
  $time = date("His");
  $day_time = $today.$time;
  $fn = $today."/".$time;
  $workname = $today.$time;
  
  if(is_file("topofile/$id")) system("php ./drawtopo.php topofile/$id > ./topoimg/$id.png");
  else if(is_file("topofile_memsat/$id")) system("php ./drawtopo.php topofile_memsat/$id > ./topoimg/$id.png");
?>
<?
			 if($row1['ID'] == NULL)
			{
				echo "no data";
			}
			$pn = explode(";", $row1['DE']);
			$pn = explode("=", $pn[0]);
			
			if(strlen($pn[1]) > 58) echo "<p><strong><font size=\"+2\" color=\"#0000FF\">$pn[1]</font></strong></p>";
			else if(strlen($pn[1]) > 41) echo "<p><strong><font size=\"+3\" color=\"#0000FF\">$pn[1]</font></strong></p>";
			else echo "<p><strong><font size=\"+4\" color=\"#0000FF\">$pn[1]</font></strong></p>";
	           //echo "<img src='topoimg/$name.png'>";
			  $fi = fopen("gene_exp.list", "r");
			  $gene_exp = 0;
			  while(!feof($fi))
			  {
				  $tmp = fgets($fi);
				  $tmp = trim($tmp);
				  if($tmp == $row1['ID'])
				  {
					  $gene_exp = 1;
					  break;
				  }
			  }
	         ?>
             <div id="tabsF">
	           <ul>
               <?
			   if($_GET['dbPTM'] == NULL) 
			   {
				   
				   echo "<li id=\"current\"><a href=\"javascript://\" onclick=\"loadTab(this,1);\"><span>Overview</span></a></li>";
				   echo "<li><a href=\"javascript://\" onclick=\"loadTab(this,2);\"><span>Topology Composition</span></a></li>";
				   echo "<li><a href=\"javascript://\" onclick=\"loadTab(this,3);\"><span>PTM</span></a></li>";
                  
                   
			   }
			   else
			   {
				   echo "<li><a href=\"javascript://\" onclick=\"loadTab(this,1);\"><span>Overview</span></a></li>";
				   echo "<li><a href=\"javascript://\" onclick=\"loadTab(this,2);\"><span>Topology Composition</span></a></li>";
				   echo "<li id=\"current\"><a href=\"javascript://\" onclick=\"loadTab(this,3);\"><span>PTM</span></a></li>";
			   }
			   
			   echo "<li><a href=\"javascript://\" onclick=\"loadTab(this,4);\"><span>Functional Domain</span></a></li>";
				
			   ?>
	           </ul>
             </div>
             <div id="tabsC">
    <?
	if($_GET['dbPTM'] == NULL) 	echo "<div id=\"S1\" style=\"display:inline; color: #0F0E16;\">";
	else echo "<div id=\"S1\" style=\"display:none;\">";
	?>
      
      <table width="1100" border="1">
	    <tr>
		  <td bgcolor="#C8D2FF" width="198"><strong>Uniprot/Swiss-prot ID</strong></td>
		  <td bgcolor="#C8D2FF" width="676"><a href='http://www.uniprot.org/uniprot/<?php echo $row1['ID'];?>'><span class="wordtype"><?php echo $row1['ID'];?></span></a></td>
        </tr>
        <tr>
		  <td bgcolor="#EEF0FF" width="198"><strong>Protein name</strong></td>
		  <td bgcolor="#EEF0FF" width="676">
		  <?php
		  	$bigid = trim($row1['ID']);
		  	$pn = explode(";", $row1['DE']);
			$pn = explode("=", $pn[0]);
		  	echo $pn[1];
		  ?>
          </td>
        </tr>
        <tr>
		  <td bgcolor="#C8D2FF" width="198"><strong>Gene name</strong></td>
		  <td bgcolor="#C8D2FF"width="676">
		  <?php
		  	$gn = str_replace("; ", "</br>", $row1['GN']);
			$gn = str_replace(";", "</br>", $gn);
			$gn = str_replace("=", ": ", $gn);
            echo $gn;
		  ?>
          </td>
        </tr>
        <tr>
		  <td bgcolor="#EEF0FF" width="198"><strong>Organism</strong></td>
		  <td bgcolor="#EEF0FF" width="676"><?php echo $row1['OS'];?></td>
        </tr>
        <tr>
		  <td bgcolor="#C8D2FF" width="198"><strong>Taxonomic lineage</strong></td>
		  <td bgcolor="#C8D2FF"width="676">
		  <?php
		  	$OC = str_replace("; ", ">", $row1['OC']);
			$OC = str_replace(";", ">", $OC);
			$OC = str_replace(".", "", $OC);
			$OC = explode(">", $OC);
			$i = 0;
			while(1)
			{
				echo "<a href=\"browse_OC.php?OC=$OC[$i]\">$OC[$i]</a>";
				$i++;
				if($OC[$i] != NULL)
				{
					echo " > ";
				}
				else
				{
					echo ".";
					break;
				}
				if($i >= 20) break;
			}
		  ?>
          </td>
        </tr>
        <tr>
		  <td bgcolor="#EEF0FF" width="198"><strong>Function</strong></td>
		  <td bgcolor="#EEF0FF" width="676"><?php echo $row1['FUNCTION'];?></td>
        </tr>
        <tr>
		  <td bgcolor="#C8D2FF" width="198"><strong>PTM</strong></td>
		  <td bgcolor="#C8D2FF" width="676">  
            <?php
				/*
				$PTM = str_replace("; ", ";", $row1['PTM']);
				$dot = substr_count($PTM, ";");
				if($PTM[strlen($PTM) - 1] != ';') $dot++;
				$PTM = explode(";", $PTM);
				for($i = 0; $i < $dot; $i++)
				{
          	  		echo "<a href=\"browse_PTM2.php?PTM=$PTM[$i]\">$PTM[$i]</a></br>";
				}*/
				$PTMcat = "";
				if($row1['PTMex'] != NULL)
				{
					$dot = substr_count($row1['PTMex'], ";");
					$PTMex = explode(";", $row1['PTMex']);
					for($i = 0; $i < $dot; $i++)
					{
						$PTMcat = $PTMcat.$PTMex[$i].";";
					}
				}
				if($row1['PTMnex'] != NULL)
				{
					$dot = substr_count($row1['PTMnex'], ";");
					$PTMnex = explode(";", $row1['PTMnex']);
					for($i = 0; $i < $dot; $i++)
					{
						if(!strstr($PTMcat, $PTMnex[$i])) $PTMcat = $PTMcat.$PTMnex[$i].";";
					}
				}
				if($PTMcat != "")
				{
					$dot = substr_count($PTMcat, ";");
					$PTM = explode(";", $PTMcat);
					for($i = 0; $i < $dot; $i++)
					{
						echo "<a href=\"browse_PTM3.php?PTM=$PTM[$i]\">$PTM[$i]</a></br>";
					}
				}
				else echo "-";
				
					
			?>
          </td>
        </tr>
        
        <!----------------------------??-------------------------------->
        <tr>
        	<td bgcolor="#EEF0FF"><strong>Topology Preview</strong></td>
        <td>
        <?
	  	$name1 = explode(".", $name);
	  	if(is_file("topofile/$name1[0]") || is_file("topofile_memsat/$name1[0]"))
		{
			echo "<div class=\"auto\" align=\"left\"><img src='topoimg/$name1[0].png'></div>"; 
		}
	   ?>
        </td>
        </tr>
       
        <!----------------------------????---------------------------->
        
        
        <tr>
		  <td bgcolor="#C8D2FF" width="198"><strong>Localization</strong></td>
          <td bgcolor="#C8D2FF" width="676"><?php echo $row1['LOCATION'];?></td>
        </tr>
        <tr>
		  <td bgcolor="#EEF0FF" width="198"><strong>Gene Ontology(GO)</strong></td>
          <td bgcolor="#EEF0FF" width="676">
		  <?php
          	$GO = str_replace("; ", ";", $row1['GO']);
			$dot = substr_count($GO, ".");
			$GO = explode(".", $GO);
			for($i = 0; $i < $dot; $i++)
			{
			  $GO_tmp = explode(";", $GO[$i]);
          	  echo "<a href=\"http://www.ebi.ac.uk/QuickGO/GTerm?id=$GO_tmp[1]\">$GO_tmp[2]</a></br>";
			}
		  ?>
          </td>
        </tr>
        <tr>
		  <td bgcolor="#C8D2FF" width="198"><strong>InterPro</strong></td>
          <td bgcolor="#C8D2FF" width="676">
		  <?php 
		  	$IPro = str_replace("; ", ";", $row1['InterPro']);
			$dot = substr_count($IPro, ".");
			$IPdot = $dot;
			$IPro = explode(".", $IPro);
			for($i = 0; $i < $dot; $i++)
			{
			  $IPro_tmp = explode(";", $IPro[$i]);
          	  echo "<a href=\"http://www.ebi.ac.uk/interpro/entry/$IPro_tmp[1]\">$IPro_tmp[1]</a>: $IPro_tmp[2]</br>";
			}
		  ?>
          </td>
        </tr>
        <tr>
		  <td bgcolor="#EEF0FF" width="198"><strong>PDB</strong></td>
          <td bgcolor="#EEF0FF" width="676">
            <?
            if($row1['PDB'] != "")
			{
            	echo "<table border=\"0\" width=\"350\">";
              		echo "<tr bgcolor=\"#FFFFCC\">";
                		echo "<td align=\"center\"><strong>Entry</strong></td>";
                		echo "<td align=\"center\"><strong>Method</strong></td>";
                		echo "<td align=\"center\"><strong>&Aring;</strong></td>";
                		echo "<td align=\"center\"><strong>Chain</strong></td>";
                		echo "<td align=\"center\"><strong>Positions</strong></td>";
						echo "<td align=\"center\"><strong>3D</strong></td>";
              		echo "</tr>";
					$PDB = str_replace("; ", ";", $row1['PDB']);
					$dot = substr_count($PDB, ";");
					$dot++;
					$PDB = explode(";", $PDB);
		
					for($i = 0; $i < $dot; $i++)
					{
						if($i > 0){
							if($i % 4 == 1)
							{
								echo "<tr bgcolor=\"#FFCCFF\">";
                				echo "<td width=\"50\" align=\"center\"><a href=\"http://www.rcsb.org/pdb/explore/explore.do?structureId=$PDB[$i]\">$PDB[$i]</a></td>";
								$PDB_id = $PDB[$i];
							}
							if($i % 4 == 2) echo "<td width=\"50\" align=\"center\">$PDB[$i]</td>";
							if($i % 4 == 3)
							{
								$PDB_tmp = explode(" ", $PDB[$i]);
								echo "<td width=\"50\" align=\"center\">$PDB_tmp[0]</td>";
							}
							if($i % 4 == 0)
							{
								$PDB_tmp = explode(".", $PDB[$i]);
								$PDB_tmp = explode("=", $PDB_tmp[0]);
								echo "<td width=\"50\" align=\"center\">$PDB_tmp[0]</td>";
                				echo "<td width=\"50\" align=\"center\">$PDB_tmp[1]</td>";
								echo "<td width=\"50\" align=\"center\"><a href=\"javascript: OpenWindow('?id=$PDB_id&id2=$bigid');\"><img src='webimg/Jmol.png' width=\"32\" height='18' border='0'></a></td>";
								echo "</tr>";
							}
						}
					}
              	echo "</table>";
			}
			?>
          </td>
        </tr>
        <tr>
		  <td bgcolor="#C8D2FF" width="198"><strong>Sequence</strong></td>
          <td bgcolor="#C8D2FF" width="676">
            <table border="1">
            	<tr bgcolor="#C8D2FF">
                <td>
                <?php echo "<strong> Length:</strong> ".$row1['Length']."</br>"?>
                </td>
                </tr>
            	<tr bgcolor="#FFFFFF">
                <td>
		  		<span class="wordtype"><tt><?php echo $row1['Sequence'];?></tt></span>
                </td>
                </tr>
            </table>
          </td>
        </tr>
        <tr>
		  <td bgcolor="#EEF0FF" width="198"><strong>Kegg Pathway</strong></td>
          <td bgcolor="#EEF0FF" width="676">
          <?
		  $keggcount = substr_count($row1['KEGG'], ";");
		  $kegg = explode(";", $row1['KEGG']);
		  for($i = 0; $i < $keggcount; $i++)
		  {
		  	if(is_file("kegg_pathway/".$kegg[$i]))
		  	{
				$fi = fopen("kegg_pathway/".$kegg[$i], "r");
			  	while(!feof($fi))
			  	{
					$tmp = fgets($fi);
					$tmp = trim($tmp);
					if($tmp == "") break;
					$tmp = explode("\t", $tmp);
					$kegg_tmp = explode(":", $kegg[$i]);
					echo "<a target=\"_blank\" href=\"http://www.genome.jp/kegg-bin/show_pathway?$tmp[0]+$kegg_tmp[1]\">$tmp[0]</a>:$tmp[1]</br>";
			  	}
		  	}
		  }
		  ?>
          </td>
        </tr>
        <tr>
		  <td bgcolor="#C8D2FF" width="198"><strong>Disease Reference</strong></td>
          <td bgcolor="#C8D2FF" width="676">
          <table border="1" bgcolor="#CCCCCC">
          <tr>
          	<td><strong>KEGG disease</strong></td>
          	<td>
          	<?
		  	$yon = 0;
		  	for($i = 0; $i < $keggcount; $i++)
		  	{
				$kegg[$i] = str_replace(":", "_", $kegg[$i]);
		  		if(is_file("kegg_disease/".$kegg[$i]))
		  		{
					$yon = 1;
					$fi = fopen("kegg_disease/".$kegg[$i], "r");
			  		while(!feof($fi))
			  		{
						$tmp = fgets($fi);
						$tmp = trim($tmp);
						if($tmp == "") break;
						$tmp = explode("\t", $tmp);
						echo "<a target=\"_blank\" href=\"http://www.genome.jp/dbget-bin/www_bget?ds:$tmp[0]\">$tmp[0]</a>:$tmp[1]</br>";
			  		}
		  		}
		  	}
		  	if($yon == 0) echo "-";
		  	?>
          	</td>
          </tr>
          <tr>
            <td align="center"><strong>Omim</strong></td>
            <td>
            <?
		  	$yon = 0;
			$fi = fopen("omim_compelete", "r");
		  	for($i = 0; $i < $keggcount; $i++)
		  	{
				$kegg[$i] = str_replace("_", ":", $kegg[$i]);
			  	while(!feof($fi))
			  	{
					$tmp = fgets($fi);
					$tmp = trim($tmp);
					if($tmp == "") break;
					$tmp = explode("\t", $tmp);
					if($tmp[0] == $kegg[$i])
					{
						echo "<a target=\"_blank\" href=\"http://omim.org/entry/$tmp[1]\">$tmp[1]</a>: $tmp[2]</br>";
						$yon = 1;
					}
			  	}
				rewind($fi);
		  	}
			fclose($fi);
		  	if($yon == 0) echo "-";
		  	?>
            </td>
          </tr>
          </table>
          </td>
        </tr>
        <tr>
		  <td bgcolor="#EEF0FF" width="198"><strong>Drug Reference</strong></td>
          <td bgcolor="#EEF0FF" width="676">
          <table border="1" bgcolor="#CCCCCC">
          <tr>
          <td><strong>Kegg drug</strong></td>
          <td>
          <?
		  $yon = 0;
		  for($i = 0; $i < $keggcount; $i++)
		  {
			$kegg[$i] = str_replace(":", "_", $kegg[$i]);
		  	if(is_file("kegg_drug/".$kegg[$i]))
		  	{
				$yon = 1;
				$fi = fopen("kegg_drug/".$kegg[$i], "r");
			  	while(!feof($fi))
			  	{
					$tmp = fgets($fi);
					$tmp = trim($tmp);
					if($tmp == "") break;
					$tmp = explode("\t", $tmp);
					echo "<a target=\"_blank\" href=\"http://www.genome.jp/dbget-bin/www_bget?dr:$tmp[0]\">$tmp[0]</a>:$tmp[1]</br>";
			  	}
		  	}
		  }
		  ?>
          </td>
		  </tr>
          <tr>
          <td><strong>DrugBank</strong></td>
          <td>
          <?
		  if($row1['DB'] != NULL)
		  {
			  $dbcount = substr_count($row1['DB'], ".");
			  $db = explode(".", $row1['DB']);
			  for($i = 0; $i < $dbcount; $i++)
			  {
				  $tmp = explode(";", $db[$i]);
				  echo "<a target=\"_blank\" href=\"http://www.drugbank.ca/drugs/$tmp[0]\">$tmp[0]</a>:$tmp[1]</br>";
			  }
		  }
		  if($yon == 0 && $row1['DB'] == NULL) echo "-";
		  ?>
          </td>
          </tr>
          </table>
          </td>
        </tr>
      </table>  
    </div>
	
    <div id="S2" style="display:none;">
      <p>&nbsp;</p>
      <p><strong><font size="5" color="#6633FF"><em>Topology</em></font></strong></p>
      <hr color="#6633FF" />
      <hr color="#6633FF" />
      <p>&nbsp;</p>
      <?
	  	$name = explode(".", $name);
	  	if(is_file("topofile/$name[0]") || is_file("topofile_memsat/$name[0]"))
		{
		echo "<img src='topoimg/$name[0].png'>"; 
		?>
      <p>&nbsp;</p>
      <hr color="#6633FF" />
      <p>&nbsp;</p>
      
      <table width="1100" border="1">
       <tr>
		  <td bgcolor="#FFFFCC" align="center"><strong>Start</strong></td>
          <td bgcolor="#FFFFCC" align="center"><strong>Sequence</strong></td>
          <td bgcolor="#FFFFCC" align="center"><strong>End</strong></td>
          <td bgcolor="#FFFFCC" align="center"><strong>Region</strong></td>
          <td bgcolor="#FFFFCC" align="center"><strong>Literature</strong></td>
       </tr>
       <?
	   if(is_file("topofile/$name[0]")) $fi = fopen("topofile/$name[0]", "r");
	   else $fi = fopen("topofile_memsat/$name[0]", "r");
	   $part = fgets($fi);
	   $part = trim($part);
	   $part = explode("\t", $part);
	   for($i = 0; $i < $part[0]; $i++)
	   {
		   $tmp = fgets($fi);
		   $tmp = explode("\t", $tmp);
		   if($i % 2 == 1) echo "<tr bgcolor=\"#D9FFB3\">";
		   if($i % 2 == 0) echo "<tr bgcolor=\"#C4FFFF\">";
		   echo "<td align=\"center\">$tmp[3]</td>";
		   echo "<td width=\"400\" style=\"word-break:break-all\"><span class=\"wordtype\"><tt>$tmp[5]</tt></td>";
		   echo "<td align=\"center\">$tmp[4]</td>";
		   echo "<td align=\"center\">$tmp[1]</td>";
		   
		   $tmp[6] = trim($tmp[6]);
		   if($tmp[6] != '-' && $tmp[6] != "Potential" && $tmp[6] != "By similarity" && $tmp[6] != "Probable" && $tmp[6] != "by MEMSAT")
		   {
			   $pubcount = substr_count($tmp[6], ",");
				$tmpPub = explode(",", $tmp[6]);
			    echo "<td align=\"center\">";
			    for($j = 0; $j <= $pubcount; $j++)
			    {
				    echo "<a href=\"http://www.ncbi.nlm.nih.gov/pubmed/$tmpPub[$j]\" target=\"_blank\"><img src=\"webimg/pubmed.png\" width=\"16\" height=\"16\" border=\"0\" /></a>";
			    }
			   echo "</td>";
		   }
		   else echo "<td align=\"center\">$tmp[6]</td>";
		   echo "</tr>";
	   }
	   ?>
       </table>
       <p>&nbsp;</p>
       <hr color="#6633FF" />
       <hr color="#6633FF" />
       <p>&nbsp;</p>
       <div align="center">
       <?
	   $length = $row1['Length'];
           if(is_file("topofile/$name[0]")) echo "<img src='bartutex1.php?q=topofile/$name[0]'>";
		   else echo "<img src='bartutex1.php?q=topofile_memsat/$name[0]'>";
	   fclose($fi);
	?>
		<p>&nbsp;</p>
    	</div>
	<?
	   
	   
	   }
	   else
	   {
		   echo "<p>&nbsp;</p>";
		   echo "No Transmembrane Info.";
		   echo "<p>&nbsp;</p>";
	   }
	   ?>
	</div>
	<?
	if($_GET['dbPTM'] == NULL) echo "<div id=\"S3\" style=\"display:none;\">";
	else echo "<div id=\"S3\" style=\"display:inline; color: #0F0E16;\">";
		
	
	if(is_file("PTMfile_exp/$name[0]"))
	{
	?>
    	<p>&nbsp;</p>
        <p><strong><font size="5" color="#6633FF"><em>Experimental PTM</em></font></strong></p>
      	<hr color="#6633FF" />
      	<hr color="#6633FF" />
      	<p>&nbsp;</p>
   	  <? 
		if(is_file("topofile/$name[0]") || is_file("topofile_memsat/$name[0]")) echo "<img src='drawptm.php?id=$name[0]&exp=1'>";
		else echo "No topology info for draw topology image!!";
		?>
        <p>&nbsp;</p>
      	<hr color="#0000FF" />
      	<p>&nbsp;</p>
        <table width="1100" border="1">
          <tr>
		    <td bgcolor="#FFFFCC" align="center"><strong>PTM</strong></td>
            <td bgcolor="#FFFFCC" align="center"><strong>Site</strong></td>
            <td bgcolor="#FFFFCC" align="center"><strong>Enzyme</strong></td>
            <td bgcolor="#FFFFCC" align="center"><strong>Literature</strong></td>
            <td bgcolor="#FFFFCC" align="center"><strong>Resource</strong></td>
            <td bgcolor="#FFFFCC" align="center"><strong>View 3D</strong></td>
          </tr>
        <?
		$fi = fopen("PTMfile_exp/$name[0]", "r");
		$i = 0;
		
        while(!feof($fi))
		{
			$tmp = fgets($fi);
			$tmp = trim($tmp);
			if($tmp == "") break;
			$tmp = explode("\t", $tmp);
			if($i % 2 == 1) echo "<tr bgcolor=\"#D9FFB3\">";
		    if($i % 2 == 0) echo "<tr bgcolor=\"#C4FFFF\">";
			if(is_file("topofile/$name[0]"))
			{
				echo "<td align=\"center\"><a href=\"drawptm.php?id=$name[0]&exp=1&p=$tmp[1]\" target=\"_new\">$tmp[1]</a></td>";
		    	echo "<td align=\"center\"><a href=\"drawptm.php?id=$name[0]&exp=1&p=$tmp[1]&s=$tmp[2]\" target=\"_new\">$tmp[2]</a></td>";
			}
			else
			{
				echo "<td align=\"center\">$tmp[1]</td>";
		    	echo "<td align=\"center\">$tmp[2]</td>";
			}
		    echo "<td align=\"center\">$tmp[3]</td>";
			if($tmp[4] != "-" && $tmp[3] != "Potential" && $tmp[3] != "By similarity" && $tmp[3] != "Probable")
		    {
				$pubcount = substr_count($tmp[4], ";");
				$tmpPub = explode(";", $tmp[4]);
			    echo "<td align=\"center\">";
			    for($j = 0; $j <= $pubcount; $j++)
			    {
				    echo "<a href=\"http://www.ncbi.nlm.nih.gov/pubmed/$tmpPub[$j]\" target=\"_blank\"><img src=\"webimg/pubmed.png\" width=\"16\" height=\"16\" border=\"0\" /></a>";
			    }
			    echo "</td>";
		    }
		    else echo "<td align=\"center\">$tmp[4]</td>";
			
			$resource = explode(";", $tmp[5]);
			$resourcecount = count($resource);
			echo "<td align=\"center\">";
			if(strstr($resource[0], ".")) $resource[0] = str_replace(".", " ", $resource[0]);
			$resourcetmp = explode(" ", $resource[0]);
			echo "$resourcetmp[0]";
			for($j = 1; $j < $resourcecount; $j++)
			{
				if(strstr($resource[$j], ".")) $resource[$j] = str_replace(".", " ", $resource[$j]);
				$resourcetmp = explode(" ", $resource[$j]);
				echo "&nbsp;/&nbsp;$resourcetmp[0]";
			}
			echo "</td>";
			echo "<td>";
			for($j = 0; $j < $dot; $j++)
			{
				if($j > 0)
				{
					if($j % 4 == 1) $PDB_id = $PDB[$j];
					if($j % 4 == 0)
					{
						$PDB_tmp = explode(".", $PDB[$j]);
						$PDB_tmp = explode("=", $PDB_tmp[0]);
						$position = explode("-", $PDB_tmp[1]);
						if($tmp[2] >= $position[0] && $tmp[2] <= $position[1])
						{
							$site = $tmp[2] - $position[0] + 1;
							echo "<a href=\"javascript: OpenWindow('?id=$PDB_id&chain=$PDB_tmp[0]&site=$tmp[2]');\">".$PDB_id."_".$PDB_tmp[0]."</a>; ";
						}
								
                				
								//echo "<td width=\"50\" align=\"center\"><a href=\"javascript: OpenWindow('?id=$PDB_id&id2=$bigid');\"><img src='webimg/Jmol.png' width=\"32\" height='18' border='0'></a></td>";
								
					}
				}
			}
			echo "</td>";
		    echo "</tr>";
			$i++;
		}
		?>
        </table>
        <p>&nbsp;</p>
      	
    <?
	}
	else
	{
		echo "<p>&nbsp;</p>";
		echo "No exp PTM detail Info!!!";
		echo "<p>&nbsp;</p>";
	}
	
	if(is_file("PTMfile_nexp/$name[0]"))
	{
	?>
    	<p>&nbsp;</p>
        <p>&nbsp;</p>
      	<p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><strong><font size="5" color="#6633FF"><em>Poteintial PTM</em></font></strong></p>
        <hr color="#6633FF" />
      	<hr color="#6633FF" />
      	<p>&nbsp;</p>
    <? 
		if(is_file("topofile/$name[0]") || is_file("topofile_memsat/$name[0]")) echo "<img src='drawptm.php?id=$name[0]&exp=2'>";
		else echo "No topology info for draw topology image!!";
		?>
        <p>&nbsp;</p>
      	<hr color="#0000FF" />
      	<p>&nbsp;</p>
        <table width="1100" border="1">
          <tr>
		    <td bgcolor="#FFFFCC" align="center"><strong>PTM</strong></td>
            <td bgcolor="#FFFFCC" align="center"><strong>Site</strong></td>
            <td bgcolor="#FFFFCC" align="center"><strong>Enzyme</strong></td>
            <td bgcolor="#FFFFCC" align="center"><strong>Note.</strong></td>
            <td bgcolor="#FFFFCC" align="center"><strong>Resource</strong></td>
            <td bgcolor="#FFFFCC" align="center"><strong>View 3D</strong></td>
          </tr>
        <?
		$fi = fopen("PTMfile_nexp/$name[0]", "r");
		$i = 0;
		
        while(!feof($fi))
		{
			$tmp = fgets($fi);
			$tmp = trim($tmp);
			if($tmp == "") break;
			$tmp = explode("\t", $tmp);
			if($i % 2 == 1) echo "<tr bgcolor=\"#D9FFB3\">";
		    if($i % 2 == 0) echo "<tr bgcolor=\"#C4FFFF\">";
			if(is_file("topofile/$name[0]"))
			{
				echo "<td align=\"center\"><a href=\"drawptm.php?id=$name[0]&exp=2&p=$tmp[1]\" target=\"_new\">$tmp[1]</a></td>";
		    	echo "<td align=\"center\"><a href=\"drawptm.php?id=$name[0]&exp=2&p=$tmp[1]&s=$tmp[2]\" target=\"_new\">$tmp[2]</a></td>";
			}
			else
			{
				echo "<td align=\"center\">$tmp[1]</td>";
		    	echo "<td align=\"center\">$tmp[2]</td>";
			}
		    echo "<td align=\"center\">$tmp[3]</td>";
			echo "<td align=\"center\">$tmp[4]</td>";
			$resourcetmp = explode(" ", $tmp[5]);
			echo "<td align=\"center\">$resourcetmp[0]</td>";
			echo "<td>";
			for($j = 0; $j < $dot; $j++)
			{
				if($j > 0)
				{
					if($j % 4 == 1) $PDB_id = $PDB[$j];
					if($j % 4 == 0)
					{
						$PDB_tmp = explode(".", $PDB[$j]);
						$PDB_tmp = explode("=", $PDB_tmp[0]);
						$position = explode("-", $PDB_tmp[1]);
						if($tmp[2] >= $position[0] && $tmp[2] <= $position[1])
						{
							$site = $tmp[2] - $position[0] + 1;
							echo "<a href=\"javascript: OpenWindow('?id=$PDB_id&chain=$PDB_tmp[0]&site=$tmp[2]');\">".$PDB_id."_".$PDB_tmp[0]."</a>; ";
						}
								
                				
								//echo "<td width=\"50\" align=\"center\"><a href=\"javascript: OpenWindow('?id=$PDB_id&id2=$bigid');\"><img src='webimg/Jmol.png' width=\"32\" height='18' border='0'></a></td>";
								
					}
				}
			}
			echo "</td>";
		    echo "</tr>";
			$i++;
		}
		?>
        </table>
        <p>&nbsp;</p>
    <?
    }
	else
	{
		echo "<p>&nbsp;</p>";
		echo "No Non-exp PTM detail Info!!!";
		echo "<p>&nbsp;</p>";
	}
	?>
	</div>
    
    <div id="S4" style="display:none;">
    <form>
    <?
	if($row1['InterPro'] != NULL)
	{
		if(strstr($row1['AC'], ";")) 
		{
			$tmp = explode(";", $row1['AC']);
			$AC = $tmp[0];
		}
		else $AC = $row1['AC'];
		/*$chandle = mysql_connect("140.138.144.141", "root", "francis1706c") or die("Connection Failure to Database");
		mysql_select_db("RegPhos", $chandle) or die ("RegPhos" . " Database not found." . "DB");
		$sql = "SELECT * FROM `InterPro` WHERE `Swiss_AC` LIKE '".$AC."' ORDER BY `Swiss_AC`";
		$result1 = mysql_query($sql);
		$count = mysql_num_rows($result1);
		
		for($i = 0; $i < $count; $i++)
		{
			if($i == 0)
			{
				$row1 = mysql_fetch_array($result1);
				$InterPro = $row1['InterPro_ID'];
				$name = $row1['name'];
				$DB = $row1['DB_ID'];
        		$SE = $row1['start']."-".$row1['end'].".";
			}
			else
			{
				$row1 = mysql_fetch_array($result1);
				if(strstr($InterPro, $row1['InterPro_ID']))
				{
					if(!strstr($DB, $row1['DB_ID']))
					{
						$DB = $DB.";".$row1['DB_ID'];
                    	$SE = $SE.";".$row1['start']."-".$row1['end'].".";
					}
					else $SE = $SE.$row1['start']."-".$row1['end'].".";
				}
				else
				{
					$InterPro = $InterPro."+".$row1['InterPro_ID'];
					$name = $name."+".$row1['name'];
					$DB = $DB."+".$row1['DB_ID'];
                    $SE = $SE."+".$row1['start']."-".$row1['end'].".";
				}
			}
		}
		$countInt = substr_count($InterPro, "+") + 1;
		$InterPro = explode("+", $InterPro);
		$name = explode("+", $name);
		$DB = explode("+", $DB);
        $SE = explode("+", $SE);
		
		for($i = 0; $i < $countInt; $i++)
		{
			$countDB = substr_count($DB[$i], ";") + 1 ;
			$DBtmp = explode(";", $DB[$i]);
			$SEtmp = explode(";", $SE[$i]);
			echo "<p>&nbsp;</p><table border=\"1\" rules=\"none\">";
			for($j = 0; $j < $countDB; $j++)
			{
				if($j == 0)
				{
					echo "<tr bgcolor=\"#FFFFCC\"><td align=\"center\"><a href=\"http://www.ebi.ac.uk/interpro/entry/$InterPro[$i]\"><h2>$InterPro[$i]</a></td><td><strong><h2>&nbsp;&nbsp;$name[$i]</h2></strong>&nbsp;&nbsp;&nbsp;Mark PTM site: <input type=\"checkbox\" naem=\"checkpic\" onclick=\"change_image($i,'$id',$length,this);\" /></td></tr>";
					echo "<tr><td bgcolor=\"#98F5FF\"><strong>Transmembrane</br>Topology</strong></td><td><img src='fd.php?id=$id&l=$length&mark=0' name=\"pic$i\"></td></tr>";
					echo "<tr><td bgcolor=\"#98F5FF\" align=\"center\">";
					if(strstr($DBtmp[$j], "PF")) echo "<a href=\"http://pfam.sanger.ac.uk/family/$DBtmp[$j]\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "SSF")) echo "<a href=\"http://supfam.cs.bris.ac.uk/SUPERFAMILY/cgi-bin/scop.cgi?ipid=$DBtmp[$j]\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "PS")) echo "<a href=\"http://prosite.expasy.org/$DBtmp[$j]\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "PR")) echo "<a href=\"http://www.bioinf.manchester.ac.uk/cgi-bin/dbbrowser/sprint/searchprintss.cgi?prints_accn=$DBtmp[$j]&display_opts=Prints&category=None&queryform=false&regexpr=off\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "SM")) echo "<a href=\"http://smart.embl-heidelberg.de/smart/do_annotation.pl?ACC=$DBtmp[$j]&BLAST=DUMMY\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "PTHR")) echo "<a href=\"http://www.pantherdb.org/panther/family.do?clsAccession=$DBtmp[$j]\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "PD")) echo "<a href=\"http://prodom.prabi.fr/prodom/current/cgi-bin/request.pl?question=DBEN&query=$DBtmp[$j]\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "TIGR")) echo "<a href=\"http://www.jcvi.org/cgi-bin/tigrfams/HmmReportPage.cgi?acc=$DBtmp[$j]\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else echo "<strong>$DBtmp[$j]</strong>";
					echo "</td><td><img src='fd.php?se=".$SEtmp[$j]."&l=$length'></td></tr>";
				}
				
				else
				{
					echo "<tr><td bgcolor=\"#98F5FF\" align=\"center\">";
					if(strstr($DBtmp[$j], "PF")) echo "<a href=\"http://pfam.sanger.ac.uk/family/$DBtmp[$j]\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "SSF")) echo "<a href=\"http://supfam.cs.bris.ac.uk/SUPERFAMILY/cgi-bin/scop.cgi?ipid=$DBtmp[$j]\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "PS")) echo "<a href=\"http://prosite.expasy.org/$DBtmp[$j]\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "PR")) echo "<a href=\"http://www.bioinf.manchester.ac.uk/cgi-bin/dbbrowser/sprint/searchprintss.cgi?prints_accn=$DBtmp[$j]&display_opts=Prints&category=None&queryform=false&regexpr=off\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "SM")) echo "<a href=\"http://smart.embl-heidelberg.de/smart/do_annotation.pl?ACC=$DBtmp[$j]&BLAST=DUMMY\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "PTHR")) echo "<a href=\"http://www.pantherdb.org/panther/family.do?clsAccession=$DBtmp[$j]\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "PD")) echo "<a href=\"http://prodom.prabi.fr/prodom/current/cgi-bin/request.pl?question=DBEN&query=$DBtmp[$j]\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else if(strstr($DBtmp[$j], "TIGR")) echo "<a href=\"http://www.jcvi.org/cgi-bin/tigrfams/HmmReportPage.cgi?acc=$DBtmp[$j]\" target=\"_blank\"><strong>$DBtmp[$j]</strong></a>";
					else echo "<strong>$DBtmp[$j]</strong>";
					echo "</td><td><img src='fd.php?se=".$SEtmp[$j]."&l=$length'></td></tr>";
					
				}
			}
			echo "</table><p>&nbsp;</p>";
		}*/
	}
	else echo "No Interpro domain info.!!</br>";
    ?>
    </form>
    </div>
           </div>
        
		       </div>
		       
		       <!-- End Content Column -->
			   
			   
			   
			   <!-- Begin Right Column -->
		       
		       <!-- End Right Column -->

         </div>	   
         <!-- End Faux Columns --> 

         <!-- Begin Footer -->
  <div id="footer">
		       <p align="right">Computational Systems Biology Lab, Yuan Ze University, Chungli 320, Taiwan. </p>
  </div>
</div>
</body>
</html>
