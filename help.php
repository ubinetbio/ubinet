<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="icon" href="images/UbiNet.ico" type="image/x-icon">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/andreas01.css" media="screen" title="andreas01 (screen)" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />

<title>UbiNet: Help page</title>
</head>

<style type="text/css">
<!--
#wrap #content {
	text-align: justify;
}
-->
</style>

<body><div id="wrap">

<?php
//---------------------top.html--------------------------//
include("top.html");
include("left_menu.html");
?>
</div>


  <div id="content" width="100% height="100%>
  	<hr />
	&nbsp;
    <h2><b><strong><p>Help page for UbiNet...</p></strong></b></h2>
    <hr />
    
    <p><strong class="style1">UbiNet</strong> is a web-based system that provides a comprehensive collection of available ubiquitinated substrate proteins, ligating enzyme E3,  E3-substrate specificities and a systematic framework for the analysis of E3 ligase regulatory networks in protein ubiquitination, focusing on Human organism. Currently, <strong>UbiNet</strong> contains 499 E3s and 14692 ubiquintinated substrate proteins in Human, and 10437 E3-substrate specific relations between 438 E3s and 2839 ubiquitinated substrate proteins. In addition, 2143 records of E3-associated functional categories (including pathway, cellular process, molecular function, cellular localization, protein complex, protein family, and disease) were collected serving for the analysis.
      The UbiNet system, as shown in <strong>Figure 1</strong>, contains 4 major parts, including: Networks analysis, E3 Ligases, E3-Associated Functional, and Ubi-Prediction. Besides, the UbiNet system provided some additional other functions (including: Statistics, Download, Help, and Contact) to support users easily in exploiting the UbiNet system. </p>
    <img src='images/Homepage.png' width="100%" height="150%" class="center" />  
    <blockquote>
      <p><em>Figure 1. Homepage of the UbiNet system</em></p>
    </blockquote>
    <p>&nbsp;</p>
    <p>The details of functionalities are described as follows:</p>
    <p><strong><span style="color: #F0F">1. Network Analysis</span></strong>. 
            This function was provided to serve for the investigation of regulatory networks in protein ubiquitination. To reconstruct the networks, users need to input  a list of genes (containing E3 ligases, ubiquitinated substrate proteins, or  interacting proteins). If the query list contains only E3s, our system will  visualize networks of these E3s with all possible ubiquitinated substrate  proteins. Otherwise, our system will show networks between E3s ligases,  ubiqtuinated substrate proteins, and interacting protein in the given list. <strong>Figure 2</strong> (default case) presents the E3-substrate regulatory network drawn for the query list of 20 proteins: WWP1; SMURF2; MDM2; SMAD5; CPSF6;  ATN1; KLF5; NUMB; ARRB2; JUN; EEF1G; ACOX3; SKIL; GNL3; TAF1; NFE2; TP73; SOCS6;  AKAP5; FOXO3; ZNF638; DAB2; VHL; MOB4; HIF1A. </p>
          <img src='images/NetworkAnalysis_Default.png' width="100%" height="100%" class="center" /> 
      <blockquote>
        <p> <em>Figure 2. The E3-substrate regulatory network constructed for the default case from function <span style="color: #00C"><strong>Network Analysis</strong></span></em></p>
    </blockquote>
      <p>	In addition, our system  will check for all interacting proteins (non-Ubi-substrate proteins; non-E3  ligases) and provide the prediction function for these proteins. To see this  function, users should follow the two steps, as shown in <strong>Figure</strong> <strong>3</strong>:  Step 1. Select one of the interacting proteins; Step 2. Go to the result-page  if the query protein is predicted as Ubiquitinated protein. After a while of  waiting, the result page will be displayed to show in detail the prediction  result for the query protein, as shown in <strong>Figure</strong> <strong>4</strong>. </p>
      <p><img src='images/UbiSite_Prediction_For_InteractingProtein.png' alt="" width="100%" height="100%" class="center" /> </p>
      <blockquote>
        <p> <em>Figure 3. The UbiSite prediction provided to predict for interacting protein<span style="color: #00C"><strong></strong></span></em></p>
      </blockquote>
      <p><img src='images/UbiSite_Prediction_Results_For_FOXO3.png' alt="" width="100%" height="100%" class="center" /> </p>
      <blockquote>
        <p> <em>Figure 4. The results of UbiSite-prediction when predicted for interacting protein {gene: FOXO3; ID: FOXO3_HUMAN}<span style="color: #00C"><strong></strong></span></em></p>
      </blockquote>
      <p><strong><span style="color: #F0F">2. E3 Ligases</span></strong>. This function was provided as a database of E3 ligases. All the relative information was listed as shown in <strong>Figure 5,</strong> including supporting E3s’ information. Also, the number of Ubi-substrate proteins was calculated and browsed serving for users’ interests. 
          To investigate the information related to each E3 ligase, users just only click on link corresponding to the rows representing for this E3 ligase. For example, if users want to investigate information of all substrate proteins which are potentially recognized by the E3 ligase, they just click on number-link of “No. of protein potentially recognized by E3” column that is corresponding to the row of the E3. Consequently, the results will be displayed in a new form being opened thereafter. <strong>Figure 6</strong> shows results of all substrate protein which are potentially regulated by the E3 ligase having ID = ARNT_HUMAN. Similarly, users can directly construct the E3-substrate regulatory networks of this E3 ligase and all possible substrate proteins by clicking on the corresponding Construct-link of the “Networks”. A new form will be opened containing the resulting networks. <strong>Figure 7</strong> demonstrated results of interactional regulatory networks regulated by the E3 ligase having ID=ARNT_HUMAN.</p>
          <p><img src='images/E3Ligases.png' width="100%" height="100%" class="center" /> </p>
            <blockquote>
              <p> <em>Figure 5. Database of E3 Ligases (Function of E3 Ligases)</em></p>
            </blockquote>
          <p>&nbsp;</p>
          <p><img src='images/ListOfSubsRecognizedByE3_ARNT_HUMAN.png' width="100%" height="100%" class="center" /> </p>
            <blockquote>
              <p> <em>Figure 6. List of all substrate proteins which are recognized by E3{id=ARNT_HUMAN}</em></p>
            </blockquote>
          <p>&nbsp;</p>
          <p><img src='images/NetworkRecognizedByE3_ARNT_HUMAN.png' width="100%" height="100%" class="center" /> </p>
            <blockquote>
              <p> <em>Figure 7. The E3-substrate regulatory network constructed based on E3{id=ARNT_HUMAN} recognition </em></p>
            </blockquote>
          <p>&nbsp;</p>
            
    <p><strong><span style="color: #F0F">3. E3-Associated Functional</span></strong>. This page shows all E3 ligases along with its associated functional category (including: pathway, disease, cellular protein, cellular localization, molecular function, protein complex, and protein family), as shown in <strong>Figure 8</strong>. In addition, this page provides function to construct and view the interacting network between E3 ligase and substrate proteins.</p>
    <p><img src='images/E3_Associated_Functional_Category.png' alt="" width="100%" height="100%" class="center" /></p>
    <blockquote>
      <p> <em>Figure 8. The web-page of function <strong><span style="color: #F0F">E3-Associated Functional</span></strong></em></p>
    </blockquote>    
    <p><strong><span style="color: #F0F">4. Ubi-Prediction</span></strong>. In addition to the investigation of E3-substrate regulatory networks in protein ubiquitination, we provided UbiSite-prediction function as a ubiquitination sites prediction tool for all 7600 unique interacting proteins (proteins were not verified as E3 ligases or ubiquitinated substrate proteins) in our current database. Applying Support Vector Machine, and our previous work of <a href="http://csb.cse.yzu.edu.tw/UbiSite/">UbiSite</a>, we predicted for all these 7600 unique interacting proteins and using SVM-score to conclude whether a site is ubiquitination site. Also the corresponding substrate motif is provided to users for their further investigations. The results, as shown in Figure 9, including: Protein ID; Ubiquitination site/position; the corresponding fragment; SVM-score; and the corresponding substrate motif.</p>
    <p><img src='images/Webpage_Of_Ubi_Prediction.png' alt="" width="100%" height="100%" class="center" /></p>
    <blockquote>
      <p> <em>Figure 9. The web-page of function<strong><span style="color: #F0F">Ubi-Prediction</span></strong></em></p>
    </blockquote>
    <p><strong><span style="color: #F0F">5. Statistics</span></strong>. All the data served for this study were summarized in this function.</p>
    <p><strong><span style="color: #F0F">6. Download</span></strong>. This page will direct users go to the page, where they can freely download our data for their further analysis.</p>
    <p><strong><span style="color: #F0F">7. Help</span></strong>. This function will help provide more understanding about our system and the its functions, so that users can exploit our systems and its functions in such a effective and effecient ways.</p>
    <p><strong><span style="color: #F0F">8. Contact</span></strong>. If have any problems or any questions, users can contact with us via this function by sending email.</p>
    

  </div>


<?php
include("footer.html");
?>

</body>
</html>

