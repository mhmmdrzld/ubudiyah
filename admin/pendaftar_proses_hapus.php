<?php
	include 'koneksi.php';

	$id_pendaftar  = $_GET['id'];
	$query = "DELETE from pendaftar where id_pendaftar='$id_pendaftar'";

	$data = mysql_query($query);
	if ($data==true) {
		echo '<script language="javascript">alert("Data Berhasil Dihapus!"); document.location="pendaftar.php"</script>';
	} else {
		echo '<script language="javascript">alert("Data Gagal Dihapus!"); document.location="pendaftar.php"</script>';
	}
?>