// JavaScript Document

function showLINK(pos1,pos2)
{
	str = "<table width=140 cellpadding=0 cellspacing=1>";
	str += "<tr><td bgcolor=\"#99CCFF\" class=\"style23\" align=center style=\"filter:alpha(Opacity=60, FinishOpacity=100, Style=2)\"><a href=\"introduction.htm\">Introduction</a></td></tr>";
	str += "<tr><td bgcolor=\"#99CCFF\" class=\"style23\" align=center style=\"filter:alpha(Opacity=60, FinishOpacity=100, Style=2)\"><a href=\"introduction.htm#references\">References</a></td></tr>";
	str += "<tr><td bgcolor=\"#99CCFF\" class=\"style23\" align=center style=\"filter:alpha(Opacity=60, FinishOpacity=100, Style=2)\" ><a href=\"introduction.htm#developer\">Developers</a></td></tr>";
	str += "<tr><td bgcolor=\"#99CCFF\" class=\"style23\" align=center style=\"filter:alpha(Opacity=60, FinishOpacity=100, Style=2)\" ><a href=\"introduction.htm#statistics\">Statistics</a></td></tr>";
	str += "<tr><td bgcolor=\"#99CCFF\" class=\"style23\" align=center style=\"filter:alpha(Opacity=60, FinishOpacity=100, Style=2)\" ><a href=\"introduction.htm#publication\">Publication</a></td></tr>";
	str += "<tr align='right'><th bgcolor=#99CCFF style='cursor:pointer' onClick=\"Mess.style.visibility = 'hidden';\"><font color=#840000 size=2>&nbsp;X&nbsp;</font></th></tr>";
    str += "</table>";

	Mess.innerHTML = str;
	Mess.style.top = pos1;
    Mess.style.left = pos2;
    Mess.style.visibility = 'visible';
}

function Quick_example(obj)
{
	//window.document.QuickForm.QuickValue.value = obj.elements[0].value;
	if(obj.elements[0].checked == true)
	{
		window.document.QuickForm.QuickValue.value = "UBE3A_HUMAN";
	}
	else if(obj.elements[1].checked == true)
	{
		window.document.QuickForm.QuickValue.value = "Ubiquitin-protein ligase E3A";
	}
}

function Quick_search(obj)
{
	
	if(obj.elements[0].checked == true)
	{
		if(obj.QuickValue.value == '')
		{
			alert("Please input a Swiss-Prot ID!");
		}
		else
		{
			obj.submit();
		}
	}
	else if(obj.elements[1].checked == true)
	{
		if(obj.QuickValue.value == '')
		{
			alert("Please input the keyword!");
		}
		else
		{
			obj.submit();
		}
	}
}

function Keyword_example()
{
	if(window.document.form_kw.keyword_type.value == "protein_name")
	{
		window.document.form_kw.keyword_value.value = "Ubiquitin-protein ligase E3A";
	}
	else
	{
		window.document.form_kw.keyword_value.value = "UBE3A";
	}
}

function DB_ID_example()
{
	if(window.document.form_db.db_type.value == "swiss_id")
	{
		window.document.form_db.db_value.value = "UBE3A_HUMAN";
	}
	else if(window.document.form_db.db_type.value == "swiss_ac")
	{
		window.document.form_db.db_value.value = "Q05086";
	}
	else if(window.document.form_db.db_type.value == "go")
	{
		window.document.form_db.db_value.value = "GO:0005634";
	}
	else if(window.document.form_db.db_type.value == "interpro")
	{
		window.document.form_db.db_value.value = "IPR000569";
	}
}

function NavRollOver(oTd)
{
        if (!oTd.contains(event.fromElement))
        {       oTd.bgColor="#CCCCCC";  }
}

function NavRollOut(oTd)
{
        if (!oTd.contains(event.toElement))
        {       oTd.bgColor="#929292";  }
}
