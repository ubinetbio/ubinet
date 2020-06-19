<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/andreas01.css" media="screen" title="andreas01 (screen)" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<link href="images/UbiSite_icon.ico" rel="SHORTCUT ICON">
<title>UbiSite</title>
</head>


          
  <?php
    $frag=array();
	$motif_in=array();
	$motif_out=array();
	
  	// Read input file
		echo "<p>Reading input Peptide file...<p>";
  		$fi = fopen("./data/Peptide_SubstrateMotif.txt","r");
		$temp = fgets($fi); //Skip the first row containing column title
		$count=0;
		while(!feof($fi))
		{
			$temp = fgets($fi);
			if(strlen(trim($temp))>0) // If this is not an empty line
			{	
				$fr[$count]=trim(strtok($temp,"\t"));
				$motif_in[$count]=trim(strtok("\t"));
				$count++;
			}
		}
		fclose($fi);
		
	// Identify suitable substrate motif for each Peptide
	
		echo "<p>Processing...<p>";
		for($x=0;$x<$count;$x++){
			if(substr($fr[$x],6,1) == "K")
			{
				if((substr($fr[$x],7,1)=="F"||substr($fr[$x],7,1)=="Y"||substr($fr[$x],7,1)=="W"))
				{
					$motif_out[$x]="MDD2.png";
				}
				elseif((substr($fr[$x],8,1)=="F"||substr($fr[$x],8,1)=="Y"||substr($fr[$x],8,1)=="W")&&(substr($fr[$x],9,1)=="D"||substr($fr[$x],9,1)=="N"||substr($fr[$x],9,1)=="E"||substr($fr[$x],9,1)=="Q"))
				{
					$motif_out[$x]="MDD1.png";
				}
				elseif((substr($fr[$x],8,1)=="F"||substr($fr[$x],8,1)=="Y"||substr($fr[$x],8,1)=="W"))
				{
					$motif_out[$x]="MDD7.png";
				}
				elseif((substr($fr[$x],10,1)=="F"||substr($fr[$x],10,1)=="Y"||substr($fr[$x],10,1)=="W"))
				{
					$motif_out[$x]="MDD8.png";
				}
				elseif((substr($fr[$x],1,1)=="F"||substr($fr[$x],1,1)=="Y"||substr($fr[$x],1,1)=="W"))
				{
					$motif_out[$x]="MDD9.png";
				}
				elseif((substr($fr[$x],5,1)=="D"||substr($fr[$x],5,1)=="E"||substr($fr[$x],5,1)=="N"||substr($fr[$x],5,1)=="Q"))
				{
					$motif_out[$x]="MDD6.png";
				}
				elseif((substr($fr[$x],3,1)=="D"||substr($fr[$x],3,1)=="E"||substr($fr[$x],3,1)=="N"||substr($fr[$x],3,1)=="Q"))
				{
					$motif_out[$x]="MDD5.png";
				}
				elseif((substr($fr[$x],9,1)=="D"||substr($fr[$x],9,1)=="E"||substr($fr[$x],9,1)=="N"||substr($fr[$x],9,1)=="Q")&& (substr($fr[$x],12,1)=="D"||substr($fr[$x],12,1)=="E"||substr($fr[$x],12,1)=="N"||substr($fr[$x],12,1)=="Q"))
				{
					$motif_out[$x]="MDD3.png";
				}
				elseif((substr($fr[$x],9,1)=="D"||substr($fr[$x],9,1)=="E"||substr($fr[$x],9,1)=="N"||substr($fr[$x],9,1)=="Q"))
				{
					$motif_out[$x]="MDD4.png";
				}
				else
				{
					$motif_out[$x]="MDD10.png";
				}
			}
		}
				
		
	// Write to output file
		$fout = fopen("./data/Peptide_SubstrateMotif_Out.txt","w");
		$i = 0;
		while($i<$count){
		
				fwrite($fout,$fr[$i]);
				fwrite($fout,"\t");
				fwrite($fout,$motif_out[$i]);
				fwrite($fout,"\n");
				$i++;		
			}
		fclose($fout);
		
		echo "<p>Success!.<p>";
	?>


</body>
</html>