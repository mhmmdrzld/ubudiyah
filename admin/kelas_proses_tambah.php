<?php  
	include_once('koneksi.php');

	if (isset($_POST['simpan'])) {

		$nama_kelas = $_POST['nama_kelas'];

		$data = mysql_query("INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES (NULL, '$nama_kelas');",$conn);
		if ($data==true) {
			echo '<script language="javascript">alert("Data Berhasil Disimpan!"); document.location="kelas.php"</script>';
		} else {
			echo '<script language="javascript">alert("Data Gagal Disimpan!"); document.location="kelas.php"</script>';
		}
	}
?>