<?php
  include 'header.php';
  include 'menu.php';
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Pendaftar</a>
        </li>
<!--         <li class="breadcrumb-item active">My Dashboard</li> -->
      </ol>

      <div class="row">
                <!-- <div class="col-xl-2 col-sm-6 mb-3">
                  <a class="btn btn-primary btn-block btn-sm" href="pendaftar_tambah.php">
                    <i class="fa fa-plus"></i> Tambah Data
                  </a>
                </div> -->
                <!-- <div class="col-xl-2 col-sm-6 mb-3">
                  <a><button class="btn btn-primary btn-block btn-sm"><i class="fa fa-print"></i> Cetak Word</button></a>
                </div> -->
            </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Pendaftar</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No. Pendaftar</th>
                  <th>Nama Pendaftar</th>
                  <th>Bin/Binti</th>
                  <th>Status Pendaftar</th>
                  <th>Tahun Pendaftaran</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>No. Pendaftar</th>
                  <th>Nama Pendaftar</th>
                  <th>Bin/Binti</th>
                  <th>Status Pendaftar</th>
                  <th>Tahun Pendaftaran</th>
                  <th>Opsi</th>
                </tr>
              </tfoot>
              <tbody>
                
            <?php
              $no = +1;
              $hasil = mysql_query("SELECT * FROM pendaftar ORDER BY id_pendaftar DESC");
              while($tabel = mysql_fetch_array($hasil)) {
            ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $tabel['no_pendaftar']; ?></td>
                <td><?php echo $tabel['nama_pendaftar']; ?></td>
                <td><?php echo $tabel['bin_binti']; ?></td>
                <td><?php 
                if ($tabel['status_pendaftar'] == NULL) {
                  echo '<b>Mengunggu Konfirmasi</b>';
                } else {
                  echo '<b>'.$tabel['status_pendaftar'].'</b>';
                }
                
                ?></td>
                <td><?php echo $tabel['tahun_pendaftar']; ?></td>
                <td align="center">
                     <!-- Tombol Lihat -->
                    <a href="pendaftaran.php?id=<?php echo $tabel['no_pendaftar'];?>&id2=<?php echo $tabel['id_pendaftar'];?>" class="modal-with-form">
                      <button class="btn bg-primary btn-sm btn-block" data-toggle="tooltip" data-placement="bottom" title="Lihat Data <?php echo $tabel['nama_pendaftar']; ?>"><i class="fa fa-info"></i></button>
                    </a>

                    <!-- Tombol Edit -->
                    <a href="pendaftar_edit.php?id=<?php echo $tabel['id_pendaftar'];?>" class="modal-with-form">
                      <button class="btn bg-blue-grey btn-sm btn-sm btn-block" data-toggle="tooltip" data-placement="bottom" title="Edit Data <?php echo $tabel['nama_pendaftar']; ?>"><i class="fa fa-edit"></i></button>
                    </a>
                    <!-- Tombol Delete -->
                    <a href="pendaftar_proses_hapus.php?id=<?php echo $tabel['id_pendaftar'];?>" onclick="return confirm('Apa Anda Yakin Akan Menghapus Data <?php echo $tabel['nama_pendaftar']; ?> ?')">
                      <button class="btn btn-danger btn-sm btn-sm btn-block" data-toggle="tooltip" data-placement="bottom" title="Hapus Data <?php echo $tabel['nama_pendaftar']; ?>"><i class="fa fa-trash-o"></i></button>
                    </a>
                  </td>
              </tr>
            <?php  } ?>

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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