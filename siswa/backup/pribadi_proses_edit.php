<?php  
	include_once('koneksi.php');

	if (isset($_POST['simpan'])) {
		$no_pendaftar = $_POST['no_pendaftar'];
		$nama_persyaratan = $_POST['nama_persyaratan'];

		$data = mysql_query("INSERT INTO `biodata` (`id_biodata`, `no_pendaftar`, `nama_siswa`, `nik_siswa`, `tempat_lahir_siswa`, `tanggal_lahir_siswa`, `nama_ayah`, `nik_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `nama_ibu`, `nik_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `nama_wali`, `nik_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `hub_wali`) VALUES (NULL, '$no_pendaftar', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');",$conn);

		if ($data==true) {
			echo '<script language="javascript">alert("Data Berhasil Disimpan!"); document.location="persyaratan.php"</script>';
		} else {
			echo '<script language="javascript">alert("Data Gagal Disimpan!"); document.location="persyaratan.php"</script>';
		}
	}
?>