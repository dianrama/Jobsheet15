<?php 
mysql_connect("localhost", "root", "");
mysql_select_db("showroommobil");

$sql = "SELECT * FROM `mobil`";
$query = mysql_query($sql);
?>
