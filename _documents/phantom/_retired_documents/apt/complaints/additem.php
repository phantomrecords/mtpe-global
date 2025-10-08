<?php

//connect to server and select database
$conn = mysql_connect("localhost", "phantom_com", "777777") or die(mysql_error());
mysql_select_db("db_phantom_com",$conn) or die(mysql_error());

//create and issue the query
//$sql = "SELECT id, make, model, size, selection, note, misc1, misc2 FROM complaints WHERE id = '$_GET[id]'";
//$result = mysql_query($sql,$conn) or die(mysql_error());

   //if (mysql_num_rows($result) == 1) {

   //go through the result set and display data
   //while ($array = mysql_fetch_array($result)) {
      //give a name to the fields
      //$id = $array['id'];
      //$make = $array['make'];
      //$model = $array['model'];
      //$size = $array['size'];
      //$selection = $array['selection'];
      //$note = $array['note'];
      //$misc1 = $array['misc1'];
      //$misc2 = $array['misc2'];

             $display_block = "<FORM METHOD=\"POST\" ACTION=\"additemcheck.php\" style=\"margin-bottom:0; margin-top:0; margin-right:0; margin-left:0;\">
<TABLE width=\"309\" BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\" height=\"148\">
	<TR>
    <TD background=\"images/default_36.png\">

<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\" style=\"margin-bottom:0; margin-top:0; margin-right:0; margin-left:0;\">
  <TR>
    <TD><STRONG><font color=\"#FFFFFF\" face=\"Tahoma\" size=\"2\">Brand:</font></STRONG><BR>
<INPUT TYPE=\"text\" NAME=\"make\" size=\"16\" style=\"font-family: Tahoma; font-size: 10pt; background-color: #DFDFDF; font-weight: bold; border: 1 solid #FF6600\"></TD>
    <TD><STRONG><FONT COLOR=\"#FFFFFF\" FACE=\"Tahoma\" SIZE=\"2\">&nbsp;</FONT></STRONG></TD>

    <TD><STRONG><font face=\"Tahoma\" color=\"#FFFFFF\" size=\"2\">Name:</font></STRONG><BR>
<INPUT NAME=\"model\" size=\"16\" style=\"font-family: Tahoma; font-size: 10pt; background-color: #DFDFDF; font-weight: bold; border: 1 solid #FF6600\"></TD>
  </TR>

  <TR>
    <TD><STRONG><FONT COLOR=\"#FFFFFF\" FACE=\"Tahoma\" SIZE=\"2\">Size:</FONT></STRONG><BR>
<INPUT TYPE=\"text\" NAME=\"size\" size=\"16\" style=\"font-family: Tahoma; font-size: 10pt; background-color: #DFDFDF; font-weight: bold; border: 1 solid #FF6600\"></TD>
    <TD></TD>

    <TD><STRONG><font color=\"#FFFFFF\" face=\"Tahoma\" size=\"2\">Note:</font></STRONG><BR>
<INPUT TYPE=\"text\" NAME=\"note\" size=\"16\" style=\"font-family: Tahoma; font-size: 10pt; background-color: #DFDFDF; font-weight: bold; border: 1 solid #FF6600\"></TD>
  </TR>

            <TR><TD><STRONG><font color=\"#FFFFFF\" face=\"Tahoma\" size=\"2\">Misc 1:</font></STRONG><BR>
<INPUT TYPE=\"text\" NAME=\"misc1\" value=\"$misc1\" size=\"16\" style=\"font-family: Tahoma; font-size: 10pt; background-color: #DFDFDF; font-weight: bold; border: 1 solid #FF6600\"></TD>
    <TD><STRONG><FONT COLOR=\"#FFFFFF\" FACE=\"Tahoma\" SIZE=\"2\">&nbsp;</FONT></STRONG></TD>

    <TD><STRONG><FONT COLOR=\"#FFFFFF\" FACE=\"Tahoma\" SIZE=\"2\">Misc 2:</FONT></STRONG><BR>
<INPUT TYPE=\"text\" NAME=\"misc2\" size=\"16\" style=\"font-family: Tahoma; font-size: 10pt; background-color: #DFDFDF; font-weight: bold; border: 1 solid #FF6600\"></TD>
  </TR>";

        //}

   //}

	$display_block .= "<TR><TD COLSPAN=\"3\"><INPUT TYPE=\"SUBMIT\" NAME=\"submit\" VALUE=\"Add Item\" style=\"font-family: Tahoma; font-size: 8pt; border-style: solid; border-width: 1\">
<font color=\"#FFFFFF\" face=\"Tahoma\" size=\"2\"><A HREF=\"complaints.php\">Cancel (Do Not Add)</A></font>
    </TD>
  </TR>
</TABLE>
        </TD>
	</TR>
</TABLE>
</FORM>";

?>
<HTML>
<HEAD>
<TITLE>Add Item</TITLE>
</HEAD>
<BODY topmargin="0" leftmargin="0" bgcolor="#5D6A7F" background="images/default_36.png" LINK="#FFFFFF" VLINK="#FFFFFF" ALINK="#C0C0C0">
<? print $display_block; ?>
</BODY>
</HTML>
