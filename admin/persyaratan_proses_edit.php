<?php  
	include_once('koneksi.php');

	if (isset($_POST['simpan'])) {
		$id_persyaratan = $_POST['id_persyaratan'];
		$nama_persyaratan = $_POST['nama_persyaratan'];

		$data = mysql_query("UPDATE `persyaratan` SET `nama_persyaratan` = '$nama_persyaratan' WHERE `persyaratan`.`id_persyaratan` = '$id_persyaratan';",$conn);
		if ($data==true) {
			echo '<script language="javascript">alert("Data Berhasil Disimpan!"); document.location="persyaratan.php"</script>';
		} else {
			echo '<script language="javascript">alert("Data Gagal Disimpan!"); document.location="persyaratan.php"</script>';
		}
	}
?>