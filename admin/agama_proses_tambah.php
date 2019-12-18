<?php  
	include_once('koneksi.php');

	if (isset($_POST['simpan'])) {

		$nama_agama = $_POST['nama_agama'];

		$data = mysql_query("INSERT INTO `agama` (`id_agama`, `nama_agama`) VALUES (NULL, '$nama_agama');",$conn);
		if ($data==true) {
			echo '<script language="javascript">alert("Data Berhasil Disimpan!"); document.location="agama.php"</script>';
		} else {
			echo '<script language="javascript">alert("Data Gagal Disimpan!"); document.location="agama.php"</script>';
		}
	}
?>