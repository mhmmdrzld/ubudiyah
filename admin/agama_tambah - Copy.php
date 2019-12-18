<?php
  include 'header.php';
  include 'menu.php';
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Agama</a>
        </li>
        <li class="breadcrumb-item active">Tambah Agama</li>
      </ol>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Masukan Data Agama</div>
        <div class="card-body">
        
<form class="form-horizontal" method="post" action="agama_proses_tambah.php">

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                  <label for="nama_agama">Nama Agama</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                  <div class="form-group">
                    <input type="text" id="nama_agama" name="nama_agama" class="form-control" required="" placeholder="Masukan Nama Agama...">
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