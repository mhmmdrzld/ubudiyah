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
<!--         <li class="breadcrumb-item active">My Dashboard</li> -->
      </ol>

            <div class="row">
            <?php
              $cekk_id = '';
              $cek = mysql_query("SELECT * FROM `peserta_didik` JOIN agama on agama.id_agama=peserta_didik.id_agama JOIN kelas ON kelas.id_kelas=peserta_didik.id_kelas WHERE peserta_didik.no_pendaftar = '$no_pendaftar'");
              while($cekk = mysql_fetch_array($cek)) {
                $cekk_id = $cekk['id_pesdik'];
              }
              if ($cekk_id != '') {
                echo '
                  <div class="col-xl-2 col-sm-6 mb-3">
                    <a class="btn btn-primary btn-block btn-sm" href="pendaftaran_edit.php?id='.$cekk_id.'">
                      <i class="fa fa-edit"></i> Ubah Data
                    </a>
                  </div>

                  <div class="col-xl-2 col-sm-6 mb-3">
                    <a  style="color: white;" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#print">
                      <i class="fa fa-print"></i> Cetak Data
                    </a>
                  </div>
                ';
              } else {
                echo '
                  <div class="col-xl-2 col-sm-6 mb-3">
                    <a class="btn btn-primary btn-block btn-sm" href="pendaftaran_tambah.php">
                      <i class="fa fa-edit"></i> Masukan Data
                    </a>
                  </div>
                ';
              }
              
            ?>
                
            </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Pendaftaran</div>
        <div class="card-body">
          <div class="row">

          <div class="col-xl-6 col-sm-6 mb-3">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" border="0" id="" width="100%" cellspacing="0">
              <tbody>
                
            <?php
              $no = +1;
              $pendaftar = mysql_query("SELECT * FROM pendaftar WHERE id_pendaftar = '$id_pendaftar' ORDER BY id_pendaftar DESC");
              while($pendaftarr = mysql_fetch_array($pendaftar)) {
            ?>
              <tr>
                <td colspan="3"><b>DATA PENDAFTAR</b></td>
              </tr>
              <tr>
                <td>No. Pendaftar</td>
                <td width="5px">:</td>
                <td><?php echo $pendaftarr['no_pendaftar']; ?></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $pendaftarr['nama_pendaftar']; ?></td>
              </tr>
              <tr>
                <td>Bin/Binti</td>
                <td>:</td>
                <td><?php echo $pendaftarr['bin_binti']; ?></td>
              </tr>
              <tr>
                <td>Tahun Pendaftaran</td>
                <td>:</td>
                <td><?php echo $pendaftarr['tahun_pendaftar']; ?></td>
              </tr>
            <?php  } ?>

              </tbody>

              <tbody>
                
            <?php
              $id_pesdik='';
              $peserta_didik = mysql_query("SELECT * FROM `peserta_didik` JOIN agama on agama.id_agama=peserta_didik.id_agama JOIN kelas ON kelas.id_kelas=peserta_didik.id_kelas WHERE peserta_didik.no_pendaftar = '$no_pendaftar'");
              while($peserta_didikk = mysql_fetch_array($peserta_didik)) {
                $id_pesdik = $peserta_didikk['id_pesdik'];
            ?>
              <tr>
                <td colspan="3"><b>PESERTA DIDIK</b></td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td width="5px">:</td>
                <td><?php echo $peserta_didikk['nama_pesdik']; ?></td>
              </tr>

              <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?php echo $peserta_didikk['nisn_pesdik']; ?></td>
              </tr>

              <tr>
                <td>TTL</td>
                <td>:</td>
                <td><?php echo $peserta_didikk['tempat_lahir_pesdik']; ?>, <?php echo tgl_indo($peserta_didikk['tanggal_lahir_pesdik']); ?></td>
              </tr>
              
              <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $peserta_didikk['nama_agama']; ?></td>
              </tr>

              <tr>
                <td>Mendaftar Di Kelas</td>
                <td>:</td>
                <td>
                  <?php  
                      if ($peserta_didikk['nama_kelas'] == 'X') {
                        echo $peserta_didikk['nama_kelas']." (Sepuluh)";
                      } elseif ($peserta_didikk['nama_kelas'] == 'XI') {
                        echo $peserta_didikk['nama_kelas']." (Sebelas)";
                      } elseif ($peserta_didikk['nama_kelas'] == 'XII') {
                        echo $peserta_didikk['nama_kelas']." (Dua belas)";
                      }
                      
                  ?>
                </td>
              </tr>

              <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $peserta_didikk['jk']; ?></td>
              </tr>

            <?php  } ?>

              </tbody>

            </table>
          </div>   
          </div>

          <div class="col-xl-6 col-sm-6 mb-3">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" border="0" id="" width="100%" cellspacing="0">
              <tbody>
                
            <?php
              $no = +1;
              $orang_tua = mysql_query("SELECT * FROM `orang_tua` JOIN peserta_didik ON peserta_didik.id_pesdik=orang_tua.id_pesdik WHERE peserta_didik.id_pesdik='$id_pesdik'");
              while($orang_tuaa = mysql_fetch_array($orang_tua)) {
            ?>
              <tr>
                <td colspan="3"><b>ORANG TUA</b></td>
              </tr>
              <tr>
                <td>Nama Orang Tua</td>
                <td width="5px">:</td>
                <td><?php echo $orang_tuaa['nama_orang_tua']; ?></td>
              </tr>
              <tr>
                <td>Alamat Orang Tua</td>
                <td>:</td>
                <td><?php echo $orang_tuaa['alamat_orang_tua']; ?></td>
              </tr>
              <tr>
                <td>Pekerjaan Orang Tua</td>
                <td>:</td>
                <td><?php echo $orang_tuaa['pekerjaan_orang_tua']; ?></td>
              </tr>
              <tr>
                <td>Nomor Orang Tua</td>
                <td>:</td>
                <td><?php echo $orang_tuaa['no_orang_tua']; ?></td>
              </tr>
              <tr>
                <td>Hubungan Dengan Peserta Didik</td>
                <td>:</td>
                <td><?php echo $orang_tuaa['hub_orang_tua']; ?></td>
              </tr>
            <?php  } ?>

              </tbody>

              <tbody>
                
            <?php
              $no = +1;
              $wali_pesdik = mysql_query("SELECT * FROM `peserta_didik` JOIN wali_pesdik ON peserta_didik.id_pesdik=wali_pesdik.id_pesdik WHERE peserta_didik.id_pesdik='$id_pesdik'");
              while($wali_pesdikk = mysql_fetch_array($wali_pesdik)) {
            ?>
              <tr>
                <td colspan="3"><b>WALI SISWA</b></td>
              </tr>
              <tr>
                <td>Nama Wali Siswa</td>
                <td width="5px">:</td>
                <td><?php echo $wali_pesdikk['nama_wali']; ?></td>
              </tr>

              <tr>
                <td>Pekerjaan Wali Siswa</td>
                <td>:</td>
                <td><?php echo $wali_pesdikk['pekerjaan_wali']; ?></td>
              </tr>

              <tr>
                <td>Alamat Wali</td>
                <td>:</td>
                <td><?php echo $wali_pesdikk['alamat_wali']; ?></td>
              </tr>
              
              <tr>
                <td>No. Wali Siswa</td>
                <td>:</td>
                <td><?php echo $wali_pesdikk['no_wali']; ?></td>
              </tr>

              <tr>
                <td>Hubungan Dengan Wali Siswa</td>
                <td>:</td>
                <td><?php echo $wali_pesdikk['hub_wali']; ?></td>
              </tr>

            <?php  } ?>

              </tbody>

            </table>
          </div>   
          </div>

          </div>
        </div>
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