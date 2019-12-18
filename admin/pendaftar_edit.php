<?php
  include 'header.php';
  include 'menu.php';

  $id_pendaftar  = $_GET['id'];
  $data = mysql_query("SELECT * FROM pendaftar WHERE id_pendaftar='$id_pendaftar'",$conn);
  while($user_data = mysql_fetch_array($data))
    {
      $no_pendaftar = $user_data['no_pendaftar'];
      $nama_pendaftar = $user_data['nama_pendaftar'];
      $bin_binti = $user_data['bin_binti'];
      $tahun_pendaftar = $user_data['tahun_pendaftar'];
    }
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Pendaftar</a>
        </li>
        <li class="breadcrumb-item active">Edit Pendaftar</li>
      </ol>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Masukan Data Pendaftar</div>
        <div class="card-body">
        
<form class="form-horizontal" method="post" action="pendaftar_proses_edit.php">
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                  <label for="no_pendaftar">No Pendaftar</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                  <div class="form-group">
                    <input type="text" id="no_pendaftar" readonly="" name="no_pendaftar" value="<?php echo $no_pendaftar; ?>" class="form-control" required="">
                  </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                  <label for="nama_pendaftar">Nama Pendaftar</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                  <div class="form-group">
                    <input type="text" id="id_pendaftar" name="id_pendaftar" value="<?php echo $id_pendaftar; ?>" hidden >
                    <input type="text" id="nama_pendaftar" name="nama_pendaftar" value="<?php echo $nama_pendaftar; ?>" class="form-control" required="">
                  </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                  <label for="bin_binti">Bin/Binti</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                  <div class="form-group">
                    <input type="text" id="bin_binti" name="bin_binti" value="<?php echo $bin_binti; ?>" class="form-control" required="">
                  </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                  <label for="tahun_pendaftar">Tahun Pendaftar</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                  <div class="form-group">
                    <input type="text" id="tahun_pendaftar" name="tahun_pendaftar" value="<?php echo $tahun_pendaftar; ?>" class="form-control" required="">
                  </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                  <label for="status_pendaftar">Status Pendaftar</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                  <div class="form-group">
                    <select id="status_pendaftar" name="status_pendaftar" value="<?php echo $tahun_pendaftar; ?>" class="form-control" required="">
                      <option value="">---Pilih Status Pendaftar---</option>
                      <option value="Di Terima">Di Terima</option>
                      <option value="Di Tolak">Di Tolak</option>
                    </select>
                  </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-items: center; text-align: center;">
                    <button class="btn btn-primary btn-sm" name="simpan" type="submit">Ubah</button>
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