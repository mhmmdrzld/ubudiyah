<?php  
	include_once('koneksi.php');

	if (isset($_POST['simpan'])) {
		$id_pendaftar = $_POST['id_pendaftar'];
		$no_pendaftar = $_POST['no_pendaftar'];
	    $nama_pendaftar = $_POST['nama_pendaftar'];
	    $bin_binti = $_POST['bin_binti'];
	    $tahun_pendaftar = $_POST['tahun_pendaftar'];
	    $status_pendaftar = $_POST['status_pendaftar'];

	    $data = mysql_query("UPDATE `pendaftar` SET `nama_pendaftar` = '$nama_pendaftar', `bin_binti` = '$bin_binti', `tahun_pendaftar` = '$tahun_pendaftar', `status_pendaftar` = '$status_pendaftar' WHERE `pendaftar`.`id_pendaftar` = '$id_pendaftar';",$conn);

	    if ($status_pendaftar == "Di Terima") {
	    	if ($data==true) {

	    		$delete = mysql_query("DELETE FROM `pengguna` WHERE `pengguna`.`id_pendaftar` = '$id_pendaftar'",$conn);

				$pengguna = mysql_query("INSERT INTO `pengguna` (`id_pengguna`, `id_pendaftar`, `username`, `password`, `status`, `level`) VALUES (NULL, '$id_pendaftar', '$no_pendaftar', '$no_pendaftar', 'Aktif', 'Siswa');",$conn);

				echo '<script language="javascript">alert("Pendaftar Di Terima, Data Berhasil Disimpan!"); document.location="pendaftar.php"</script>';
			} else {
				echo '<script language="javascript">alert("Pendaftar Di Terima, Data Gagal Disimpan!"); document.location="pendaftar.php"</script>';
			}
	    } else {
	    	if ($data==true) {

	    		$delete = mysql_query("DELETE FROM `pengguna` WHERE `pengguna`.`id_pendaftar` = '$id_pendaftar'",$conn);

				$pengguna = mysql_query("INSERT INTO `pengguna` (`id_pengguna`, `id_pendaftar`, `username`, `password`, `status`, `level`) VALUES (NULL, '$id_pendaftar', '$no_pendaftar', '$no_pendaftar', 'Aktif', 'Siswa');",$conn);

				echo '<script language="javascript">alert("Pendaftar Di Tolak, Data Berhasil Disimpan!"); document.location="pendaftar.php"</script>';
			} else {
				echo '<script language="javascript">alert("Pendaftar Di Tolak, Data Gagal Disimpan!"); document.location="pendaftar.php"</script>';
			}
	    }
		
	}
?>