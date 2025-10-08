<?php

   //connect to server and select database
   $conn = mysql_connect("localhost", "phantom_com", "777777") or die(mysql_error());
   mysql_select_db("db_phantom_com",$conn) or die(mysql_error());

   //create and issue the query
   $sql = "SELECT id, make, model, size, selection, note, misc1, misc2 FROM complaints ORDER BY make, model, size ASC";
   $result = mysql_query($sql,$conn) or die(mysql_error());

   //}

   //place a heading at the start of the page
   $display_block = "<font color=\"##000000\" face=\"Tahoma\" size=\"1\"><IMG BORDER=\"0\" SRC=\"small-computerconfiguration.gif\" width=\"16\" height=\"17\"> Repair List | <A HREF=\"additem.php\"><b>Add Item</b></A> | <A HREF=\"javascript:this.print();\">Print</A></font><BR>";

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
   $display_block .= "<font color=\"#000000\" face=\"Tahoma\" size=\"1\"><IMG BORDER=\"0\" SRC=\"small-computerconfiguration.gif\" width=\"16\" height=\"17\">";

   //if selected show checked box
   if ($selection == 1) {  
        $display_block .= "<INPUT TYPE=\"checkbox\" VALUE=\"ON\"> ";
        }
 
   //if not selected show unchecked box
   if ($selection == 0) {  
        $display_block .= "<INPUT TYPE=\"checkbox\" VALUE=\"OFF\"> ";
        }

   $display_block .= "<a href=\"edititem.php?id=$id\">$make</a> [$model] $size</font><br>";

}

$display_block .= "<p></p>";

?>
<HTML>
<HEAD>
<TITLE>Repair List Items (Printable)</TITLE>
</HEAD>
<BODY topmargin="0" leftmargin="0" LINK="#000000" VLINK="#000000" ALINK="#000000">
<? print $display_block; ?>
</BODY>
</HTML>
