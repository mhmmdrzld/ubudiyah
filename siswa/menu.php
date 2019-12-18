<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">PONPES UBUDIYAH</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Beranda">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Beranda</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Pendaftaran">
          <a class="nav-link" href="pendaftaran.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Data Pendaftaran</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal2">
            <i class="fa fa-fw fa-power-off"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <a class="nav-link" data-toggle="modal" data-target="#exampleUser">
            <i>|</i>
            <?php echo $nama_pendaftar;?>
        </a>
        <a class="nav-link" data-toggle="modal" data-target="">
            <i>|</i>
            <?php 
            $tanggal = date('Y-m-d');
            echo tgl_indo($tanggal);
            ?>
            <i>|</i>
        </a>
      </ul>
    </div>
  </nav>