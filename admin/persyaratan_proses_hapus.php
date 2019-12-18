<?php
	include 'koneksi.php';

	$id_persyaratan  = $_GET['id'];
	$query = "DELETE from persyaratan where id_persyaratan='$id_persyaratan'";

	$data = mysql_query($query);
	if ($data==true) {
		echo '<script language="javascript">alert("Data Berhasil Dihapus!"); document.location="persyaratan.php"</script>';
	} else {
		echo '<script language="javascript">alert("Data Gagal Dihapus!"); document.location="persyaratan.php"</script>';
	}
?>