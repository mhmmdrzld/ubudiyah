<?php
	include 'koneksi.php';

	$id_tahun_pelajaran  = $_GET['id'];
	$query = "DELETE from tahun_pelajaran where id_tahun_pelajaran='$id_tahun_pelajaran'";

	$data = mysql_query($query);
	if ($data==true) {
		echo '<script language="javascript">alert("Data Berhasil Dihapus!"); document.location="tahun_pelajaran.php"</script>';
	} else {
		echo '<script language="javascript">alert("Data Gagal Dihapus!"); document.location="tahun_pelajaran.php"</script>';
	}
?>