<?php  
	include_once('koneksi.php');

	if (isset($_POST['registrasi'])) {
		$no_pendaftar = $_POST['no_pendaftar'];
		$nama_pendaftar = $_POST['nama_pendaftar'];
		$bin_binti = $_POST['bin_binti'];
		$tahun_pendaftar = $_POST['tahun_pendaftar'];

		$data = mysql_query("INSERT INTO `pendaftar` (`id_pendaftar`, `no_pendaftar`, `nama_pendaftar`, `bin_binti`, `status_pendaftar`, `tahun_pendaftar`) VALUES (NULL, '$no_pendaftar', '$nama_pendaftar', '$bin_binti', NULL, '$tahun_pendaftar');");

		if ($data) {
			$pengguna = mysql_query("SELECT * FROM `pendaftar` WHERE no_pendaftar = '$no_pendaftar';");
			while($tabel = mysql_fetch_array($pengguna)) {
				$id_pendaftar = $tabel['id_pendaftar'];
				$no_pendaftar = $tabel['no_pendaftar'];
			}

			$insert_pengguna = mysql_query("INSERT INTO `pengguna` (`id_pengguna`, `id_pendaftar`, `username`, `password`, `status`, `level`) VALUES (NULL, '$id_pendaftar', '$no_pendaftar', '$no_pendaftar', 'Aktif', 'Siswa');");

			echo '<script language="javascript">alert("Registrasi Berhasil! Silahkan Login Username dan Password Menggunakan Nomor Pendaftaran"); document.location="index.php"';
			echo '</script>';
		} else {
			echo '<script language="javascript">alert("Registrasi Gagal!"); document.location="index_jurusan.php"';
			echo '</script>';
		}
	}
?>