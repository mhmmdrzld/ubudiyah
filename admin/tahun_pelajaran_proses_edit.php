<?php  
	include_once('koneksi.php');

	if (isset($_POST['simpan'])) {
		$id_tahun_pelajaran = $_POST['id_tahun_pelajaran'];
		$nama_tahun_pelajaran = $_POST['nama_tahun_pelajaran'];

		$data = mysql_query("UPDATE `tahun_pelajaran` SET `nama_tahun_pelajaran` = '$nama_tahun_pelajaran' WHERE `tahun_pelajaran`.`id_tahun_pelajaran` = '$id_tahun_pelajaran';",$conn);
		if ($data==true) {
			echo '<script language="javascript">alert("Data Berhasil Disimpan!"); document.location="tahun_pelajaran.php"</script>';
		} else {
			echo '<script language="javascript">alert("Data Gagal Disimpan!"); document.location="tahun_pelajaran.php"</script>';
		}
	}
?>