<?php
include_once("koneksi.php");

    $carikode = mysql_query("SELECT max(no_pendaftar) AS kode FROM pendaftar") or die (mysql_error());
    $datakode = mysql_fetch_array($carikode);
    if ($datakode) {
    $nilaikode = substr($datakode['kode'], 6);
    $kode = (int) $nilaikode;
    $kode = $kode + 1;
    $kode_otomatis = "UBD-".str_pad($kode, 3, "000", STR_PAD_LEFT);
    } else {
      $kode_otomatis = "UBD-001";
    }

?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PONPES UBUDIYAH</title>

    <!-- Bootstrap core CSS -->
    <link href="./freeuser/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="./freeuser/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="./freeuser/css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="logoman.png" width="50" height="50"> PONPES UBUDIYAH</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          MENU
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#registrasi">
              	<strong><span style="color: white">REGISTRASI</span></strong>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#login">
              	<strong><span style="color: white">LOGIN</span></strong>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div style="outline-color: black;" class="intro-heading text-uppercase">PONDOK PESANTREN UBUDIYAH</div>
          <div class="intro-lead-in">Jl. Pesantren Desa Padang Kecamatan Bati-Bati Kabupaten Tanah Laut</div>
        </div>
      </div>
    </header>

    <!-- Footer -->
    <footer class="bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span style="color: white">PONPES UBUDIYAH 2019</span>
          </div>
        </div>
      </div>
    </footer>


    <!-- Modal Login -->
    <div class="portfolio-modal modal fade col-lg-6 mx-auto" id="login" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">X
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">LOGIN</h2>
                  <form method="post" action="proses_login_level.php">
                    <div class="form-group" align="left">
                      <label for="username">
                      	<i class="fa fa-fw fa-user"></i>Username
                      </label>
                      <input class="form-control" name="username" type="text"  placeholder="Masukan Username..." required="">
                    </div>
                    <div class="form-group" align="left">
                      <label for="password">
                      	<i class="fa fa-fw fa-key"></i>Password
                      </label>
                      <input class="form-control" name="password" type="password" placeholder="Masukan Password..." required="">
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
                    <button class="btn btn-info btn-block" type="reset" name="reset">Reset</button>
                  </form>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Registrasi -->
    <div class="portfolio-modal modal fade" id="registrasi" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">X
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="modal-body">
                  <h2 class="text-uppercase">REGISTRASI</h2>
                  <form method="post" action="proses_registrasi.php">

                    <div class="form-group" align="left">
                      <label for="no_pendaftar">
                        No. Pendaftaran/Tes
                      </label>
                      <input class="form-control" name="no_pendaftar" type="text" value="<?php echo $kode_otomatis ?>" readonly>
                    </div>

                    <div class="form-group" align="left">
                      <label for="username">
                      	Nama Lengkap
                      </label>
                      <input class="form-control" name="nama_pendaftar" type="text"  placeholder="Masukan Nama Lengkap..." required="">
                    </div>

                    <div class="form-group" align="left">
                      <label for="password">
                      	Bin/Binti
                      </label>
                      <input class="form-control" name="bin_binti" type="text" placeholder="Masukan Nama Bin/Binti..." required="">
                    </div>

                    <div class="form-group" align="left">
                      <label for="no_pendaftar">
                        Tahun Pendaftaran
                      </label>
                      <?php
                        $tahun = date('Y')
                      ?>
                      <input class="form-control" name="tahun_pendaftar" type="text" readonly="" value="<?php echo $tahun;?>">
                    </div>

                    <button class="btn btn-primary btn-block" type="submit" name="registrasi">Registrasi</button>
                    <button class="btn btn-info btn-block" type="reset" name="reset">Reset</button>

                  </form>
                  <br>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="modal-body">
                  <h2 class="text-uppercase">PERSYARATAN</h2>
                  
                    <div class="form-group" align="left">
                      <ol class="list-group">
                        <?php
                          $no = +1;
                          $hasil = mysql_query("SELECT * FROM persyaratan ORDER BY id_persyaratan ASC");
                          while($tabel = mysql_fetch_array($hasil)) {
                        ?>
                        <li class="list-group-item"><?php echo $no++.'. '; echo $tabel['nama_persyaratan']; ?></li>
                        <?php } ?>
                      </ol>
                    </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="./freeuser/vendor/jquery/jquery.min.js"></script>
    <script src="./freeuser/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="./freeuser/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="./freeuser/js/jqBootstrapValidation.js"></script>
    <script src="./freeuser/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="./freeuser/js/agency.min.js"></script>

  </body>

</html>
