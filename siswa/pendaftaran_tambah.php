<?php
  include 'header.php';
  include 'menu.php';

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
        
<form class="form-horizontal" method="post" action="pendaftaran_proses_tambah.php">
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
                    <input type="text" id="no_pendaftar" name="no_pendaftar" class="form-control" readonly="" value="<?php echo $no_pendaftar;?>" >
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nama_pesdik">Nama</label>
                  <div class="form-group">
                    <input type="text" id="nama_pesdik" name="nama_pesdik" class="form-control" required="" value="<?php echo $nama_pendaftar;?>">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nisn_pesdik">NISN</label>
                  <div class="form-group">
                    <input type="text" id="nisn_pesdik" name="nisn_pesdik" class="form-control" required="" placeholder="Masukan NISN...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="tempat_lahir_pesdik">Tempat Lahir</label>
                  <div class="form-group">
                    <input type="text" id="tempat_lahir_pesdik" name="tempat_lahir_pesdik" class="form-control" required="" placeholder="Masukan Tempat Lahir...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="tanggal_lahir_pesdik">Tanggal Lahir</label>
                  <div class="form-group">
                    <input type="date" id="tanggal_lahir_pesdik" name="tanggal_lahir_pesdik" class="form-control" required="" placeholder="Masukan Tempat Lahir...">
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
                      <option value="<?php echo $tabel['id_agama'];?>"><?php echo $tabel['nama_agama'];?></option>
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
                      <option value="<?php echo $tabel['id_kelas'];?>"><?php echo $tabel['nama_kelas'];?></option>
                      <?php };?>
                    </select>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="id_agama">Jenis Kelamin</label>
                  <div class="form-group">
                    <select id="jk" name="jk" class="form-control" required="">
                      <option value="">---Pilih Jenis Kelamain---</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
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
                    <input type="text" id="nama_orang_tua" name="nama_orang_tua" class="form-control" required="" placeholder="Masukan Nama Orang Tua...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="pekerjaan_orang_tua">Pekerjaan Orang Tua</label>
                  <div class="form-group">
                    <input type="text" id="pekerjaan_orang_tua" name="pekerjaan_orang_tua" class="form-control" required="" placeholder="Masukan Pekerjaan Orang Tua...">
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
                      <option value="<?php echo $tabel['id_agama'];?>"><?php echo $tabel['nama_agama'];?></option>
                      <?php };?>
                    </select>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="no_orang_tua">Nomor Orang Tua</label>
                    <div class="form-group">
                      <input type="number" id="no_orang_tua" name="no_orang_tua" class="form-control" required="" placeholder="Masukan Nomor Orang Tua..." maxlength="12">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="alamat_orang_tua">Alamat Orang Tua</label>
                    <div class="form-group">
                      <input type="text" id="alamat_orang_tua" name="alamat_orang_tua" class="form-control" required="" placeholder="Masukan Alamat Orang Tua...">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="hub_orang_tua">Hubungan Dengan Peserta Didik</label>
                    <div class="form-group">
                      <input type="text" id="hub_orang_tua" name="hub_orang_tua" class="form-control"  placeholder="Masukan Hubungan Dengan Peserta Didik...">
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
                    <input type="text" id="nama_wali" name="nama_wali" class="form-control" placeholder="Masukan Nama Wali...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="pekerjaan_wali">Pekerjaan Wali</label>
                  <div class="form-group">
                    <input type="text" id="pekerjaan_wali" name="pekerjaan_wali" class="form-control"  placeholder="Masukan Pekerjaan Wali...">
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
                      <option value="<?php echo $tabel['id_agama'];?>"><?php echo $tabel['nama_agama'];?></option>
                      <?php };?>
                    </select>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="no_wali">Nomor Wali</label>
                    <div class="form-group">
                      <input type="text" id="no_wali" name="no_wali" class="form-control" placeholder="Masukan Nomor Wali..." maxlength="12">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="alamat_wali">Alamat Wali</label>
                    <div class="form-group">
                      <input type="text" id="alamat_wali" name="alamat_wali" class="form-control"  placeholder="Masukan Alamat Wali...">
                    </div>
                </div>

                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="hub_wali">Hubungan Dengan Wali</label>
                    <div class="form-group">
                      <input type="text" id="hub_wali" name="hub_wali" class="form-control"  placeholder="Masukan Hubungan Dengan Wali...">
                    </div>
                </div>

                
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-items: center; text-align: center;">
                    <button class="btn btn-primary btn-sm" name="simpan" type="submit">Simpan</button>
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