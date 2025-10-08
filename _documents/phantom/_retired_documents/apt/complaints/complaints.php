<?php

   //connect to server and select database
   $conn = mysql_connect("localhost", "phantom_com", "777777") or die(mysql_error());
   mysql_select_db("db_phantom_com",$conn) or die(mysql_error());

   //create and issue the query
   $sql = "SELECT id, make, model, size, selection, note, misc1, misc2 FROM complaints ORDER BY make, model, size ASC";
   $result = mysql_query($sql,$conn) or die(mysql_error());

   //}

   //place a heading at the start of the page
   $display_block = "<FORM METHOD=\"POST\" NAME=\"deletion_form\" ACTION=\"deleteselections.php\" style=\"margin-bottom:0; margin-top:0; margin-right:0; margin-left:0;\">";

   //insert a script
   $display_block .= "<SCRIPT language=\"JavaScript\">function submitform() {
   document.deletion_form.submit();
   }
   </SCRIPT>";

$display_block .= "<font color=\"#FFFFFF\" face=\"Tahoma\" size=\"1\"><IMG BORDER=\"0\" SRC=\"small-computerconfiguration.gif\" width=\"16\" height=\"17\"> Repair List | <A HREF=\"additem.php\"><b>Add</b></A> | <A HREF=\"javascript:submitform();\"><b>Delete</b></A> | <A HREF=\"complaints.php\">Refresh</A> | <A HREF=\"complaints_printable.php\" TARGET=\"_blank\">Printable Version</A></font><BR>";

   //go through each row in the result set and display data
   while ($array = mysql_fetch_array($result)) {
      //give a name to the fields
      $id = $array['id'];
      $make = $array['make'];
      $model = $array['model'];
      $size = $array['size'];
      $note = $array['note'];
      $selection = $array['selection'];
      $misc1 = $array['misc1'];
      $misc2 = $array['misc2'];

   //prepare download menu for printing
   $display_block .= "<font color=\"#FFFFFF\" face=\"Tahoma\" size=\"1\"><IMG BORDER=\"0\" SRC=\"small-computerconfiguration.gif\" width=\"16\" height=\"17\">";

   $display_block .= "<INPUT TYPE=\"checkbox\" NAME=\"selection_id\" VALUE=\"$id\"> ";

   $display_block .= "<a href=\"edititem.php?id=$id\">$make</a> [$model] $size</font><br>";

}

$display_block .= "<font color=\"#FFFFFF\" face=\"Tahoma\" size=\"1\"><IMG BORDER=\"0\" SRC=\"small-computerconfiguration.gif\" width=\"16\" height=\"17\"> Repair List | <A HREF=\"additem.php\"><b>Add</b></A> | <A HREF=\"javascript:submitform();\"><b>Delete</b></A> | <A HREF=\"complaints.php\">Refresh</A> | <A HREF=\"complaints_printable.php\" TARGET=\"_blank\">Printable Version</A></FONT></FORM><p></p>";

?>
<HTML>
<HEAD>
<TITLE>Shopping List Items</TITLE>
</HEAD>
<BODY topmargin="0" leftmargin="0" bgcolor="#5D6A7F" background="images/default_36.png" BGPROPERTIES="fixed"  LINK="#FFFFFF" VLINK="#FFFFFF" ALINK="#C0C0C0">
<? print $display_block; ?>
</BODY>
</HTML>
