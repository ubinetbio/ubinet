// JavaScript Document
var x, y;
var z_offset = 2; 
function mouseMove(e) {
    x = event.x + z_offset + document.body.scrollLeft;
    y = event.y + z_offset + document.body.scrollTop;
}

function showPTM(str1,str2,str3,str4,str5,str6)
{
	str = "";
	str += "<table border=0 cellpadding=0 cellspacing=0 class=test0>";
	str += "<tr><td class=test2><font color=green>&nbsp;Position:&nbsp;" + str1+ "&nbsp;</font></td></tr>";
	str += "<tr><td class=test2><font color=green>&nbsp;Peptide:&nbsp;" + str2+ "&nbsp;</font></td></tr>";
	str += "<tr><td class=test2><font color=green>&nbsp;Secondary Structure:&nbsp;" + str3+ "&nbsp;</font></td></tr>";
	str += "<tr><td class=test2><font color=green>&nbsp;Solvent Accessibility:&nbsp;" + str4+ "&nbsp;</font></td></tr>";
	str += "<tr><td class=test2><font color=green>&nbsp;PTM Type:&nbsp;" + str5+ "&nbsp;</font></td></tr>";
	str += "<tr><td class=test2><font color=green>&nbsp;Source:&nbsp;" + str6+ "&nbsp;</font></td></tr>";
    str += "<tr align='right'><th bgcolor=#FFFFCC style='cursor:pointer' onClick=\"Mess2.style.visibility = 'hidden';\"><font color=#840000>&nbsp;X&nbsp;</font></th></tr>";
    str += "</table>";
    Mess2.innerHTML = str;
	Mess2.style.top = parseInt(y);
    Mess2.style.left = parseInt(x);
    Mess2.style.visibility = 'visible';
}

function showVariant(str1,str2)
{
	str = "";
	str += "<table border=0 cellpadding=0 cellspacing=0 class=test0>";
	str += "<tr><td class=test2><font color=green>&nbsp;Position:&nbsp;" + str1+ "&nbsp;</font></td></tr>";
	str += "<tr><td class=test2><font color=green>&nbsp;Description:&nbsp;" + str2+ "&nbsp;</font></td></tr>";
    str += "<tr align='right'><th bgcolor=#FFFFCC style='cursor:pointer' onClick=\"Mess2.style.visibility = 'hidden';\"><font color=#840000>&nbsp;X&nbsp;</font></th></tr>";
    str += "</table>";
    Mess2.innerHTML = str;
	Mess2.style.top = parseInt(y);
    Mess2.style.left = parseInt(x);
    Mess2.style.visibility = 'visible';
}

function showDomain(str1,str2,str3,str4,str5,str6)
{
	str = "";
	str += "<table border=0 cellpadding=0 cellspacing=0 class=test0>";
	str += "<tr><td class=test2><font color=green>&nbsp;InterPro ID:&nbsp;<a href=http://www.ebi.ac.uk/interpro/IEntry?ac="+str1+" target=_blank>" + str1+ "</a></font></td></tr>";
	str += "<tr><td class=test2><font color=green>&nbsp;Name:&nbsp;" + str2+ "&nbsp;</font></td></tr>";
	str += "<tr><td class=test2><font color=green>&nbsp;xref DB ID:&nbsp;" + str3+ "&nbsp;</font></td></tr>";
	str += "<tr><td class=test2><font color=green>&nbsp;Region:&nbsp;" + str4+ "&nbsp;</font></td></tr>";
    str += "<tr align='right'><th bgcolor=#FFFFCC style='cursor:pointer' onClick=\"Mess2.style.visibility = 'hidden';\"><font color=#840000>&nbsp;X&nbsp;</font></th></tr>";
    str += "</table>";
    Mess2.innerHTML = str;
	Mess2.style.top = parseInt(y);
    Mess2.style.left = parseInt(x);
    Mess2.style.visibility = 'visible';
}

function showPDB(str1)
{
	str = "<font >"+str1+"</font><br>";
	str += "<applet name='jmol' code='JmolApplet' archive='JmolApplet.jar' codebase='./jmol-11.2.4/' width='500' height='500' mayscript='true'>";
	str += "<param name='progressbar' value='true'/>";
	str += "<param name='load' value='./PDB/all/pdb"+str1+".ent'/>";
	str += "<param name='script' value='wireframe 0;spacefill off;cartoon on;select helix;color [77,166,255];select sheet;color yellow;'>";		
	str += "</applet>";
	str += "";

	PDB.innerHTML = str;
}
document.onmousemove = mouseMove;
/*style='border:thin groove;*/
