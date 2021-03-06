﻿<html>
<!---
ENTRY       map00310
DEFINITION  Lysine degradation - Reference pathway
--->
<head>
<title>
KEGG PATHWAY: Lysine degradation - Reference pathway
</title>
<style type="text/css">
<!--
div.poplay {
  position: absolute;
  padding: 2px;
  background-color: #ffff99;
  border-top: solid 1px #c0c0c0;
  border-left: solid 1px #c0c0c0;
  border-bottom: solid 1px #808080;
  border-right: solid 1px #808080;
  visibility: hidden;
}

span.popup
{
  font-weight: bold;
  color: #ffffff;
  white-space: nowrap;
}

form {
  margin: 0px;
}

div.image {
  position: absolute;
  padding: 0px;
  top: 0px;
  padding: 0px;
  border: solid 1px #000000;
}

img {
  border: none;
}


-->
</style>
<link rel="stylesheet" href="/css/kegg.css" type="text/css" />
<script language="JavaScript" src="/js/dhtml.js"></script>

<script language="JavaScript">
<!---
var image_height;
$(function(){
	$(window).bind('load',function(){
  image_height = $("div.image").height()-10;
	$("div.control").height(image_height-5);
	$("#resizable").height(image_height);
	});
});


function resize_map(scale){
  var form = document.forms["form2"];
  form.scale.value = scale;
  form.submit();
}

function select_menu(){
  var form = document.forms["selmenu"];
  if(form.org_name.value == 'set_cookie' || form.org_name.value == 'reset_cookie'){
    window.open('/kegg/misc/kegg2_select.html','sel_org','toolbar=no,location=no,directories=no,width=500,height=320,resizable=yes');
  }else{
    form.action='/kegg-bin/show_pathway';
    form.submit();
  }
}

var timer = 0;
var p_entry, p_title, p_bgcolor;
function popupTimer(entry, title, bgcolor)
{
  p_entry = entry;
  p_title = title;
  p_bgcolor = bgcolor;

  if(timer == 0){
    var func = "showThumbnail()";
    timer = setTimeout(func, 1200);
  }
}


function showThumbnail()
{

  var url = "";
  if(p_entry.match(/^[A-Z]+\d+$/))
  {
    url = "/kegg/misc/thumbnail/" + p_entry + ".gif";
  }
  else if(p_entry.match(/(\d+)$/))
  {
    url = "/kegg/misc/thumbnail/map" + RegExp.$1 + ".gif";
  }

  var html = "";

  if(p_bgcolor != "#ffffff")
  {
    html += "<span class=\"popup\">" + p_entry + "</span><br />";
  }

  html += "<img src=\"" + url + "\" alt=\"Loading...\">";

  var x = getCurrentMouseX();
  var y = getCurrentMouseY();

  var layer = new Component("poplay");
  layer.backgroundColor(p_bgcolor);
  layer.HTML(html);
  layer.move(x, y+40);
  layer.visible(true);

  timer = 0;
}

function hideMapTn(){
  var layer = new Component("poplay");
  layer.visible(false);

  if(timer != 0){
    clearTimeout(timer);
    timer = 0;
  }
}

function switchDescription(){
  var form = document.forms[0];
  var status = form.show_description.value;

  if(status == "hide"){
    document.getElementById("description").style.display = "";
    document.getElementById("descLink").innerHTML = "Hide description";
    form.show_description.value='show';

    if(document.forms[1]){
    	document.forms[1].show_description.value='show';
    }
  }
  else
  {
    document.getElementById("description").style.display = 'none';
    document.getElementById("descLink").innerHTML = "Show description";
    form.show_description.value='hide';

    if(document.forms[1]){
      document.forms[1].show_description.value='hide';
    }
  }
}

function btn(bobj,img) { bobj.src = "/Fig/bget/button_" + img + ".gif"; }
//--->
</script>
</head>
<body>
<table cellpadding="0" width="100%" cellspacing="0" border="0">
 <tr>
  <td>
   <a href="/kegg/kegg2.html"><img align="middle" alt="KEGG" border="0" src="/Fig/bget/kegg3.gif" /></a>
   &nbsp;&nbsp;&nbsp;<font class="title3"><b>Lysine degradation - Reference pathway</b></font>
  </td>
  <td valign="bottom" align="right">
   <a href="javascript:void(window.open('/kegg/document/help_pathway.html','KEGG_Help','toolbar=no,location=no,directories=no,width=720,height=640,resizable=yes,scrollbars=yes'))"><img name="help" src="/Fig/bget/button_Hb.gif" border="0" align="middle" alt="Help" onMouseOut="btn(this,'Hb')" onMouseDown="btn(this,'Hbd')" onMouseOver="btn(this,'Hbh')" onMouseUp="btn(this,'Hb')" /></a>
  </td>
 </tr>
</table>

  
[
<a href="/kegg-bin/get_htext?query=00310&htext=br08901.keg&option=-a">Pathway menu</a>
| <a href="/kegg-bin/get_htext?htext=br08601_map00310.keg&hier=5">Organism menu</a>
| <a href="/dbget-bin/www_bget?pathway+map00310">Pathway entry</a>



| <a href="javascript:void(window.open('/kegg/tool/color_a_pathway.html','KEGG_Help','height=300,width=600,resizable=yes,scrollbars=yes'))">User data mapping</a>

]
  

