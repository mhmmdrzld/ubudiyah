<?php
	$conn = mysql_connect('localhost', 'root', '');
	$koneksi = mysql_select_db("ubudiyah", $conn) or die (mysql_error());
?>