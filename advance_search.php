</div>

<div id="extras">
</div>

<div id="content">

<br><br>
<table align=center width="745" cellpadding="2">
            <tr>
              <td width="100%" height="93" bgcolor="#E6E6FA">
		<form name="form_kw" action="search.php?search_type=keyword" method="post">
                  <p><img src="images/p_01.gif" alt="">&nbsp;<span class="style8"><strong>Search by Protein Keyword</strong></span><br><br>
&nbsp;&nbsp;&nbsp;&nbsp; <span class="style11">
          <select name="keyword_type" class="style5">
            <option value="protein_name" selected>Protein Name</option>
            <option value="gene_name">Gene Name</option>
          </select>
          </span>
          <input name="keyword_value" type="text" class="style5">
          (eg. protein name = Ubiquitin-protein ligase E3A)<br><br>
		  &nbsp;&nbsp;&nbsp;&nbsp;
          <input name="Submit1" type="submit" class="style5" value="Submit"><input type="button" value="Example" onclick="javascript:Keyword_example();">
                  </p>
              </form></td>
            </tr>
            <tr>
              <td bgcolor="#FFEFD5"><form name="form_db" action="search.php?search_type=db_id" method="post">
                  <p><img src="images/p_01.gif" alt="">&nbsp;<span class="style8"><strong>Search by Database ID</strong></span><br><br>
&nbsp;&nbsp;&nbsp;&nbsp; <span class="style11">
          <select name="db_type" class="style5">
            <option value="swiss_id" selected>UniProtKB ID</option>
            <option value="swiss_ac">UniProtKB AC</option>
            <option value="PDB_ID">PDB ID</option>
            <option value="go">GO ID</option>
            <option value="interpro">InterPro ID</option>
          </select>
          </span>
          <input name="db_value" type="text" class="style5">
           (eg. UniProtKB ID/AC = UBE3A_HUMAN/Q05086 or PDB ID = 2KR1)<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="Submit2" type="submit" class="style5" value="Submit"><input type="button" value="Example" onclick="javascript:DB_ID_example();">
                  </p>
              </form></td>
            </tr>
            <tr>
              <td bgcolor="#E6E6FA"><form action="search.php?search_type=seq" method="post">
                  <p><img src="images/p_01.gif" alt="">&nbsp;<span class="style8"><strong>Search by Protein Sequence </strong></span>(<font color=red><b>FASTA</b> format</font>)<br>
&nbsp;&nbsp;&nbsp;&nbsp; <span class="style11">
          <textarea name="sequence" cols="84" rows="6">>UBE3A_HUMAN
MEKLHQCYWKSGEPQSDDIEASRMKRAAAKHLIERYYHQLTEGCGNEACTNEFCASCPTFLRMDNNAAAIKALELYKINAKLCDPHPSKKGASSAYLENSKGAPNNSCSEIKMNKKGARIDFKDVTYLTEEKVYEILELCREREDYSPLIRVIGRVFSSAEALVQSFRKVKQHTKEELKSLQAKDEDKDEDEKEKAACSAAAMEEDSEASSSRIGDSSQGDNNLQKLGPDDVSVDIDAIRRVYTRLLSNEKIETAFLNALVYLSPNVECDLTYHNVYSRDPNYLNLFIIVMENRNLHSPEYLEMALPLFCKAMSKLPLAAQGKLIRLWSKYNADQIRRMMETFQQLITYKVISNEFNSRNLVNDDDAIVAASKCLKMVYYANVVGGEVDTNHNEEDDEEPIPESSELTLQELLGEERRNKKGPRVDPLETELGVKTLDCRKPLIPFEEFINEPLNEVLEMDKDYTFFKVETENKFSFMTCPFILNAVTKNLGLYYDNRIRMYSERRITVLYSLVQGQQLNPYLRLKVRRDHIIDDALVRLEMIAMENPADLKKQLYVEFEGEQGVDEGGVSKEFFQLVVEEIFNPDIGMFTYDESTKLFWFNPSSFETEGQFTLIGIVLGLAIYNNCILDVHFPMVVYRKLMGKKGTFRDLGDSHPVLYQSLKDLLEYEGNVEDDMMITFQISQTDLFGNPMMYDLKENGDKIPITNENRKEFVNLYSDYILNKSVEKQFKAFRRGFHMVTNESPLKYLFRPEEIELLICGSRNLDFQALEETTEYDGGYTRDSVLIREFWEIVHSFTDEQKRLFLQFTTGTDRAPVGGLGKLKMIIAKNGPDTERLPTSHTCFNVLLLPEYSSKEKLKERLLKAITYAKGFGML
</textarea><br><br>
          </span> &nbsp;&nbsp;&nbsp;&nbsp;
          <input name="Submit12" type="submit" class="style5" value="Submit">
                  </p>
              </form></td>
	</tr>
</table>

</div>

