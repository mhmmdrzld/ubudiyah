<?php
  include 'header.php';
  include 'menu.php';

  $get_id_pesdik  = $_GET['id'];
  $data = mysql_query("SELECT * FROM pendaftar JOIN peserta_didik ON pendaftar.no_pendaftar=peserta_didik.no_pendaftar WHERE peserta_didik.id_pesdik='$get_id_pesdik'",$conn);
  while($user_data = mysql_fetch_array($data))
    {
      $get_no_pendaftar = $user_data['no_pendaftar'];
      $get_nama_pendaftar = $user_data['nama_pendaftar'];
      $get_bin_binti = $user_data['bin_binti'];
      $get_tahun_pendaftar = $user_data['tahun_pendaftar'];

      $nisn_pesdik = $user_data['nisn_pesdik'];
      $tempat_lahir_pesdik = $user_data['tempat_lahir_pesdik'];
      $tanggal_lahir_pesdik = $user_data['tanggal_lahir_pesdik'];
      $id_agama_pesdik = $user_data['id_agama'];
      $id_kelas = $user_data['id_kelas'];
      $jk = $user_data['jk'];
    }

  $data2 = mysql_query("SELECT * FROM orang_tua JOIN peserta_didik ON orang_tua.id_pesdik=peserta_didik.id_pesdik WHERE peserta_didik.id_pesdik='$get_id_pesdik'",$conn);
  while($user_data2 = mysql_fetch_array($data2))
    {
      $nama_orang_tua = $user_data2['nama_orang_tua'];
      $alamat_orang_tua = $user_data2['alamat_orang_tua'];
      $hub_orang_tua = $user_data2['hub_orang_tua'];
      $no_orang_tua = $user_data2['no_orang_tua'];
      $pekerjaan_orang_tua = $user_data2['pekerjaan_orang_tua'];
      $id_agama_ortu = $user_data2['id_agama'];
    }

    $data3 = mysql_query("SELECT * FROM wali_pesdik JOIN peserta_didik ON wali_pesdik.id_pesdik=peserta_didik.id_pesdik WHERE peserta_didik.id_pesdik='$get_id_pesdik'",$conn);
  while($user_data3 = mysql_fetch_array($data3))
    {
      $nama_wali = $user_data3['nama_wali'];
      $alamat_wali = $user_data3['alamat_wali'];
      $hub_wali = $user_data3['hub_wali'];
      $no_wali = $user_data3['no_wali'];
      $pekerjaan_wali = $user_data3['pekerjaan_wali'];
      $id_agama_wali = $user_data3['id_agama'];
    }

?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Pendaftaran</a>
        </li>
        <li class="breadcrumb-item active">Data Pendaftaran</li>
      </ol>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Masukan Data Pendaftaran</div>
        <div class="card-body">
        
