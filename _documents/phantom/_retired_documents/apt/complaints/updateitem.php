<?php
//check for required fields from the form
if ((!$_POST[model]) || (!$_POST[make])) {
    header("Location: javascript:self.history.go(0)");
    exit;
}

//connect to server and select database
$conn = mysql_connect("localhost", "phantom_com", "777777") or die(mysql_error());
mysql_select_db("db_phantom_com",$conn)  or die(mysql_error());

//create and issue the query
$sql = "SELECT id, make, model, size, selection, note, misc1, misc2 FROM complaints WHERE id = '$_GET[id]'";
$result = mysql_query($sql,$conn) or die(mysql_error());

//insert into tables

      //connect to database
      $conn = mysql_connect("localhost", "phantom_com", "777777") or die(mysql_error());
      mysql_select_db("db_phantom_com",$conn) or die(mysql_error());

      //add to table
      $add_item = "UPDATE complaints SET make= '$_POST[make]', model = '$_POST[model]', size = '$_POST[size]', note = '$_POST[note]', misc1 = '$_POST[misc1]', misc2 = '$_POST[misc2]' WHERE id = '$_GET[id]'";
      mysql_query($add_item) or die(mysql_error());

   //prepare signup status for printing
   $display_block = "<br><STRONG><font color=#FFFFFF face=Tahoma size=2>Item Status:</font></STRONG><br>
   <font color=#FFFFFF face=Tahoma size=1>You have successfully updated the item. <a href=\"complaints.php\">Return to menu</a></font>";

?>

<html>
<head>
<title>Item Updated</title>
</head>
<body topmargin="0" leftmargin="0" bgcolor="#5D6A7F" background="images/default_36.png" BGPROPERTIES="fixed"  LINK="#FFFFFF" VLINK="#FFFFFF" ALINK="#C0C0C0">
<? print $display_block; ?>
</body>
</html>