<?php
  include 'header.php';
  include 'menu.php';

  $id_agama  = $_GET['id'];
  $data = mysql_query("SELECT * FROM agama WHERE id_agama='$id_agama'",$conn);
  while($user_data = mysql_fetch_array($data))
    {
      $id_agama= $user_data['id_agama'];
      $nama_agama= $user_data['nama_agama'];
    }
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Agama</a>
        </li>
        <li class="breadcrumb-item active">Edit Agama</li>
      </ol>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Masukan Data Agama</div>
        <div class="card-body">
        
<form class="form-horizontal" method="post" action="agama_proses_edit.php">

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                  <label for="nama_agama">Nama Agama</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                  <div class="form-group">
                    <input type="text" id="id_agama" name="id_agama" value="<?php echo $id_agama; ?>" hidden >
                    <input type="text" id="nama_agama" name="nama_agama" value="<?php echo $nama_agama; ?>" class="form-control" required="">
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