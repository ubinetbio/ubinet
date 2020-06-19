<?php
 if(isset($_REQUEST['tab'])) {
 $tab = $_REQUEST['tab'];
 } else {
 $tab = 0;
 }
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <title>Controling CSS Tabs Using PHP</title>
 <style type="text/css">
 /*Credits: Vijit Patil */
#tabsF {
      float:left;
      width:100%;
      background:#efefef;
      font-size:16 px;
	  color: #C06;
      line-height:normal;
	  border-bottom:1px solid #666;
}
#tabsF ul {
	margin:0;
	padding:10px 10px 0 50px;
	list-style:none;
}
#tabsF li {
      display:inline;
      margin:0;
      padding:0;
      }
#tabsF a {
      float:left;
      background:url("tableftF.gif") no-repeat left top;
      margin:0;
      padding:0 0 0 4px;
      text-decoration:none;
}
#tabsF a span {
      float:left;
      display:block;
      background:url("tabrightF.gif") no-repeat right top;
      padding:5px 15px 4px 6px;
      color:#666;
}
/* Commented Backslash Hack hides rule from IE5-Mac \*/
#tabsF a span {float:none;}
/* End IE5-Mac hack */
#tabsF a:hover span {
      color:#FF00FF;
}
#tabsF a:hover {
      background-position:0% -42px;
}
#tabsF a:hover span {
      background-position:100% -42px;
}
 </style>
 </head>
 <body>
 <p>&nbsp;</p>
 <div id="tabsF">
 <ul>
  <li><a href="#" title="Link 1"><span>Pathway</span></a></li>
  <li><a href="#" title="Link 2"><span>Disease</span></a></li>
  <li><a href="#" title="Link 3"><span>Cellular Process</span></a></li>
  <li><a href="#" title="Longer Link Text"><span>Cellular Localization</span></a></li>
  <li><a href="#" title="Link 5"><span>Molecular Function</span></a></li>
  <li><a href="#" title="Link 6"><span>Protein Complex</span></a></li>
  <li><a href="#" title="Link 7"><span>Protein Family</span></a></li>
 </ul>
</div>
 
 </body>
 </html>