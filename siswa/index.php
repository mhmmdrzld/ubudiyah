<?php
  include 'header.php';
  include 'menu.php';
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Beranda</a>
        </li>
<!--         <li class="breadcrumb-item active">My Dashboard</li> -->
      </ol>
      <!-- Icon Cards-->

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header"> 
        </div>
        <div class="card-body">
          <h1>SELAMAT DATANG : <b><i><?php echo strtoupper($nama_pendaftar).'!'?></i></b></h1>
          <h1>STATUS PENDAFTARAN : 
            <b>
            <?php
              if ($status_pendaftar!=NULL AND $status_pendaftar!='') {
                echo strtoupper($status_pendaftar);
              } else {
                echo strtoupper('Menunggu Konfirmasi');
              }
              
            ?> 
            </b>
          </h1>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

<?php
  include 'footer.php';
?>