<table><tr><td>
<form name="selmenu" method="get">
<select name="org_name">
<option value="map" selected>Reference pathway</option>
<option value="ko">Reference pathway (KO)</option>
<option value="ec">Reference pathway (EC)</option>
<option value="rn">Reference pathway (Reaction)</option>
<option value="set_cookie">-----&lt; Set personalized menu &gt;-----</option>
<option value="map.sort_alp">-----&lt; Sort below by alphabet &gt;-----</option>
<option value="hsa">Homo sapiens (human)</option>
<option value="hsadd">Homo sapiens (human) + Disease/drug</option>
<option value="ptr">Pan troglodytes (chimpanzee)</option>
<option value="pps">Pan paniscus (bonobo)</option>
<option value="ggo">Gorilla gorilla gorilla (western lowland gorilla)</option>
<option value="pon">Pongo abelii (Sumatran orangutan)</option>
<option value="nle">Nomascus leucogenys (northern white-cheeked gibbon)</option>
<option value="mcc">Macaca mulatta (rhesus monkey)</option>
<option value="mcf">Macaca fascicularis (crab-eating macaque)</option>
<option value="cjc">Callithrix jacchus (white-tufted-ear marmoset)</option>
<option value="mmu">Mus musculus (mouse)</option>
<option value="rno">Rattus norvegicus (rat)</option>
<option value="cge">Cricetulus griseus (Chinese hamster)</option>
<option value="ngi">Nannospalax galili (Upper Galilee mountains blind mole rat)</option>
<option value="hgl">Heterocephalus glaber (naked mole rat)</option>
<option value="ocu">Oryctolagus cuniculus (rabbit)</option>
<option value="tup">Tupaia chinensis (Chinese tree shrew)</option>
<option value="cfa">Canis familiaris (dog)</option>
<option value="aml">Ailuropoda melanoleuca (giant panda)</option>
<option value="umr">Ursus maritimus (polar bear)</option>
<option value="fca">Felis catus (domestic cat)</option>
<option value="ptg">Panthera tigris altaica (Amur tiger)</option>
<option value="bta">Bos taurus (cow)</option>
<option value="bom">Bos mutus (wild yak)</option>
<option value="phd">Pantholops hodgsonii (chiru)</option>
<option value="chx">Capra hircus (goat)</option>
<option value="oas">Ovis aries (sheep)</option>
<option value="ssc">Sus scrofa (pig)</option>
<option value="cfr">Camelus ferus (Wild Bactrian camel)</option>
<option value="bacu">Balaenoptera acutorostrata scammoni (minke whale)</option>
<option value="lve">Lipotes vexillifer (Yangtze River dolphin)</option>
<option value="ecb">Equus caballus (horse)</option>
<option value="myb">Myotis brandtii (Brandt's bat)</option>
<option value="myd">Myotis davidii</option>
<option value="pale">Pteropus alecto (black flying fox)</option>
<option value="mdo">Monodelphis domestica (opossum)</option>
<option value="shr">Sarcophilus harrisii (Tasmanian devil)</option>
<option value="oaa">Ornithorhynchus anatinus (platypus)</option>
<option value="gga">Gallus gallus (chicken)</option>
<option value="mgp">Meleagris gallopavo (turkey)</option>
<option value="apla">Anas platyrhynchos (mallard)</option>
<option value="tgu">Taeniopygia guttata (zebra finch)</option>
<option value="fab">Ficedula albicollis (collared flycatcher)</option>
<option value="phi">Pseudopodoces humilis (Tibetan ground-tit)</option>
<option value="fpg">Falco peregrinus (peregrine falcon)</option>
<option value="fch">Falco cherrug (Saker falcon)</option>
<option value="clv">Columba livia (rock pigeon)</option>
<option value="asn">Alligator sinensis (Chinese alligator)</option>
<option value="amj">Alligator mississippiensis (American alligator)</option>
<option value="pss">Pelodiscus sinensis (Chinese soft-shelled turtle)</option>
<option value="cmy">Chelonia mydas (green sea turtle)</option>
<option value="acs">Anolis carolinensis (green anole)</option>
<option value="pbi">Python bivittatus (Burmese python)</option>
<option value="xla">Xenopus laevis (African clawed frog)</option>
<option value="xtr">Xenopus tropicalis (western clawed frog)</option>
<option value="dre">Danio rerio (zebrafish)</option>
<option value="tru">Takifugu rubripes (torafugu)</option>
<option value="mze">Maylandia zebra (zebra mbuna)</option>
<option value="ola">Oryzias latipes (Japanese medaka)</option>
<option value="xma">Xiphophorus maculatus (southern platyfish)</option>
<option value="lcm">Latimeria chalumnae (coelacanth)</option>
<option value="cmk">Callorhinchus milii (elephant shark)</option>
<option value="bfo">Branchiostoma floridae (Florida lancelet)</option>
<option value="cin">Ciona intestinalis (sea squirt)</option>
<option value="spu">Strongylocentrotus purpuratus (purple sea urchin)</option>
<option value="dme">Drosophila melanogaster (fruit fly)</option>
<option value="dpo">Drosophila pseudoobscura pseudoobscura</option>
<option value="dan">Drosophila ananassae</option>
<option value="der">Drosophila erecta</option>
<option value="dpe">Drosophila persimilis</option>
<option value="dse">Drosophila sechellia</option>
<option value="dsi">Drosophila simulans</option>
<option value="dwi">Drosophila willistoni</option>
<option value="dya">Drosophila yakuba</option>
<option value="dgr">Drosophila grimshawi</option>
<option value="dmo">Drosophila mojavensis</option>
<option value="dvi">Drosophila virilis</option>
<option value="aga">Anopheles gambiae (mosquito)</option>
<option value="aag">Aedes aegypti (yellow fever mosquito)</option>
<option value="cqu">Culex quinquefasciatus (southern house mosquito)</option>
<option value="ame">Apis mellifera (honey bee)</option>
<option value="nvi">Nasonia vitripennis (jewel wasp)</option>
<option value="tca">Tribolium castaneum (red flour beetle)</option>
<option value="bmor">Bombyx mori (domestic silkworm)</option>
<option value="api">Acyrthosiphon pisum (pea aphid)</option>
<option value="phu">Pediculus humanus corporis (human body louse)</option>
<option value="isc">Ixodes scapularis (black-legged tick)</option>
<option value="cel">Caenorhabditis elegans (nematode)</option>
<option value="cbr">Caenorhabditis briggsae</option>
<option value="bmy">Brugia malayi (filaria)</option>
<option value="loa">Loa loa (eye worm)</option>
<option value="tsp">Trichinella spiralis</option>
<option value="hro">Helobdella robusta</option>
<option value="lgi">Lottia gigantea (owl limpet)</option>
<option value="smm">Schistosoma mansoni</option>
<option value="nve">Nematostella vectensis (sea anemone)</option>
<option value="hmg">Hydra vulgaris</option>
<option value="tad">Trichoplax adhaerens</option>
<option value="aqu">Amphimedon queenslandica (sponge)</option>
<option value="ath">Arabidopsis thaliana (thale cress)</option>
<option value="aly">Arabidopsis lyrata (lyrate rockcress)</option>
<option value="crb">Capsella rubella</option>
<option value="eus">Eutrema salsugineum</option>
<option value="cit">Citrus sinensis (Valencia orange)</option>
<option value="cic">Citrus clementina (mandarin orange)</option>
<option value="tcc">Theobroma cacao (cacao)</option>
<option value="gmx">Glycine max (soybean)</option>
<option value="pvu">Phaseolus vulgaris (common bean)</option>
<option value="mtr">Medicago truncatula (barrel medic)</option>
<option value="cam">Cicer arietinum (chickpea)</option>
<option value="fve">Fragaria vesca (woodland strawberry)</option>
<option value="pper">Prunus persica (peach)</option>
<option value="pmum">Prunus mume (Japanese apricot)</option>
<option value="mdm">Malus domestica (apple)</option>
<option value="csv">Cucumis sativus (cucumber)</option>
<option value="cmo">Cucumis melo (muskmelon)</option>
<option value="rcu">Ricinus communis (castor bean)</option>
<option value="pop">Populus trichocarpa (black cottonwood)</option>
<option value="vvi">Vitis vinifera (wine grape)</option>
<option value="sly">Solanum lycopersicum (tomato)</option>
<option value="sot">Solanum tuberosum (potato)</option>
<option value="osa">Oryza sativa japonica (Japanese rice) (RefSeq)</option>
<option value="dosa">Oryza sativa japonica (Japanese rice) (RAPDB)</option>
<option value="obr">Oryza brachyantha (malo sina)</option>
<option value="bdi">Brachypodium distachyon</option>
<option value="sbi">Sorghum bicolor (sorghum)</option>
<option value="zma">Zea mays (maize)</option>
<option value="sita">Setaria italica (foxtail millet)</option>
<option value="pda">Phoenix dactylifera (date palm)</option>
<option value="atr">Amborella trichopoda</option>
<option value="smo">Selaginella moellendorffii</option>
<option value="ppp">Physcomitrella patens subsp. patens</option>
<option value="cre">Chlamydomonas reinhardtii</option>
<option value="vcn">Volvox carteri f. nagariensis</option>
<option value="olu">Ostreococcus lucimarinus</option>
<option value="ota">Ostreococcus tauri</option>
<option value="bpg">Bathycoccus prasinos</option>
<option value="mis">Micromonas sp. RCC299</option>
<option value="mpp">Micromonas pusilla</option>
<option value="csl">Coccomyxa subellipsoidea</option>
<option value="cvr">Chlorella variabilis</option>
<option value="cme">Cyanidioschyzon merolae</option>
<option value="gsl">Galdieria sulphuraria</option>
<option value="ccp">Chondrus crispus (carragheen)</option>
<option value="sce">Saccharomyces cerevisiae (budding yeast)</option>
<option value="ago">Ashbya gossypii (Eremothecium gossypii)</option>
<option value="erc">Eremothecium cymbalariae</option>
<option value="kla">Kluyveromyces lactis</option>
<option value="lth">Lachancea thermotolerans</option>
<option value="vpo">Vanderwaltozyma polyspora</option>
<option value="zro">Zygosaccharomyces rouxii</option>
<option value="cgr">Candida glabrata</option>
<option value="ncs">Naumovozyma castellii</option>
<option value="ndi">Naumovozyma dairenensis</option>
<option value="tpf">Tetrapisispora phaffii</option>
<option value="tbl">Tetrapisispora blattae</option>
<option value="tdl">Torulaspora delbrueckii</option>
<option value="kaf">Kazachstania africana</option>
<option value="ppa">Komagataella pastoris</option>
<option value="dha">Debaryomyces hansenii</option>
<option value="pic">Scheffersomyces stipitis</option>
<option value="pgu">Meyerozyma guilliermondii</option>
<option value="spaa">Spathaspora passalidarum</option>
<option value="lel">Lodderomyces elongisporus</option>
<option value="cal">Candida albicans</option>
<option value="ctp">Candida tropicalis</option>
<option value="cot">Candida orthopsilosis</option>
<option value="cdu">Candida dubliniensis</option>
<option value="cten">Candida tenuis</option>
<option value="yli">Yarrowia lipolytica</option>
<option value="clu">Clavispora lusitaniae</option>
<option value="ncr">Neurospora crassa</option>
<option value="smp">Sordaria macrospora</option>
<option value="pan">Podospora anserina</option>
<option value="ttt">Thielavia terrestris</option>
<option value="mtm">Myceliophthora thermophila</option>
<option value="cthr">Chaetomium thermophilum</option>
<option value="mgr">Magnaporthe oryzae</option>
<option value="tmn">Togninia minima</option>
<option value="fgr">Fusarium graminearum</option>
<option value="nhe">Nectria haematococca</option>
<option value="tre">Trichoderma reesei</option>
<option value="maw">Metarhizium acridum</option>
<option value="maj">Metarhizium anisopliae</option>
<option value="cmt">Cordyceps militaris</option>
<option value="val">Verticillium alfalfae</option>
<option value="ela">Eutypa lata</option>
<option value="ssl">Sclerotinia sclerotiorum</option>
<option value="bfu">Botrytis cinerea</option>
<option value="mbe">Marssonina brunnea</option>
<option value="ani">Aspergillus nidulans</option>
<option value="afm">Aspergillus fumigatus</option>
<option value="aor">Aspergillus oryzae</option>
<option value="ang">Aspergillus niger</option>
<option value="afv">Aspergillus flavus</option>
<option value="act">Aspergillus clavatus</option>
<option value="nfi">Neosartorya fischeri</option>
<option value="pcs">Penicillium chrysogenum</option>
<option value="cim">Coccidioides immitis</option>
<option value="cpw">Coccidioides posadasii</option>
<option value="pbl">Paracoccidioides brasiliensis</option>
<option value="ure">Uncinocarpus reesii</option>
<option value="abe">Arthroderma benhamiae</option>
<option value="tve">Trichophyton verrucosum</option>
<option value="aje">Ajellomyces capsulatus</option>
<option value="pno">Phaeosphaeria nodorum</option>
<option value="pte">Pyrenophora teres</option>
<option value="bze">Bipolaris zeicola</option>
<option value="bsc">Bipolaris sorokiniana</option>
<option value="bor">Bipolaris oryzae</option>
<option value="ztr">Zymoseptoria tritici</option>
<option value="pfj">Pseudocercospora fijiensis</option>
<option value="bcom">Baudoinia compniacensis</option>
<option value="npa">Neofusicoccum parvum</option>
<option value="tml">Tuber melanosporum</option>
<option value="spo">Schizosaccharomyces pombe (fission yeast)</option>
<option value="cne">Cryptococcus neoformans JEC21</option>
<option value="cnb">Cryptococcus neoformans B-3501A</option>
<option value="cgi">Cryptococcus gattii</option>
<option value="tms">Tremella mesenterica</option>
<option value="ppl">Postia placenta</option>
<option value="dsq">Dichomitus squalens</option>
<option value="pco">Phanerochaete carnosa</option>
<option value="shs">Stereum hirsutum</option>
<option value="psq">Punctularia strigosozonata</option>
<option value="adl">Auricularia delicata</option>
<option value="fme">Fomitiporia mediterranea</option>
<option value="gtr">Gloeophyllum trabeum</option>
<option value="lbc">Laccaria bicolor</option>
<option value="mpr">Moniliophthora perniciosa</option>
<option value="mrr">Moniliophthora roreri</option>
<option value="cci">Coprinopsis cinerea</option>
<option value="scm">Schizophyllum commune</option>
<option value="abp">Agaricus bisporus var. burnettii JB137-S8</option>
<option value="abv">Agaricus bisporus var. bisporus H97</option>
<option value="cput">Coniophora puteana</option>
<option value="sla">Serpula lacrymans</option>
<option value="uma">Ustilago maydis</option>
<option value="pfp">Pseudozyma flocculosa</option>
<option value="mgl">Malassezia globosa</option>
<option value="pgr">Puccinia graminis</option>
<option value="mlr">Melampsora larici-populina</option>
<option value="wse">Wallemia sebi</option>
<option value="mbr">Monosiga brevicollis</option>
<option value="ddi">Dictyostelium discoideum (cellular slime mold)</option>
<option value="dpp">Dictyostelium purpureum (cellular slime mold)</option>
<option value="dfa">Dictyostelium fasciculatum (cellular slime mold)</option>
<option value="acan">Acanthamoeba castellanii</option>
<option value="pfa">Plasmodium falciparum 3D7</option>
<option value="pfd">Plasmodium falciparum Dd2</option>
<option value="pfh">Plasmodium falciparum HB3</option>
<option value="pyo">Plasmodium yoelii</option>
<option value="pcb">Plasmodium chabaudi</option>
<option value="pbe">Plasmodium berghei</option>
<option value="pkn">Plasmodium knowlesi</option>
<option value="pvx">Plasmodium vivax</option>
<option value="pcy">Plasmodium cynomolgi</option>
<option value="tan">Theileria annulata</option>
<option value="tpv">Theileria parva</option>
<option value="bbo">Babesia bovis</option>
<option value="beq">Babesia equi</option>
<option value="cpv">Cryptosporidium parvum</option>
<option value="cho">Cryptosporidium hominis</option>
<option value="tgo">Toxoplasma gondii</option>
<option value="tet">Tetrahymena thermophila</option>
<option value="ptm">Paramecium tetraurelia</option>
<option value="pti">Phaeodactylum tricornutum</option>
<option value="tps">Thalassiosira pseudonana</option>
<option value="pif">Phytophthora infestans</option>
<option value="ngd">Nannochloropsis gaditana</option>
<option value="ehx">Emiliania huxleyi</option>
<option value="gtt">Guillardia theta</option>
<option value="tbr">Trypanosoma brucei</option>
<option value="tcr">Trypanosoma cruzi</option>
<option value="lma">Leishmania major</option>
<option value="lif">Leishmania infantum</option>
<option value="ldo">Leishmania donovani</option>
<option value="lmi">Leishmania mexicana</option>
<option value="lbz">Leishmania braziliensis</option>
<option value="ngr">Naegleria gruberi</option>
<option value="tva">Trichomonas vaginalis</option>
<option value="gla">Giardia lamblia</option>
<option value="eco">Escherichia coli K-12 MG1655</option>
<option value="ecj">Escherichia coli K-12 W3110</option>
<option value="ecd">Escherichia coli K-12 DH10B</option>
<option value="ebw">Escherichia coli K-12 MC4100(MuLac) BW2952</option>
<option value="ecok">Escherichia coli K-12 MDS42</option>
<option value="ece">Escherichia coli O157:H7 EDL933 (EHEC)</option>
<option value="ecs">Escherichia coli O157:H7 Sakai (EHEC)</option>
<option value="ecf">Escherichia coli O157:H7 EC4115 (EHEC)</option>
<option value="etw">Escherichia coli O157:H7 TW14359 (EHEC)</option>
<option value="elx">Escherichia coli O157:H7 Xuzhou21 (EHEC)</option>
<option value="eoj">Escherichia coli O26:H11 11368 (EHEC)</option>
<option value="eoi">Escherichia coli O111:H- 11128 (EHEC)</option>
<option value="eoh">Escherichia coli O103:H2 12009 (EHEC)</option>
<option value="ecg">Escherichia coli O127:H6 E2348/69 (EPEC)</option>
<option value="eok">Escherichia coli O55:H7 CB9615 (EPEC)</option>
<option value="elr">Escherichia coli O55:H7 RM12579 (EPEC)</option>
<option value="ecc">Escherichia coli O6:K2:H1 CFT073 (UPEC)</option>
<option value="ecp">Escherichia coli O6:K15:H31 536 (UPEC)</option>
<option value="eci">Escherichia coli O18:K1:H7 UTI89 (UPEC)</option>
<option value="ecv">Escherichia coli APEC O1 (APEC)</option>
<option value="ecx">Escherichia coli O9 HS (commensal)</option>
<option value="ecw">Escherichia coli E24377A (ETEC)</option>
<option value="ecm">Escherichia coli SMS-3-5 (environmental)</option>
<option value="ecy">Escherichia coli O152:H28 SE11 (commensal)</option>
<option value="ecr">Escherichia coli O8 IAI1 (commensal)</option>
<option value="ecq">Escherichia coli O81 ED1a (commensal)</option>
<option value="eck">Escherichia coli 55989 (EAEC)</option>
<option value="ect">Escherichia coli O7:K1 IAI39 (ExPEC)</option>
<option value="eoc">Escherichia coli O7:K1 CE10</option>
<option value="eum">Escherichia coli O17:K52:H18 UMN026 (ExPEC)</option>
<option value="ecz">Escherichia coli O45:K1:H7 S88 (ExPEC)</option>
<option value="elo">Escherichia coli O44:H18 042 (EAEC)</option>
<option value="eln">Escherichia coli O83:H1 NRG 857C</option>
<option value="elh">Escherichia coli O78:H11:K80 H10407 (ETEC)</option>
<option value="ese">Escherichia coli O150:H5 SE15 (commensal)</option>
<option value="eso">Escherichia coli O104:H4 2009EL-2071</option>
<option value="esm">Escherichia coli O104:H4 2009EL-2050</option>
<option value="esl">Escherichia coli O104:H4 2011C-3493</option>
<option value="ecl">Escherichia coli ATCC 8739</option>
<option value="ebr">Escherichia coli B REL606</option>
<option value="ebd">Escherichia coli BL21-Gold(DE3)pLysS AG</option>
<option value="eko">Escherichia coli KO11FL</option>
<option value="ekf">Escherichia coli KO11FL</option>
<option value="eab">Escherichia coli ABU 83972</option>
<option value="edh">Escherichia coli DH1</option>
<option value="edj">Escherichia coli DH1</option>
<option value="eih">Escherichia coli IHE3034</option>
<option value="ena">Escherichia coli NA114</option>
<option value="elu">Escherichia coli UM146</option>
<option value="eun">Escherichia coli UMNK88</option>
<option value="elw">Escherichia coli W</option>
<option value="ell">Escherichia coli W</option>
<option value="elc">Escherichia coli clone D i14</option>
<option value="eld">Escherichia coli clone D i2</option>
<option value="elp">Escherichia coli P12b</option>
<option value="ebl">Escherichia coli BL21(DE3)</option>
<option value="ebe">Escherichia coli BL21(DE3)</option>
<option value="elf">Escherichia coli LF82</option>
<option value="ecoa">Escherichia coli APEC O78</option>
<option value="ecol">Escherichia coli LY180</option>
<option value="ecoi">Escherichia coli PMV-1</option>
<option value="ecoj">Escherichia coli JJ1886</option>
<option value="ecoo">Escherichia coli O145:H28 RM13514 (EHEC)</option>
<option value="ecoh">Escherichia coli O145:H28 RM13516 (EHEC)</option>
<option value="efe">Escherichia fergusonii</option>
<option value="sty">Salmonella enterica subsp. enterica serovar Typhi CT18</option>
<option value="stt">Salmonella enterica subsp. enterica serovar Typhi Ty2</option>
<option value="sex">Salmonella enterica subsp. enterica serovar Typhi P-stx-12</option>
<option value="sent">Salmonella enterica subsp. enterica serovar Typhi Ty21a</option>
<option value="stm">Salmonella enterica subsp. enterica serovar Typhimurium LT2</option>
<option value="seo">Salmonella enterica subsp. enterica serovar Typhimurium 14028S</option>
<option value="sev">Salmonella enterica subsp. enterica serovar Typhimurium D23580</option>
<option value="sey">Salmonella enterica subsp. enterica serovar Typhimurium SL1344</option>
<option value="sem">Salmonella enterica subsp. enterica serovar Typhimurium T000240</option>
<option value="sej">Salmonella enterica subsp. enterica serovar Typhimurium UK-1</option>
<option value="seb">Salmonella enterica subsp. enterica serovar Typhimurium ST4/74</option>
<option value="sef">Salmonella enterica subsp. enterica serovar Typhimurium 798</option>
<option value="setu">Salmonella enterica subsp. enterica serovar Typhimurium U288</option>
<option value="setc">Salmonella enterica subsp. enterica serovar Typhimurium var. 5- CFSAN001921</option>
<option value="seen">Salmonella enterica subsp. enterica serovar Typhimurium 08-1736</option>
<option value="senr">Salmonella enterica subsp. enterica serovar Typhimurium DT2</option>
<option value="send">Salmonella enterica subsp. enterica serovar Typhimurium DT104</option>
<option value="spt">Salmonella enterica subsp. enterica serovar Paratyphi A ATCC9150</option>
<option value="sek">Salmonella enterica subsp. enterica serovar Paratyphi A AKU12601</option>
<option value="spq">Salmonella enterica subsp. enterica serovar Paratyphi B</option>
<option value="sei">Salmonella enterica subsp. enterica serovar Paratyphi C</option>
<option value="sec">Salmonella enterica subsp. enterica serovar Choleraesuis</option>
<option value="seh">Salmonella enterica subsp. enterica serovar Heidelberg SL476</option>
<option value="shb">Salmonella enterica subsp. enterica serovar Heidelberg B182</option>
<option value="senh">Salmonella enterica subsp. enterica Serovar Heidelberg CFSAN002069</option>
<option value="seeh">Salmonella enterica subsp. enterica serovar Heidelberg 41578</option>
<option value="see">Salmonella enterica subsp. enterica serovar Newport SL254</option>
<option value="senn">Salmonella enterica subsp. enterica serovar Newport USMARC-S3124.1</option>
<option value="sew">Salmonella enterica subsp. enterica serovar Schwarzengrund</option>
<option value="sea">Salmonella enterica subsp. enterica serovar Agona SL483</option>
<option value="sens">Salmonella enterica subsp. enterica serovar Agona 24249</option>
<option value="sed">Salmonella enterica subsp. enterica serovar Dublin</option>
<option value="seg">Salmonella enterica subsp. enterica serovar Gallinarum 287/91</option>
<option value="sel">Salmonella enterica subsp. enterica serovar Gallinarum/pullorum RKS5078</option>
<option value="sega">Salmonella enterica subsp. enterica serovar Gallinarum/pullorum CDC1983-67</option>
<option value="set">Salmonella enterica subsp. enterica serovar Enteritidis</option>
<option value="senj">Salmonella enterica subsp. enterica serovar Javiana</option>
<option value="seec">Salmonella enterica subsp. enterica Serovar Cubana</option>
<option value="seeb">Salmonella enterica subsp. enterica serovar Bareilly</option>
<option value="seep">Salmonella enterica subsp. enterica serovar Pullorum</option>
<option value="senb">Salmonella enterica subsp. enterica serovar Bovismorbificans</option>
<option value="sene">Salmonella enterica subsp. enterica serovar Thompson</option>
<option value="ses">Salmonella enterica subsp. arizonae</option>
<option value="sbg">Salmonella bongori NCTC 12419</option>
<option value="sbz">Salmonella bongori N268-08</option>
<option value="sbv">Salmonella bongori serovar 48:z41:--</option>
<option value="ype">Yersinia pestis CO92 (biovar Orientalis)</option>
<option value="ypk">Yersinia pestis KIM10+ (biovar Mediaevalis)</option>
<option value="ypa">Yersinia pestis Antiqua (biovar Antiqua)</option>
<option value="ypn">Yersinia pestis Nepal516 (biovar Antiqua)</option>
<option value="ypm">Yersinia pestis 91001 (biovar Microtus)</option>
<option value="ypp">Yersinia pestis Pestoides F</option>
<option value="ypg">Yersinia pestis Angola</option>
<option value="ypz">Yersinia pestis Z176003</option>
<option value="ypt">Yersinia pestis A1122</option>
<option value="ypd">Yersinia pestis D106004</option>
<option value="ypx">Yersinia pestis D182038</option>
<option value="yph">Yersinia pestis biovar Medievalis Harbin 35</option>
<option value="yps">Yersinia pseudotuberculosis IP32953 (serotype I)</option>
<option value="ypi">Yersinia pseudotuberculosis IP31758 (serotype O:1b)</option>
<option value="ypy">Yersinia pseudotuberculosis YPIII</option>
<option value="ypb">Yersinia pseudotuberculosis PB1/+</option>
<option value="ypq">Yersinia pseudotuberculosis ATCC 6904</option>
<option value="yen">Yersinia enterocolitica subsp. enterocolitica 8081</option>
<option value="yep">Yersinia enterocolitica subsp. palearctica 105.5R(r)</option>
<option value="yey">Yersinia enterocolitica subsp. palearctica Y11</option>
<option value="yel">Yersinia enterocolitica LC20</option>
<option value="ysi">Yersinia similis</option>
<option value="sfl">Shigella flexneri 301 (serotype 2a)</option>
<option value="sfx">Shigella flexneri 2457T (serotype 2a)</option>
<option value="sfv">Shigella flexneri 8401 (serotype 5b)</option>
<option value="sfe">Shigella flexneri 2002017 (serotype Fxv)</option>
<option value="sfn">Shigella flexneri 2003036</option>
<option value="sfs">Shigella flexneri Shi06HN006 (serotype Yv)</option>
<option value="ssn">Shigella sonnei Ss046</option>
<option value="ssj">Shigella sonnei 53G</option>
<option value="sbo">Shigella boydii Sb227</option>
<option value="sbc">Shigella boydii CDC 3083-94</option>
<option value="sdy">Shigella dysenteriae Sd197</option>
<option value="sdz">Shigella dysenteriae 1617</option>
<option value="eca">Pectobacterium atrosepticum SCRI1043</option>
<option value="patr">Pectobacterium atrosepticum JG10-08</option>
<option value="pato">Pectobacterium atrosepticum 21A</option>
<option value="pct">Pectobacterium carotovorum subsp. carotovorum PC1</option>
<option value="pcc">Pectobacterium carotovorum subsp. carotovorum PCC21</option>
<option value="pcv">Pectobacterium carotovorum subsp. odoriferum</option>
<option value="pwa">Pectobacterium wasabiae</option>
<option value="pec">Pectobacterium sp. SCC3193</option>
<option value="eta">Erwinia tasmaniensis</option>
<option value="epy">Erwinia pyrifoliae Ep1/96</option>
<option value="epr">Erwinia pyrifoliae DSM 12163</option>
<option value="eam">Erwinia amylovora CFBP1430</option>
<option value="eay">Erwinia amylovora ATCC 49946</option>
<option value="ebi">Erwinia billingiae</option>
<option value="erj">Erwinia sp. Ejp617</option>
<option value="plu">Photorhabdus luminescens</option>
<option value="pay">Photorhabdus asymbiotica</option>
<option value="buc">Buchnera aphidicola APS (Acyrthosiphon pisum)</option>
<option value="bap">Buchnera aphidicola 5A (Acyrthosiphon pisum)</option>
<option value="bau">Buchnera aphidicola Tuc7 (Acyrthosiphon pisum)</option>
<option value="baw">Buchnera aphidicola JF98 (Acyrthosiphon pisum)</option>
<option value="bajc">Buchnera aphidicola JF99 (Acyrthosiphon pisum)</option>
<option value="bua">Buchnera aphidicola LL01 (Acyrthosiphon pisum)</option>
<option value="bup">Buchnera aphidicola TLW03 (Acyrthosiphon pisum)</option>
<option value="bak">Buchnera aphidicola Ak (Acyrthosiphon kondoi)</option>
<option value="buh">Buchnera aphidicola Ua (Uroleucon ambrosiae)</option>
<option value="bapf">Buchnera aphidicola F009 (Myzus persicae)</option>
<option value="bapg">Buchnera aphidicola G002 (Myzus persicae)</option>
<option value="bapu">Buchnera aphidicola USDA (Myzus persicae)</option>
<option value="bapw">Buchnera aphidicola W106 (Myzus persicae)</option>
<option value="bas">Buchnera aphidicola Sg (Schizaphis graminum)</option>
<option value="bab">Buchnera aphidicola Bp (Baizongia pistaciae)</option>
<option value="bcc">Buchnera aphidicola Cc (Cinara cedri)</option>
<option value="baj">Buchnera aphidicola (Cinara tujafilina)</option>
<option value="wbr">Wigglesworthia glossinidia brevipalpis (Glossina brevipalpis)</option>
<option value="wgl">Wigglesworthia glossinidia morsitans (Glossina morsitans)</option>
<option value="sgl">Sodalis glossinidius (Glossina spp.)</option>
<option value="sod">Sodalis sp. HS1</option>
<option value="pes">Candidatus Sodalis pierantonius</option>
<option value="ent">Enterobacter sp. 638</option>
<option value="enc">Enterobacter cloacae subsp. cloacae ATCC 13047</option>
<option value="eno">Enterobacter cloacae subsp. cloacae ENHKU01</option>
<option value="eclo">Enterobacter cloacae subsp. cloacae NCTC 9394</option>
<option value="eec">Enterobacter cloacae EcWSU1</option>
<option value="enl">Enterobacter cloacae subsp. dissolvens SDM</option>
<option value="ecla">Enterobacter cloacae ECNIH3</option>
<option value="eclc">Enterobacter cloacae ECR091</option>
<option value="eclg">Enterobacter cloacae GGT036</option>
<option value="esc">Enterobacter lignolyticus</option>
<option value="eas">Enterobacter asburiae LF7a</option>
<option value="eau">Enterobacter asburiae L1</option>
<option value="eae">Enterobacter aerogenes KCTC 2190</option>
<option value="ear">Enterobacter aerogenes EA1509E</option>
<option value="enr">Enterobacter sp. R4-368</option>
<option value="esa">Cronobacter sakazakii ATCC BAA-894</option>
<option value="csk">Cronobacter sakazakii ES15</option>
<option value="csz">Cronobacter sakazakii Sp291</option>
<option value="csi">Cronobacter sakazakii CMCC 45402</option>
<option value="ctu">Cronobacter turicensis</option>
<option value="kpn">Klebsiella pneumoniae subsp. pneumoniae MGH 78578</option>
<option value="kpu">Klebsiella pneumoniae subsp. pneumoniae NTUH-K2044</option>
<option value="kpm">Klebsiella pneumoniae subsp. pneumoniae HS11286</option>
<option value="kpp">Klebsiella pneumoniae subsp. pneumoniae 1084</option>
<option value="kpk">Klebsiella pneumoniae subsp. pneumoniae KP5-1</option>
<option value="kph">Klebsiella pneumoniae subsp. pneumoniae KPNIH24</option>
<option value="kpz">Klebsiella pneumoniae subsp. pneumoniae KPNIH27</option>
<option value="kpq">Klebsiella pneumoniae subsp. pneumoniae KPR0928</option>
<option value="kpt">Klebsiella pneumoniae subsp. pneumoniae ATCC 43816 KPPR1</option>
<option value="kpe">Klebsiella pneumoniae 342</option>
<option value="kpo">Klebsiella pneumoniae KCTC 2242</option>
<option value="kpr">Klebsiella pneumoniae</option>
<option value="kpj">Klebsiella pneumoniae JM45</option>
<option value="kpi">Klebsiella pneumoniae CG43</option>
<option value="kpa">Klebsiella pneumoniae 30660/NJST258_1</option>
<option value="kps">Klebsiella pneumoniae 30684/NJST258_2</option>
<option value="kpx">Klebsiella pneumoniae PMK1</option>
<option value="kva">Klebsiella variicola</option>
<option value="kox">Klebsiella oxytoca KCTC 1686</option>
<option value="koe">Klebsiella oxytoca E718</option>
<option value="koy">Klebsiella oxytoca HKOPL1</option>
<option value="kok">Klebsiella oxytoca KONIH1</option>
<option value="kom">Klebsiella oxytoca M1</option>
<option value="cko">Citrobacter koseri</option>
<option value="cro">Citrobacter rodentium</option>
<option value="cfd">Citrobacter freundii</option>
<option value="spe">Serratia proteamaculans</option>
<option value="srr">Serratia plymuthica AS9</option>
<option value="srl">Serratia plymuthica 4Rx13</option>
<option value="sry">Serratia plymuthica S13</option>
<option value="srs">Serratia sp. AS12</option>
<option value="sra">Serratia sp. AS13</option>
<option value="smaf">Serratia marcescens FGI94</option>
<option value="smw">Serratia marcescens WW4</option>
<option value="slq">Serratia liquefaciens</option>
<option value="serr">Serratia sp. ATCC 39006</option>
<option value="sfo">Serratia fonticola</option>
<option value="serf">Serratia sp. FS14</option>
<option value="sers">Serratia sp. SCBI</option>
<option value="pmr">Proteus mirabilis HI4320</option>
<option value="pmib">Proteus mirabilis BB2000</option>
<option value="eic">Edwardsiella ictaluri</option>
<option value="etr">Edwardsiella tarda EIB202</option>
<option value="etd">Edwardsiella tarda FL6-60</option>
<option value="ete">Edwardsiella tarda 080813</option>
<option value="etc">Edwardsiella piscicida C07-087</option>
<option value="bfl">Candidatus Blochmannia floridanus (Camponotus floridanus)</option>
<option value="bpn">Candidatus Blochmannia pennsylvanicus (Camponotus pennsylvanicus)</option>
<option value="bva">Candidatus Blochmannia vafer (Camponotus vafer)</option>
<option value="bchr">Candidatus Blochmannia chromaiodes (Camponotus chromaiodes)</option>
<option value="hde">Candidatus Hamiltonella defensa (Acyrthosiphon pisum)</option>
<option value="sect">Secondary endosymbiont of Ctenarytaina eucalypti</option>
<option value="dda">Dickeya dadantii Ech703</option>
<option value="ddc">Dickeya dadantii Ech586</option>
<option value="ddd">Dickeya dadantii 3937</option>
<option value="dze">Dickeya zeae</option>
<option value="xbo">Xenorhabdus bovienii</option>
<option value="xne">Xenorhabdus nematophila</option>
<option value="pam">Pantoea ananatis LMG 20103</option>
<option value="plf">Pantoea ananatis LMG 5342</option>
<option value="paj">Pantoea ananatis AJ13355</option>
<option value="paq">Pantoea ananatis PA13</option>
<option value="pva">Pantoea vagans</option>
<option value="pao">Pantoea sp. At-9b</option>
<option value="kln">Pantoea rwandensis</option>
<option value="rip">Candidatus Riesia pediculicola</option>
<option value="rah">Rahnella sp. Y9602</option>
<option value="raq">Rahnella aquatilis CIP 78.65 = ATCC 33071</option>
<option value="raa">Rahnella aquatilis HX2</option>
<option value="psi">Providencia stuartii MRSN 2154</option>
<option value="psx">Providencia stuartii ATCC 33672</option>
<option value="ebt">Shimwellia blattae</option>
<option value="mmk">Morganella morganii</option>
<option value="ror">Raoultella ornithinolytica</option>
<option value="cnt">Cedecea neteri</option>
<option value="cem">Cedecea sp. M006</option>
<option value="cen">Cedecea sp. ND14a</option>
<option value="ced">Cedecea sp. ND14b</option>
<option value="pge">Pluralibacter gergoviae</option>
<option value="hav">Hafnia alvei</option>
<option value="ebf">Enterobacteriaceae bacterium FGI 57</option>
<option value="psts">Plautia stali symbiont</option>
<option value="hin">Haemophilus influenzae Rd KW20 (serotype d)</option>
<option value="hit">Haemophilus influenzae 86-028NP (nontypeable)</option>
<option value="hip">Haemophilus influenzae PittEE (nontypeable)</option>
<option value="hiq">Haemophilus influenzae PittGG (nontypeable)</option>
<option value="hif">Haemophilus influenzae F3031 (nontypeable)</option>
<option value="hil">Haemophilus influenzae F3047 (nontypeable)</option>
<option value="hiu">Haemophilus influenzae 10810 (serotype b)</option>
<option value="hie">Haemophilus influenzae R2846 (nontypeable)</option>
<option value="hiz">Haemophilus influenzae R2866 (nontypeable)</option>
<option value="hik">Haemophilus influenzae KR494 (serotype f)</option>
<option value="hdu">Haemophilus ducreyi</option>
<option value="hap">Haemophilus parasuis SH0165</option>
<option value="hpaz">Haemophilus parasuis ZJ0906</option>
<option value="hpas">Haemophilus parasuis SH03</option>
<option value="hpak">Haemophilus parasuis KL0318</option>
<option value="hpr">Haemophilus parainfluenzae</option>
<option value="hso">Haemophilus somnus 129PT</option>
<option value="hsm">Haemophilus somnus 2336</option>
<option value="pmu">Pasteurella multocida subsp. multocida Pm70</option>
<option value="pmv">Pasteurella multocida subsp. multocida HN06</option>
<option value="pul">Pasteurella multocida subsp. multocida 3480</option>
<option value="pmp">Pasteurella multocida 36950</option>
<option value="pmul">Pasteurella multocida ATCC 43137</option>
<option value="msu">Mannheimia succiniciproducens</option>
<option value="mht">Mannheimia haemolytica USDA-ARS-SAM-185</option>
<option value="mhq">Mannheimia haemolytica USDA-ARS-USMARC-183</option>
<option value="mhx">Mannheimia haemolytica M42548</option>
<option value="mhae">Mannheimia haemolytica D153</option>
<option value="mham">Mannheimia haemolytica D171</option>
<option value="mhao">Mannheimia haemolytica D174</option>
<option value="mhal">Mannheimia haemolytica USMARC_2286</option>
<option value="mvr">Mannheimia varigena USDA-ARS-USMARC-1261</option>
<option value="mvi">Mannheimia varigena USDA-ARS-USMARC-1296</option>
<option value="mvg">Mannheimia varigena USDA-ARS-USMARC-1312</option>
<option value="mve">Mannheimia varigena USDA-ARS-USMARC-1388</option>
<option value="apl">Actinobacillus pleuropneumoniae L20 (serotype 5b)</option>
<option value="apj">Actinobacillus pleuropneumoniae JL03 (serotype 3)</option>
<option value="apa">Actinobacillus pleuropneumoniae AP76 (serotype 7)</option>
<option value="asu">Actinobacillus succinogenes</option>
<option value="asi">Actinobacillus suis H91-0380</option>
<option value="ass">Actinobacillus suis ATCC 33415</option>
<option value="aap">Aggregatibacter aphrophilus</option>
<option value="aat">Aggregatibacter actinomycetemcomitans D11S-1</option>
<option value="aao">Aggregatibacter actinomycetemcomitans ANH9381</option>
<option value="aan">Aggregatibacter actinomycetemcomitans D7S-1</option>
<option value="aah">Aggregatibacter actinomycetemcomitans HK1651</option>
<option value="gan">Gallibacterium anatis</option>
<option value="bto">Bibersteinia trehalosi USDA-ARS-USMARC-192</option>
<option value="btre">Bibersteinia trehalosi USDA-ARS-USMARC-188</option>
<option value="btrh">Bibersteinia trehalosi USDA-ARS-USMARC-189</option>
<option value="btra">Bibersteinia trehalosi USDA-ARS-USMARC-190</option>
<option value="xfa">Xylella fastidiosa 9a5c</option>
<option value="xft">Xylella fastidiosa Temecula1</option>
<option value="xfm">Xylella fastidiosa M12</option>
<option value="xfn">Xylella fastidiosa M23</option>
<option value="xff">Xylella fastidiosa subsp. fastidiosa GB514</option>
<option value="xfl">Xylella fastidiosa MUL0034</option>
<option value="xfs">Xylella fastidiosa subsp. sandyi Ann-1</option>
<option value="xcc">Xanthomonas campestris pv. campestris ATCC 33913</option>
<option value="xcb">Xanthomonas campestris pv. campestris 8004</option>
<option value="xca">Xanthomonas campestris pv. campestris B100</option>
<option value="xcp">Xanthomonas campestris pv. raphani</option>
<option value="xcv">Xanthomonas campestris pv. vesicatoria</option>
<option value="xac">Xanthomonas citri pv. citri 306</option>
<option value="xci">Xanthomonas citri subsp. citri Aw12879</option>
<option value="xax">Xanthomonas alfalfae</option>
<option value="xao">Xanthomonas axonopodis Xac29-1</option>
<option value="xoo">Xanthomonas oryzae pv. oryzae KACC 10331</option>
<option value="xom">Xanthomonas oryzae pv. oryzae MAFF311018</option>
<option value="xop">Xanthomonas oryzae pv. oryzae PXO99A</option>
<option value="xor">Xanthomonas oryzae pv. oryzicola</option>
<option value="xal">Xanthomonas albilineans</option>
<option value="xfu">Xanthomonas fuscans</option>
<option value="sml">Stenotrophomonas maltophilia K279a</option>
<option value="smt">Stenotrophomonas maltophilia R551-3</option>
<option value="buj">Stenotrophomonas maltophilia JV3</option>
<option value="smz">Stenotrophomonas maltophilia D457</option>
<option value="psu">Pseudoxanthomonas suwonensis</option>
<option value="psd">Pseudoxanthomonas spadix</option>
<option value="fau">Frateuria aurantia</option>
<option value="rhd">Rhodanobacter denitrificans</option>
<option value="dji">Dyella jiangningensis</option>
<option value="dja">Dyella japonica</option>
<option value="vch">Vibrio cholerae O1 biovar El Tor N16961</option>
<option value="vce">Vibrio cholerae O1 2010EL-1786</option>
<option value="vcj">Vibrio cholerae MJ-1236</option>
<option value="vco">Vibrio cholerae O395</option>
<option value="vcr">Vibrio cholerae O395</option>
<option value="vcm">Vibrio cholerae M66-2</option>
<option value="vci">Vibrio cholerae IEC224</option>
<option value="vcl">Vibrio cholerae LMA3984-4</option>
<option value="vcq">Vibrio cholerae 2012EL-2176</option>
<option value="vvu">Vibrio vulnificus CMCP6</option>
<option value="vvy">Vibrio vulnificus YJ016</option>
<option value="vvm">Vibrio vulnificus MO6-24/O</option>
<option value="vvl">Vibrio vulnificus 93U204</option>
<option value="vpa">Vibrio parahaemolyticus RIMD 2210633</option>
<option value="vpb">Vibrio parahaemolyticus BB22OP</option>
<option value="vpk">Vibrio parahaemolyticus O1:K33 CDC_K4557</option>
<option value="vpf">Vibrio parahaemolyticus O1:Kuk FDA_R31</option>
<option value="vph">Vibrio parahaemolyticus UCM-V493</option>
<option value="vha">Vibrio campbellii</option>
<option value="vca">Vibrio campbellii</option>
<option value="vag">Vibrio alginolyticus</option>
<option value="vsp">Vibrio splendidus</option>
<option value="vex">Vibrio sp. Ex25</option>
<option value="vej">Vibrio sp. EJY3</option>
<option value="vfu">Vibrio furnissii</option>
<option value="vni">Vibrio nigripulchritudo</option>
<option value="van">Vibrio anguillarum 775</option>
<option value="lag">Vibrio anguillarum M3</option>
<option value="vfi">Aliivibrio fischeri ES114</option>
<option value="vfm">Aiivibrio fischeri MJ11</option>
<option value="vsa">Aliivibrio salmonicida</option>
<option value="ppr">Photobacterium profundum</option>
<option value="pae">Pseudomonas aeruginosa PAO1</option>
<option value="paev">Pseudomonas aeruginosa PAO1-VE13</option>
<option value="paei">Pseudomonas aeruginosa PAO1-VE2</option>
<option value="pau">Pseudomonas aeruginosa UCBPP-PA14</option>
<option value="pap">Pseudomonas aeruginosa PA7</option>
<option value="pag">Pseudomonas aeruginosa LESB58</option>
<option value="paf">Pseudomonas aeruginosa M18</option>
<option value="pnc">Pseudomonas aeruginosa NCGM2.S1</option>
<option value="pdk">Pseudomonas aeruginosa DK2</option>
<option value="psg">Pseudomonas aeruginosa B136-33</option>
<option value="prp">Pseudomonas aeruginosa RP73</option>
<option value="paep">Pseudomonas aeruginosa PA1</option>
<option value="paer">Pseudomonas aeruginosa PA1R</option>
<option value="paem">Pseudomonas aeruginosa MTB-1</option>
<option value="pael">Pseudomonas aeruginosa LES431</option>
<option value="paes">Pseudomonas aeruginosa SCV20265</option>
<option value="paeu">Pseudomonas aeruginosa PA38182</option>
<option value="paeg">Pseudomonas aeruginosa YL84</option>
<option value="paec">Pseudomonas aeruginosa c7447m</option>
<option value="paeo">Pseudomonas aeruginosa PAO581</option>
<option value="ppu">Pseudomonas putida KT2440</option>
<option value="ppf">Pseudomonas putida F1</option>
<option value="ppg">Pseudomonas putida GB-1</option>
<option value="ppw">Pseudomonas putida W619</option>
<option value="ppt">Pseudomonas putida S16</option>
<option value="ppb">Pseudomonas putida BIRD-1</option>
<option value="ppi">Pseudomonas putida ND6</option>
<option value="ppx">Pseudomonas putida DOT-T1E</option>
<option value="ppuh">Pseudomonas putida HB3267</option>
<option value="pput">Pseudomonas putida H8234</option>
<option value="ppun">Pseudomonas putida NBRC 14164</option>
<option value="pmos">Pseudomonas mosselii</option>
<option value="ppuu">Pseudomonas sp. UW4</option>
<option value="pst">Pseudomonas syringae pv. tomato DC3000</option>
<option value="psb">Pseudomonas syringae pv. syringae B728a</option>
<option value="psyr">Pseudomonas syringae CC1557</option>
<option value="psp">Pseudomonas syringae pv. phaseolicola 1448A</option>
<option value="pci">Pseudomonas cichorii</option>
<option value="pfl">Pseudomonas protegens Pf-5</option>
<option value="pprc">Pseudomonas protegens CHA0</option>
<option value="pfo">Pseudomonas fluorescens Pf0-1</option>
<option value="pfs">Pseudomonas fluorescens SBW25</option>
<option value="pfe">Pseudomonas fluorescens F113</option>
<option value="pfc">Pseudomonas fluorescens A506</option>
<option value="pfn">Pseudomonas fluorescens UK4</option>
<option value="ppz">Pseudomonas poae</option>
<option value="pen">Pseudomonas entomophila</option>
<option value="pmy">Pseudomonas mendocina ymp</option>
<option value="pmk">Pseudomonas mendocina NK-01</option>
<option value="psa">Pseudomonas stutzeri A1501</option>
<option value="psz">Pseudomonas stutzeri ATCC 17588</option>
<option value="psr">Pseudomonas stutzeri DSM 4166</option>
<option value="psc">Pseudomonas stutzeri CCUG 29243</option>
<option value="psj">Pseudomonas stutzeri DSM 10701</option>
<option value="psh">Pseudomonas stutzeri RCH2</option>
<option value="pstu">Pseudomonas stutzeri 19SMN4</option>
<option value="pstt">Pseudomonas stutzeri 28a24</option>
<option value="pba">Pseudomonas brassicacearum subsp. brassicacearum NFM421</option>
<option value="pbc">Pseudomonas brassicacearum DF41</option>
<option value="pfv">Pseudomonas fulva</option>
<option value="pdr">Pseudomonas denitrificans</option>
<option value="pre">Pseudomonas resinovorans</option>
<option value="psv">Pseudomonas sp. VLB120</option>
<option value="psk">Pseudomonas sp. TKP</option>
<option value="pmon">Pseudomonas monteilii SB3078</option>
<option value="pmot">Pseudomonas monteilii SB3101</option>
<option value="pkc">Pseudomonas knackmussii</option>
<option value="pch">Pseudomonas chlororaphis PA23</option>
<option value="pcp">Pseudomonas chlororaphis subsp. aurantiaca</option>
<option value="palk">Pseudomonas alkylphenolia</option>
<option value="prh">Pseudomonas rhizosphaerae</option>
<option value="psw">Pseudomonas sp. ND07</option>
<option value="cja">Cellvibrio japonicus</option>
<option value="avn">Azotobacter vinelandii DJ</option>
<option value="avl">Azotobacter vinelandii CA</option>
<option value="avd">Azotobacter vinelandii CA6</option>
<option value="par">Psychrobacter arcticus</option>
<option value="pcr">Psychrobacter cryohalolentis</option>
<option value="prw">Psychrobacter sp. PRwf-1</option>
<option value="pso">Psychrobacter sp. G</option>
<option value="aci">Acinetobacter sp. ADP1</option>
<option value="acd">Acinetobacter oleivorans</option>
<option value="acb">Acinetobacter baumannii ATCC 17978</option>
<option value="abm">Acinetobacter baumannii SDF</option>
<option value="aby">Acinetobacter baumannii AYE</option>
<option value="abc">Acinetobacter baumannii ACICU</option>
<option value="abn">Acinetobacter baumannii AB0057</option>
<option value="abb">Acinetobacter baumannii AB307-0294</option>
<option value="abx">Acinetobacter baumannii 1656-2</option>
<option value="abz">Acinetobacter baumannii MDR-ZJ06</option>
<option value="abr">Acinetobacter baumannii MDR-TJ</option>
<option value="abd">Acinetobacter baumannii TCDC-AB0715</option>
<option value="abh">Acinetobacter baumannii TYTH-1</option>
<option value="abad">Acinetobacter baumannii D1279779</option>
<option value="abj">Acinetobacter baumannii BJAB07104</option>
<option value="abab">Acinetobacter baumannii BJAB0715</option>
<option value="abaj">Acinetobacter baumannii BJAB0868</option>
<option value="abaz">Acinetobacter baumannii ZW85-1</option>
<option value="abk">Acinetobacter baumannii AbH12O-A2</option>
<option value="abau">Acinetobacter baumannii AB030</option>
<option value="abaa">Acinetobacter baumannii AB031</option>
<option value="abw">Acinetobacter baumannii AC29</option>
<option value="acc">Acinetobacter calcoaceticus</option>
<option value="mct">Moraxella catarrhalis RH4</option>
<option value="mcs">Moraxella catarrhalis 25240</option>
<option value="mcat">Moraxella catarrhalis 25239</option>
<option value="son">Shewanella oneidensis</option>
<option value="sdn">Shewanella denitrificans</option>
<option value="sfr">Shewanella frigidimarina</option>
<option value="saz">Shewanella amazonensis</option>
<option value="sbl">Shewanella baltica OS155</option>
<option value="sbm">Shewanella baltica OS185</option>
<option value="sbn">Shewanella baltica OS195</option>
<option value="sbp">Shewanella baltica OS223</option>
<option value="sbt">Shewanella baltica OS678</option>
<option value="sbs">Shewanella baltica OS117</option>
<option value="sbb">Shewanella baltica BA175</option>
<option value="slo">Shewanella loihica</option>
<option value="spc">Shewanella putrefaciens CN-32</option>
<option value="shp">Shewanella putrefaciens 200</option>
<option value="sse">Shewanella sediminis</option>
<option value="spl">Shewanella pealeana</option>
<option value="she">Shewanella sp. MR-4</option>
<option value="shm">Shewanella sp. MR-7</option>
<option value="shn">Shewanella sp. ANA-3</option>
<option value="shw">Shewanella sp. W3-18-1</option>
<option value="shl">Shewanella halifaxensis</option>
<option value="swd">Shewanella woodyi</option>
<option value="swp">Shewanella piezotolerans</option>
<option value="svo">Shewanella violacea</option>
<option value="ilo">Idiomarina loihiensis L2TR</option>
<option value="ili">Idiomarina loihiensis GSL 199</option>
<option value="cps">Colwellia psychrerythraea</option>
<option value="pha">Pseudoalteromonas haloplanktis</option>
<option value="pat">Pseudoalteromonas atlantica</option>
<option value="psm">Pseudoalteromonas sp. SM9913</option>
<option value="sde">Saccharophagus degradans</option>
<option value="maq">Marinobacter hydrocarbonoclasticus VT8</option>
<option value="mhc">Marinobacter hydrocarbonoclasticus ATCC 49840</option>
<option value="mad">Marinobacter adhaerens</option>
<option value="mbs">Marinobacter sp. BSs20148</option>
<option value="amc">Alteromonas macleodii Deep ecotype</option>
<option value="amac">Alteromonas macleodii ATCC 27126</option>
<option value="amb">Alteromonas macleodii Balearic Sea AD45</option>
<option value="amg">Alteromonas macleodii English Channel 673</option>
<option value="amh">Alteromonas macleodii English Channel 615</option>
<option value="amk">Alteromonas macleodii Black Sea 11</option>
<option value="amaa">Alteromonas macleodii AltDE1</option>
<option value="amal">Alteromonas macleodii Ionian Sea U4</option>
<option value="amae">Alteromonas macleodii Ionian Sea U7</option>
<option value="amao">Alteromonas macleodii Ionian Sea U8</option>
<option value="amad">Alteromonas macleodii Ionian Sea UM4b</option>
<option value="amai">Alteromonas macleodii Ionian Sea UM7</option>
<option value="amag">Alteromonas macleodii Aegean Sea MED64</option>
<option value="alt">Alteromonas sp. SN2</option>
<option value="aal">Alteromonas australica</option>
<option value="gag">Glaciecola sp. 4H-3-7+YE-5</option>
<option value="gni">Glaciecola nitratireducens</option>
<option value="gps">Glaciecola psychrophila</option>
<option value="pin">Psychromonas ingrahamii</option>
<option value="psy">Psychromonas sp. CNPT3</option>
<option value="ttu">Teredinibacter turnerae</option>
<option value="fbl">Ferrimonas balearica</option>
<option value="cbu">Coxiella burnetii RSA 493</option>
<option value="cbs">Coxiella burnetii RSA 331</option>
<option value="cbd">Coxiella burnetii Dugway 5J108-111</option>
<option value="cbg">Coxiella burnetii CbuG_Q212</option>
<option value="cbc">Coxiella burnetii CbuK_Q154</option>
<option value="lpn">Legionella pneumophila subsp. pneumophila Philadelphia 1</option>
<option value="lph">Legionella pneumophila subsp. pneumophila HL06041035</option>
<option value="lpo">Legionella pneumophila subsp. pneumophila Lorraine</option>
<option value="lpu">Legionella pneumophila subsp. pneumophila LPE509</option>
<option value="lpm">Legionella pneumophila subsp. pneumophila Thunder Bay</option>
<option value="lpf">Legionella pneumophila Lens</option>
<option value="lpp">Legionella pneumophila Paris</option>
<option value="lpc">Legionella pneumophila Corby</option>
<option value="lpa">Legionella pneumophila 2300/99 Alcoy</option>
<option value="lpe">Legionella pneumophila subsp. pneumophila ATCC 43290</option>
<option value="llo">Legionella longbeachae</option>
<option value="mca">Methylococcus capsulatus</option>
<option value="mmt">Methylomonas methanica</option>
<option value="mah">Methylomicrobium alcaliphilum</option>
<option value="ftu">Francisella tularensis subsp. tularensis SCHU S4</option>
<option value="ftf">Francisella tularensis subsp. tularensis FSC198</option>
<option value="ftw">Francisella tularensis subsp. tularensis WY96-3418</option>
<option value="ftr">Francisella tularensis subsp. tularensis NE061598</option>
<option value="ftt">Francisella tularensis subsp. tularensis TI0902</option>
<option value="ftg">Francisella tularensis TIGB03</option>
<option value="ftl">Francisella tularensis subsp. holarctica LVS</option>
<option value="fth">Francisella tularensis subsp. holarctica OSU18</option>
<option value="fta">Francisella tularensis subsp. holarctica FTNF002-00</option>
<option value="fts">Francisella tularensis subsp. holarctica F92</option>
<option value="fti">Francisella tularensis subsp. holarctica FSC200</option>
<option value="fto">Francisella tularensis subsp. holarctica PHIT-FT049</option>
<option value="ftm">Francisella tularensis subsp. mediasiatica FSC147</option>
<option value="ftn">Francisella tularensis subsp. novicida</option>
<option value="fcf">Francisella cf. novicida Fx1</option>
<option value="fcn">Francisella cf. novicida 3523</option>
<option value="fph">Francisella philomiragia</option>
<option value="frt">Francisella sp. TX077308</option>
<option value="fna">Francisella noatunensis subsp. orientalis Toba 04</option>
<option value="fnl">Francisella noatunensis subsp. orientalis LADL--07-285A</option>
<option value="frf">Francisella sp. FSC1006</option>
<option value="tcx">Thiomicrospira crunogena</option>
<option value="tcy">Thioalkalimicrobium cyclicum</option>
<option value="mej">Methylophaga nitratireducenticrescens</option>
<option value="mec">Methylophaga frappieri</option>
<option value="cyq">Cycloclasticus sp. P1</option>
<option value="cza">Cycloclasticus zancles</option>
<option value="noc">Nitrosococcus oceani</option>
<option value="nhl">Nitrosococcus halophilus</option>
<option value="nwa">Nitrosococcus watsonii</option>
<option value="alv">Allochromatium vinosum</option>
<option value="tvi">Thiocystis violascens</option>
<option value="tmb">Thioflavicoccus mobilis</option>
<option value="aeh">Alkalilimnicola ehrlichii</option>
<option value="hha">Halorhodospira halophila</option>
<option value="hhc">Halorhodospira halochloris</option>
<option value="tgr">Thioalkalivibrio sulfidiphilus</option>
<option value="tkm">Thioalkalivibrio sp. K90mix</option>
<option value="tni">Thioalkalivibrio nitratireducens</option>
<option value="ssal">Spiribacter salinus</option>
<option value="spiu">Spiribacter sp. UAH-SP71</option>
<option value="hna">Halothiobacillus neapolitanus</option>
<option value="hch">Hahella chejuensis</option>
<option value="csa">Chromohalobacter salexigens</option>
<option value="hel">Halomonas elongata</option>
<option value="hcs">Halomonas campaniensis</option>
<option value="ple">Candidatus Portiera aleyrodidarum BT-B</option>
<option value="ply">Candidatus Portiera aleyrodidarum BT-B-HRs</option>
<option value="plr">Candidatus Portiera aleyrodidarum BT-QVLC</option>
<option value="plo">Candidatus Portiera aleyrodidarum BT-QVLC</option>
<option value="pld">Candidatus Portiera aleyrodidarum TV</option>
<option value="abo">Alcanivorax borkumensis</option>
<option value="adi">Alcanivorax dieselolei</option>
<option value="kko">Kangiella koreensis</option>
<option value="mmw">Marinomonas sp. MWYL1</option>
<option value="mme">Marinomonas mediterranea</option>
<option value="mpc">Marinomonas posidonica</option>
<option value="tol">Thalassolituus oleivorans MIL-1</option>
<option value="tor">Thalassolituus oleivorans R6-15</option>
<option value="aha">Aeromonas hydrophila subsp. hydrophila ATCC 7966</option>
<option value="ahy">Aeromonas hydrophila ML09-119</option>
<option value="ahd">Aeromonas hydrophila YL17</option>
<option value="ahr">Aeromonas hydrophila AL09-71</option>
<option value="ahp">Aeromonas hydrophila pc104A</option>
<option value="asa">Aeromonas salmonicida</option>
<option value="avr">Aeromonas veronii</option>
<option value="amed">Aeromonas media</option>
<option value="tau">Tolumonas auensis</option>
<option value="oce">Oceanimonas sp. GK1</option>
<option value="dno">Dichelobacter nodosus</option>
<option value="afe">Acidithiobacillus ferrooxidans ATCC 53993</option>
<option value="afr">Acidithiobacillus ferrooxidans ATCC 23270</option>
<option value="saga">Simiduia agarivorans</option>
<option value="gpb">Gamma proteobacterium HdN1</option>
<option value="nma">Neisseria meningitidis Z2491 (serogroup A)</option>
<option value="nme">Neisseria meningitidis MC58 (serogroup B)</option>
<option value="nmp">Neisseria meningitidis alpha710 (serogroup B)</option>
<option value="nmh">Neisseria meningitidis H44/76 (serogroup B)</option>
<option value="nmc">Neisseria meningitidis FAM18 (serogroup C)</option>
<option value="nmn">Neisseria meningitidis 053442 (serogroup C)</option>
<option value="nmt">Neisseria meningitidis 8013 (serogroup C)</option>
<option value="nmi">Neisseria meningitidis alpha14 (cnl strain)</option>
<option value="nmd">Neisseria meningitidis G2136 (serogroup B)</option>
<option value="nmm">Neisseria meningitidis M01-240149 (serogroup B)</option>
<option value="nms">Neisseria meningitidis M01-240355 (serogroup B)</option>
<option value="nmq">Neisseria meningitidis M04-240196 (serogroup B)</option>
<option value="nmw">Neisseria meningitidis WUE 2594 (serogroup A)</option>
<option value="nmz">Neisseria meningitidis NZ-05/33 (serogroup B)</option>
<option value="ngo">Neisseria gonorrhoeae FA 1090</option>
<option value="ngk">Neisseria gonorrhoeae NCCP11945</option>
<option value="ngt">Neisseria gonorrhoeae TCDC-NG08107</option>
<option value="nla">Neisseria lactamica</option>
<option value="salv">Snodgrassella alvi</option>
<option value="cvi">Chromobacterium violaceum</option>
<option value="lhk">Laribacter hongkongensis</option>
<option value="pse">Pseudogulbenkiania sp. NH8B</option>
<option value="rso">Ralstonia solanacearum GMI1000</option>
<option value="rsc">Ralstonia solanacearum CFBP2957</option>
<option value="rsl">Ralstonia solanacearum PSI07</option>
<option value="rsn">Ralstonia solanacearum Po82</option>
<option value="rsm">Ralstonia solanacearum CMR15</option>
<option value="rse">Ralstonia solanacearum FQY_4</option>
<option value="rpi">Ralstonia pickettii 12J</option>
<option value="rpf">Ralstonia pickettii 12D</option>
<option value="rpj">Ralstonia pickettii DTP0602</option>
<option value="reu">Ralstonia eutropha JMP134</option>
<option value="reh">Ralstonia eutropha H16</option>
<option value="cnc">Cupriavidus necator N-1</option>
<option value="rme">Cupriavidus metallidurans</option>
<option value="cti">Cupriavidus taiwanensis</option>
<option value="bma">Burkholderia mallei ATCC 23344</option>
<option value="bmv">Burkholderia mallei SAVP1</option>
<option value="bml">Burkholderia mallei NCTC 10229</option>
<option value="bmn">Burkholderia mallei NCTC 10247</option>
<option value="bmal">Burkholderia mallei 23344</option>
<option value="bps">Burkholderia pseudomallei K96243</option>
<option value="bpm">Burkholderia pseudomallei 1710b</option>
<option value="bpl">Burkholderia pseudomallei 1106a</option>
<option value="bpd">Burkholderia pseudomallei 668</option>
<option value="bpr">Burkholderia pseudomallei MSHR346</option>
<option value="bpse">Burkholderia pseudomallei MSHR305</option>
<option value="bpsm">Burkholderia pseudomallei MSHR511</option>
<option value="bpsu">Burkholderia pseudomallei MSHR146</option>
<option value="bpsd">Burkholderia pseudomallei MSHR520</option>
<option value="bpz">Burkholderia pseudomallei 1026b</option>
<option value="bpq">Burkholderia pseudomallei BPC006</option>
<option value="bpk">Burkholderia pseudomallei NCTC 13179</option>
<option value="bpsh">Burkholderia pseudomallei HBPUB10134a</option>
<option value="bte">Burkholderia thailandensis E264</option>
<option value="btq">Burkholderia thailandensis 2002721723</option>
<option value="btj">Burkholderia thailandensis E444</option>
<option value="btz">Burkholderia thailandensis H0587</option>
<option value="btd">Burkholderia thailandensis MSMB121</option>
<option value="btv">Burkholderia thailandensis MSMB59</option>
<option value="bthe">Burkholderia thailandensis E254</option>
<option value="bthm">Burkholderia thailandensis USAMRU Malaysia #20</option>
<option value="bok">Burkholderia oklahomensis</option>
<option value="but">Burkholderia sp. TSV202</option>
<option value="bvi">Burkholderia vietnamiensis</option>
<option value="bur">Burkholderia lata</option>
<option value="bcn">Burkholderia cenocepacia AU1054</option>
<option value="bch">Burkholderia cenocepacia HI2424</option>
<option value="bcm">Burkholderia cenocepacia MC0-3</option>
<option value="bcj">Burkholderia cenocepacia J2315</option>
<option value="bcen">Burkholderia cenocepacia DDS 22E-1</option>
<option value="bam">Burkholderia ambifaria AMMD</option>
<option value="bac">Burkholderia ambifaria MC40-6</option>
<option value="bmu">Burkholderia multivorans ATCC 17616 (JGI)</option>
<option value="bmj">Burkholderia multivorans ATCC 17616 (Tohoku)</option>
<option value="bmk">Burkholderia multivorans DDS 15A-1</option>
<option value="bct">Burkholderia cepacia GG4</option>
<option value="bced">Burkholderia cepacia DDS 7H-2</option>
<option value="bxe">Burkholderia xenovorans LB400</option>
<option value="bxb">Burkholderia xenovorans BXA</option>
<option value="bph">Burkholderia phymatum</option>
<option value="bpy">Burkholderia phytofirmans</option>
<option value="bgl">Burkholderia glumae</option>
<option value="bug">Burkholderia sp. CCGE1001</option>
<option value="bge">Burkholderia sp. CCGE1002</option>
<option value="bgf">Burkholderia sp. CCGE1003</option>
<option value="brh">Burkholderia rhizoxinica</option>
<option value="bgd">Burkholderia gladioli</option>
<option value="byi">Burkholderia sp. YI23</option>
<option value="buk">Burkholderia sp. KJ006</option>
<option value="bpx">Burkholderia phenoliruptrix</option>
<option value="buo">Burkholderia sp. RPE64</option>
<option value="pnu">Polynucleobacter necessarius subsp. asymbioticus</option>
<option value="pne">Polynucleobacter necessarius subsp. necessarius</option>
<option value="ppk">Pandoraea pnomenusa 3kgm</option>
<option value="ppno">Pandoraea pnomenusa RB38</option>
<option value="ppnm">Pandoraea pnomenusa DSM 16536</option>
<option value="prb">Pandoraea sp. RB-44</option>
<option value="bpe">Bordetella pertussis Tohama I</option>
<option value="bpc">Bordetella pertussis CS</option>
<option value="bper">Bordetella pertussis 18323</option>
<option value="bpa">Bordetella parapertussis 12822</option>
<option value="bpar">Bordetella parapertussis Bpp5</option>
<option value="bbr">Bordetella bronchiseptica RB50</option>
<option value="bbm">Bordetella bronchiseptica MO149</option>
<option value="bbh">Bordetella bronchiseptica 253</option>
<option value="bpt">Bordetella petrii</option>
<option value="bav">Bordetella avium</option>
<option value="bho">Bordetella holmesii ATCC 51541</option>
<option value="bhm">Bordetella holmesii 44057</option>
<option value="axy">Achromobacter xylosoxidans A8</option>
<option value="axo">Achromobacter xylosoxidans NH44784-1996</option>
<option value="axn">Achromobacter xylosoxidans NBRC 15126 = ATCC 27061</option>
<option value="axs">Achromobacter xylosoxidans C54</option>
<option value="teq">Taylorella equigenitalis MCE9</option>
<option value="tea">Taylorella equigenitalis ATCC 35865</option>
<option value="teg">Taylorella equigenitalis 14/56</option>
<option value="tas">Taylorella asinigenitalis MCE3</option>
<option value="tat">Taylorella asinigenitalis 14/45</option>
<option value="put">Pusillimonas sp. T7-7</option>
<option value="aka">Advenella kashmirensis</option>
<option value="amim">Advenella mimigardefordensis</option>
<option value="cdn">Castellaniella defragrans</option>
<option value="bpsi">Basilea psittacipulmonis</option>
<option value="rfr">Rhodoferax ferrireducens</option>
<option value="pol">Polaromonas sp. JS666</option>
<option value="pna">Polaromonas naphthalenivorans</option>
<option value="aav">Acidovorax citrulli</option>
<option value="ajs">Acidovorax sp. JS42</option>
<option value="dia">Acidovorax ebreus</option>
<option value="aaa">Acidovorax avenae</option>
<option value="ack">Acidovorax sp. KKS102</option>
<option value="vei">Verminephrobacter eiseniae</option>
<option value="dac">Delftia acidovorans</option>
<option value="del">Delftia sp. Cs1-4</option>
<option value="vap">Variovorax paradoxus S110</option>
<option value="vpe">Variovorax paradoxus EPS</option>
<option value="vpd">Variovorax paradoxus B4</option>
<option value="ctt">Comamonas testosteroni CNB-2</option>
<option value="ctes">Comamonas testosteroni TK102</option>
<option value="adn">Alicycliphilus denitrificans BC</option>
<option value="adk">Alicycliphilus denitrificans K601</option>
<option value="rta">Ramlibacter tataouinensis</option>
<option value="cbx">Symbiobacter mobilis</option>
<option value="mpt">Methylibium petroleiphilum</option>
<option value="har">Herminiimonas arsenicoxydans</option>
<option value="mms">Janthinobacterium sp. Marseille</option>
<option value="jag">Janthinobacterium agaricidamnosum</option>
<option value="hse">Herbaspirillum seropedicae</option>
<option value="zin">Candidatus Zinderia insecticola</option>
<option value="cfu">Collimonas fungivorans</option>
<option value="lch">Leptothrix cholodnii</option>
<option value="tin">Thiomonas intermedia</option>
<option value="thi">Thiomonas arsenitoxydans</option>
<option value="rge">Rubrivivax gelatinosus</option>
<option value="neu">Nitrosomonas europaea</option>
<option value="net">Nitrosomonas eutropha</option>
<option value="nit">Nitrosomonas sp. AL212</option>
<option value="nii">Nitrosomonas sp. Is79A3</option>
<option value="nmu">Nitrosospira multiformis</option>
<option value="eba">Aromatoleum aromaticum</option>
<option value="azo">Azoarcus sp. BH72</option>
<option value="aza">Azoarcus sp. KH32C</option>
<option value="dar">Dechloromonas aromatica</option>
<option value="tmz">Thauera sp. MZ1T</option>
<option value="dsu">Dechlorosoma suillum</option>
<option value="tbd">Thiobacillus denitrificans</option>
<option value="sdr">Sulfuricella denitrificans</option>
<option value="app">Accumulibacter phosphatis</option>
<option value="slt">Sideroxydans lithotrophicus</option>
<option value="gca">Gallionella capsiferriformans</option>
<option value="kci">Candidatus Kinetoplastibacterium crithidii (ex Angomonas deanei ATCC 30255)</option>
<option value="kct">Candidatus Kinetoplastibacterium crithidii TCC036E</option>
<option value="kbl">Candidatus Kinetoplastibacterium blastocrithidii (ex Strigomonas culicis)</option>
<option value="kbt">Candidatus Kinetoplastibacterium blastocrithidii TCC012E</option>
<option value="kde">Candidatus Kinetoplastibacterium desouzaii</option>
<option value="kga">Candidatus Kinetoplastibacterium galatii</option>
<option value="kon">Candidatus Kinetoplastibacterium oncopeltii</option>
<option value="ssdc">Candidatus Profftella armatura</option>
<option value="bprc">Beta proteobacterium CB</option>
<option value="hpy">Helicobacter pylori 26695</option>
<option value="heo">Helicobacter pylori 26695</option>
<option value="hpj">Helicobacter pylori J99</option>
<option value="hpa">Helicobacter pylori HPAG1</option>
<option value="hps">Helicobacter pylori Shi470</option>
<option value="hhp">Helicobacter pylori Shi112</option>
<option value="hhq">Helicobacter pylori Shi169</option>
<option value="hhr">Helicobacter pylori Shi417</option>
<option value="hpg">Helicobacter pylori G27</option>
<option value="hpp">Helicobacter pylori P12</option>
<option value="hpb">Helicobacter pylori B38</option>
<option value="hpl">Helicobacter pylori B8</option>
<option value="hpc">Helicobacter pylori PeCan4</option>
<option value="hca">Helicobacter pylori PeCan18</option>
<option value="hpm">Helicobacter pylori SJM180</option>
<option value="hpe">Helicobacter pylori ELS37</option>
<option value="hpo">Helicobacter pylori 35A</option>
<option value="hpi">Helicobacter pylori 908</option>
<option value="hpq">Helicobacter pylori 2017</option>
<option value="hpw">Helicobacter pylori 2018</option>
<option value="hpu">Helicobacter pylori Cuz20</option>
<option value="hef">Helicobacter pylori F16</option>
<option value="hpf">Helicobacter pylori F30</option>
<option value="heq">Helicobacter pylori F32</option>
<option value="hex">Helicobacter pylori F57</option>
<option value="hpt">Helicobacter pylori Sat464</option>
<option value="hpz">Helicobacter pylori 52</option>
<option value="hpv">Helicobacter pylori v225d</option>
<option value="hpx">Helicobacter pylori 83</option>
<option value="hen">Helicobacter pylori SNT49</option>
<option value="hph">Helicobacter pylori Lithuania75</option>
<option value="heg">Helicobacter pylori Gambia94/24</option>
<option value="hpn">Helicobacter pylori India7</option>
<option value="hep">Helicobacter pylori Puno120</option>
<option value="heu">Helicobacter pylori Puno135</option>
<option value="hes">Helicobacter pylori SouthAfrica7</option>
<option value="hpys">Helicobacter pylori SouthAfrica20</option>
<option value="hcn">Helicobacter pylori HUP-B14</option>
<option value="hpd">Helicobacter pylori 51</option>
<option value="hey">Helicobacter pylori XZ274</option>
<option value="her">Helicobacter pylori Rif1</option>
<option value="hei">Helicobacter pylori Rif2</option>
<option value="hpya">Helicobacter pylori Aklavik117</option>
<option value="hpyk">Helicobacter pylori Aklavik86</option>
<option value="hpyo">Helicobacter pylori OK113</option>
<option value="hpyl">Helicobacter pylori OK310</option>
<option value="hpyb">Helicobacter pylori oki102</option>
<option value="hpyr">Helicobacter pylori UM032</option>
<option value="hpyi">Helicobacter pylori UM037</option>
<option value="hpyu">Helicobacter pylori UM066</option>
<option value="hpym">Helicobacter pylori UM299</option>
<option value="hem">Helicobacter pylori UM298</option>
<option value="heb">Helicobacter pylori BM012A</option>
<option value="hez">Helicobacter pylori BM012S</option>
<option value="hhe">Helicobacter hepaticus</option>
<option value="hac">Helicobacter acinonychis</option>
<option value="hms">Helicobacter mustelae</option>
<option value="hfe">Helicobacter felis</option>
<option value="hbi">Helicobacter bizzozeronii</option>
<option value="hhm">Helicobacter heilmannii</option>
<option value="wsu">Wolinella succinogenes</option>
<option value="tdn">Sulfurimonas denitrificans</option>
<option value="cje">Campylobacter jejuni subsp. jejuni NCTC 11168 = ATCC 700819</option>
<option value="cjj">Campylobacter jejuni subsp. jejuni 81-176</option>
<option value="cjr">Campylobacter jejuni RM1221</option>
<option value="cff">Campylobacter fetus subsp. fetus 82-40</option>
<option value="cft">Campylobacter fetus subsp. fetus 04/554</option>
<option value="cfv">Campylobacter fetus subsp. venerealis cfvi03/293</option>
<option value="cfx">Campylobacter fetus subsp. venerealis 97/608</option>
<option value="camp">Campylobacter fetus subsp. testudinum 03-427</option>
<option value="ccv">Campylobacter curvus</option>
<option value="cha">Campylobacter hominis</option>
<option value="cco">Campylobacter concisus</option>
<option value="cla">Campylobacter lari</option>
<option value="caj">Campylobacter sp. 1485E</option>
<option value="ant">Arcobacter nitrofigilis</option>
<option value="arc">Arcobacter sp. L</option>
<option value="sdl">Sulfurospirillum deleyianum</option>
<option value="sba">Sulfurospirillum barnesii</option>
<option value="smul">Sulfurospirillum multivorans</option>
<option value="gsu">Geobacter sulfurreducens PCA</option>
<option value="gsk">Geobacter sulfurreducens KN400</option>
<option value="gme">Geobacter metallireducens</option>
<option value="gur">Geobacter uraniireducens</option>
<option value="glo">Geobacter lovleyi</option>
<option value="gbm">Geobacter bemidjiensis</option>
<option value="geo">Geobacter daltonii FRC-32</option>
<option value="gem">Geobacter sp. M21</option>
<option value="geb">Geobacter sp. M18</option>
<option value="pca">Pelobacter carbinolicus</option>
<option value="ppd">Pelobacter propionicus</option>
<option value="dvm">Desulfovibrio vulgaris Miyazaki F</option>
<option value="dde">Desulfovibrio alaskensis</option>
<option value="dds">Desulfovibrio desulfuricans ATCC 27774</option>
<option value="dsa">Desulfovibrio salexigens</option>
<option value="das">Desulfovibrio aespoeensis</option>
<option value="daf">Desulfovibrio africanus</option>
<option value="dhy">Desulfovibrio hydrothermalis</option>
<option value="dpi">Desulfovibrio piezophilus</option>
<option value="dba">Desulfomicrobium baculatum</option>
<option value="drt">Desulfohalobium retbaense</option>
<option value="bba">Bdellovibrio bacteriovorus HD100</option>
<option value="bbat">Bdellovibrio bacteriovorus Tiberius</option>
<option value="bbw">Bdellovibrio bacteriovorus W</option>
<option value="bbac">Bdellovibrio bacteriovorus 109J</option>
<option value="bex">Bdellovibrio exovorus</option>
<option value="bmx">Bacteriovorax marinus</option>
<option value="dps">Desulfotalea psychrophila</option>
<option value="dak">Desulfurivibrio alkaliphilus</option>
<option value="dpr">Desulfobulbus propionicus</option>
<option value="dsf">Desulfocapsa sulfexigens</option>
<option value="dol">Candidatus Desulfococcus oleovorans</option>
<option value="dal">Desulfatibacillum alkenivorans</option>
<option value="dat">Desulfobacterium autotrophicum</option>
<option value="dto">Desulfobacula toluolica</option>
<option value="ade">Anaeromyxobacter dehalogenans 2CP-C</option>
<option value="acp">Anaeromyxobacter dehalogenans 2CP-1</option>
<option value="afw">Anaeromyxobacter sp. Fw109-5</option>
<option value="ank">Anaeromyxobacter sp. K</option>
<option value="mxa">Myxococcus xanthus</option>
<option value="mfu">Myxococcus fulvus</option>
<option value="msd">Myxococcus stipitatus</option>
<option value="ccx">Corallococcus coralloides</option>
<option value="sur">Stigmatella aurantiaca</option>
<option value="scl">Sorangium cellulosum So ce 56</option>
<option value="scu">Sorangium cellulosum So0157-2</option>
<option value="hoh">Haliangium ochraceum</option>
<option value="sat">Syntrophus aciditrophicus</option>
<option value="dti">Desulfomonile tiedjei</option>
<option value="sfu">Syntrophobacter fumaroxidans</option>
<option value="dbr">Desulfarculus baarsii</option>
<option value="hmr">Hippea maritima</option>
<option value="dav">Desulfurella acetivorans</option>
<option value="rpr">Rickettsia prowazekii Madrid E</option>
<option value="rpo">Rickettsia prowazekii BuV67-CWPP</option>
<option value="rpw">Rickettsia prowazekii Chernikova</option>
<option value="rpz">Rickettsia prowazekii Dachau</option>
<option value="rpg">Rickettsia prowazekii GvV257</option>
<option value="rps">Rickettsia prowazekii Katsinyian</option>
<option value="rpv">Rickettsia prowazekii RpGvF24</option>
<option value="rpq">Rickettsia prowazekii Rp22</option>
<option value="rpl">Rickettsia prowazekii Breinl</option>
<option value="rpn">Rickettsia prowazekii NMRC Madrid E</option>
<option value="rty">Rickettsia typhi Wilmington</option>
<option value="rtt">Rickettsia typhi TH1527</option>
<option value="rtb">Rickettsia typhi B9991CWPP</option>
<option value="rcm">Rickettsia canadensis McKiel</option>
<option value="rcc">Rickettsia canadensis CA410</option>
<option value="rbe">Rickettsia bellii RML369-C</option>
<option value="rbo">Rickettsia bellii OSU 85-389</option>
<option value="rco">Rickettsia conorii</option>
<option value="rfe">Rickettsia felis</option>
<option value="rak">Rickettsia akari</option>
<option value="rri">Rickettsia rickettsii Sheila Smith</option>
<option value="rrj">Rickettsia rickettsii Iowa</option>
<option value="rra">Rickettsia rickettsii Arizona</option>
<option value="rrc">Rickettsia rickettsii Colombia</option>
<option value="rrh">Rickettsia rickettsii Hauke</option>
<option value="rrb">Rickettsia rickettsii Brazil</option>
<option value="rrn">Rickettsia rickettsii Hino</option>
<option value="rrp">Rickettsia rickettsii Hlp#2</option>
<option value="rms">Rickettsia massiliae MTU5</option>
<option value="rmi">Rickettsia massiliae AZT80</option>
<option value="rpk">Rickettsia peacockii</option>
<option value="raf">Rickettsia africae</option>
<option value="rhe">Rickettsia heilongjiangensis</option>
<option value="rja">Rickettsia japonica</option>
<option value="rsv">Rickettsia slovaca 13-B</option>
<option value="rsw">Rickettsia slovaca D-CWPP</option>
<option value="rph">Rickettsia philipii</option>
<option value="rau">Rickettsia australis</option>
<option value="rmo">Rickettsia montanensis</option>
<option value="rpp">Rickettsia parkeri</option>
<option value="rre">Rickettsia rhipicephali</option>
<option value="ram">Candidatus Rickettsia amblyommii</option>
<option value="ots">Orientia tsutsugamushi Boryong</option>
<option value="ott">Orientia tsutsugamushi Ikeda</option>
<option value="wol">Wolbachia wMel (Drosophila melanogaster)</option>
<option value="wri">Wolbachia wRi (Drosophila simulans)</option>
<option value="wen">Wolbachia wHa (Drosophila simulans)</option>
<option value="wed">Wolbachia wNo (Drosophila simulans)</option>
<option value="wpi">Wolbachia wPip (Culex quinquefasciatus)</option>
<option value="wbm">Wolbachia wBm (Brugia malayi)</option>
<option value="woo">Wolbachia wOo (Onchocerca ochengi)</option>
<option value="ama">Anaplasma marginale St. Maries</option>
<option value="amf">Anaplasma marginale Florida</option>
<option value="amw">Anaplasma marginale Dawn</option>
<option value="acn">Anaplasma centrale</option>
<option value="aph">Anaplasma phagocytophilum HZ</option>
<option value="apy">Anaplasma phagocytophilum HZ2</option>
<option value="apd">Anaplasma phagocytophilum Dog2</option>
<option value="apha">Anaplasma phagocytophilum JM</option>
<option value="eru">Ehrlichia ruminantium Welgevonden (South Africa)</option>
<option value="erw">Ehrlichia ruminantium Welgevonden (France)</option>
<option value="erg">Ehrlichia ruminantium Gardel</option>
<option value="ecn">Ehrlichia canis</option>
<option value="ech">Ehrlichia chaffeensis Arkansas</option>
<option value="echa">Ehrlichia chaffeensis Heartland</option>
<option value="echj">Ehrlichia chaffeensis Jax</option>
<option value="echl">Ehrlichia chaffeensis Liberty</option>
<option value="echs">Ehrlichia chaffeensis Osceola</option>
<option value="echv">Ehrlichia chaffeensis Saint Vincent</option>
<option value="echw">Ehrlichia chaffeensis Wakulla</option>
<option value="echp">Ehrlichia chaffeensis West Paces</option>
<option value="emr">Ehrlichia muris</option>
<option value="ehh">Ehrlichia sp. HF</option>
<option value="nse">Neorickettsia sennetsu</option>
<option value="nri">Neorickettsia risticii</option>
<option value="nhm">Neorickettsia helminthoeca</option>
<option value="mmn">Candidatus Midichloria mitochondrii</option>
<option value="paca">Candidatus Paracaedibacter acanthamoebae</option>
<option value="caq">Candidatus Caedibacter acanthamoebae</option>
<option value="eaa">Endosymbiont of Acanthamoeba sp. UWC8</option>
<option value="rbt">Rickettsiales bacterium Ac37b</option>
<option value="mlo">Mesorhizobium loti</option>
<option value="mci">Mesorhizobium ciceri</option>
<option value="mop">Mesorhizobium opportunistum</option>
<option value="mam">Mesorhizobium australicum</option>
<option value="mes">Chelativorans sp. BNC1</option>
<option value="pla">Parvibaculum lavamentivorans</option>
<option value="sme">Sinorhizobium meliloti 1021</option>
<option value="smk">Sinorhizobium meliloti AK83</option>
<option value="smq">Sinorhizobium meliloti BL225C</option>
<option value="smx">Sinorhizobium meliloti SM11</option>
<option value="smi">Sinorhizobium meliloti Rm41</option>
<option value="smeg">Sinorhizobium meliloti GR4</option>
<option value="smel">Sinorhizobium meliloti 2011</option>
<option value="smer">Sinorhizobium meliloti RMO17</option>
<option value="smd">Sinorhizobium medicae</option>
<option value="rhi">Sinorhizobium fredii NGR234</option>
<option value="sfh">Sinorhizobium fredii HH103</option>
<option value="sfd">Sinorhizobium fredii USDA 257</option>
<option value="ead">Ensifer adhaerens</option>
<option value="atu">Agrobacterium fabrum</option>
<option value="ara">Agrobacterium radiobacter</option>
<option value="avi">Agrobacterium vitis</option>
<option value="agr">Agrobacterium sp. H13-3</option>
<option value="ret">Rhizobium etli CFN 42</option>
<option value="rec">Rhizobium etli CIAT 652</option>
<option value="rel">Rhizobium etli bv. mimosae Mim1</option>
<option value="rei">Rhizobium etli bv. mimosae IE4771</option>
<option value="rle">Rhizobium leguminosarum bv. viciae 3841</option>
<option value="rlt">Rhizobium leguminosarum bv. trifolii WSM2304</option>
<option value="rlg">Rhizobium leguminosarum bv. trifolii WSM1325</option>
<option value="rlb">Rhizobium leguminosarum bv. trifolii WSM1689</option>
<option value="rlu">Rhizobium leguminosarum bv. trifolii CB782</option>
<option value="rtr">Rhizobium tropici</option>
<option value="rir">Rhizobium sp. IRBG74</option>
<option value="rhl">Rhizobium sp. LPU83</option>
<option value="ngl">Neorhizobium galegae bv. officinalis bv. officinalis HAMBI 1141</option>
<option value="ngg">Neorhizobium galegae bv. orientalis HAMBI 540</option>
<option value="las">Candidatus Liberibacter asiaticus psy62</option>
<option value="laa">Candidatus Liberibacter asiaticus gxpsy</option>
<option value="lso">Candidatus Liberibacter solanacearum</option>
<option value="lcc">Liberibacter crescens</option>
<option value="lar">Candidatus Liberibacter americanus</option>
<option value="bme">Brucella melitensis bv. 1 16M</option>
<option value="bmi">Brucella melitensis ATCC 23457</option>
<option value="bmz">Brucella melitensis M28</option>
<option value="bmg">Brucella melitensis M5-90</option>
<option value="bmw">Brucella melitensis NI</option>
<option value="bmee">Brucella melitensis bv. 3 Ether</option>
<option value="bmf">Brucella abortus 2308</option>
<option value="bmb">Brucella abortus 9-941</option>
<option value="bmc">Brucella abortus S19</option>
<option value="baa">Brucella abortus A13334</option>
<option value="babo">Brucella abortus bv. 2 86/8/59</option>
<option value="babr">Brucella abortus bv. 6 870</option>
<option value="bms">Brucella suis 1330</option>
<option value="bsi">Brucella suis 1330</option>
<option value="bsf">Brucella suis bv. 1</option>
<option value="bsui">Brucella suis bv. 2</option>
<option value="bmt">Brucella suis ATCC 23445</option>
<option value="bsz">Brucella suis bv. 3</option>
<option value="bsv">Brucella suis VBI22</option>
<option value="bsw">Brucella suis ZW043</option>
<option value="bsg">Brucella suis ZW046</option>
<option value="bov">Brucella ovis</option>
<option value="bcs">Brucella canis ATCC 23365</option>
<option value="bsk">Brucella canis HSK A52141</option>
<option value="bol">Brucella canis Oliveri</option>
<option value="bcar">Brucella canis RM6/66</option>
<option value="bcas">Brucella canis SVA13</option>
<option value="bmr">Brucella microti</option>
<option value="bpp">Brucella pinnipedialis B2/94</option>
<option value="bpv">Brucella pinnipedialis 6/566</option>
<option value="bcet">Brucella ceti TE10759-12</option>
<option value="bcee">Brucella ceti TE28753-12</option>
<option value="oan">Ochrobactrum anthropi ATCC 49188</option>
<option value="oah">Ochrobactrum anthropi OAB</option>
<option value="bja">Bradyrhizobium diazoefficiens USDA 110</option>
<option value="bju">Bradyrhizobium japonicum USDA 6</option>
<option value="bra">Bradyrhizobium sp. ORS 278</option>
<option value="bbt">Bradyrhizobium sp. BTAi1</option>
<option value="brs">Bradyrhizobium sp. S23321</option>
<option value="aol">Bradyrhizobium oligotrophicum</option>
<option value="rpa">Rhodopseudomonas palustris CGA009</option>
<option value="rpb">Rhodopseudomonas palustris HaA2</option>
<option value="rpc">Rhodopseudomonas palustris BisB18</option>
<option value="rpd">Rhodopseudomonas palustris BisB5</option>
<option value="rpe">Rhodopseudomonas palustris BisA53</option>
<option value="rpt">Rhodopseudomonas palustris TIE-1</option>
<option value="rpx">Rhodopseudomonas palustris DX-1</option>
<option value="nwi">Nitrobacter winogradskyi</option>
<option value="nha">Nitrobacter hamburgensis</option>
<option value="oca">Oligotropha carboxidovorans OM5 (Mississippi)</option>
<option value="ocg">Oligotropha carboxidovorans OM5 (Goettingen)</option>
<option value="oco">Oligotropha carboxidovorans OM4</option>
<option value="bhe">Bartonella henselae Houston-1</option>
<option value="bhn">Bartonella henselae BM1374163</option>
<option value="bhs">Bartonella henselae BM1374165</option>
<option value="bqu">Bartonella quintana Toulouse</option>
<option value="bqr">Bartonella quintana RM-11</option>
<option value="bbk">Bartonella bacilliformis</option>
<option value="btr">Bartonella tribocorum CIP 105476</option>
<option value="btx">Bartonella tribocorum BM1374166</option>
<option value="bgr">Bartonella grahamii</option>
<option value="bcd">Bartonella clarridgeiae</option>
<option value="baus">Bartonella australis</option>
<option value="bvn">Bartonella vinsonii</option>
<option value="xau">Xanthobacter autotrophicus</option>
<option value="azc">Azorhizobium caulinodans</option>
<option value="sno">Starkeya novella</option>
<option value="mex">Methylobacterium extorquens PA1</option>
<option value="mea">Methylobacterium extorquens AM1</option>
<option value="mdi">Methylobacterium extorquens DM4</option>
<option value="mch">Methylobacterium extorquens CM4</option>
<option value="mrd">Methylobacterium radiotolerans</option>
<option value="met">Methylobacterium sp. 4-46</option>
<option value="mpo">Methylobacterium populi</option>
<option value="mno">Methylobacterium nodulans</option>
<option value="mor">Methylobacterium oryzae</option>
<option value="bid">Beijerinckia indica</option>
<option value="msl">Methylocella silvestris</option>
<option value="hdn">Hyphomicrobium denitrificans ATCC 51888</option>
<option value="hdt">Hyphomicrobium denitrificans 1NES1</option>
<option value="hmc">Hyphomicrobium sp. MC1</option>
<option value="hni">Hyphomicrobium nitrativorans</option>
<option value="rva">Rhodomicrobium vannielii</option>
<option value="phl">Pelagibacterium halotolerans</option>
<option value="msc">Methylocystis sp. SC2</option>
<option value="ccr">Caulobacter crescentus CB15</option>
<option value="ccs">Caulobacter crescentus NA1000</option>
<option value="cak">Caulobacter sp. K31</option>
<option value="cse">Caulobacter segnis</option>
<option value="pzu">Phenylobacterium zucineum</option>
<option value="bsb">Brevundimonas subvibrioides</option>
<option value="aex">Asticcacaulis excentricus</option>
<option value="sil">Ruegeria pomeroyi</option>
<option value="sit">Ruegeria sp. TM1040</option>
<option value="rsp">Rhodobacter sphaeroides 2.4.1</option>
<option value="rsh">Rhodobacter sphaeroides ATCC 17029</option>
<option value="rsq">Rhodobacter sphaeroides ATCC 17025</option>
<option value="rsk">Rhodobacter sphaeroides KD131</option>
<option value="rcp">Rhodobacter capsulatus</option>
<option value="jan">Jannaschia sp. CCS1</option>
<option value="rde">Roseobacter denitrificans</option>
<option value="rli">Roseobacter litoralis</option>
<option value="pde">Paracoccus denitrificans</option>
<option value="pami">Paracoccus aminophilus</option>
<option value="dsh">Dinoroseobacter shibae</option>
<option value="kvu">Ketogulonicigenium vulgare Y25</option>
<option value="kvl">Ketogulonicigenium vulgare WSH-001</option>
<option value="psf">Pseudovibrio sp. FO-BEG1</option>
<option value="pga">Phaeobacter inhibens</option>
<option value="pgl">Phaeobacter gallaeciensis 2.10</option>
<option value="pgd">Phaeobacter gallaeciensis DSM 26640</option>
<option value="oat">Octadecabacter antarcticus</option>
<option value="oar">Octadecabacter arcticus</option>
<option value="lmd">Leisingera methylohalidivorans</option>
<option value="red">Roseibacterium elongatum</option>
<option value="ptp">Planktomarina temperata</option>
<option value="mmr">Maricaulis maris</option>
<option value="hne">Hyphomonas neptunium</option>
<option value="hba">Hirschia baltica</option>
<option value="nar">Novosphingobium aromaticivorans</option>
<option value="npp">Novosphingobium sp. PP1Y</option>
<option value="npn">Novosphingobium pentaromativorans</option>
<option value="sal">Sphingopyxis alaskensis</option>
<option value="swi">Sphingomonas wittichii</option>
<option value="sphm">Sphingomonas sp. MM-1</option>
<option value="stax">Sphingomonas taxi</option>
<option value="sjp">Sphingobium japonicum</option>
<option value="sch">Sphingobium chlorophenolicum</option>
<option value="ssy">Sphingobium sp. SYK-6</option>
<option value="eli">Erythrobacter litoralis</option>
<option value="gox">Gluconobacter oxydans 621H</option>
<option value="goh">Gluconobacter oxydans H24</option>
<option value="gbe">Granulibacter bethesdensis CGDNIH1</option>
<option value="gbh">Granulibacter bethesdensis CGDNIH2</option>
<option value="gbc">Granulibacter bethesdensis CGDNIH3</option>
<option value="gbs">Granulibacter bethesdensis CGDNIH4</option>
<option value="acr">Acidiphilium cryptum</option>
<option value="amv">Acidiphilium multivorum</option>
<option value="gdi">Gluconacetobacter diazotrophicus PAl 5 (Brazil)</option>
<option value="gdj">Gluconacetobacter diazotrophicus PAl 5 (JGI)</option>
<option value="gxy">Gluconacetobacter medellinensis NBRC 3288</option>
<option value="gxl">Gluconacetobacter xylinus E25</option>
<option value="apt">Acetobacter pasteurianus IFO 3283-01</option>
<option value="apw">Acetobacter pasteurianus IFO 3283-01-42C</option>
<option value="apf">Acetobacter pasteurianus IFO 3283-03</option>
<option value="apu">Acetobacter pasteurianus IFO 3283-07</option>
<option value="apg">Acetobacter pasteurianus IFO 3283-12</option>
<option value="apq">Acetobacter pasteurianus IFO 3283-22</option>
<option value="apx">Acetobacter pasteurianus IFO 3283-26</option>
<option value="apz">Acetobacter pasteurianus IFO 3283-32</option>
<option value="apk">Acetobacter pasteurianus 386B</option>
<option value="rru">Rhodospirillum rubrum ATCC 11170</option>
<option value="rrf">Rhodospirillum rubrum F11</option>
<option value="rce">Rhodospirillum centenum</option>
<option value="rpm">Rhodospirillum photometricum</option>
<option value="mag">Magnetospirillum magneticum</option>
<option value="mgy">Magnetospirillum gryphiswaldense</option>
<option value="azl">Azospirillum sp. B510</option>
<option value="ali">Azospirillum lipoferum</option>
<option value="abs">Azospirillum brasilense Sp245</option>
<option value="abq">Azospirillum brasilense Az39</option>
<option value="tmo">Tistrella mobilis</option>
<option value="thal">Endolissoclinum patella</option>
<option value="pbr">Parvularcula bermudensis</option>
<option value="mgm">Magnetococcus marinus</option>
<option value="mai">Micavibrio aeruginosavorus ARL-13</option>
<option value="man">Micavibrio aeruginosavorus EPB</option>
<option value="pgv">Polymorphum gilvum</option>
<option value="pub">Candidatus Pelagibacter ubique</option>
<option value="pel">Candidatus Pelagibacter sp. IMCC9063</option>
<option value="apc">Alpha proteobacterium HIMB59</option>
<option value="apm">Alpha proteobacterium HIMB5</option>
<option value="apb">Candidatus Puniceispirillum marinum</option>
<option value="bsu">Bacillus subtilis subsp. subtilis 168</option>
<option value="bsr">Bacillus subtilis subsp. subtilis RO-NN-1</option>
<option value="bsl">Bacillus subtilis subsp. subtilis BSP1</option>
<option value="bsh">Bacillus subtilis subsp. subtilis 6051-HGW</option>
<option value="bsy">Bacillus subtilis subsp. subtilis BAB-1</option>
<option value="bss">Bacillus subtilis subsp. spizizenii W23</option>
<option value="bst">Bacillus subtilis subsp. spizizenii TU-B-10</option>
<option value="bso">Bacillus subtilis subsp. natto BEST195</option>
<option value="bsn">Bacillus subtilis BSn5</option>
<option value="bsq">Bacillus subtilis QB928</option>
<option value="bsub">Bacillus subtilis BEST7613</option>
<option value="bsx">Bacillus subtilis XF-1</option>
<option value="bsp">Bacillus subtilis PY79</option>
<option value="bli">Bacillus licheniformis ATCC 14580</option>
<option value="bld">Bacillus licheniformis DSM 13 = ATCC 14580</option>
<option value="blh">Bacillus licheniformis 9945A</option>
<option value="bao">Bacillus amyloliquefaciens DSM 7</option>
<option value="bay">Bacillus amyloliquefaciens FZB42</option>
<option value="baq">Bacillus amyloliquefaciens subsp. plantarum CAU B946</option>
<option value="bya">Bacillus amyloliquefaciens subsp. plantarum YAU B9601-Y2</option>
<option value="bamp">Bacillus amyloliquefaciens subsp. plantarum AS43.3</option>
<option value="baml">Bacillus amyloliquefaciens subsp. plantarum UCMB5036</option>
<option value="bama">Bacillus amyloliquefaciens subsp. plantarum UCMB5033</option>
<option value="bamn">Bacillus amyloliquefaciens subsp. plantarum UCMB5113</option>
<option value="bamb">Bacillus amyloliquefaciens subsp. plantarum NAU-B3</option>
<option value="bamt">Bacillus amyloliquefaciens subsp. plantarum TrigoCor1448</option>
<option value="baz">Bacillus amyloliquefaciens TA208</option>
<option value="bql">Bacillus amyloliquefaciens LL3</option>
<option value="bxh">Bacillus amyloliquefaciens XH7</option>
<option value="bqy">Bacillus amyloliquefaciens Y2</option>
<option value="bami">Bacillus amyloliquefaciens IT-45</option>
<option value="bamc">Bacillus amyloliquefaciens CC178</option>
<option value="bamf">Bacillus amyloliquefaciens LFB112</option>
<option value="bamy">Bacillus amyloliquefaciens SQR9</option>
<option value="bae">Bacillus atrophaeus</option>
<option value="bha">Bacillus halodurans</option>
<option value="ban">Bacillus anthracis Ames</option>
<option value="bar">Bacillus anthracis Ames 0581</option>
<option value="bat">Bacillus anthracis Sterne</option>
<option value="bah">Bacillus anthracis CDC 684</option>
<option value="bai">Bacillus anthracis A0248</option>
<option value="bax">Bacillus anthracis H9401</option>
<option value="bant">Bacillus anthracis A16</option>
<option value="banr">Bacillus anthracis A16R</option>
<option value="bans">Bacillus anthracis SVA11</option>
<option value="banh">Bacillus anthracis HYU01</option>
<option value="bal">Bacillus cereus biovar anthracis CI</option>
<option value="bce">Bacillus cereus ATCC 14579</option>
<option value="bca">Bacillus cereus ATCC 10987</option>
<option value="bcz">Bacillus cereus ZK</option>
<option value="bcr">Bacillus cereus AH187</option>
<option value="bcb">Bacillus cereus B4264</option>
<option value="bcu">Bacillus cereus AH820</option>
<option value="bcg">Bacillus cereus G9842</option>
<option value="bcq">Bacillus cereus Q1</option>
<option value="bcx">Bacillus cereus 03BB102</option>
<option value="bnc">Bacillus cereus NC7401</option>
<option value="bcf">Bacillus cereus F837/76</option>
<option value="bcer">Bacillus cereus FRI-35</option>
<option value="bcef">Bacillus cereus FT9</option>
<option value="bcy">Bacillus cytotoxicus</option>
<option value="btk">Bacillus thuringiensis 97-27</option>
<option value="btl">Bacillus thuringiensis Al Hakam</option>
<option value="btb">Bacillus thuringiensis BMB171</option>
<option value="btt">Bacillus thuringiensis serovar kurstaki HD73</option>
<option value="btc">Bacillus thuringiensis serovar chinensis CT-43</option>
<option value="btf">Bacillus thuringiensis serovar finitimus YBT-020</option>
<option value="btm">Bacillus thuringiensis MC28</option>
<option value="btg">Bacillus thuringiensis Bt407</option>
<option value="bti">Bacillus thuringiensis HD-771</option>
<option value="btn">Bacillus thuringiensis HD-789</option>
<option value="btht">Bacillus thuringiensis serovar thuringiensis IS5056</option>
<option value="bthu">Bacillus thuringiensis YBT-1518</option>
<option value="bwe">Bacillus weihenstephanensis KBAB4</option>
<option value="bty">Bacillus toyonensis</option>
<option value="bmyc">Bacillus mycoides</option>
<option value="bcl">Bacillus clausii</option>
<option value="bpu">Bacillus pumilus SAFR-032</option>
<option value="bpum">Bacillus pumilus MTCC B6033</option>
<option value="bpf">Bacillus pseudofirmus</option>
<option value="bmq">Bacillus megaterium QM B1551</option>
<option value="bmd">Bacillus megaterium DSM 319</option>
<option value="bmh">Bacillus megaterium WSH-002</option>
<option value="bco">Bacillus cellulosilyticus</option>
<option value="bck">Bacillus coagulans 2-6</option>
<option value="bag">Bacillus coagulans 36D1</option>
<option value="bjs">Bacillus sp. JS</option>
<option value="baci">Bacillus sp. 1NLA3E</option>
<option value="bif">Bacillus infantis</option>
<option value="ble">Bacillus lehensis</option>
<option value="bmet">Bacillus methanolicus</option>
<option value="bmp">Bacillus methylotrophicus</option>
<option value="oih">Oceanobacillus iheyensis</option>
<option value="gka">Geobacillus kaustophilus</option>
<option value="gtn">Geobacillus thermodenitrificans</option>
<option value="gth">Geobacillus thermoglucosidasius</option>
<option value="gte">Geobacillus thermoleovorans</option>
<option value="gwc">Geobacillus sp. WCH70</option>
<option value="gyc">Geobacillus sp. Y412MC61</option>
<option value="gya">Geobacillus sp. Y412MC52</option>
<option value="gct">Geobacillus sp. C56-T3</option>
<option value="gmc">Geobacillus sp. Y4.1MC1</option>
<option value="ggh">Geobacillus sp. GHH01</option>
<option value="gjf">Geobacillus sp. JF8</option>
<option value="gst">Geobacillus stearothermophilu</option>
<option value="afl">Anoxybacillus flavithermus</option>
<option value="axl">Amphibacillus xylanus</option>
<option value="lsp">Lysinibacillus sphaericus</option>
<option value="lgy">Lysinibacillus sp. GY32</option>
<option value="hhd">Halobacillus halophilus</option>
<option value="tap">Terribacillus aidingensis</option>
<option value="vir">Virgibacillus sp. SK37</option>
<option value="bse">Bacillus selenitireducens</option>
<option value="sau">Staphylococcus aureus subsp. aureus N315 (MRSA/VSSA)</option>
<option value="sav">Staphylococcus aureus subsp. aureus Mu50 (MRSA/VISA)</option>
<option value="saw">Staphylococcus aureus subsp. aureus Mu3 (MRSA/hetero-VISA)</option>
<option value="sah">Staphylococcus aureus subsp. aureus JH1 (MRSA/VSSA)</option>
<option value="saj">Staphylococcus aureus subsp. aureus JH9 (MRSA/VRSA)</option>
<option value="sam">Staphylococcus aureus subsp. aureus MW2 (CA-MRSA)</option>
<option value="sas">Staphylococcus aureus subsp. aureus MSSA476 (MSSA)</option>
<option value="sar">Staphylococcus aureus subsp. aureus MRSA252 (MRSA)</option>
<option value="sac">Staphylococcus aureus subsp. aureus COL (MRSA)</option>
<option value="sax">Staphylococcus aureus subsp. aureus USA300_TCH1516 (CA-MSSA)</option>
<option value="saa">Staphylococcus aureus subsp. aureus USA300_FPR3757 (CA-MRSA)</option>
<option value="sao">Staphylococcus aureus subsp. aureus NCTC8325</option>
<option value="sae">Staphylococcus aureus subsp. aureus Newman</option>
<option value="sad">Staphylococcus aureus subsp. aureus ED98</option>
<option value="suu">Staphylococcus aureus subsp. aureus M013 (CA-MRSA)</option>
<option value="suv">Staphylococcus aureus subsp. aureus VC40</option>
<option value="suh">Staphylococcus aureus subsp. aureus MSHR1132</option>
<option value="sue">Staphylococcus aureus subsp. aureus ED133</option>
<option value="suj">Staphylococcus aureus subsp. aureus JKD6159</option>
<option value="suk">Staphylococcus aureus subsp. aureus JKD6008 (MRSA/VISA)</option>
<option value="suc">Staphylococcus aureus subsp. aureus ECT-R 2</option>
<option value="sut">Staphylococcus aureus subsp. aureus T0131 (MRSA)</option>
<option value="suq">Staphylococcus aureus subsp. aureus TCH60</option>
<option value="suz">Staphylococcus aureus subsp. aureus 11819-97 (CA-MRSA)</option>
<option value="sud">Staphylococcus aureus subsp. aureus 71193</option>
<option value="sux">Staphylococcus aureus subsp. aureus HO 5096 0412</option>
<option value="suw">Staphylococcus aureus subsp. aureus TW20 (MRSA)</option>
<option value="sug">Staphylococcus aureus subsp. aureus ST398 (MRSA)</option>
<option value="suf">Staphylococcus aureus subsp. aureus LGA251</option>
<option value="saua">Staphylococcus aureus subsp. aureus 55/2053</option>
<option value="saue">Staphylococcus aureus subsp. aureus 6850 (MSSA)</option>
<option value="saun">Staphylococcus aureus subsp. aureus CN1 (CA-MRSA)</option>
<option value="saus">Staphylococcus aureus subsp. aureus SA40 (CA-MRSA)</option>
<option value="sauu">Staphylococcus aureus subsp. aureus SA957 (CA-MRSA)</option>
<option value="sauz">Staphylococcus aureus subsp. aureus Z172 (MRSA/VISA)</option>
<option value="sab">Staphylococcus aureus RF122</option>
<option value="suy">Staphylococcus aureus 04-02981</option>
<option value="saub">Staphylococcus aureus 08BA02176</option>
<option value="saum">Staphylococcus aureus M1</option>
<option value="sauc">Staphylococcus aureus CA-347</option>
<option value="saur">Staphylococcus aureus Bmb9393</option>
<option value="saui">Staphylococcus aureus USA300-ISMMS1</option>
<option value="saut">Staphylococcus aureus ST228/10388</option>
<option value="sauj">Staphylococcus aureus ST228/10497</option>
<option value="sauk">Staphylococcus aureus ST228/15532</option>
<option value="sauq">Staphylococcus aureus ST228/16035</option>
<option value="sauv">Staphylococcus aureus ST228/18412</option>
<option value="sauw">Staphylococcus aureus ST228/16125</option>
<option value="saux">Staphylococcus aureus ST228/18341</option>
<option value="sauy">Staphylococcus aureus ST228/18583</option>
<option value="sep">Staphylococcus epidermidis ATCC 12228</option>
<option value="ser">Staphylococcus epidermidis RP62A</option>
<option value="sepp">Staphylococcus epidermidis PM221</option>
<option value="seps">Staphylococcus epidermidis SEI</option>
<option value="sha">Staphylococcus haemolyticus</option>
<option value="ssp">Staphylococcus saprophyticus</option>
<option value="sca">Staphylococcus carnosus</option>
<option value="slg">Staphylococcus lugdunensis HKU09-01</option>
<option value="sln">Staphylococcus lugdunensis N920143</option>
<option value="ssd">Staphylococcus pseudintermedius HKU10-03</option>
<option value="sdt">Staphylococcus pseudintermedius ED99</option>
<option value="swa">Staphylococcus warneri</option>
<option value="spas">Staphylococcus pasteuri</option>
<option value="sxy">Staphylococcus xylosus HKUOPL8</option>
<option value="sxl">Staphylococcus xylosus SMQ-121</option>
<option value="mcl">Macrococcus caseolyticus</option>
<option value="lmo">Listeria monocytogenes EGD-e</option>
<option value="lmf">Listeria monocytogenes F2365</option>
<option value="lmh">Listeria monocytogenes HCC23</option>
<option value="lmc">Listeria monocytogenes Clip81459</option>
<option value="lmn">Listeria monocytogenes 08-5578</option>
<option value="lmy">Listeria monocytogenes 08-5923</option>
<option value="lmt">Listeria monocytogenes 10403S</option>
<option value="lmg">Listeria monocytogenes FSL R2-561</option>
<option value="lms">Listeria monocytogenes Finland 1998</option>
<option value="lmj">Listeria monocytogenes J0161</option>
<option value="lmq">Listeria monocytogenes M7</option>
<option value="lml">Listeria monocytogenes L99</option>
<option value="lmp">Listeria monocytogenes 07PF0776</option>
<option value="lmw">Listeria monocytogenes SLCC2755</option>
<option value="lmx">Listeria monocytogenes SLCC2372</option>
<option value="lmz">Listeria monocytogenes serotype 7 SLCC2482</option>
<option value="lmon">Listeria monocytogenes SLCC2376</option>
<option value="lmoc">Listeria monocytogenes SLCC5850</option>
<option value="lmos">Listeria monocytogenes SLCC7179</option>
<option value="lmoo">Listeria monocytogenes SLCC2378</option>
<option value="lmoy">Listeria monocytogenes SLCC2479</option>
<option value="lmot">Listeria monocytogenes SLCC2540</option>
<option value="lmoa">Listeria monocytogenes ATCC 19117</option>
<option value="lmol">Listeria monocytogenes L312</option>
<option value="lmog">Listeria monocytogenes serotype 4b LL195</option>
<option value="lmoe">Listeria monocytogenes La111</option>
<option value="lmob">Listeria monocytogenes N53-1</option>
<option value="lmoj">Listeria monocytogenes J1-220</option>
<option value="lmoz">Listeria monocytogenes J1816</option>
<option value="lmod">Listeria monocytogenes EGD</option>
<option value="lmow">Listeria monocytogenes WSLC1001</option>
<option value="lmox">Listeria monocytogenes WSLC1042</option>
<option value="lmoq">Listeria monocytogenes 6179</option>
<option value="lmr">Listeria monocytogenes R479a</option>
<option value="lin">Listeria innocua</option>
<option value="lwe">Listeria welshimeri</option>
<option value="lsg">Listeria seeligeri</option>
<option value="liv">Listeria ivanovii subsp. ivanovii PAM 55</option>
<option value="lii">Listeria ivanovii subsp. ivanovii WSLC 3010</option>
<option value="liw">Listeria ivanovii WSLC3009</option>
<option value="lia">Listeria ivanovii subsp. londoniensis WSLC 30167</option>
<option value="lio">Listeria ivanovii subsp. londoniensis WSLC 30151</option>
<option value="esi">Exiguobacterium sibiricum</option>
<option value="eat">Exiguobacterium sp. AT1b</option>
<option value="ean">Exiguobacterium antarcticum</option>
<option value="exm">Exiguobacterium sp. MH3</option>
<option value="bbe">Brevibacillus brevis</option>
<option value="pjd">Paenibacillus sp. JDR-2</option>
<option value="gym">Paenibacillus sp. Y412MC10</option>
<option value="ppy">Paenibacillus polymyxa E681</option>
<option value="ppm">Paenibacillus polymyxa SC2</option>
<option value="ppo">Paenibacillus polymyxa M1</option>
<option value="ppol">Paenibacillus polymyxa CR1</option>
<option value="ppq">Paenibacillus polymyxa SQR-21</option>
<option value="pms">Paenibacillus mucilaginosus KNP414</option>
<option value="pmq">Paenibacillus mucilaginosus 3016</option>
<option value="pmw">Paenibacillus mucilaginosus K02</option>
<option value="pta">Paenibacillus terrae</option>
<option value="plv">Paenibacillus larvae</option>
<option value="psab">Paenibacillus sabinae</option>
<option value="pdu">Paenibacillus durus</option>
<option value="pbd">Paenibacillus borealis</option>
<option value="pgm">Paenibacillus graminis</option>
<option value="pod">Paenibacillus odorifer</option>
<option value="paen">Paenibacillus sp. FSL P4-0081</option>
<option value="paef">Paenibacillus sp. FSL R5-0345</option>
<option value="paeq">Paenibacillus sp. FSL R5-0912</option>
<option value="pste">Paenibacillus stellifer</option>
<option value="paea">Paenibacillus sp. FSL R7-0273</option>
<option value="paee">Paenibacillus sp. FSL R7-0331</option>
<option value="paeh">Paenibacillus sp. FSL H7-0357</option>
<option value="paej">Paenibacillus sp. FSL H7-0737</option>
<option value="tco">Thermobacillus composti</option>
<option value="aac">Alicyclobacillus acidocaldarius subsp. acidocaldarius DSM 446</option>
<option value="aad">Alicyclobacillus acidocaldarius subsp. acidocaldarius Tc-4-1</option>
<option value="bts">Kyrpidia tusciae</option>
<option value="siv">Solibacillus silvestris</option>
<option value="spy">Streptococcus pyogenes SF370 (serotype M1)</option>
<option value="spz">Streptococcus pyogenes MGAS5005 (serotype M1)</option>
<option value="spym">Streptococcus pyogenes M1 476 (serotype M1)</option>
<option value="spm">Streptococcus pyogenes MGAS8232 (serotype M18)</option>
<option value="spg">Streptococcus pyogenes MGAS315 (serotype M3)</option>
<option value="sps">Streptococcus pyogenes SSI-1 (serotype M3)</option>
<option value="sph">Streptococcus pyogenes MGAS10270 (serotype M2)</option>
<option value="spi">Streptococcus pyogenes MGAS10750 (serotype M4)</option>
<option value="spj">Streptococcus pyogenes MGAS2096 (serotype M12)</option>
<option value="spk">Streptococcus pyogenes MGAS9429 (serotype M12)</option>
<option value="spf">Streptococcus pyogenes Manfredo (serotype M5)</option>
<option value="spa">Streptococcus pyogenes MGAS10394 (serotype M6)</option>
<option value="spb">Streptococcus pyogenes MGAS6180 (serotype M28)</option>
<option value="stg">Streptococcus pyogenes MGAS15252 (serotype M59)</option>
<option value="soz">Streptococcus pyogenes NZ131 (serotype M49)</option>
<option value="stz">Streptococcus pyogenes Alab49 (serotype M53)</option>
<option value="stx">Streptococcus pyogenes MGAS1882</option>
<option value="spya">Streptococcus pyogenes A20</option>
<option value="spyh">Streptococcus pyogenes HSC5</option>
<option value="spn">Streptococcus pneumoniae TIGR4 (virulent serotype 4)</option>
<option value="spd">Streptococcus pneumoniae D39 (virulent serotype 2)</option>
<option value="spr">Streptococcus pneumoniae R6 (avirulent)</option>
<option value="sak">Streptococcus agalactiae A909 (serotype Ia)</option>
<option value="sgc">Streptococcus agalactiae GD201008-001 (serotype Ia)</option>
<option value="sags">Streptococcus agalactiae SA20-06</option>
<option value="sagl">Streptococcus agalactiae 2-22 (serotype Ib)</option>
<option value="sagm">Streptococcus agalactiae 09mas018883</option>
<option value="sagi">Streptococcus agalactiae ILRI005</option>
<option value="sagr">Streptococcus agalactiae ILRI112</option>
<option value="sagp">Streptococcus agalactiae 138P</option>
<option value="sagc">Streptococcus agalactiae 138spar</option>
<option value="smc">Streptococcus mutans NN2025</option>
<option value="ssk">Streptococcus suis D12</option>
<option value="ssut">Streptococcus suis TL13</option>
<option value="seq">Streptococcus equi subsp. zooepidemicus H70</option>
<option value="sez">Streptococcus equi subsp. zooepidemicus MGCS10565</option>
<option value="sezo">Streptococcus equi subsp. zooepidemicus ATCC 35246</option>
<option value="sequ">Streptococcus equi subsp. zooepidemicus CY</option>
<option value="seu">Streptococcus equi subsp. equi 4047</option>
<option value="sub">Streptococcus uberis</option>
<option value="sds">Streptococcus dysgalactiae subsp. equisimilis GGS_124</option>
<option value="sdg">Streptococcus dysgalactiae subsp. equisimilis ATCC 12394</option>
<option value="sda">Streptococcus dysgalactiae subsp. equisimilis RE378</option>
<option value="sdc">Streptococcus dysgalactiae subsp. equisimilis AC-2713</option>
<option value="sdq">Streptococcus dysgalactiae subsp. equisimilis 167</option>
<option value="sor">Streptococcus oralis</option>
<option value="stk">Streptococcus parauberis</option>
<option value="sang">Streptococcus anginosus C1051</option>
<option value="sanc">Streptococcus anginosus C238</option>
<option value="scg">Streptococcus constellatus subsp. pharyngis C1050</option>
<option value="scon">Streptococcus constellatus subsp. pharyngis C232</option>
<option value="scos">Streptococcus constellatus subsp. pharyngis C818</option>
<option value="soi">Streptococcus oligofermentans</option>
<option value="sik">Streptococcus iniae SF1</option>
<option value="siq">Streptococcus iniae ISET0901</option>
<option value="sio">Streptococcus iniae ISNO</option>
<option value="stv">Streptococcus sp. VT 162</option>
<option value="ljo">Lactobacillus johnsonii NCC 533</option>
<option value="ljf">Lactobacillus johnsonii FI9785</option>
<option value="ljh">Lactobacillus johnsonii DPC 6026</option>
<option value="ljn">Lactobacillus johnsonii N6.2</option>
<option value="lac">Lactobacillus acidophilus NCFM</option>
<option value="lai">Lactobacillus acidophilus 30SC</option>
<option value="lad">Lactobacillus acidophilus La-14</option>
<option value="lsl">Lactobacillus salivarius UCC118</option>
<option value="lsi">Lactobacillus salivarius CECT 5713</option>
<option value="lsj">Lactobacillus salivarius JCM1046</option>
<option value="ldb">Lactobacillus delbrueckii subsp. bulgaricus ATCC 11842</option>
<option value="lde">Lactobacillus delbrueckii subsp. bulgaricus ND02</option>
<option value="lbr">Lactobacillus brevis ATCC 367</option>
<option value="lbk">Lactobacillus brevis KB290</option>
<option value="lca">Lactobacillus casei ATCC 334</option>
<option value="lcb">Lactobacillus casei BL23</option>
<option value="lcz">Lactobacillus casei Zhang</option>
<option value="lcs">Lactobacillus casei BD-II</option>
<option value="lce">Lactobacillus casei LC2W</option>
<option value="lcl">Lactobacillus casei LOCK919</option>
<option value="lga">Lactobacillus gasseri</option>
<option value="lre">Lactobacillus reuteri DSM 20016</option>
<option value="lrf">Lactobacillus reuteri JCM 1112</option>
<option value="lrr">Lactobacillus reuteri TD1</option>
<option value="lhe">Lactobacillus helveticus DPC 4571</option>
<option value="lhl">Lactobacillus helveticus H10</option>
<option value="lhr">Lactobacillus helveticus R0052</option>
<option value="lhv">Lactobacillus helveticus CNRZ32</option>
<option value="lhh">Lactobacillus helveticus H9</option>
<option value="lfe">Lactobacillus fermentum IFO 3956</option>
<option value="lfr">Lactobacillus fermentum CECT 5716</option>
<option value="lff">Lactobacillus fermentum F-6</option>
<option value="lrh">Lactobacillus rhamnosus GG</option>
<option value="lrg">Lactobacillus rhamnosus GG</option>
<option value="lrl">Lactobacillus rhamnosus Lc 705</option>
<option value="lra">Lactobacillus rhamnosus ATCC 8530</option>
<option value="lro">Lactobacillus rhamnosus LOCK900</option>
<option value="lrc">Lactobacillus rhamnosus LOCK908</option>
<option value="lcr">Lactobacillus crispatus</option>
<option value="lam">Lactobacillus amylovorus GRL 1112</option>
<option value="lay">Lactobacillus amylovorus GRL1118</option>
<option value="lbh">Lactobacillus buchneri NRRL B-30929</option>
<option value="lbn">Lactobacillus buchneri CD034</option>
<option value="lke">Lactobacillus kefiranofaciens</option>
<option value="lpi">Lactobacillus paracasei subsp. paracasei 8700:2</option>
<option value="lpq">Lactobacillus paracasei N1115</option>
<option value="law">Lactobacillus sp. wkB8</option>
<option value="pce">Pediococcus claussenii</option>
<option value="ehr">Enterococcus hirae</option>
<option value="ecas">Enterococcus casseliflavus</option>
<option value="emu">Enterococcus mundtii</option>
<option value="lci">Leuconostoc citreum</option>
<option value="lgs">Leuconostoc gasicomitatum</option>
<option value="lge">Leuconostoc gelidum</option>
<option value="aur">Aerococcus urinae</option>
<option value="crn">Carnobacterium sp. 17-4</option>
<option value="cml">Carnobacterium maltaromaticum</option>
<option value="caw">Carnobacterium sp. WN1359</option>
<option value="cac">Clostridium acetobutylicum ATCC 824</option>
<option value="cae">Clostridium acetobutylicum DSM 1731</option>
<option value="cay">Clostridium acetobutylicum EA 2018</option>
<option value="cpe">Clostridium perfringens 13</option>
<option value="cpf">Clostridium perfringens ATCC 13124</option>
<option value="cpr">Clostridium perfringens SM101</option>
<option value="ctc">Clostridium tetani E88</option>
<option value="ctet">Clostridium tetani 12124569</option>
<option value="cno">Clostridium novyi</option>
<option value="cbo">Clostridium botulinum A ATCC 3502</option>
<option value="cba">Clostridium botulinum A ATCC 19397</option>
<option value="cbh">Clostridium botulinum A Hall</option>
<option value="cby">Clostridium botulinum A2</option>
<option value="cbl">Clostridium botulinum A3 Loch Maree</option>
<option value="cbk">Clostridium botulinum B Eklund 17B</option>
<option value="cbb">Clostridium botulinum B1 Okra</option>
<option value="cbi">Clostridium botulinum Ba4</option>
<option value="cbn">Clostridium botulinum BKT015925</option>
<option value="cbt">Clostridium botulinum E3</option>
<option value="cbf">Clostridium botulinum F Langeland</option>
<option value="cbm">Clostridium botulinum F 230613</option>
<option value="cbj">Clostridium botulinum H04402 065</option>
<option value="cbe">Clostridium beijerinckii NCIMB 8052</option>
<option value="cbz">Clostridium beijerinckii ATCC 35702</option>
<option value="ckl">Clostridium kluyveri DSM 555</option>
<option value="ckr">Clostridium kluyveri NBRC 12016</option>
<option value="ccb">Clostridium cellulovorans</option>
<option value="cls">Clostridium sp. SY8519</option>
<option value="csr">Clostridium saccharoperbutylacetonicum</option>
<option value="cpas">Clostridium pasteurianum</option>
<option value="csb">Clostridium saccharobutylicum</option>
<option value="clt">Clostridium sp. M2/40</option>
<option value="amt">Alkaliphilus metalliredigens</option>
<option value="aoe">Alkaliphilus oremlandii</option>
<option value="css">Clostridium stercorarium subsp. stercorarium DSM 8532</option>
<option value="csd">Clostridium stercorarium subsp. stercorarium DSM 8532</option>
<option value="rum">Ruminococcus sp. SR1/5</option>
<option value="fpr">Faecalibacterium prausnitzii L2-6</option>
<option value="fpa">Faecalibacterium prausnitzii SL3/3</option>
<option value="bpb">Butyrivibrio proteoclasticus</option>
<option value="bfi">Butyrivibrio fibrisolvens</option>
<option value="cle">Cellulosilyticum lentocellum</option>
<option value="rho">Roseburia hominis</option>
<option value="rim">Roseburia intestinalis M50/1</option>
<option value="cct">Coprococcus catus</option>
<option value="rob">Ruminococcus obeum</option>
<option value="rto">Ruminococcus torques</option>
<option value="cpy">Lachnoclostridium phytofermentans</option>
<option value="csh">Clostridium saccharolyticum WM1</option>
<option value="cso">Clostridium cf. saccharolyticum K10</option>
<option value="cad">Clostridium acidurici</option>
<option value="cdf">Peptoclostridium difficile 630</option>
<option value="cdc">Peptoclostridium difficile CD196</option>
<option value="cdl">Peptoclostridium difficile R20291</option>
<option value="cdg">Peptoclostridium difficile BI1</option>
<option value="cst">Clostridium sticklandii</option>
<option value="faa">Filifactor alocis</option>
<option value="sth">Symbiobacterium thermophilum</option>
<option value="swo">Syntrophomonas wolfei</option>
<option value="slp">Syntrophothermus lipocalidus</option>
<option value="dsy">Desulfitobacterium hafniense Y51</option>
<option value="dhd">Desulfitobacterium hafniense DCB-2</option>
<option value="ddh">Desulfitobacterium dehalogenans</option>
<option value="ddl">Desulfitobacterium dichloroeliminans</option>
<option value="drm">Desulfotomaculum reducens</option>
<option value="dae">Desulfotomaculum acetoxidans</option>
<option value="dku">Desulfotomaculum kuznetsovii</option>
<option value="dgi">Desulfotomaculum gibsoniae</option>
<option value="pth">Pelotomaculum thermopropionicum</option>
<option value="sgy">Syntrophobotulus glycolicus</option>
<option value="dor">Desulfosporosinus orientis</option>
<option value="dai">Desulfosporosinus acidiphilus</option>
<option value="dmi">Desulfosporosinus meridiei</option>
<option value="ded">Dehalobacter sp. DCA</option>
<option value="dec">Dehalobacter sp. CF</option>
<option value="drs">Dehalobacter restrictus</option>
<option value="apr">Anaerococcus prevotii</option>
<option value="eel">Eubacterium eligens</option>
<option value="ere">Eubacterium rectale ATCC 33656</option>
<option value="ert">Eubacterium rectale DSM 17629</option>
<option value="era">Eubacterium rectale M104/1</option>
<option value="eac">Eubacterium acidaminophilum</option>
<option value="awo">Acetobacterium woodii</option>
<option value="ova">Oscillibacter valericigenes</option>
<option value="tmr">Thermaerobacter marianensis</option>
<option value="say">Sulfobacillus acidophilus TPY</option>
<option value="sap">Sulfobacillus acidophilus DSM 10332</option>
<option value="bprm">Butyrate-producing bacterium SM4/1</option>
<option value="bprs">Butyrate-producing bacterium SS3/4</option>
<option value="bprl">Butyrate-producing bacterium SSC/2</option>
<option value="tte">Thermoanaerobacter tengcongensis</option>
<option value="tex">Thermoanaerobacter sp. X514</option>
<option value="thx">Thermoanaerobacter sp. X513</option>
<option value="tit">Thermoanaerobacter italicus</option>
<option value="twi">Thermoanaerobacter wiegelii</option>
<option value="chy">Carboxydothermus hydrogenoformans</option>
<option value="mta">Moorella thermoacetica</option>
<option value="ttm">Thermoanaerobacterium thermosaccharolyticum DSM 571</option>
<option value="tto">Thermoanaerobacterium thermosaccharolyticum M0795</option>
<option value="nth">Natranaerobius thermophilus</option>
<option value="hpk">Halanaerobium praevalens</option>
<option value="aar">Acetohalobium arabaticum</option>
<option value="hhl">Halobacteroides halobius</option>
<option value="vpr">Veillonella parvula</option>
<option value="ssg">Selenomonas sputigena</option>
<option value="med">Megasphaera elsdenii</option>
<option value="mhg">Megamonas hypermegale</option>
<option value="puf">Pelosinus sp. UFO1</option>
<option value="afn">Acidaminococcus fermentans</option>
<option value="ain">Acidaminococcus intestini</option>
<option value="erh">Erysipelothrix rhusiopathiae Fujisawa</option>
<option value="ers">Erysipelothrix rhusiopathiae SY1027</option>
<option value="euc">Eubacterium cylindroides</option>
<option value="acl">Acholeplasma laidlawii</option>
<option value="abra">Acholeplasma brassicae</option>
<option value="apal">Acholeplasma palmae</option>
<option value="mbj">Mollicutes bacterium</option>
<option value="mtu">Mycobacterium tuberculosis H37Rv</option>
<option value="mtv">Mycobacterium tuberculosis H37Rv</option>
<option value="mtc">Mycobacterium tuberculosis CDC1551</option>
<option value="mra">Mycobacterium tuberculosis H37Ra</option>
<option value="mtf">Mycobacterium tuberculosis F11</option>
<option value="mtb">Mycobacterium tuberculosis KZN 1435</option>
<option value="mtk">Mycobacterium tuberculosis KZN 4207</option>
<option value="mtz">Mycobacterium tuberculosis KZN 605</option>
<option value="mtg">Mycobacterium tuberculosis RGTB327</option>
<option value="mti">Mycobacterium tuberculosis RGTB423</option>
<option value="mte">Mycobacterium tuberculosis CCDC5079</option>
<option value="mtur">Mycobacterium tuberculosis CCDC5079</option>
<option value="mtl">Mycobacterium tuberculosis CCDC5180</option>
<option value="mto">Mycobacterium tuberculosis CTRI-2</option>
<option value="mtd">Mycobacterium tuberculosis UT205</option>
<option value="mtn">Mycobacterium tuberculosis Erdman = ATCC 35801</option>
<option value="mtj">Mycobacterium tuberculosis Beijing/NITR203</option>
<option value="mtub">Mycobacterium tuberculosis 7199-99</option>
<option value="mtuc">Mycobacterium tuberculosis CAS/NITR204</option>
<option value="mtue">Mycobacterium tuberculosis EAI5/NITR206</option>
<option value="mtx">Mycobacterium tuberculosis EAI5</option>
<option value="mtuh">Mycobacterium tuberculosis Haarlem/NITR202</option>
<option value="mtul">Mycobacterium tuberculosis Haarlem</option>
<option value="mtut">Mycobacterium tuberculosis BT1</option>
<option value="mtuu">Mycobacterium tuberculosis BT2</option>
<option value="mtq">Mycobacterium tuberculosis HKBS1</option>
<option value="mbo">Mycobacterium bovis AF2122/97</option>
<option value="mbb">Mycobacterium bovis BCG Pasteur 1173P2</option>
<option value="mbt">Mycobacterium bovis BCG Tokyo 172</option>
<option value="mbm">Mycobacterium bovis BCG Mexico</option>
<option value="mbk">Mycobacterium bovis BCG Korea 1168P</option>
<option value="mbz">Mycobacterium bovis ATCC BAA-935</option>
<option value="maf">Mycobacterium africanum</option>
<option value="mce">Mycobacterium canettii CIPT 140010059</option>
<option value="mcq">Mycobacterium canettii CIPT 140060008</option>
<option value="mcv">Mycobacterium canettii CIPT 140070008</option>
<option value="mcx">Mycobacterium canettii CIPT 140070010</option>
<option value="mcz">Mycobacterium canettii CIPT 140070017</option>
<option value="mle">Mycobacterium leprae TN</option>
<option value="mlb">Mycobacterium leprae Br4923</option>
<option value="mpa">Mycobacterium avium subsp. paratuberculosis K-10</option>
<option value="mao">Mycobacterium avium subsp. paratuberculosis MAP4</option>
<option value="mav">Mycobacterium avium 104</option>
<option value="mavr">Mycobacterium avium 2285 (R)</option>
<option value="mavd">Mycobacterium avium subsp. avium DJO-44271</option>
<option value="mit">Mycobacterium intracellulare MOTT-02</option>
<option value="mir">Mycobacterium intracellulare MOTT-64</option>
<option value="mia">Mycobacterium intracellulare ATCC 13950</option>
<option value="mie">Mycobacterium intracellulare 1956</option>
<option value="mid">Mycobacterium indicus pranii</option>
<option value="myo">Mycobacterium yongonense</option>
<option value="msm">Mycobacterium smegmatis MC2 155</option>
<option value="msg">Mycobacterium smegmatis MC2 155</option>
<option value="msb">Mycobacterium smegmatis MC2 155</option>
<option value="msa">Mycobacterium smegmatis JS623</option>
<option value="msn">Mycobacterium smegmatis INHR1</option>
<option value="msh">Mycobacterium smegmatis INHR2</option>
<option value="mul">Mycobacterium ulcerans</option>
<option value="mva">Mycobacterium vanbaalenii</option>
<option value="mgi">Mycobacterium gilvum PYR-GCK</option>
<option value="msp">Mycobacterium gilvum Spyr1</option>
<option value="mab">Mycobacterium abscessus ATCC 19977</option>
<option value="mabb">Mycobacterium abscessus subsp. bolletii 50594</option>
<option value="mmv">Mycobacterium abscessus subsp. bolletii GO 06</option>
<option value="mak">Mycobacterium abscessus subsp. bolletii MM1513</option>
<option value="may">Mycobacterium abscessus subsp. bolletii MA 1948</option>
<option value="maz">Mycobacterium abscessus 103</option>
<option value="mmc">Mycobacterium sp. MCS</option>
<option value="mkm">Mycobacterium sp. KMS</option>
<option value="mjl">Mycobacterium sp. JLS</option>
<option value="mjd">Mycobacterium sp. JDM601</option>
<option value="mmi">Mycobacterium marinum</option>
<option value="mrh">Mycobacterium rhodesiae</option>
<option value="mmm">Mycobacterium sp. MOTT36Y</option>
<option value="mcb">Mycobacterium chubuense</option>
<option value="mli">Mycobacterium liflandii</option>
<option value="mkn">Mycobacterium kansasii</option>
<option value="mne">Mycobacterium neoaurum</option>
<option value="asd">Amycolicicoccus subflavus</option>
<option value="cgl">Corynebacterium glutamicum ATCC 13032 (Kyowa Hakko)</option>
<option value="cgb">Corynebacterium glutamicum ATCC 13032 (Bielefeld)</option>
<option value="cgu">Corynebacterium glutamicum K051</option>
<option value="cgt">Corynebacterium glutamicum R</option>
<option value="cgs">Corynebacterium glutamicum SCgG1</option>
<option value="cgg">Corynebacterium glutamicum SCgG2</option>
<option value="cgm">Corynebacterium glutamicum MB001</option>
<option value="cgj">Corynebacterium glutamicum ATCC 21831</option>
<option value="cgq">Corynebacterium glutamicum AR1</option>
<option value="cef">Corynebacterium efficiens</option>
<option value="cdi">Corynebacterium diphtheriae NCTC 13129</option>
<option value="cdp">Corynebacterium diphtheriae 241</option>
<option value="cdh">Corynebacterium diphtheriae INCA 402</option>
<option value="cdt">Corynebacterium diphtheriae HC01</option>
<option value="cde">Corynebacterium diphtheriae HC02</option>
<option value="cdr">Corynebacterium diphtheriae HC03</option>
<option value="cda">Corynebacterium diphtheriae HC04</option>
<option value="cdz">Corynebacterium diphtheriae 31A</option>
<option value="cdb">Corynebacterium diphtheriae BH8</option>
<option value="cds">Corynebacterium diphtheriae C7</option>
<option value="cdd">Corynebacterium diphtheriae CDCE 8392</option>
<option value="cdw">Corynebacterium diphtheriae PW8</option>
<option value="cdv">Corynebacterium diphtheriae VA01</option>
<option value="cjk">Corynebacterium jeikeium</option>
<option value="cur">Corynebacterium urealyticum DSM 7109</option>
<option value="cua">Corynebacterium urealyticum DSM 7111</option>
<option value="car">Corynebacterium aurimucosum</option>
<option value="ckp">Corynebacterium kroppenstedtii</option>
<option value="cpu">Corynebacterium pseudotuberculosis FRC41</option>
<option value="cpl">Corynebacterium pseudotuberculosis 3/99-5</option>
<option value="cpg">Corynebacterium pseudotuberculosis 316</option>
<option value="cpp">Corynebacterium pseudotuberculosis P54B96</option>
<option value="cpk">Corynebacterium pseudotuberculosis 1002</option>
<option value="cpq">Corynebacterium pseudotuberculosis C231</option>
<option value="cpx">Corynebacterium pseudotuberculosis I19</option>
<option value="cpz">Corynebacterium pseudotuberculosis PAT10</option>
<option value="cor">Corynebacterium pseudotuberculosis 267</option>
<option value="cop">Corynebacterium pseudotuberculosis 31</option>
<option value="cod">Corynebacterium pseudotuberculosis 1/06-A</option>
<option value="cos">Corynebacterium pseudotuberculosis 42/02-A</option>
<option value="coi">Corynebacterium pseudotuberculosis CIP 52.97</option>
<option value="coe">Corynebacterium pseudotuberculosis 258</option>
<option value="cou">Corynebacterium pseudotuberculosis Cp162</option>
<option value="crd">Corynebacterium resistens</option>
<option value="cul">Corynebacterium ulcerans BR-AD22</option>
<option value="cuc">Corynebacterium ulcerans 809</option>
<option value="cue">Corynebacterium ulcerans 0102</option>
<option value="cun">Corynebacterium ulcerans 210932</option>
<option value="cus">Corynebacterium ulcerans FRC11</option>
<option value="cuq">Corynebacterium ulcerans 210931</option>
<option value="cuz">Corynebacterium ulcerans 05146</option>
<option value="cva">Corynebacterium variabile</option>
<option value="chn">Corynebacterium halotolerans</option>
<option value="ccn">Corynebacterium callunae</option>
<option value="cter">Corynebacterium terpenotabidum</option>
<option value="cmd">Corynebacterium maris</option>
<option value="caz">Corynebacterium argentoratense</option>
<option value="cfn">Corynebacterium falsenii</option>
<option value="ccg">Corynebacterium casei</option>
<option value="cvt">Corynebacterium vitaeruminis</option>
<option value="cgy">Corynebacterium glycinophilum</option>
<option value="cax">Corynebacterium atypicum</option>
<option value="cii">Corynebacterium imitans</option>
<option value="cuv">Corynebacterium ureicelerivorans</option>
<option value="coa">Corynebacterium sp. ATCC 6931</option>
<option value="cdo">Corynebacterium doosanense</option>
<option value="nfa">Nocardia farcinica</option>
<option value="ncy">Nocardia cyriacigeorgica</option>
<option value="nbr">Nocardia brasiliensis</option>
<option value="nno">Nocardia nova</option>
<option value="rha">Rhodococcus jostii</option>
<option value="rer">Rhodococcus erythropolis PR4</option>
<option value="rey">Rhodococcus erythropolis CCM2595</option>
<option value="rop">Rhodococcus opacus B4</option>
<option value="roa">Rhodococcus opacus PD630</option>
<option value="req">Rhodococcus equi</option>
<option value="rpy">Rhodococcus pyridinivorans</option>
<option value="gbr">Gordonia bronchialis</option>
<option value="gpo">Gordonia polyisoprenivorans</option>
<option value="gor">Gordonia sp. KTR9</option>
<option value="tpr">Tsukamurella paurometabola</option>
<option value="srt">Segniliparus rotundus</option>
<option value="sco">Streptomyces coelicolor</option>
<option value="sma">Streptomyces avermitilis</option>
<option value="sgr">Streptomyces griseus</option>
<option value="scb">Streptomyces scabiei</option>
<option value="ssx">Streptomyces sp. SirexAA-E</option>
<option value="svl">Streptomyces violaceusniger</option>
<option value="sct">Streptomyces cattleya NRRL 8057</option>
<option value="scy">Streptomyces cattleya NRRL 8057 = DSM 46488</option>
<option value="sfa">Streptomyces pratensis</option>
<option value="sbh">Streptomyces bingchenggensis</option>
<option value="shy">Streptomyces hygroscopicus subsp. jinggangensis 5008</option>
<option value="sho">Streptomyces hygroscopicus subsp. jinggangensis TL01</option>
<option value="sve">Streptomyces venezuelae</option>
<option value="sdv">Streptomyces davawensis</option>
<option value="salb">Streptomyces albus</option>
<option value="strp">Streptomyces sp. PAMC26508</option>
<option value="sfi">Streptomyces fulvissimus</option>
<option value="sci">Streptomyces collinus</option>
<option value="src">Streptomyces rapamycinicus</option>
<option value="salu">Streptomyces albulus</option>
<option value="slv">Streptomyces lividans</option>
<option value="sgu">Streptomyces glaucescens</option>
<option value="ksk">Kitasatospora setae</option>
<option value="lxx">Leifsonia xyli subsp. xyli CTCB07</option>
<option value="lxy">Leifsonia xyli subsp. cynodontis DSM 46306</option>
<option value="cmi">Clavibacter michiganensis subsp. michiganensis</option>
<option value="cms">Clavibacter michiganensis subsp. sepedonicus</option>
<option value="cmc">Clavibacter michiganensis subsp. nebraskensis</option>
<option value="mts">Microbacterium testaceum</option>
<option value="rla">Candidatus Rhodoluna lacicola</option>
<option value="art">Arthrobacter sp. FB24</option>
<option value="aau">Arthrobacter aurescens</option>
<option value="ach">Arthrobacter chlorophenolicus</option>
<option value="aai">Arthrobacter arilaitensis</option>
<option value="apn">Arthrobacter phenanthrenivorans</option>
<option value="arr">Arthrobacter sp. Rue61a</option>
<option value="rsa">Renibacterium salmoninarum</option>
<option value="krh">Kocuria rhizophila</option>
<option value="mlu">Micrococcus luteus</option>
<option value="rmu">Rothia mucilaginosa</option>
<option value="rdn">Rothia dentocariosa</option>
<option value="bcv">Beutenbergia cavernae</option>
<option value="bfa">Brachybacterium faecium</option>
<option value="jde">Jonesia denitrificans</option>
<option value="kse">Kytococcus sedentarius</option>
<option value="dni">Dermacoccus nishinomiyaensis</option>
<option value="xce">Xylanimonas cellulosilytica</option>
<option value="iva">Isoptericola variabilis</option>
<option value="ske">Sanguibacter keddieii</option>
<option value="cfl">Cellulomonas flavigena</option>
<option value="cfi">Cellulomonas fimi</option>
<option value="cga">Cellulomonas gilvus</option>
<option value="ica">Intrasporangium calvum</option>
<option value="pac">Propionibacterium acnes KPA171202</option>
<option value="pak">Propionibacterium acnes SK137</option>
<option value="pav">Propionibacterium acnes TypeIA2 P.acn17</option>
<option value="pax">Propionibacterium acnes TypeIA2 P.acn31</option>
<option value="paz">Propionibacterium acnes TypeIA2 P.acn33</option>
<option value="paw">Propionibacterium acnes 266</option>
<option value="pad">Propionibacterium acnes ATCC 11828</option>
<option value="pcn">Propionibacterium acnes 6609</option>
<option value="pacc">Propionibacterium acnes C1</option>
<option value="pach">Propionibacterium acnes HL096PA1</option>
<option value="pfr">Propionibacterium freudenreichii</option>
<option value="ppc">Propionibacterium propionicum</option>
<option value="pbo">Propionibacterium acidipropionici</option>
<option value="pra">Propionibacterium avidum</option>
<option value="mph">Microlunatus phosphovorus</option>
<option value="nca">Nocardioides sp. JS614</option>
<option value="kfl">Kribbella flavida</option>
<option value="tfu">Thermobifida fusca</option>
<option value="nda">Nocardiopsis dassonvillei</option>
<option value="nal">Nocardiopsis alba</option>
<option value="tcu">Thermomonospora curvata</option>
<option value="sro">Streptosporangium roseum</option>
<option value="fra">Frankia sp. CcI3</option>
<option value="fre">Frankia sp. EAN1pec</option>
<option value="fri">Frankia sp. EuI1c</option>
<option value="fal">Frankia alni</option>
<option value="fsy">Frankia symbiont</option>
<option value="ace">Acidothermus cellulolyticus</option>
<option value="nml">Nakamurella multipartita</option>
<option value="gob">Geodermatophilus obscurus</option>
<option value="bsd">Blastococcus saxobsidens</option>
<option value="mmar">Modestobacter marinus</option>
<option value="kra">Kineococcus radiotolerans</option>
<option value="sen">Saccharopolyspora erythraea</option>
<option value="svi">Saccharomonospora viridis</option>
<option value="tbi">Thermobispora bispora</option>
<option value="amd">Amycolatopsis mediterranei U32</option>
<option value="amn">Amycolatopsis mediterranei S699</option>
<option value="amm">Amycolatopsis mediterranei S699</option>
<option value="amz">Amycolatopsis mediterranei RB</option>
<option value="aoi">Amycolatopsis orientalis</option>
<option value="aja">Amycolatopsis japonica</option>
<option value="amq">Amycolatopsis methanolica</option>
<option value="pdx">Pseudonocardia dioxanivorans</option>
<option value="ami">Actinosynnema mirum</option>
<option value="sesp">Saccharothrix espanaensis</option>
<option value="kal">Kutzneria albida</option>
<option value="stp">Salinispora tropica</option>
<option value="saq">Salinispora arenicola</option>
<option value="mau">Micromonospora aurantiaca</option>
<option value="mil">Micromonospora sp. L5</option>
<option value="vma">Verrucosispora maris</option>
<option value="ams">Actinoplanes missouriensis</option>
<option value="ase">Actinoplanes sp. SE50/110</option>
<option value="actn">Actinoplanes sp. N902-109</option>
<option value="afs">Actinoplanes friuliensis</option>
<option value="cai">Catenulispora acidiphila</option>
<option value="sna">Stackebrandtia nassauensis</option>
<option value="ahe">Arcanobacterium haemolyticum</option>
<option value="mcu">Mobiluncus curtisii</option>
<option value="tpy">Trueperella pyogenes</option>
<option value="asg">Actinobaculum schaalii</option>
<option value="rxy">Rubrobacter xylanophilus</option>
<option value="rrd">Rubrobacter radiotolerans</option>
<option value="cwo">Conexibacter woesei</option>
<option value="afo">Acidimicrobium ferrooxidans</option>
<option value="aym">Ilumatobacter coccineus</option>
<option value="ctr">Chlamydia trachomatis D/UW-3/CX</option>
<option value="ctd">Chlamydia trachomatis D-EC</option>
<option value="ctf">Chlamydia trachomatis D-LC</option>
<option value="ctrd">Chlamydia trachomatis D/SotonD1</option>
<option value="ctro">Chlamydia trachomatis D/SotonD5</option>
<option value="ctrt">Chlamydia trachomatis D/SotonD6</option>
<option value="cta">Chlamydia trachomatis A/HAR-13</option>
<option value="cty">Chlamydia trachomatis A2497</option>
<option value="cra">Chlamydia trachomatis A2497</option>
<option value="ctrq">Chlamydia trachomatis A/363</option>
<option value="ctrx">Chlamydia trachomatis A/5291</option>
<option value="ctrz">Chlamydia trachomatis A/7249</option>
<option value="ctrp">Chlamydia trachomatis L1/1322/p2</option>
<option value="ctlj">Chlamydia trachomatis L1/115</option>
<option value="ctlx">Chlamydia trachomatis L1/224</option>
<option value="ctll">Chlamydia trachomatis L1/440/LN</option>
<option value="ctb">Chlamydia trachomatis L2/434/Bu</option>
<option value="ctrr">Chlamydia trachomatis L2/25667R</option>
<option value="ctlf">Chlamydia trachomatis L2/434/Bu(f)</option>
<option value="ctli">Chlamydia trachomatis L2/434/Bu(i)</option>
<option value="ctl">Chlamydia trachomatis L2b/UCH-1/proctitis</option>
<option value="ctru">Chlamydia trachomatis L2b/UCH-2</option>
<option value="ctrl">Chlamydia trachomatis L2b/LST</option>
<option value="ctrv">Chlamydia trachomatis L2b/CV204</option>
<option value="ctrm">Chlamydia trachomatis L2b/Ams1</option>
<option value="ctla">Chlamydia trachomatis L2b/Ams2</option>
<option value="ctlm">Chlamydia trachomatis L2b/Ams3</option>
<option value="ctls">Chlamydia trachomatis L2b/Ams4</option>
<option value="ctlz">Chlamydia trachomatis L2b/Ams5</option>
<option value="ctlc">Chlamydia trachomatis L2b/Canada1</option>
<option value="ctln">Chlamydia trachomatis L2b/Canada2</option>
<option value="ctlb">Chlamydia trachomatis L2b/795</option>
<option value="ctlq">Chlamydia trachomatis L2b/8200/07</option>
<option value="cto">Chlamydia trachomatis L2c</option>
<option value="ctrn">Chlamydia trachomatis L3/404/LN</option>
<option value="ctj">Chlamydia trachomatis B/Jali20/OT</option>
<option value="ctz">Chlamydia trachomatis B/TZ1A828/OT</option>
<option value="ctg">Chlamydia trachomatis E/11023</option>
<option value="ctk">Chlamydia trachomatis E/150</option>
<option value="csw">Chlamydia trachomatis Sweden2</option>
<option value="ces">Chlamydia trachomatis E/SW3</option>
<option value="ctrb">Chlamydia trachomatis E/Bour</option>
<option value="ctre">Chlamydia trachomatis E/SotonE4</option>
<option value="ctrs">Chlamydia trachomatis E/SotonE8</option>
<option value="ctec">Chlamydia trachomatis E/C599</option>
<option value="cfs">Chlamydia trachomatis F/SW4</option>
<option value="cfw">Chlamydia trachomatis F/SW5</option>
<option value="ctfw">Chlamydia trachomatis F/SWFPminus</option>
<option value="ctrf">Chlamydia trachomatis F/SotonF3</option>
<option value="ctch">Chlamydia trachomatis F/11-96</option>
<option value="ctn">Chlamydia trachomatis G/11074</option>
<option value="ctq">Chlamydia trachomatis G/11222</option>
<option value="ctv">Chlamydia trachomatis G/9301</option>
<option value="ctw">Chlamydia trachomatis G/9768</option>
<option value="ctrg">Chlamydia trachomatis G/SotonG1</option>
<option value="ctri">Chlamydia trachomatis IU824</option>
<option value="ctra">Chlamydia trachomatis IU888</option>
<option value="ctrh">Chlamydia trachomatis Ia/SotonIa1</option>
<option value="ctrj">Chlamydia trachomatis Ia/SotonIa3</option>
<option value="ctrk">Chlamydia trachomatis K/SotonK1</option>
<option value="ctjt">Chlamydia trachomatis J/6276tet1</option>
<option value="ctcf">Chlamydia trachomatis RC-F/69</option>
<option value="ctfs">Chlamydia trachomatis RC-F(s)/342</option>
<option value="cthf">Chlamydia trachomatis RC-F(s)/852</option>
<option value="ctcj">Chlamydia trachomatis RC-J/943</option>
<option value="cthj">Chlamydia trachomatis RC-J/953</option>
<option value="ctmj">Chlamydia trachomatis RC-J/966</option>
<option value="cttj">Chlamydia trachomatis RC-J/971</option>
<option value="ctjs">Chlamydia trachomatis RC-J(s)/122</option>
<option value="ctrc">Chlamydia trachomatis RC-L2/55</option>
<option value="ctrw">Chlamydia trachomatis RC-L2(s)/3</option>
<option value="ctry">Chlamydia trachomatis RC-L2(s)/46</option>
<option value="ctct">Chlamydia trachomatis C/TW-3</option>
<option value="cmu">Chlamydia muridarum Nigg</option>
<option value="cmn">Chlamydia muridarum Nigg 2 MCR</option>
<option value="cmm">Chlamydia muridarum Nigg3 clone G0.1.1</option>
<option value="cmg">Chlamydia muridarum Nigg3 clone G28.38.1</option>
<option value="cpn">Chlamydia pneumoniae CWL029</option>
<option value="cpa">Chlamydia pneumoniae AR39</option>
<option value="cpj">Chlamydia pneumoniae J138</option>
<option value="cpt">Chlamydia pneumoniae TW183</option>
<option value="clp">Chlamydia pneumoniae LPCoLN</option>
<option value="cpm">Chlamydia pecorum E58</option>
<option value="cpec">Chlamydia pecorum P787</option>
<option value="cpeo">Chlamydia pecorum PV3056/3</option>
<option value="cper">Chlamydia pecorum W73</option>
<option value="chp">Chlamydia psittaci 6BC</option>
<option value="chb">Chlamydia psittaci 6BC</option>
<option value="chs">Chlamydia psittaci 01DC11</option>
<option value="chi">Chlamydia psittaci 02DC15</option>
<option value="cht">Chlamydia psittaci 08DC60</option>
<option value="chc">Chlamydia psittaci C19/98</option>
<option value="chr">Chlamydia psittaci RD1</option>
<option value="cpsc">Chlamydia psittaci CP3</option>
<option value="cpsn">Chlamydia psittaci NJ1</option>
<option value="cpsb">Chlamydia psittaci 84/55</option>
<option value="cpsg">Chlamydia psittaci GR9</option>
<option value="cpsm">Chlamydia psittaci M56</option>
<option value="cpsi">Chlamydia psittaci MN</option>
<option value="cpsv">Chlamydia psittaci VS225</option>
<option value="cpsw">Chlamydia psittaci WC</option>
<option value="cpst">Chlamydia psittaci WS/RT/E30</option>
<option value="cpsd">Chlamydia psittaci 01DC12</option>
<option value="cpsa">Chlamydia psittaci Mat116</option>
<option value="cav">Chlamydia avium</option>
<option value="cca">Chlamydophila caviae</option>
<option value="cab">Chlamydophila abortus</option>
<option value="cfe">Chlamydophila felis</option>
<option value="pcu">Candidatus Protochlamydia amoebophila</option>
<option value="puv">Parachlamydia acanthamoebae</option>
<option value="wch">Waddlia chondrophila</option>
<option value="sng">Simkania negevensis</option>
<option value="ote">Opitutus terrae</option>
<option value="caa">Coraliomargarita akajimensis</option>
<option value="min">Methylacidiphilum infernorum</option>
<option value="amu">Akkermansia muciniphila</option>
<option value="tbe">Treponema brennaborense</option>
<option value="tped">Treponema pedis</option>
<option value="scd">Treponema caldaria</option>
<option value="tpk">Treponema putidum</option>
<option value="ssm">Spirochaeta smaragdinae</option>
<option value="sta">Spirochaeta thermophila DSM 6192</option>
<option value="stq">Spirochaeta thermophila DSM 6578</option>
<option value="sfc">Spirochaeta africana</option>
<option value="slr">Spirochaeta sp. L21-RPul-D2</option>
<option value="sbu">Sphaerochaeta globosa</option>
<option value="scc">Sphaerochaeta coccoides</option>
<option value="sgp">Sphaerochaeta pleomorpha</option>
<option value="lil">Leptospira interrogans serovar Lai 56601</option>
<option value="lie">Leptospira interrogans serovar Lai IPAV</option>
<option value="lic">Leptospira interrogans serovar Copenhageni</option>
<option value="lbj">Leptospira borgpetersenii JB197</option>
<option value="lbl">Leptospira borgpetersenii L550</option>
<option value="lbi">Leptospira biflexa serovar Patoc Patoc 1 (Paris)</option>
<option value="lbf">Leptospira biflexa serovar Patoc Patoc 1 (Ames)</option>
<option value="tpx">Turneriella parva</option>
<option value="bhy">Brachyspira hyodysenteriae</option>
<option value="brm">Brachyspira murdochii</option>
<option value="bpo">Brachyspira pilosicoli 95/1000</option>
<option value="bpj">Brachyspira pilosicoli B2904</option>
<option value="bpip">Brachyspira pilosicoli P43/6/78</option>
<option value="bpw">Brachyspira pilosicoli WesB</option>
<option value="bip">Brachyspira intermedia</option>
<option value="aba">Candidatus Koribacter versatilis</option>
<option value="aca">Acidobacterium capsulatum</option>
<option value="acm">Granulicella tundricola</option>
<option value="gma">Granulicella mallensis</option>
<option value="tsa">Terriglobus saanensis</option>
<option value="trs">Terriglobus roseus</option>
<option value="sus">Candidatus Solibacter usitatus</option>
<option value="ctm">Candidatus Chloracidobacterium thermophilum B</option>
<option value="fsu">Fibrobacter succinogenes</option>
<option value="fsc">Fibrobacter succinogenes</option>
<option value="fnu">Fusobacterium nucleatum subsp. nucleatum ATCC 25586</option>
<option value="fnc">Fusobacterium nucleatum subsp. vincentii 3_1_36A2</option>
<option value="fus">Fusobacterium nucleatum subsp. animalis 4_8</option>
<option value="ipo">Ilyobacter polytropus</option>
<option value="gau">Gemmatimonas aurantiaca</option>
<option value="gba">Gemmatimonadetes bacterium KBS708</option>
<option value="aco">Aminobacterium colombiense</option>
<option value="tli">Thermovirga lienii</option>
<option value="amo">Anaerobaculum mobile</option>
<option value="rba">Rhodopirellula baltica</option>
<option value="psl">Pirellula staleyi</option>
<option value="plm">Planctomyces limnophilus</option>
<option value="pbs">Planctomyces brasiliensis</option>
<option value="ipa">Isosphaera pallida</option>
<option value="saci">Singulisphaera acidiphila</option>
<option value="phm">Phycisphaera mikurensis</option>
<option value="syn">Synechocystis sp. PCC 6803</option>
<option value="syz">Synechocystis sp. PCC 6803</option>
<option value="syy">Synechocystis sp. PCC 6803 GT-S</option>
<option value="syt">Synechocystis sp. PCC 6803 GT-I</option>
<option value="sys">Synechocystis sp. PCC 6803 PCC-N</option>
<option value="syq">Synechocystis sp. PCC 6803 PCC-P</option>
<option value="syj">Synechocystis sp. PCC 6714</option>
<option value="syw">Synechococcus sp. WH8102</option>
<option value="syc">Synechococcus elongatus PCC6301</option>
<option value="syf">Synechococcus elongatus PCC7942</option>
<option value="syd">Synechococcus sp. CC9605</option>
<option value="sye">Synechococcus sp. CC9902</option>
<option value="syg">Synechococcus sp. CC9311</option>
<option value="syr">Synechococcus sp. RCC307</option>
<option value="syx">Synechococcus sp. WH7803</option>
<option value="cyb">Synechococcus sp. JA-2-3B'a(2-13)</option>
<option value="synp">Synechococcus sp. PCC 7502</option>
<option value="tel">Thermosynechococcus elongatus</option>
<option value="mar">Microcystis aeruginosa</option>
<option value="cyt">Cyanothece sp. ATCC 51142</option>
<option value="cyp">Cyanothece sp. PCC 8801</option>
<option value="cyc">Cyanothece sp. PCC 7424</option>
<option value="cyn">Cyanothece sp. PCC 7425</option>
<option value="cyh">Cyanothece sp. PCC 8802</option>
<option value="cyj">Cyanothece sp. PCC 7822</option>
<option value="amr">Acaryochloris marina</option>
<option value="can">Cyanobacterium aponinum</option>
<option value="csn">Cyanobacterium stanieri</option>
<option value="hao">Halothece sp. PCC 7418</option>
<option value="glp">Gloeocapsa sp. PCC 7428</option>
<option value="cmp">Chamaesiphon minutus</option>
<option value="ter">Trichodesmium erythraeum</option>
<option value="lep">Leptolyngbya sp. PCC 7376</option>
<option value="gei">Geitlerinema sp. PCC 7407</option>
<option value="oac">Oscillatoria acuminata</option>
<option value="oni">Oscillatoria nigro-viridis</option>
<option value="pseu">Pseudanabaena sp. PCC 7367</option>
<option value="cep">Crinalium epipsammum</option>
<option value="mic">Microcoleus sp. PCC 7113</option>
<option value="arp">Arthrospira platensis</option>
<option value="gvi">Gloeobacter violaceus</option>
<option value="glj">Gloeobacter kilaueensis</option>
<option value="ana">Nostoc sp. PCC 7120</option>
<option value="npu">Nostoc punctiforme</option>
<option value="nos">Nostoc sp. PCC 7107</option>
<option value="nop">Nostoc sp. PCC 7524</option>
<option value="ava">Anabaena variabilis</option>
<option value="anb">Anabaena sp. 90</option>
<option value="acy">Anabaena cylindrica</option>
<option value="naz">Anabaena azollae 0708</option>
<option value="csg">Cylindrospermum stagnale</option>
<option value="calo">Calothrix sp. PCC 7507</option>
<option value="calt">Calothrix sp. PCC 6303</option>
<option value="riv">Rivularia sp. PCC 7116</option>
<option value="pma">Prochlorococcus marinus SS120</option>
<option value="pmm">Prochlorococcus marinus MED4</option>
<option value="pmt">Prochlorococcus marinus MIT 9313</option>
<option value="pmn">Prochlorococcus marinus NATL2A</option>
<option value="pmi">Prochlorococcus marinus MIT9312</option>
<option value="pmf">Prochlorococcus marinus MIT 9303</option>
<option value="pmh">Prochlorococcus marinus MIT 9215</option>
<option value="pmj">Prochlorococcus marinus MIT 9211</option>
<option value="pme">Prochlorococcus marinus NATL1A</option>
<option value="cthe">Chroococcidiopsis thermalis</option>
<option value="plp">Pleurocapsa sp. PCC 7327</option>
<option value="scs">Stanieria cyanosphaera</option>
<option value="bth">Bacteroides thetaiotaomicron</option>
<option value="bfr">Bacteroides fragilis YCH46</option>
<option value="bfs">Bacteroides fragilis NCTC9343</option>
<option value="bfg">Bacteroides fragilis 638R</option>
<option value="bvu">Bacteroides vulgatus</option>
<option value="bhl">Bacteroides helcogenes</option>
<option value="bxy">Bacteroides xylanisolvens</option>
<option value="bdo">Bacteroides dorei HS1_L_1_B_010</option>
<option value="bdh">Bacteroides dorei HS1_L_3_B_079</option>
<option value="bacc">Bacteroides sp. CF50</option>
<option value="pgi">Porphyromonas gingivalis W83</option>
<option value="pgn">Porphyromonas gingivalis ATCC 33277</option>
<option value="pgt">Porphyromonas gingivalis TDC60</option>
<option value="pah">Porphyromonas asaccharolytica</option>
<option value="pdi">Parabacteroides distasonis</option>
<option value="osp">Odoribacter splanchnicus</option>
<option value="tfo">Tannerella forsythia</option>
<option value="bvs">Barnesiella viscericola</option>
<option value="afd">Alistipes finegoldii</option>
<option value="ash">Alistipes shahii</option>
<option value="doi">Draconibacterium orientale</option>
<option value="sru">Salinibacter ruber DSM 13855</option>
<option value="srm">Salinibacter ruber M8</option>
<option value="rmr">Rhodothermus marinus DSM 4252</option>
<option value="rmg">Rhodothermus marinus SG0.5JP17-172</option>
<option value="cpi">Chitinophaga pinensis</option>
<option value="nko">Niastella koreensis</option>
<option value="phe">Pedobacter heparinus</option>
<option value="psn">Pedobacter saltans</option>
<option value="shg">Sphingobacterium sp. 21</option>
<option value="sht">Sphingobacterium sp. ML3W</option>
<option value="scn">Solitalea canadensis</option>
<option value="hhy">Haliscomenobacter hydrossis</option>
<option value="sgn">Saprospira grandis</option>
<option value="cmr">Cyclobacterium marinum</option>
<option value="bbd">Belliella baltica</option>
<option value="evi">Echinicola vietnamensis</option>
<option value="chu">Cytophaga hutchinsonii</option>
<option value="dfe">Dyadobacter fermentans</option>
<option value="sli">Spirosoma linguale</option>
<option value="lby">Leadbetterella byssophila</option>
<option value="rsi">Runella slithyformis</option>
<option value="fli">Flexibacter litoralis</option>
<option value="eol">Emticicia oligotrophica</option>
<option value="fae">Fibrella aestuarina</option>
<option value="hsw">Hymenobacter swuensis</option>
<option value="hym">Hymenobacter sp. APR13</option>
<option value="mtt">Marivirga tractuosa</option>
<option value="gfo">Gramella forsetii</option>
<option value="fjo">Flavobacterium johnsoniae</option>
<option value="fps">Flavobacterium psychrophilum JIP02/86</option>
<option value="fpc">Flavobacterium psychrophilum CSF259-93</option>
<option value="fpy">Flavobacterium psychrophilum FPG101</option>
<option value="fpo">Flavobacterium psychrophilum FPG3</option>
<option value="fpq">Flavobacterium psychrophilum 950106-1/1</option>
<option value="fbr">Flavobacterium branchiophilum</option>
<option value="fco">Flavobacterium columnare</option>
<option value="fin">Flavobacterium indicum</option>
<option value="coc">Capnocytophaga ochracea</option>
<option value="ccm">Capnocytophaga canimorsus</option>
<option value="rbi">Robiginitalea biformata</option>
<option value="zpr">Zunongwangia profunda</option>
<option value="cat">Croceibacter atlanticus</option>
<option value="ran">Riemerella anatipestifer ATCC 11845 = DSM 15868</option>
<option value="rai">Riemerella anatipestifer ATCC 11845 = DSM 15868</option>
<option value="rar">Riemerella anatipestifer RA-GD</option>
<option value="rag">Riemerella anatipestifer RA-CH-1</option>
<option value="rae">Riemerella anatipestifer RA-CH-2</option>
<option value="rat">Riemerella anatipestifer CH3</option>
<option value="fbc">Maribacter sp. HTCC2170</option>
<option value="cao">Cellulophaga algicola</option>
<option value="cly">Cellulophaga lytica DSM 7489</option>
<option value="clh">Cellulophaga lytica HI1</option>
<option value="wvi">Weeksella virosa</option>
<option value="kdi">Dokdonia sp. 4H-3-7-5</option>
<option value="dok">Dokdonia sp. MED134</option>
<option value="lan">Lacinutrix sp. 5H-3-7-4</option>
<option value="zga">Zobellia galactanivorans</option>
<option value="mrs">Muricauda ruestringensis</option>
<option value="asl">Aequorivita sublithincola</option>
<option value="orh">Ornithobacterium rhinotracheale DSM 15997</option>
<option value="ori">Ornithobacterium rhinotracheale ORT-UMN 88</option>
<option value="ptq">Psychroflexus torquis</option>
<option value="ndo">Nonlabens dokdonensis</option>
<option value="pom">Polaribacter sp. MED152</option>
<option value="eao">Elizabethkingia anophelis</option>
<option value="fba">Flavobacteriaceae bacterium</option>
<option value="smg">Candidatus Sulcia muelleri GWSS</option>
<option value="sms">Candidatus Sulcia muelleri SMDSEM</option>
<option value="smh">Candidatus Sulcia muelleri DMIN</option>
<option value="sum">Candidatus Sulcia muelleri CARI</option>
<option value="smv">Candidatus Sulcia muelleri Sulcia-ALF</option>
<option value="smub">Candidatus Sulcia muelleri BGSS</option>
<option value="bbl">Blattabacterium Bge (Blattella germanica)</option>
<option value="bpi">Blattabacterium BPLAN (Periplaneta americana)</option>
<option value="bmm">Blattabacterium MADAR (Mastotermes darwiniensis)</option>
<option value="bcp">Blattabacterium Cpu (Cryptocercus punctulatus)</option>
<option value="bbg">Blattabacterium BGIGA (Blaberus giganteus)</option>
<option value="bbq">Blattabacterium sp. (Blatta orientalis)</option>
<option value="blp">Blattabacterium sp. (Panesthia angustipennis spadica)</option>
<option value="blu">Blattabacterium sp. (Nauphoeta cinerea)</option>
<option value="fte">Fluviicola taffensis</option>
<option value="oho">Owenweeksia hongkongensis</option>
<option value="udi">Candidatus Uzinura diaspidicola</option>
<option value="elv">Endosymbiont of Llaveia axin axin</option>
<option value="cte">Chlorobium tepidum</option>
<option value="cpc">Chlorobaculum parvum</option>
<option value="cpb">Chlorobium phaeobacteroides BS1</option>
<option value="cli">Chlorobium limicola</option>
<option value="pvi">Chlorobium phaeovibrioides</option>
<option value="plt">Pelodictyon luteolum</option>
<option value="pph">Pelodictyon phaeoclathratiforme</option>
<option value="paa">Prosthecochloris aestuarii</option>
<option value="cts">Chloroherpeton thalassium</option>
<option value="ial">Ignavibacterium album</option>
<option value="mro">Melioribacter roseus</option>
<option value="rrs">Roseiflexus sp. RS-1</option>
<option value="rca">Roseiflexus castenholzii</option>
<option value="cau">Chloroflexus aurantiacus</option>
<option value="cag">Chloroflexus aggregans</option>
<option value="chl">Chloroflexus sp. Y-400-fl</option>
<option value="hau">Herpetosiphon aurantiacus</option>
<option value="tro">Thermomicrobium roseum</option>
<option value="sti">Sphaerobacter thermophilus</option>
<option value="atm">Anaerolinea thermophila</option>
<option value="cap">Caldilinea aerophila</option>
<option value="dra">Deinococcus radiodurans</option>
<option value="dge">Deinococcus geothermalis</option>
<option value="ddr">Deinococcus deserti</option>
<option value="dmr">Deinococcus maricopensis</option>
<option value="dpt">Deinococcus proteolyticus</option>
<option value="dgo">Deinococcus gobiensis</option>
<option value="dpd">Deinococcus peraridilitoris</option>
<option value="tra">Truepera radiovictrix</option>
<option value="tth">Thermus thermophilus HB27</option>
<option value="ttj">Thermus thermophilus HB8</option>
<option value="tts">Thermus thermophilus SG0.5JP17-16</option>
<option value="ttl">Thermus thermophilus JL-18</option>
<option value="tsc">Thermus scotoductus</option>
<option value="thc">Thermus sp. CCB_US3_UF1</option>
<option value="tos">Thermus oshimai</option>
<option value="mrb">Meiothermus ruber DSM 1279</option>
<option value="mre">Meiothermus ruber DSM 1279</option>
<option value="msv">Meiothermus silvanus</option>
<option value="opr">Oceanithermus profundus</option>
<option value="mhd">Marinithermus hydrothermalis</option>
<option value="aae">Aquifex aeolicus</option>
<option value="tle">Thermotoga lettingae</option>
<option value="tme">Thermosipho melanesiensis</option>
<option value="taf">Thermosipho africanus</option>
<option value="fno">Fervidobacterium nodosum</option>
<option value="fpe">Fervidobacterium pennivorans</option>
<option value="pmo">Petrotoga mobilis</option>
<option value="kol">Kosmotoga olearia</option>
<option value="mpz">Marinitoga piezophila</option>
<option value="mpg">Mesotoga prima</option>
<option value="ccz">Chthonomonas calidirosea</option>
<option value="fgi">Fimbriimonas ginsengisoli</option>
<option value="din">Desulfurispirillum indicum</option>
<option value="ddf">Deferribacter desulfuricans</option>
<option value="dap">Denitrovibrio acetiphilus</option>
<option value="cni">Calditerrivibrio nitroreducens</option>
<option value="fsi">Flexistipes sinusarabici</option>
<option value="nde">Candidatus Nitrospira defluvii</option>
<option value="ttr">Thermobaculum terrenum</option>
<option value="mox">Candidatus Methylomirabilis oxyfera</option>
<option value="hhs">Halyomorpha halys symbiont</option>
<option value="mja">Methanocaldococcus jannaschii</option>
<option value="mfe">Methanocaldococcus fervens</option>
<option value="mvu">Methanocaldococcus vulcanius</option>
<option value="mfs">Methanocaldococcus sp. FS406-22</option>
<option value="mif">Methanocaldococcus infernus</option>
<option value="mjh">Methanocaldococcus sp. JH146</option>
<option value="mig">Methanotorris igneus</option>
<option value="mmp">Methanococcus maripaludis S2</option>
<option value="mmq">Methanococcus maripaludis C5</option>
<option value="mmx">Methanococcus maripaludis C6</option>
<option value="mmz">Methanococcus maripaludis C7</option>
<option value="mmd">Methanococcus maripaludis X1</option>
<option value="mae">Methanococcus aeolicus</option>
<option value="mvn">Methanococcus vannielii</option>
<option value="mac">Methanosarcina acetivorans</option>
<option value="mba">Methanosarcina barkeri</option>
<option value="mma">Methanosarcina mazei Go1</option>
<option value="mmaz">Methanosarcina mazei Tuc01</option>
<option value="mbu">Methanococcoides burtonii</option>
<option value="mmh">Methanohalophilus mahii</option>
<option value="mev">Methanohalobium evestigatum</option>
<option value="mzh">Methanosalsum zhilinae</option>
<option value="mpy">Methanolobus psychrophilus</option>
<option value="mhz">Methanomethylovorans hollandica</option>
<option value="mcj">Methanosaeta concilii</option>
<option value="mhi">Methanosaeta harundinacea</option>
<option value="mhu">Methanospirillum hungatei</option>
<option value="mla">Methanocorpusculum labreanum</option>
<option value="mem">Methanoculleus marisnigri</option>
<option value="mpi">Methanoplanus petrolearius</option>
<option value="mpd">Methanocella paludicola</option>
<option value="mez">Methanocella conradii</option>
<option value="rci">Methanocella arvoryzae</option>
<option value="mer">Methanomassiliicoccus sp. Mx1-Issoire</option>
<option value="max">Candidatus Methanomethylophilus alvus</option>
<option value="afu">Archaeoglobus fulgidus DSM 4304</option>
<option value="afg">Archaeoglobus fulgidus DSM 8774</option>
<option value="ast">Archaeoglobus sulfaticallidus</option>
<option value="hal">Halobacterium sp. NRC-1</option>
<option value="hsl">Halobacterium salinarum</option>
<option value="hma">Haloarcula marismortui</option>
<option value="hhi">Haloarcula hispanica ATCC 33960</option>
<option value="hhn">Haloarcula hispanica N601</option>
<option value="hwa">Haloquadratum walsbyi DSM 16790</option>
<option value="hwc">Haloquadratum walsbyi C23</option>
<option value="nph">Natronomonas pharaonis</option>
<option value="nmo">Natronomonas moolapensis</option>
<option value="hla">Halorubrum lacusprofundi</option>
<option value="hmu">Halomicrobium mukohataei</option>
<option value="htu">Haloterrigena turkmenica</option>
<option value="nmg">Natrialba magadii</option>
<option value="hvo">Haloferax volcanii</option>
<option value="hme">Haloferax mediterranei</option>
<option value="hje">Halalkalicoccus jeotgali</option>
<option value="hbo">Halogeometricum borinquense</option>
<option value="hxa">Halopiger xanaduensis</option>
<option value="nat">Natrinema sp. J7-2</option>
<option value="npe">Natrinema pellirubrum</option>
<option value="nge">Natronobacterium gregoryi</option>
<option value="hru">Halovivax ruber</option>
<option value="nou">Natronococcus occultus</option>
<option value="sali">Salinarchaeum sp. Harcht-Bsk1</option>
<option value="hlr">Halostagnicola larsenii</option>
<option value="tac">Thermoplasma acidophilum</option>
<option value="tvo">Thermoplasma volcanium</option>
<option value="pto">Picrophilus torridus</option>
<option value="fac">Ferroplasma acidarmanus</option>
<option value="ton">Thermococcus onnurineus</option>
<option value="tba">Thermococcus barophilus</option>
<option value="ths">Thermococcus sp. ES1</option>
<option value="abi">Aciduliprofundum boonei</option>
<option value="ape">Aeropyrum pernix</option>
<option value="iho">Ignicoccus hospitalis</option>
<option value="sso">Sulfolobus solfataricus P2</option>
<option value="sol">Sulfolobus solfataricus 98/2</option>
<option value="sai">Sulfolobus acidocaldarius DSM 639</option>
<option value="sacn">Sulfolobus acidocaldarius N8</option>
<option value="sacr">Sulfolobus acidocaldarius Ron12/I</option>
<option value="sacs">Sulfolobus acidocaldarius SUSAZ</option>
<option value="sis">Sulfolobus islandicus L.S.2.15</option>
<option value="sia">Sulfolobus islandicus M.14.25</option>
<option value="sim">Sulfolobus islandicus M.16.27</option>
<option value="sid">Sulfolobus islandicus M.16.4</option>
<option value="siy">Sulfolobus islandicus Y.G.57.14</option>
<option value="sin">Sulfolobus islandicus Y.N.15.51</option>
<option value="sii">Sulfolobus islandicus L.D.8.5</option>
<option value="sih">Sulfolobus islandicus HVE10/4</option>
<option value="sir">Sulfolobus islandicus REY15A</option>
<option value="sic">Sulfolobus islandicus LAL14/1</option>
<option value="pai">Pyrobaculum aerophilum</option>
<option value="pis">Pyrobaculum islandicum</option>
<option value="pcl">Pyrobaculum calidifontis</option>
<option value="pyr">Pyrobaculum sp. 1860</option>
<option value="pog">Pyrobaculum oguniense</option>
<option value="cma">Caldivirga maquilingensis</option>
<option value="vdi">Vulcanisaeta distributa</option>
<option value="vmo">Vulcanisaeta moutnovskia</option>
<option value="nmr">Nitrosopumilus maritimus</option>
<option value="nev">Candidatus Nitrososphaera evergladensis</option>
<option value="csu">Candidatus Caldiarchaeum subterraneum</option>
<option value="hah">Halophilic archaeon</option>
</select>
<input type="hidden" name="mapno" value="00310" />
<input type="hidden" name="mapscale" value=>
<input type="button" value="Go" onClick="select_menu(this.form)" />
<input type="hidden" name="show_description" value="hide">

</form>
</td><td>
<form name="form2" method="get" action="/kegg-bin/show_pathway">
&nbsp;&nbsp;&nbsp;&nbsp;
<select name="scale" onChange="resize_map(this.form.scale.value)">
<option value="1.84" >184%</option>
<option value="1.5" >150%</option>
<option value="1.22" >122%</option>
<option value="1.0" selected>100%</option>
<option value="0.82" >82%</option>
<option value="0.67" >67%</option>
<option value="0.55" >55%</option>
</select>
&nbsp;&nbsp;<input type="text" name="query" size=20 value="">
<input type="hidden" name="map" value="map00310" />
<input type="hidden" name="scale" value=>
<input type="hidden" name="auto_image" value="">
<input type="hidden" name="show_description" value="hide">
<input type="hidden" name="multi_query" />

</form>
</td></tr></table>


<img src="/pathway/map00310.png" name="pathwayimage" usemap="#mapdata" border="0" />

<map name="mapdata">
<area shape=circle	coords=432,523,4	href="/dbget-bin/www_bget?C06181"	title="C06181 (Piperideine)" onMouseOver="popupTimer(&quot;C06181&quot;, &quot;C06181 (Piperideine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=587,171,4	href="/dbget-bin/www_bget?C05825"	title="C05825 (2-Amino-5-oxohexanoate)" onMouseOver="popupTimer(&quot;C05825&quot;, &quot;C05825 (2-Amino-5-oxohexanoate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=445,171,4	href="/dbget-bin/www_bget?C05161"	title="C05161 (2,5-Diaminohexanoate)" onMouseOver="popupTimer(&quot;C05161&quot;, &quot;C05161 (2,5-Diaminohexanoate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=890,464,4	href="/dbget-bin/www_bget?C00877"	title="C00877 (Crotonoyl-CoA)" onMouseOver="popupTimer(&quot;C00877&quot;, &quot;C00877 (Crotonoyl-CoA)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=993,464,4	href="/dbget-bin/www_bget?C01144"	title="C01144 ((S)-3-Hydroxybutanoyl-CoA)" onMouseOver="popupTimer(&quot;C01144&quot;, &quot;C01144 ((S)-3-Hydroxybutanoyl-CoA)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=1101,464,4	href="/dbget-bin/www_bget?C00332"	title="C00332 (Acetoacetyl-CoA)" onMouseOver="popupTimer(&quot;C00332&quot;, &quot;C00332 (Acetoacetyl-CoA)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=1203,464,4	href="/dbget-bin/www_bget?C00024"	title="C00024 (Acetyl-CoA)" onMouseOver="popupTimer(&quot;C00024&quot;, &quot;C00024 (Acetyl-CoA)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=796,230,4	href="/dbget-bin/www_bget?C00322"	title="C00322 (2-Oxoadipate)" onMouseOver="popupTimer(&quot;C00322&quot;, &quot;C00322 (2-Oxoadipate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=796,464,4	href="/dbget-bin/www_bget?C00527"	title="C00527 (Glutaryl-CoA)" onMouseOver="popupTimer(&quot;C00527&quot;, &quot;C00527 (Glutaryl-CoA)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=676,464,4	href="/dbget-bin/www_bget?C00489"	title="C00489 (Glutarate)" onMouseOver="popupTimer(&quot;C00489&quot;, &quot;C00489 (Glutarate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=796,95,4	href="/dbget-bin/www_bget?C00956"	title="C00956 (L-2-Aminoadipate)" onMouseOver="popupTimer(&quot;C00956&quot;, &quot;C00956 (L-2-Aminoadipate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=639,251,4	href="/dbget-bin/www_bget?C00408"	title="C00408 (L-Pipecolate)" onMouseOver="popupTimer(&quot;C00408&quot;, &quot;C00408 (L-Pipecolate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=639,176,4	href="/dbget-bin/www_bget?C00450"	title="C00450 ((S)-2,3,4,5-Tetrahydropyridine-2-carboxylate)" onMouseOver="popupTimer(&quot;C00450&quot;, &quot;C00450 ((S)-2,3,4,5-Tetrahydropyridine-2-carboxylate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=639,95,4	href="/dbget-bin/www_bget?C04076"	title="C04076 (L-2-Aminoadipate 6-semialdehyde)" onMouseOver="popupTimer(&quot;C04076&quot;, &quot;C04076 (L-2-Aminoadipate 6-semialdehyde)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=554,464,4	href="/dbget-bin/www_bget?C03273"	title="C03273 (5-Oxopentanoate)" onMouseOver="popupTimer(&quot;C03273&quot;, &quot;C03273 (5-Oxopentanoate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=515,251,4	href="/dbget-bin/www_bget?C04092"	title="C04092 (delta1-Piperideine-2-carboxylate)" onMouseOver="popupTimer(&quot;C04092&quot;, &quot;C04092 (delta1-Piperideine-2-carboxylate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=432,251,4	href="/dbget-bin/www_bget?C03239"	title="C03239 (6-Amino-2-oxohexanoate)" onMouseOver="popupTimer(&quot;C03239&quot;, &quot;C03239 (6-Amino-2-oxohexanoate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=432,95,4	href="/dbget-bin/www_bget?C00449"	title="C00449 (N6-(L-1,3-Dicarboxypropyl)-L-lysine)" onMouseOver="popupTimer(&quot;C00449&quot;, &quot;C00449 (N6-(L-1,3-Dicarboxypropyl)-L-lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=432,464,4	href="/dbget-bin/www_bget?C00431"	title="C00431 (5-Aminopentanoate)" onMouseOver="popupTimer(&quot;C00431&quot;, &quot;C00431 (5-Aminopentanoate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=317,523,4	href="/dbget-bin/www_bget?C01672"	title="C01672 (Cadaverine)" onMouseOver="popupTimer(&quot;C01672&quot;, &quot;C01672 (Cadaverine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=432,310,4	href="/dbget-bin/www_bget?C05548"	title="C05548 (6-Acetamido-2-oxohexanoate)" onMouseOver="popupTimer(&quot;C05548&quot;, &quot;C05548 (6-Acetamido-2-oxohexanoate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=317,310,4	href="/dbget-bin/www_bget?C02727"	title="C02727 (N6-Acetyl-L-lysine)" onMouseOver="popupTimer(&quot;C02727&quot;, &quot;C02727 (N6-Acetyl-L-lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=180,310,4	href="/dbget-bin/www_bget?C00047"	title="C00047 (L-Lysine)" onMouseOver="popupTimer(&quot;C00047&quot;, &quot;C00047 (L-Lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=317,464,4	href="/dbget-bin/www_bget?C00990"	title="C00990 (5-Aminopentanamide)" onMouseOver="popupTimer(&quot;C00990&quot;, &quot;C00990 (5-Aminopentanamide)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=432,387,4	href="/dbget-bin/www_bget?C03087"	title="C03087 (5-Acetamidopentanoate)" onMouseOver="popupTimer(&quot;C03087&quot;, &quot;C03087 (5-Acetamidopentanoate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=317,625,4	href="/dbget-bin/www_bget?C01142"	title="C01142 ((3S)-3,6-Diaminohexanoate)" onMouseOver="popupTimer(&quot;C01142&quot;, &quot;C01142 ((3S)-3,6-Diaminohexanoate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=445,625,4	href="/dbget-bin/www_bget?C01186"	title="C01186 ((3S,5S)-3,5-Diaminohexanoate)" onMouseOver="popupTimer(&quot;C01186&quot;, &quot;C01186 ((3S,5S)-3,5-Diaminohexanoate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=587,625,4	href="/dbget-bin/www_bget?C03656"	title="C03656 ((S)-5-Amino-3-oxohexanoic acid)" onMouseOver="popupTimer(&quot;C03656&quot;, &quot;C03656 ((S)-5-Amino-3-oxohexanoic acid)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=180,198,4	href="/dbget-bin/www_bget?C00739"	title="C00739 (D-Lysine)" onMouseOver="popupTimer(&quot;C00739&quot;, &quot;C00739 (D-Lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=180,714,4	href="/dbget-bin/www_bget?C02188"	title="C02188 (Protein lysine)" onMouseOver="popupTimer(&quot;C02188&quot;, &quot;C02188 (Protein lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=300,714,4	href="/dbget-bin/www_bget?C05544"	title="C05544 (Protein N6-methyl-L-lysine)" onMouseOver="popupTimer(&quot;C05544&quot;, &quot;C05544 (Protein N6-methyl-L-lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=299,773,4	href="/dbget-bin/www_bget?C01211"	title="C01211 (Procollagen 5-hydroxy-L-lysine)" onMouseOver="popupTimer(&quot;C01211&quot;, &quot;C01211 (Procollagen 5-hydroxy-L-lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=419,714,4	href="/dbget-bin/www_bget?C05545"	title="C05545 (Protein N6,N6-dimethyl-L-lysine)" onMouseOver="popupTimer(&quot;C05545&quot;, &quot;C05545 (Protein N6,N6-dimethyl-L-lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=419,773,4	href="/dbget-bin/www_bget?C04487"	title="C04487 (5-(D-Galactosyloxy)-L-lysine-procollagen)" onMouseOver="popupTimer(&quot;C04487&quot;, &quot;C04487 (5-(D-Galactosyloxy)-L-lysine-procollagen)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=526,714,4	href="/dbget-bin/www_bget?C05546"	title="C05546 (Protein N6,N6,N6-trimethyl-L-lysine)" onMouseOver="popupTimer(&quot;C05546&quot;, &quot;C05546 (Protein N6,N6,N6-trimethyl-L-lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=609,714,4	href="/dbget-bin/www_bget?C03793"	title="C03793 (N6,N6,N6-Trimethyl-L-lysine)" onMouseOver="popupTimer(&quot;C03793&quot;, &quot;C03793 (N6,N6,N6-Trimethyl-L-lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=692,714,4	href="/dbget-bin/www_bget?C01259"	title="C01259 (3-Hydroxy-N6,N6,N6-trimethyl-L-lysine)" onMouseOver="popupTimer(&quot;C01259&quot;, &quot;C01259 (3-Hydroxy-N6,N6,N6-trimethyl-L-lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=901,714,4	href="/dbget-bin/www_bget?C01181"	title="C01181 (4-Trimethylammoniobutanoate)" onMouseOver="popupTimer(&quot;C01181&quot;, &quot;C01181 (4-Trimethylammoniobutanoate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=997,714,4	href="/dbget-bin/www_bget?C00487"	title="C00487 (Carnitine)" onMouseOver="popupTimer(&quot;C00487&quot;, &quot;C00487 (Carnitine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=786,714,4	href="/dbget-bin/www_bget?C01149"	title="C01149 (4-Trimethylammoniobutanal)" onMouseOver="popupTimer(&quot;C01149&quot;, &quot;C01149 (4-Trimethylammoniobutanal)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=765,747,4	href="/dbget-bin/www_bget?C00037"	title="C00037 (Glycine)" onMouseOver="popupTimer(&quot;C00037&quot;, &quot;C00037 (Glycine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=796,350,4	href="/dbget-bin/www_bget?C06157"	title="C06157 ([Dihydrolipoyllysine-residue succinyltransferase] S-glutaryldihydrolipoyllysine)" onMouseOver="popupTimer(&quot;C06157&quot;, &quot;C06157 ([Dihydrolipoyllysine-residue succinyltransferase] S-glutaryldihydrolipoyllysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=317,381,4	href="/dbget-bin/www_bget?C04020"	title="C04020 (D-Lysopine)" onMouseOver="popupTimer(&quot;C04020&quot;, &quot;C04020 (D-Lysopine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=317,567,4	href="/dbget-bin/www_bget?C01028"	title="C01028 (N6-Hydroxy-L-lysine)" onMouseOver="popupTimer(&quot;C01028&quot;, &quot;C01028 (N6-Hydroxy-L-lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=432,567,4	href="/dbget-bin/www_bget?C03955"	title="C03955 (N6-Acetyl-N6-hydroxy-L-lysine)" onMouseOver="popupTimer(&quot;C03955&quot;, &quot;C03955 (N6-Acetyl-N6-hydroxy-L-lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=652,567,4	href="/dbget-bin/www_bget?C05554"	title="C05554 (Aerobactin)" onMouseOver="popupTimer(&quot;C05554&quot;, &quot;C05554 (Aerobactin)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=542,567,4	href="/dbget-bin/www_bget?C20333"	title="C20333 (N2-Citryl-N6-acetyl-N6-hydroxy-L-lysine)" onMouseOver="popupTimer(&quot;C20333&quot;, &quot;C20333 (N2-Citryl-N6-acetyl-N6-hydroxy-L-lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=890,625,4	href="/dbget-bin/www_bget?C05231"	title="C05231 (L-3-Aminobutyryl-CoA)" onMouseOver="popupTimer(&quot;C05231&quot;, &quot;C05231 (L-3-Aminobutyryl-CoA)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=993,529,4	href="/dbget-bin/www_bget?C00136"	title="C00136 (Butanoyl-CoA)" onMouseOver="popupTimer(&quot;C00136&quot;, &quot;C00136 (Butanoyl-CoA)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=850,664,4	href="/dbget-bin/www_bget?C00164"	title="C00164 (Acetoacetate)" onMouseOver="popupTimer(&quot;C00164&quot;, &quot;C00164 (Acetoacetate)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=516,141,4	href="/dbget-bin/www_bget?C03366"	title="C03366 (5-Phosphonooxy-L-lysine)" onMouseOver="popupTimer(&quot;C03366&quot;, &quot;C03366 (5-Phosphonooxy-L-lysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=circle	coords=394,141,4	href="/dbget-bin/www_bget?C16741"	title="C16741 (L-Hydroxylysine)" onMouseOver="popupTimer(&quot;C16741&quot;, &quot;C16741 (L-Hydroxylysine)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=poly	coords=438,250,509,250,509,252,438,252	href="/dbget-bin/www_bget?R04175"	title="R04175" />
<area shape=poly	coords=426,522,319,522,319,524,426,524	href="/dbget-bin/www_bget?R03666"	title="R03666" />
<area shape=rect	coords=288,189,334,206	href="/dbget-bin/www_bget?K00824+2.6.1.21+R02851"	title="K00824 (dat), 2.6.1.21, R02851" />
<area shape=rect	coords=493,163,539,180	href="/dbget-bin/www_bget?1.4.1.12+R04687+R04688"	title="1.4.1.12, 1.4.1.12, R04687, R04688" />
<area shape=rect	coords=288,162,334,179	href="/dbget-bin/www_bget?5.4.3.4+R02852"	title="5.4.3.4, 5.4.3.4, R02852" />
<area shape=rect	coords=182,227,228,244	href="/dbget-bin/www_bget?5.1.1.9+R00460"	title="5.1.1.9, 5.1.1.9, R00460" />
<area shape=rect	coords=553,253,599,270	href="/dbget-bin/www_bget?1.5.1.1+R02201+R02203"	title="1.5.1.1, 1.5.1.1, R02201, R02203" />
<area shape=rect	coords=288,97,334,114	href="/dbget-bin/www_bget?K00291+K14157+1.5.1.8+R00716"	title="K00291 (E1.5.1.8), K14157 (AASS), 1.5.1.8, R00716" />
<area shape=rect	coords=510,97,556,114	href="/dbget-bin/www_bget?K00293+1.5.1.10+R02315"	title="K00293 (LYS9), 1.5.1.10, R02315" />
<area shape=rect	coords=913,457,959,474	href="/dbget-bin/www_bget?K01692+K01825+K01782+K07515+K07514+K07511+4.2.1.17+R03026"	title="K01692 (paaF), K01825 (fadB), K01782 (fadJ), K07515 (HADHA), K07514 (EHHADH), K07511 (ECHS1), 4.2.1.17, R03026" />
<area shape=rect	coords=1025,456,1071,473	href="/dbget-bin/www_bget?K00022+K01825+K01782+K07514+1.1.1.35+R01975"	title="K00022 (HADH), K01825 (fadB), K01782 (fadJ), K07514 (EHHADH), 1.1.1.35, R01975" />
<area shape=rect	coords=641,208,687,225	href="/dbget-bin/www_bget?1.5.99.3+R02205"	title="1.5.99.3, 1.5.99.3, R02205" />
<area shape=rect	coords=553,232,599,249	href="/dbget-bin/www_bget?K13609+1.5.1.21+R02201+R02203"	title="K13609 (dpkA), 1.5.1.21, R02201, R02203" />
<area shape=rect	coords=352,302,398,319	href="/dbget-bin/www_bget?2.6.1.65+R04029"	title="2.6.1.65, 2.6.1.65, R04029" />
<area shape=rect	coords=230,341,276,358	href="/dbget-bin/www_bget?3.5.1.17+R00458"	title="3.5.1.17, 3.5.1.17, R00458" />
<area shape=rect	coords=230,291,276,308	href="/dbget-bin/www_bget?2.3.1.32+R01620"	title="2.3.1.32, 2.3.1.32, R01620" />
<area shape=rect	coords=288,76,334,93	href="/dbget-bin/www_bget?K00290+1.5.1.7+R00715"	title="K00290 (LYS1), 1.5.1.7, R00715" />
<area shape=rect	coords=510,76,556,93	href="/dbget-bin/www_bget?K00292+K14157+1.5.1.9+R02313"	title="K00292 (E1.5.1.9), K14157 (AASS), 1.5.1.9, R02313" />
<area shape=rect	coords=690,88,736,105	href="/dbget-bin/www_bget?K00143+K14085+1.2.1.31+R03102+R03103"	title="K00143 (LYS2), K14085 (ALDH7A1), 1.2.1.31, R03102, R03103" />
<area shape=rect	coords=773,150,819,167	href="/dbget-bin/www_bget?K00825+2.6.1.39+R01939"	title="K00825 (AADAT), 2.6.1.39, R01939" />
<area shape=rect	coords=773,276,819,293	href="/dbget-bin/www_bget?K00164+1.2.4.2+R01940"	title="K00164 (OGDH), 1.2.4.2, R01940" />
<area shape=rect	coords=1126,456,1172,473	href="/dbget-bin/www_bget?K00626+2.3.1.9+R00238"	title="K00626 (E2.3.1.9), 2.3.1.9, R00238" />
<area shape=rect	coords=816,456,862,473	href="/dbget-bin/www_bget?K00252+1.3.8.6+R02488"	title="K00252 (GCDH), 1.3.8.6, R02488" />
<area shape=rect	coords=709,456,755,473	href="/dbget-bin/www_bget?6.2.1.6+R02402"	title="6.2.1.6, 6.2.1.6, R02402" />
<area shape=rect	coords=593,456,639,473	href="/dbget-bin/www_bget?K00135+1.2.1.20+R02401"	title="K00135 (gabD), 1.2.1.20, R02401" />
<area shape=rect	coords=473,456,519,473	href="/dbget-bin/www_bget?K14268+2.6.1.48+R02274"	title="K14268 (davT), 2.6.1.48, R02274" />
<area shape=rect	coords=352,457,398,474	href="/dbget-bin/www_bget?3.5.1.30+R02273"	title="3.5.1.30, 3.5.1.30, R02273" />
<area shape=rect	coords=230,456,276,473	href="/dbget-bin/www_bget?1.13.12.2+R00449"	title="1.13.12.2, 1.13.12.2, R00449" />
<area shape=rect	coords=132,227,178,244	href="/dbget-bin/www_bget?5.1.1.5+R00460"	title="5.1.1.5, 5.1.1.5, R00460" />
<area shape=rect	coords=230,515,276,532	href="/dbget-bin/www_bget?K01582+4.1.1.18+R00462"	title="K01582 (E4.1.1.18), 4.1.1.18, R00462" />
<area shape=rect	coords=409,418,455,435	href="/dbget-bin/www_bget?3.5.1.63+R02276"	title="3.5.1.63, 3.5.1.63, R02276" />
<area shape=rect	coords=230,312,276,329	href="/dbget-bin/www_bget?R00454"	title="2.3.1.-, 2.3.1.-, R00454" />
<area shape=rect	coords=409,341,455,358	href="/dbget-bin/www_bget?R04142"	title="1.2.4.-, 1.2.4.-, R04142" />
<area shape=rect	coords=409,277,455,294	href="/dbget-bin/www_bget?3.5.1.17+R04174"	title="3.5.1.17, 3.5.1.17, R04174" />
<area shape=rect	coords=288,243,334,260	href="/dbget-bin/www_bget?1.4.3.14+R00447"	title="1.4.3.14, 1.4.3.14, R00447" />
<area shape=rect	coords=591,208,637,225	href="/dbget-bin/www_bget?K00306+1.5.3.7+R02204"	title="K00306 (PIPOX), 1.5.3.7, R02204" />
<area shape=rect	coords=773,397,819,414	href="/dbget-bin/www_bget?K00658+2.3.1.61+R02571"	title="K00658 (DLST), 2.3.1.61, R02571" />
<area shape=rect	coords=230,373,276,390	href="/dbget-bin/www_bget?1.5.1.16+R00452"	title="1.5.1.16, 1.5.1.16, R00452" />
<area shape=rect	coords=230,617,276,634	href="/dbget-bin/www_bget?K01843+5.4.3.2+R00461"	title="K01843 (kamA), 5.4.3.2, R00461" />
<area shape=rect	coords=348,617,394,634	href="/dbget-bin/www_bget?K01844+K18011+5.4.3.3+R03275"	title="K01844 (kamD), K18011 (kamE), 5.4.3.3, R03275" />
<area shape=rect	coords=493,617,539,634	href="/dbget-bin/www_bget?K18012+1.4.1.11+R03349"	title="K18012 (kdd), 1.4.1.11, R03349" />
<area shape=rect	coords=921,706,967,723	href="/dbget-bin/www_bget?K00471+1.14.11.1+R02397"	title="K00471 (E1.14.11.1), 1.14.11.1, R02397" />
<area shape=rect	coords=822,716,868,733	href="/dbget-bin/www_bget?K00149+1.2.1.47+R03283"	title="K00149 (ALDH9A1), 1.2.1.47, R03283" />
<area shape=rect	coords=623,706,669,723	href="/dbget-bin/www_bget?K00474+1.14.11.8+R03451"	title="K00474 (E1.14.11.8), 1.14.11.8, R03451" />
<area shape=rect	coords=540,705,586,722	href="/dbget-bin/www_bget?K01423+R04313"	title="K01423 (E3.4.-.-), 3.4.-.-, R04313" />
<area shape=rect	coords=333,724,379,741	href="/dbget-bin/www_bget?2.1.1.60+R04866"	title="2.1.1.60, 2.1.1.60, R04866" />
<area shape=rect	coords=333,705,379,722	href="/dbget-bin/www_bget?2.1.1.59+R04866"	title="2.1.1.59, 2.1.1.59, R04866" />
<area shape=rect	coords=214,686,260,703	href="/dbget-bin/www_bget?K06101+K11427+K11420+K09186+K09187+K09188+K14959+K09189+K15588+K11424+K11425+K11422+K11423+K11431+K11428+K11421+K18494+K11433+K11419+K11429+2.1.1.43+R03875"	title="K06101 (ASH1L), K11427 (DOT1L), K11420 (EHMT), K09186 (MLL1), K09187 (MLL2), K09188 (MLL3), K14959 (MLL4), K09189 (MLL5), K15588 (NSD1), K11424 (WHSC1), K11425 (WHSC1L1), K11422 (SETD1), K11423 (SETD2), K11431 (SETD7), K11428 (SETD8), K11421 (SETDB1), K18494 (SETDB2), K11433 (SETMAR), K11419 (SUV39H), K11429 (SUV420H), 2.1.1.43, R03875" />
<area shape=rect	coords=333,764,379,781	href="/dbget-bin/www_bget?K11703+K13646+2.4.1.50+R03380"	title="K11703 (GLT25D), K13646 (PLOD3), 2.4.1.50, R03380" />
<area shape=rect	coords=214,724,260,741	href="/dbget-bin/www_bget?2.1.1.60+R03875"	title="2.1.1.60, 2.1.1.60, R03875" />
<area shape=rect	coords=214,705,260,722	href="/dbget-bin/www_bget?2.1.1.59+R03875"	title="2.1.1.59, 2.1.1.59, R03875" />
<area shape=rect	coords=333,686,379,703	href="/dbget-bin/www_bget?K06101+K11427+K11420+K09186+K09187+K09188+K14959+K09189+K15588+K11424+K11425+K11422+K11423+K11431+K11428+K11421+K18494+K11433+K11419+K11429+2.1.1.43+R04866"	title="K06101 (ASH1L), K11427 (DOT1L), K11420 (EHMT), K09186 (MLL1), K09187 (MLL2), K09188 (MLL3), K14959 (MLL4), K09189 (MLL5), K15588 (NSD1), K11424 (WHSC1), K11425 (WHSC1L1), K11422 (SETD1), K11423 (SETD2), K11431 (SETD7), K11428 (SETD8), K11421 (SETDB1), K18494 (SETDB2), K11433 (SETMAR), K11419 (SUV39H), K11429 (SUV420H), 2.1.1.43, R04866" />
<area shape=rect	coords=214,765,260,782	href="/dbget-bin/www_bget?K00473+K13645+K13646+K13647+1.14.11.4+R03376"	title="K00473 (PLOD1), K13645 (PLOD2), K13646 (PLOD3), K13647 (PLODN), 1.14.11.4, R03376" />
<area shape=rect	coords=450,724,496,741	href="/dbget-bin/www_bget?2.1.1.60+R04867"	title="2.1.1.60, 2.1.1.60, R04867" />
<area shape=rect	coords=450,705,496,722	href="/dbget-bin/www_bget?2.1.1.59+R04867"	title="2.1.1.59, 2.1.1.59, R04867" />
<area shape=rect	coords=450,686,496,703	href="/dbget-bin/www_bget?K06101+K11427+K11420+K09186+K09187+K09188+K14959+K09189+K15588+K11424+K11425+K11422+K11423+K11431+K11428+K11421+K18494+K11433+K11419+K11429+2.1.1.43+R04867"	title="K06101 (ASH1L), K11427 (DOT1L), K11420 (EHMT), K09186 (MLL1), K09187 (MLL2), K09188 (MLL3), K14959 (MLL4), K09189 (MLL5), K15588 (NSD1), K11424 (WHSC1), K11425 (WHSC1L1), K11422 (SETD1), K11423 (SETD2), K11431 (SETD7), K11428 (SETD8), K11421 (SETDB1), K18494 (SETDB2), K11433 (SETMAR), K11419 (SUV39H), K11429 (SUV420H), 2.1.1.43, R04867" />
<area shape=rect	coords=710,706,756,723	href="/dbget-bin/www_bget?R03284"	title="4.1.2.-, 4.1.2.-, R03284" />
<area shape=rect	coords=822,695,868,712	href="/dbget-bin/www_bget?K00128+K00149+K14085+1.2.1.3+R03283"	title="K00128 (E1.2.1.3), K00149 (ALDH9A1), K14085 (ALDH7A1), 1.2.1.3, R03283" />
<area shape=rect	coords=460,558,506,575	href="/dbget-bin/www_bget?K03894+6.3.2.38+R10090"	title="K03894 (iucA), 6.3.2.38, R10090" />
<area shape=rect	coords=352,559,398,576	href="/dbget-bin/www_bget?K03896+2.3.1.102+R03168"	title="K03896 (iucB), 2.3.1.102, R03168" />
<area shape=rect	coords=230,559,276,576	href="/dbget-bin/www_bget?K03897+1.14.13.59+R00448"	title="K03897 (iucD), 1.14.13.59, R00448" />
<area shape=rect	coords=574,559,620,576	href="/dbget-bin/www_bget?K03895+6.3.2.39+R10091"	title="K03895 (iucC), 6.3.2.39, R10091" />
<area shape=rect	coords=695,617,741,634	href="/dbget-bin/www_bget?K18013+R10564"	title="K18013 (kce), R10564" />
<area shape=rect	coords=867,542,913,559	href="/dbget-bin/www_bget?K18014+4.3.1.14+R03030"	title="K18014 (kal), 4.3.1.14, R03030" />
<area shape=poly	coords=895,468,895,520,897,520,897,468	href="/dbget-bin/www_bget?R01171+R09738"	title="R01171, R09738" />
<area shape=poly	coords=895,520,895,521,897,521,897,520	href="/dbget-bin/www_bget?R01171+R09738"	title="R01171, R09738" />
<area shape=poly	coords=895,521,896,523,898,523,897,521	href="/dbget-bin/www_bget?R01171+R09738"	title="R01171, R09738" />
<area shape=poly	coords=896,523,896,524,898,524,898,523	href="/dbget-bin/www_bget?R01171+R09738"	title="R01171, R09738" />
<area shape=poly	coords=896,524,897,525,899,525,898,524	href="/dbget-bin/www_bget?R01171+R09738"	title="R01171, R09738" />
<area shape=poly	coords=897,525,898,527,900,527,899,525	href="/dbget-bin/www_bget?R01171+R09738"	title="R01171, R09738" />
<area shape=poly	coords=898,527,899,528,901,528,900,527	href="/dbget-bin/www_bget?R01171+R09738"	title="R01171, R09738" />
<area shape=poly	coords=900,527,902,527,902,529,900,529	href="/dbget-bin/www_bget?R01171+R09738"	title="R01171, R09738" />
<area shape=poly	coords=901,528,902,529,904,529,903,528	href="/dbget-bin/www_bget?R01171+R09738"	title="R01171, R09738" />
<area shape=poly	coords=903,528,905,528,905,530,903,530	href="/dbget-bin/www_bget?R01171+R09738"	title="R01171, R09738" />
<area shape=poly	coords=905,528,987,528,987,530,905,530	href="/dbget-bin/www_bget?R01171+R09738"	title="R01171, R09738" />
<area shape=rect	coords=1028,520,1074,537	href="/dbget-bin/www_bget?K01034+K01035+2.8.3.9+R01365"	title="K01034 (atoD), K01035 (atoA), 2.8.3.9, R01365" />
<area shape=rect	coords=554,133,600,150	href="/dbget-bin/www_bget?K18202+4.2.3.134+R10270"	title="K18202 (AGXT2L2), 4.2.3.134, R10270" />
<area shape=rect	coords=428,133,474,150	href="/dbget-bin/www_bget?K18201+2.7.1.81+R03378"	title="K18201 (AGPHD1), 2.7.1.81, R03378" />
<area shape=rect	coords=873,78,1043,112	href="/kegg-bin/show_pathway?map00311"	title="map00311: Penicillin and cephalosporin biosynthesis" onMouseOver="popupTimer(&quot;map00311&quot;, &quot;map00311: Penicillin and cephalosporin biosynthesis&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=rect	coords=1259,451,1339,476	href="/kegg-bin/show_pathway?map00020"	title="map00020: Citrate cycle (TCA cycle)" onMouseOver="popupTimer(&quot;map00020&quot;, &quot;map00020: Citrate cycle (TCA cycle)&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=rect	coords=40,45,217,70	href="/dbget-bin/www_bget?map00310"	title="map00310: Lysine degradation" onMouseOver="popupTimer(&quot;map00310&quot;, &quot;map00310: Lysine degradation&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=rect	coords=14,293,93,327	href="/kegg-bin/show_pathway?map00300"	title="map00300: Lysine biosynthesis" onMouseOver="popupTimer(&quot;map00300&quot;, &quot;map00300: Lysine biosynthesis&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
<area shape=rect	coords=79,354,156,388	href="/kegg-bin/show_pathway?map00780"	title="map00780: Biotin metabolism" onMouseOver="popupTimer(&quot;map00780&quot;, &quot;map00780: Biotin metabolism&quot;, &quot;#ffffff&quot;)" onMouseOut="hideMapTn()" />
</map>
<div id="poplay" class="poplay" />

</body>
</html>