<form class="form-horizontal" method="post" action="pendaftaran_proses_edit.php">
            <!-- Data Pendaftaran -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-items: center; text-align: center;">
                  <label for="data_pegawai"><b>PESERTA DIDIK</b></label>    
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="no_pendaftar">No. Pendaftar</label>
                  <div class="form-group">
                    <input type="text" id="no_pendaftar" name="no_pendaftar" class="form-control" readonly="" value="<?php echo $get_no_pendaftar;?>" >
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nama_pesdik">Nama</label>
                  <div class="form-group">
                    <input type="text" id="nama_pesdik" name="nama_pesdik" class="form-control" required="" value="<?php echo $get_nama_pendaftar;?>">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nisn_pesdik">NISN</label>
                  <div class="form-group">
                    <input type="text" id="nisn_pesdik" name="nisn_pesdik" class="form-control" required="" value="<?php echo $nisn_pesdik; ?>">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="tempat_lahir_pesdik">Tempat Lahir</label>
                  <div class="form-group">
                    <input type="text" id="tempat_lahir_pesdik" name="tempat_lahir_pesdik" class="form-control" required="" value="<?php echo $tempat_lahir_pesdik; ?>">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="tanggal_lahir_pesdik">Tanggal Lahir</label>
                  <div class="form-group">
                    <input type="date" id="tanggal_lahir_pesdik" name="tanggal_lahir_pesdik" class="form-control" required="" value="<?php echo $tanggal_lahir_pesdik; ?>">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="id_agama">Agama</label>
                  <div class="form-group">
                    <select id="id_agama" name="id_agama" class="form-control" required="">
                      <option value="">---Pilih Agama---</option>
                      <?php
                        $agama = mysql_query("SELECT * FROM agama");
                        while($tabel = mysql_fetch_array($agama)) {
                      ?>
                      <option <?php if($id_agama_pesdik==$tabel['id_agama']){echo "selected"; } ?> value="<?php echo $tabel['id_agama'];?>"><?php echo $tabel['nama_agama'];?></option>
                      <?php };?>
                    </select>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="id_agama">Mendaftar Dikelas</label>
                  <div class="form-group">
                    <select id="id_kelas" name="id_kelas" class="form-control" required="">
                      <option value="">---Pilih Kelas---</option>
                      <?php
                        $kelas = mysql_query("SELECT * FROM kelas");
                        while($tabel = mysql_fetch_array($kelas)) {
                      ?>
                      <option <?php if($id_kelas==$tabel['id_kelas']){echo "selected"; } ?> value="<?php echo $tabel['id_kelas'];?>"><?php echo $tabel['nama_kelas'];?></option>
                      <?php };?>
                    </select>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="id_agama">Jenis Kelamin</label>
                  <div class="form-group">
                    <select id="jk" name="jk" class="form-control" required="">
                      <option value="">---Pilih Jenis Kelamain---</option>
                      <option <?php if($jk=='Laki-laki'){echo "selected"; } ?> value="Laki-laki">Laki-laki</option>
                      <option <?php if($jk=='Perempuan'){echo "selected"; } ?> value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
            </div>
            
            <!-- Data Ayah -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-items: center; text-align: center;">
                  <label for="data_pegawai"><b>ORANG TUA</b></label>    
                </div>
            </div>
            <div class="row clearfix">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nama_orang_tua">Nama Orang Tua</label>
                  <div class="form-group">
                    <input type="text" id="nama_orang_tua" name="nama_orang_tua" class="form-control" required="" value="<?php echo $nama_orang_tua; ?>">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="pekerjaan_orang_tua">Pekerjaan Orang Tua</label>
                  <div class="form-group">
                    <input type="text" id="pekerjaan_orang_tua" name="pekerjaan_orang_tua" class="form-control" required="" value="<?php echo $pekerjaan_orang_tua; ?>">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="id_agama_ortu">Agama</label>
                  <div class="form-group">
                    <select id="id_agama_ortu" name="id_agama_ortu" class="form-control" required="">
                      <option value="">---Pilih Agama---</option>
                      <?php
                        $agama = mysql_query("SELECT * FROM agama");
                        while($tabel = mysql_fetch_array($agama)) {
                      ?>
                      <option <?php if($id_agama_ortu==$tabel['id_agama']){echo "selected"; } ?> value="<?php echo $tabel['id_agama'];?>"><?php echo $tabel['nama_agama'];?></option>
                      <?php };?>
                    </select>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="no_orang_tua">Nomor Orang Tua</label>
                    <div class="form-group">
                      <input type="number" id="no_orang_tua" name="no_orang_tua" class="form-control" required="" maxlength="12" value="<?php echo $no_orang_tua; ?>">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="alamat_orang_tua">Alamat Orang Tua</label>
                    <div class="form-group">
                      <input type="text" id="alamat_orang_tua" name="alamat_orang_tua" class="form-control" required="" value="<?php echo $alamat_orang_tua; ?>">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="hub_orang_tua">Hubungan Dengan Peserta Didik</label>
                    <div class="form-group">
                      <input type="text" id="hub_orang_tua" name="hub_orang_tua" class="form-control" required="" value="<?php echo $hub_orang_tua; ?>">
                    </div>
                </div>

            </div>

            <!-- Data Wali -->
              <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-items: center; text-align: center;">
                    <label for="data_pegawai"><b>WALI SISWA</b> <br>(Biarkan Kosong Jika Tidak Tinggal Dengan Wali Siswa)</label>    
                  </div>
              </div>

              <div class="row clearfix">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nama_wali">Nama Wali</label>
                  <div class="form-group">
                    <input type="text" id="nama_wali" name="nama_wali" class="form-control" value="<?php echo $nama_wali; ?>">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="pekerjaan_wali">Pekerjaan Wali</label>
                  <div class="form-group">
                    <input type="text" id="pekerjaan_wali" name="pekerjaan_wali" class="form-control" value="<?php echo $pekerjaan_wali; ?>">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="id_agama_wali">Agama</label>
                  <div class="form-group">
                    <select id="id_agama_wali" name="id_agama_wali" class="form-control">
                      <option value="">---Pilih Agama---</option>
                      <?php
                        $agama = mysql_query("SELECT * FROM agama");
                        while($tabel = mysql_fetch_array($agama)) {
                      ?>
                      <option <?php if($id_agama_wali==$tabel['id_agama']){echo "selected"; } ?> value="<?php echo $tabel['id_agama'];?>"><?php echo $tabel['nama_agama'];?></option>
                      <?php };?>
                    </select>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="no_wali">Nomor Wali</label>
                    <div class="form-group">
                      <input type="number" id="no_wali" name="no_wali" class="form-control" value="<?php echo $no_wali; ?>" maxlength="12">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="alamat_wali">Alamat Wali</label>
                    <div class="form-group">
                      <input type="text" id="alamat_wali" name="alamat_wali" class="form-control"  value="<?php echo $alamat_wali; ?>">
                    </div>
                </div>

                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="hub_wali">Hubungan Dengan Wali</label>
                    <div class="form-group">
                      <input type="text" id="hub_wali" name="hub_wali" class="form-control" value="<?php echo $hub_wali; ?>">
                    </div>
                </div>

                
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-items: center; text-align: center;">
                    <button class="btn btn-primary btn-sm" name="simpan" type="submit">Ubah</button>
                    <button class="btn btn-warning btn-sm" type="reset">Batal</button>
                    <button class="btn btn-danger btn-sm" onclick="window.history.back()">Kembali</button>
                </div>
            </div>


</form>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    
<?php
  include 'footer.php';
?>