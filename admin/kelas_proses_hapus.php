<?php
	include 'koneksi.php';

	$id_kelas  = $_GET['id'];
	$query = "DELETE from kelas where id_kelas='$id_kelas'";

	$data = mysql_query($query);
	if ($data==true) {
		echo '<script language="javascript">alert("Data Berhasil Dihapus!"); document.location="kelas.php"</script>';
	} else {
		echo '<script language="javascript">alert("Data Gagal Dihapus!"); document.location="kelas.php"</script>';
	}
?>