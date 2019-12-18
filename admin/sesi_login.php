<?php
session_start();
 
if(!isset($_SESSION['password']) AND !isset($_SESSION['id_pengguna'])){
 echo '<script language="javascript">alert("Akses Ditolak!"); document.location="/sorting/index.php";</script>';
} else {

include("koneksi.php");
$id_pengguna = $_SESSION['id_pengguna'];

$user = mysql_query("SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'",$conn);
	while ($data = mysql_fetch_array($user)) {
	$username = $data['username'];
	$password = $data['password'];
	$level = $data['level'];
	$status = $data['status'];
	}
}
?>