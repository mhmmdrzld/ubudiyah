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
 <h2 style="text-transform: uppercase; text-align: center;">Surat Pernyataan Orang Tua / Wali</h2>

 <?php
 	$id_pendaftar = $_GET['id'];
 	$pesdik = mysql_query("SELECT * FROM `pendaftar` JOIN peserta_didik ON peserta_didik.no_pendaftar=pendaftar.no_pendaftar JOIN kelas ON peserta_didik.id_kelas=kelas.id_kelas WHERE pendaftar.id_pendaftar = '$id_pendaftar' ORDER BY id_pendaftar DESC");

 	while($pesdikk = mysql_fetch_array($pesdik)) {
 		$id_pesdik = $pesdikk['id_pesdik'];
 		$nama_pesdik = $pesdikk['nama_pesdik'];
 		$nama_kelas = $pesdikk['nama_kelas'];
 		$jk = $pesdikk['jk'];
 	}

 	$cek_wali = mysql_query("SELECT * FROM `wali_pesdik` JOIN peserta_didik ON wali_pesdik.id_pesdik=peserta_didik.id_pesdik WHERE peserta_didik.id_pesdik='$id_pesdik'");
 	while($cek_walii = mysql_fetch_array($cek_wali)) {
 		$nama_wali = $cek_walii['nama_wali'];
 	};

 	if (!empty($nama_wali)) {
 		$wali = mysql_query("SELECT * FROM `wali_pesdik` JOIN peserta_didik ON wali_pesdik.id_pesdik=peserta_didik.id_pesdik JOIN agama ON wali_pesdik.id_agama=agama.id_agama WHERE peserta_didik.id_pesdik='$id_pesdik'");

	 	while($walii = mysql_fetch_array($wali)) {
	 		$nama = $walii['nama_wali'];
	 		$pekerjaan = $walii['pekerjaan_wali'];
	 		$alamat = $walii['alamat_wali'];
	 		$no = $walii['no_wali'];
	 		$hub = $walii['hub_wali'];
	 		$agama = $walii['nama_agama'];
	 	};
 	} else {
 		$orang_tua = mysql_query("SELECT * FROM `orang_tua` JOIN peserta_didik ON orang_tua.id_pesdik=peserta_didik.id_pesdik JOIN agama ON orang_tua.id_agama=agama.id_agama WHERE peserta_didik.id_pesdik='$id_pesdik'");

	 	while($orang_tuaa = mysql_fetch_array($orang_tua)) {
	 		$nama = $orang_tuaa['nama_orang_tua'];
	 		$pekerjaan = $orang_tuaa['pekerjaan_orang_tua'];
	 		$alamat = $orang_tuaa['alamat_orang_tua'];
	 		$no = $orang_tuaa['no_orang_tua'];
	 		$hub = $orang_tuaa['hub_orang_tua'];
	 		$agama = $orang_tuaa['nama_agama'];
	 	};
 	}


 ?>
 <table width="100%" border="0">
 	<tbody>
 		<tr>
 			<td colspan="2"><b>Yang Bertanda Tangan Dibawah Ini :</b></td>
 		</tr>
 		<tr>
 			<td width="55%">1. Nama Orang Tua/Wali</td>
 			<td>: <?php echo $nama; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">2. Pekerjaan Orang Tua/Wali</td>
 			<td>: <?php echo $pekerjaan; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">3. Alamat Orang Tua/Wali</td>
 			<td>: <?php echo $alamat; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">4. Telepon/HP Orang Tua/Wali</td>
 			<td>: <?php echo $no; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">5. Agama</td>
 			<td>: <?php echo $agama; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">6. Nama Peserta Didik</td>
 			<td>: <?php echo $nama_pesdik; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">7. Jenis Kelamin Peserta Didik</td>
 			<td>: <?php echo $jk; ?></td>
 		</tr>
 		<tr>
 			<td width="55%">8. Diterima Di Kelas</td>
 			<td>: 
 			<?php 
 				if ($nama_kelas=='X') {
 				 	echo "X (Sepuluh)";
 				} elseif($nama_kelas=='XI') {
 				 	echo "XI (Sebelas)";
 				} elseif($nama_kelas=='XII') {
 				 	echo "XII (Dua Belas)";
 				} 
 			?>
 			</td>
 		</tr>
 		<tr>
 			<td width="55%">9. Hubungan Keluarga Dengan Peserta Didik</td>
 			<td>: <?php echo $hub; ?></td>
 		</tr>
 	</tbody>
 </table>

 <h2 style="text-transform: uppercase; text-align: center;">Menyatakan</h2>

 <table width="100%" border="0" style="text-align: justify;">
 	<tbody>
 		<tr>
 			<td colspan="2" width="100%">Bahwa saya selaku orang tua/wali dari peserta didik yang bernama <b><?php echo $nama_pesdik; ?></b> kelas <b><?php 
 				if ($nama_kelas=='X') {
 				 	echo "X (Sepuluh)";
 				} elseif($nama_kelas=='XI') {
 				 	echo "XI (Sebelas)";
 				} elseif($nama_kelas=='XII') {
 				 	echo "XII (Dua Belas)";
 				} 
 			?></b> MA Ubudiyah Bati-bati, menyatakan dengan sesungguhnya :</td>
 		</tr>
 		<tr>
 			<td width="1%">
 				1.
 			</td>
 			<td width="90%">
 				Bersedia membimbing dan mengawasi peserta didik di atas untuk menaati tata tertib madrasah.
 			</td>
 		</tr>
 		<tr>
 			<td width="1%">
 				2.
 			</td>
 			<td width="90%">
 				Tidak keberatan peserta didik di atas menerima sanksi sesui dengan ketentuan madrasah berupa :<br>
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
 			Kepala MA Ubudiyah<br><br><br><br><br><br>
 			<b>H. Rahmad Rodhiani, S.Ag.</b><br>
 			NIP.197005262005511014
 			</td>

 			<td>
 			Bati-bati, <?php echo tgl_indo($tanggal) ?><br>
 			Yang Membuat Pernyataan<br>
 			Orang Tua/Wali,<br><br><br><br><br>
 			<b><?PHP echo $nama;?></b>	
 			</td>
 		</tr>
 	</tbody>
 </table>

</body>
<script type="text/javascript">
	window.print();
</script>
</html>