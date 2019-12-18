<?php
  include 'koneksi.php';
  include 'tgl_indo.php';

  $tanggal = date("d-m-Y");
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
		margin-top: 2cm;
		margin-bottom: 2cm;
		margin-right: 2cm;
		margin-left: 2cm;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 0px solid #3c3c3c;
		padding: 3px 8px;

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
 <h2 style="text-transform: uppercase; text-align: center;">Berkas Persyaratan </br>
 Daftar Ulang Peserta Didik Baru </br>
 Tahun Pelajaran <?php echo $tahun2.'/'.$tahun1; ?></h2>

 <?php
 	$id_pendaftar = $_GET['id'];
 	$pendaftar = mysql_query("SELECT * FROM pendaftar WHERE id_pendaftar = '$id_pendaftar' ORDER BY id_pendaftar DESC");
 	while($pendaftarr = mysql_fetch_array($pendaftar)) {
 ?>
 <table width="100%" border="0">
 	<tbody>
 		<tr>
 			<td width="30%">Nama</td>
 			<td>: <?php echo $pendaftarr['nama_pendaftar']; ?></td>
 		</tr>
 		<tr>
 			<td>Bin/Binti</td>
 			<td>: <?php echo $pendaftarr['bin_binti']; ?></td>
 		</tr>
 		<tr>
 			<td>No. Pendaftaran/Tes</td>
 			<td>: <?php echo $pendaftarr['no_pendaftar']; ?></td>
 		</tr>
 	</tbody>
 </table>
<?php  } ?>

 <div class="form-group" align="left">
 	<h4>PERSYARATAN :</h4>
 		<?php
	 		$no = +1;
	 		$hasil = mysql_query("SELECT * FROM persyaratan ORDER BY id_persyaratan ASC");
	 		while($tabel = mysql_fetch_array($hasil)) {
	 		
	 		echo '[  ] '; echo $tabel['nama_persyaratan'].'.</br>';
 		} ?>
 </div>

 <h5 style="text-transform: uppercase; text-align: center;">Madrasah Aliyah Ubudiyah</h5>

</body>
<script type="text/javascript">
	window.print();
</script>
</html>