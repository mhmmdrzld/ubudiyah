<?php  
	include_once('koneksi.php');

	if (isset($_POST['simpan'])) {
		$id_kelas = $_POST['id_kelas'];
		$nama_kelas = $_POST['nama_kelas'];

		$data = mysql_query("UPDATE `kelas` SET `nama_kelas` = '$nama_kelas' WHERE `kelas`.`id_kelas` = '$id_kelas';",$conn);
		if ($data==true) {
			echo '<script language="javascript">alert("Data Berhasil Disimpan!"); document.location="kelas.php"</script>';
		} else {
			echo '<script language="javascript">alert("Data Gagal Disimpan!"); document.location="kelas.php"</script>';
		}
	}
?>