<?php

require_once 'includes/db.php';

$con = mysql_connect('localhost', 'root', '');

if (!$con) {
	die (mysql_error());
}

$db = mysql_select_db('kova0058', $con);

if (!$db) {
	die (mysql_error());
}

 $sql = "INSERT INTO kits (name,
 pad1, pad2, pad3, pad4,
 pad5, pad6, pad7, pad8, 
 pad9, pad10, pad11, pad12,
 pad13, pad14, pad15, pad16)
 VALUES
 ($_POST[saveKitName], )";

if (!mysql_query($sql, $con)) {
	
  	die('Error: ' . mysql_error());
  }
  
else {
	header('location: index.php');
	mysql_close($con);
}
?>
