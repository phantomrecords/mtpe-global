<?php

//check for required fields from the form
if (!$_POST[selection_id]) {
    header("Location: javascript:self.history.go(0)");
    exit;
}

//connect to server and select database
$conn = mysql_connect("localhost", "phantom_com", "777777") or die(mysql_error());
mysql_select_db("db_phantom_com",$conn)  or die(mysql_error());

   //delete from table
   $del_item = "DELETE FROM complaints WHERE id = $_POST[selection_id]";
   mysql_query($del_item);

   //prepare page for printing
   $display_block = "<br><STRONG><font color=#FFFFFF face=Tahoma size=2>Item Status:</font></STRONG><br>
   <font color=#FFFFFF face=Tahoma size=1>You have successfully deleted the item(s). <a href=\"complaints.php\">Return to menu</a></font>";

?>

<html>
<head>
<title>Item(s) Deleted</title>
</head>
<body topmargin="0" leftmargin="0" bgcolor="#5D6A7F" background="images/default_36.png" BGPROPERTIES="fixed"  LINK="#FFFFFF" VLINK="#FFFFFF" ALINK="#C0C0C0">
<? print $display_block; ?>
</body>
</html>