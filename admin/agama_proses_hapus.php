<?php
	include 'koneksi.php';

	$id_agama  = $_GET['id'];
	$query = "DELETE from agama where id_agama='$id_agama'";

	$data = mysql_query($query);
	if ($data==true) {
		echo '<script language="javascript">alert("Data Berhasil Dihapus!"); document.location="agama.php"</script>';
	} else {
		echo '<script language="javascript">alert("Data Gagal Dihapus!"); document.location="agama.php"</script>';
	}
?>