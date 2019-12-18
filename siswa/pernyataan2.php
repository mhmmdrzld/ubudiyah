<?php
  include 'koneksi.php';
  include 'tgl_indo.php';

  $tanggal = date("Y-m-d");
  $tahun1 = date('Y');
  $tahun2 =$tahun1 - 1;
  $detail = date("Y-m-d h:i:sa");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
		font-family: sans-serif;
		margin-top: 1cm;
		margin-bottom: 1cm;
		margin-right: 1cm;
		margin-left: 1cm;
	}
	table{
		margin: 0px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 0px solid #3c3c3c;
		padding: 3px 8px;
		vertical-align: top;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
</head>
<body>
 <h2 style="text-transform: uppercase; text-align: center;">Surat Pernyataan Peserta Didik Baru</h2>

 <?php
 	$id_pendaftar = $_GET['id'];
 	$pesdik = mysql_query("SELECT * FROM `pendaftar` JOIN peserta_didik ON peserta_didik.no_pendaftar=pendaftar.no_pendaftar JOIN kelas ON peserta_didik.id_kelas=kelas.id_kelas WHERE pendaftar.id_pendaftar = '$id_pendaftar' ORDER BY id_pendaftar DESC");

 	while($pesdikk = mysql_fetch_array($pesdik)) {
 		$id_pesdik = $pesdikk['id_pesdik'];
 		$nama_pesdik = $pesdikk['nama_pesdik'];
 		$nama_kelas = $pesdikk['nama_kelas'];
 		$jk = $pesdikk['jk'];
 		$nisn = $pesdikk['nisn_pesdik'];
 		$tmp_lahir = $pesdikk['tempat_lahir_pesdik'];
 		$tgl_lahir = $pesdikk['tanggal_lahir_pesdik'];
 		$no_pendaftar = $pesdikk['no_pendaftar'];

 	}

 	$pekerjaan_wali = '';
 	$nama_wali = '';
 	$hub = '';

 	$cek_wali = mysql_query("SELECT * FROM `wali_pesdik` JOIN peserta_didik ON wali_pesdik.id_pesdik=peserta_didik.id_pesdik WHERE peserta_didik.id_pesdik='$id_pesdik'");
 	while($cek_walii = mysql_fetch_array($cek_wali)) {
 		$nama_wali = $cek_walii['nama_wali'];
 	};

 	if (!empty($nama_wali)) {
 		$wali = mysql_query("SELECT * FROM `wali_pesdik` JOIN peserta_didik ON wali_pesdik.id_pesdik=peserta_didik.id_pesdik JOIN agama ON wali_pesdik.id_agama=agama.id_agama WHERE peserta_didik.id_pesdik='$id_pesdik'");

	 	while($walii = mysql_fetch_array($wali)) {
	 		$nama_wali = $walii['nama_wali'];
	 		$pekerjaan_wali = $walii['pekerjaan_wali'];
	 		$alamat = $walii['alamat_wali'];
	 		$no = $walii['no_wali'];
	 		$hub = $walii['hub_wali'];
	 		$agama = $walii['nama_agama'];
	 	};
 	} else {
 		$orang_tua = mysql_query("SELECT * FROM `orang_tua` JOIN peserta_didik ON orang_tua.id_pesdik=peserta_didik.id_pesdik JOIN agama ON orang_tua.id_agama=agama.id_agama WHERE peserta_didik.id_pesdik='$id_pesdik'");

	 	while($orang_tuaa = mysql_fetch_array($orang_tua)) {
	 		$alamat = $orang_tuaa['alamat_orang_tua'];
	 		$no = $orang_tuaa['no_orang_tua'];
	 		$agama = $orang_tuaa['nama_agama'];
	 	};
 	}

 	$orang_tua = mysql_query("SELECT * FROM `orang_tua` JOIN peserta_didik ON orang_tua.id_pesdik=peserta_didik.id_pesdik JOIN agama ON orang_tua.id_agama=agama.id_agama WHERE peserta_didik.id_pesdik='$id_pesdik'");

	 	while($orang_tuaa = mysql_fetch_array($orang_tua)) {
	 		$nama = $orang_tuaa['nama_orang_tua'];
	 		$pekerjaan = $orang_tuaa['pekerjaan_orang_tua'];
	 	};

 ?>
 <table width="100%" border="0">
 	<tbody>
 		<tr>
 			<td colspan="2"><b>Yang Bertanda Tangan Dibawah Ini :</b></td>
 		</tr>
 		<tr>
 			<td width="55%">1. Nama</td>
 			<td>: <?php echo $nama_pesdik; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">2. NISN</td>
 			<td>: <?php echo $nisn; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">3. TTL</td>
 			<td>: <?php echo $tmp_lahir; ?>, <?php echo tgl_indo($tgl_lahir); ?></td>
 		</tr>
 		<tr>
 			<td width="55%">4. Jenis Kelamin</td>
 			<td>: <?php echo $jk; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">5. Agama</td>
 			<td>: <?php echo $agama; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">6. Nomor Pendaftaran</td>
 			<td>: <?php echo $no_pendaftar; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">7. Diterima Di Kelas</td>
 			<td>: <?php 
 				if ($nama_kelas=='X') {
 				 	echo "X (Sepuluh)";
 				} elseif($nama_kelas=='XI') {
 				 	echo "XI (Sebelas)";
 				} elseif($nama_kelas=='XII') {
 				 	echo "XII (Dua Belas)";
 				} 
 			?></td>
 		</tr>

 		<tr>
 			<td width="55%">8. Nama Orang Tua</td>
 			<td>: <?php echo $nama; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">9. Pekerjaan Orang Tua</td>
 			<td>: <?php echo $pekerjaan; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">10. Agama Orang Tua</td>
 			<td>: <?php echo $agama; ?></td>
 		</tr>

 		<tr>
 			<td width="55%">11. Nama Wali</td>
 			<td>: <?php echo $nama_wali; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">12. Pekerjaan Wali</td>
 			<td>: <?php echo $pekerjaan_wali; ?></td>
 		</tr>

 		<tr>
 			<td width="55%">13. Hubungan Dengan Wali</td>
 			<td>: <?php echo $hub; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">14. Alamat Orang Tua/Wali</td>
 			<td>: <?php echo $alamat; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">15. Nomor Yang Bisa Dihubungi</td>
 			<td>: <?php echo $no; ?></td>
 		</tr>
 	</tbody>
 </table>
 <br>
 <table width="100%" border="0" style="text-align: justify;">
 	<tbody>
 		<tr>
 			<td colspan="2" width="100%">Dengan ini saya menyatakan dengan sesungguhnya, bahwa selama di madrasah ini :</td>
 		</tr>
 		<tr>
 			<td width="1%">
 				1.
 			</td>
 			<td width="90%">
 				Akan belajar dengan tekun,sungguh-sungguh, dan penuh semangat.
 			</td>
 		</tr>
 		<tr>
 			<td width="1%">
 				2.
 			</td>
 			<td width="90%">
 				Akan menjaga nama baik diri sendiri, keluarga, masyarakat, dan madrasah.
 			</td>
 		</tr>
 		<tr>
 			<td width="1%">
 				3.
 			</td>
 			<td width="90%">
 				Sanggup menaati seluruh tata tertib dan peraturan yang berlaku, mematuhi pelaksanaan lingkungan pendidikan termasuk berpakaian seragam madrasah, OSIM, dan lain-lain.
 			</td>
 		</tr>
 		<tr>
 			<td width="1%">
 				4.
 			</td>
 			<td width="90%">
 				Siap menerima sanksi sesui dengan ketentuan madrasah berupa :<br>
 				a. Teguran.<br>
 				b. Diberi Tugas.<br>
 				c. Penyitaan Barang.<br>
 				d. Membayar Denda.<br>
 				e. Diberi Skor/Poin Pelanggaran.<br>
 				f. Diberi Peringatan Keras.<br>
 				g. Dikembalikan kepada orang tua (berhenti, diberhentikan, pindah sekolah).<br>
 			</td>
 		</tr>
 		<tr>
 			<td colspan="2" width="100%">Demikian surat pernyataan ini saya buat dengan sebenarnya dan penuh rasa tanggung jawab</td>
 		</tr>
 	</tbody>
 </table>
 <br>
 <table border="0" width="100%">
 	<tbody>
 		<tr>
 			<td width="60%">
 			Mengetahui,<br>
 			Orang Tua/Wali<br><br><br><br><br>
 			<b><?php 
 				if (!empty($nama_wali)) {
			 		echo $nama_wali;
			 	} else {
			 		echo $nama;
			 	}
 			?></b>
 			</td>

 			<td>
 			Bati-bati, <?php echo tgl_indo($tanggal) ?><br>
 			Yang Membuat Pernyataan<br><br><br><br><br>
 			<b><?php echo $nama_pesdik;?></b>	
 			</td>
 		</tr>
 	</tbody>
 </table>

</body>
<script type="text/javascript">
	window.print();
</script>
</html>