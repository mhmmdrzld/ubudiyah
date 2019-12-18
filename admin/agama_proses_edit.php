<?php  
	include_once('koneksi.php');

	if (isset($_POST['simpan'])) {
		$id_agama = $_POST['id_agama'];
		$nama_agama = $_POST['nama_agama'];

		$data = mysql_query("UPDATE `agama` SET `nama_agama` = '$nama_agama' WHERE `agama`.`id_agama` = '$id_agama';",$conn);
		if ($data==true) {
			echo '<script language="javascript">alert("Data Berhasil Disimpan!"); document.location="agama.php"</script>';
		} else {
			echo '<script language="javascript">alert("Data Gagal Disimpan!"); document.location="agama.php"</script>';
		}
	}
?>