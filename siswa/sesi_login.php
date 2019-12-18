<?php
session_start();
 
if(!isset($_SESSION['password']) AND !isset($_SESSION['id_pengguna'])){
 echo '<script language="javascript">alert("Akses Ditolak!"); document.location="../index.php";</script>';
} else {

include("koneksi.php");
$id_pengguna = $_SESSION['id_pengguna'];

$user = mysql_query("SELECT * FROM `pengguna` JOIN pendaftar ON pendaftar.id_pendaftar=pengguna.id_pendaftar WHERE pengguna.id_pengguna = '$id_pengguna'",$conn);
	while ($data = mysql_fetch_array($user)) {
	$username = $data['username'];
	$no_pendaftar = $data['no_pendaftar'];
	$nama_pendaftar = $data['nama_pendaftar'];
	$id_pendaftar = $data['id_pendaftar'];
	$password = $data['password'];
	$level = $data['level'];
	$status = $data['status'];
	$status_pendaftar = $data['status_pendaftar'];
	}
}
?>