<?php
  include 'header.php';
  include 'menu.php';

  $id_tahun_pelajaran  = $_GET['id'];
  $data = mysql_query("SELECT * FROM tahun_pelajaran WHERE id_tahun_pelajaran='$id_tahun_pelajaran'",$conn);
  while($user_data = mysql_fetch_array($data))
    {
      $id_tahun_pelajaran= $user_data['id_tahun_pelajaran'];
      $nama_tahun_pelajaran= $user_data['nama_tahun_pelajaran'];
    }
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Tahun Pelajaran</a>
        </li>
        <li class="breadcrumb-item active">Edit Tahun Pelajaran</li>
      </ol>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Masukan Data Tahun Pelajaran</div>
        <div class="card-body">
        
<form class="form-horizontal" method="post" action="tahun_pelajaran_proses_edit.php">

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                  <label for="nama_tahun_pelajaran">Nama Tahun Pelajaran</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                  <div class="form-group">
                    <input type="text" id="id_tahun_pelajaran" name="id_tahun_pelajaran" value="<?php echo $id_tahun_pelajaran; ?>" hidden >
                    <input type="text" id="nama_tahun_pelajaran" name="nama_tahun_pelajaran" value="<?php echo $nama_tahun_pelajaran; ?>" class="form-control" required="">
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