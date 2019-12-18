<?php  
	include_once('koneksi.php');

	if (isset($_POST['simpan'])) {
		$no_pendaftar = $_POST['no_pendaftar'];
		$nama_pesdik = $_POST['nama_pesdik'];
		$nisn_pesdik = $_POST['nisn_pesdik'];
		$id_agama = $_POST['id_agama'];
		$tempat_lahir_pesdik = $_POST['tempat_lahir_pesdik'];
		$tanggal_lahir_pesdik = $_POST['tanggal_lahir_pesdik'];
		$id_kelas = $_POST['id_kelas'];
		$jk = $_POST['jk'];

		$nama_orang_tua = $_POST['nama_orang_tua'];
		$pekerjaan_orang_tua = $_POST['pekerjaan_orang_tua'];
		$id_agama_ortu = $_POST['id_agama_ortu'];
		$no_orang_tua = $_POST['no_orang_tua'];
		$alamat_orang_tua = $_POST['alamat_orang_tua'];
		$hub_orang_tua = $_POST['hub_orang_tua'];

		$nama_wali = $_POST['nama_wali'];
		$pekerjaan_wali = $_POST['pekerjaan_wali'];
		$id_agama_wali = $_POST['id_agama_wali'];
		$no_wali = $_POST['no_wali'];
		$alamat_wali = $_POST['alamat_wali'];
		$hub_wali = $_POST['hub_wali'];

		$data = mysql_query("INSERT INTO `peserta_didik` (`id_pesdik`, `no_pendaftar`, `nama_pesdik`, `nisn_pesdik`, `id_agama`, `tempat_lahir_pesdik`, `tanggal_lahir_pesdik`, `id_kelas`, `jk`) VALUES (NULL, '$no_pendaftar', '$nama_pesdik', '$nisn_pesdik', '$id_agama', '$tempat_lahir_pesdik', '$tanggal_lahir_pesdik', '$id_kelas', '$jk');",$conn);

		if ($data==true) {

            $hasil = mysql_query("SELECT * FROM peserta_didik WHERE no_pendaftar = '$no_pendaftar'");
            while($tabel = mysql_fetch_array($hasil)) {
              	$id_pesdik2 = $tabel['id_pesdik'];
            }

			$orang_tua = mysql_query("INSERT INTO `orang_tua` (`id_orang_tua`, `id_pesdik`, `nama_orang_tua`, `pekerjaan_orang_tua`, `id_agama`, `alamat_orang_tua`, `no_orang_tua`, `hub_orang_tua`) VALUES (NULL, '$id_pesdik2', '$nama_orang_tua', '$pekerjaan_orang_tua', '$id_agama_ortu', '$alamat_orang_tua', '$no_orang_tua', '$hub_orang_tua');",$conn);

			$wali = mysql_query("INSERT INTO `wali_pesdik` (`id_wali`, `id_pesdik`, `nama_wali`, `pekerjaan_wali`, `id_agama`, `alamat_wali`, `no_wali`, `hub_wali`) VALUES (NULL, '$id_pesdik2', '$nama_wali', '$pekerjaan_wali', '$id_agama_wali', '$alamat_wali', '$no_wali', '$hub_wali');",$conn);

			echo '<script language="javascript">alert("Data Berhasil Disimpan!"); document.location="pendaftaran.php"</script>';
		} else {
			echo '<script language="javascript">alert("Data Gagal Disimpan!"); document.location="pendaftaran.php"</script>';
		}
	}
?>