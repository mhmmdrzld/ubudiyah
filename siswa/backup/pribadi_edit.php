<?php
  include 'header.php';
  include 'menu.php';

?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Pribadi</a>
        </li>
        <li class="breadcrumb-item active">Ubah Data Pribadi</li>
      </ol>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Masukan Data Pribadi</div>
        <div class="card-body">
        
<form class="form-horizontal" method="post" action="pribadi_proses_edit.php">
            <!-- Data Pribadi -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-items: center; text-align: center;">
                  <label for="data_pegawai"><b>BIODATA</b></label>    
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
                  <label for="nama_siswa">Nama</label>
                  <div class="form-group">
                    <input type="text" id="nama_siswa" name="nama_siswa" class="form-control" required="" value="<?php echo $nama_pendaftar;?>">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nik">NIK</label>
                  <div class="form-group">
                    <input type="text" id="nik_siswa" name="nik_siswa" class="form-control" required="" placeholder="Masukan NIK...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="tempat_lahir_siswa">Tempat Lahir</label>
                  <div class="form-group">
                    <input type="text" id="tempat_lahir_siswa" name="tempat_lahir_siswa" class="form-control" required="" placeholder="Masukan Tempat Lahir...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="tanggal_lahir_siswa">Tanggal Lahir</label>
                  <div class="form-group">
                    <input type="date" id="tanggal_lahir_siswa" name="tanggal_lahir_siswa" class="form-control" required="" placeholder="Masukan Tempat Lahir...">
                  </div>
                </div>
            </div>
            
            <!-- Data Ayah -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-items: center; text-align: center;">
                  <label for="data_pegawai"><b>DATA AYAH</b></label>    
                </div>
            </div>
            <div class="row clearfix">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nama_ayah">Nama Ayah</label>
                  <div class="form-group">
                    <input type="text" id="nama_ayah" name="nama_ayah" class="form-control" required="" placeholder="Masukan Nama Ayah...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nik_ayah">NIK Ayah</label>
                  <div class="form-group">
                    <input type="text" id="nik_ayah" name="nik_ayah" class="form-control" required="" placeholder="Masukan NIK Ayah...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="tempat_lahir_Ayah">Tempat Lahir Ayah</label>
                  <div class="form-group">
                    <input type="text" id="tempat_lahir_Ayah" name="tempat_lahir_Ayah" class="form-control" required="" placeholder="Masukan Tempat Lahir Ayah...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah</label>
                  <div class="form-group">
                    <input type="date" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" class="form-control" required="">
                  </div>
                </div>
            </div>

              <!-- Data Ibu -->
              <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-items: center; text-align: center;">
                    <label for="data_pegawai"><b>DATA IBU</b></label>    
                  </div>
              </div>
              <div class="row clearfix">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nama_ibu">Nama Ibu</label>
                  <div class="form-group">
                    <input type="text" id="nama_ibu" name="nama_ibu" class="form-control" required="" placeholder="Masukan Nama Ibu...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nik_ibu">NIK Ibu</label>
                  <div class="form-group">
                    <input type="text" id="nik_ibu" name="nik_ibu" class="form-control" required="" placeholder="Masukan NIK Ibu...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                  <div class="form-group">
                    <input type="text" id="tempat_lahir_ibu" name="tempat_lahir_ibu" class="form-control" required="" placeholder="Masukan Tempat Lahir Ibu...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="tanggal_lahir_ibu">Tanggal Lahir Ibu</label>
                  <div class="form-group">
                    <input type="date" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" class="form-control" required="">
                  </div>
                </div>
            </div>

            <!-- Data Wali -->
              <div class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-items: center; text-align: center;">
                    <label for="data_pegawai"><b>DATA WALI SISWA</b> <br>(Biarkan Kosong Jika Tidak Tinggal Dengan Wali Siswa)</label>    
                  </div>
              </div>
              <div class="row clearfix">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nama_ibu">Nama Wali</label>
                  <div class="form-group">
                    <input type="text" id="nama_wali" name="nama_wali" class="form-control" required="" placeholder="Masukan Nama Wali...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="nik_wali">NIK Wali</label>
                  <div class="form-group">
                    <input type="text" id="nik_wali" name="nik_wali" class="form-control" required="" placeholder="Masukan NIK Wali...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="tempat_lahir_wali">Tempat Lahir Wali</label>
                  <div class="form-group">
                    <input type="text" id="tempat_lahir_wali" name="tempat_lahir_wali" class="form-control" required="" placeholder="Masukan Tempat Lahir Wali...">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="tanggal_lahir_wali">Tanggal Lahir Wali</label>
                  <div class="form-group">
                    <input type="date" id="tanggal_lahir_wali" name="tanggal_lahir_wali" class="form-control" required="">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <label for="hub_wali">Hubungan Dengan Wali</label>
                  <div class="form-group">
                    <input type="text" id="hub_wali" name="hub_wali" class="form-control" required="" placeholder="Masukan Hubungan Dengan Wali...">
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