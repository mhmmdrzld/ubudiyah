<?php  
	include_once('koneksi.php');

	if (isset($_POST['simpan'])) {

		$nama_persyaratan = $_POST['nama_persyaratan'];

		$data = mysql_query("INSERT INTO `persyaratan` (`id_persyaratan`, `nama_persyaratan`) VALUES (NULL, '$nama_persyaratan');",$conn);
		if ($data==true) {
			echo '<script language="javascript">alert("Data Berhasil Disimpan!"); document.location="persyaratan.php"</script>';
		} else {
			echo '<script language="javascript">alert("Data Gagal Disimpan!"); document.location="persyaratan.php"</script>';
		}
	}
?>