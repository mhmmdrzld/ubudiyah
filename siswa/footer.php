<!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2019</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave???</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="proses_logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleUser" tabindex="-1" role="dialog" aria-labelledby="exampleUser" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleUser">PROFILE</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit">Ubah</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="print" tabindex="-1" role="dialog" aria-labelledby="print" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="print">CETAK DATA</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="col-xl-12 col-sm-12 mb-3">
              <a class="btn btn-primary btn-block btn-md" href="cover_berkas.php?id=<?php echo $id_pendaftar;?>">
                <i class="fa fa-print"></i> Cover Berkas Pendaftaran
              </a>
            </div>

            <div class="col-xl-12 col-sm-12 mb-3">
              <a class="btn btn-info btn-block btn-md" href="pernyataan1.php?id=<?php echo $id_pendaftar;?>">
                <i class="fa fa-print"></i> Surat Pernyataan Orang Tua / Wali
              </a>
            </div>

            <div class="col-xl-12 col-sm-12 mb-3">
              <a class="btn btn-success btn-block btn-md" href="pernyataan2.php?id=<?php echo $id_pendaftar;?>">
                <i class="fa fa-print"></i> Surat Pernyataan Peserta Didik
              </a>
            </div>

          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

<!-- Bootstrap core JavaScript-->
    <script src="../user/vendor/jquery/jquery.min.js"></script>
    <script src="../user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../user/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../user/vendor/chart.js/Chart.min.js"></script>
    <script src="../user/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../user/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../user/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../user/js/sb-admin-datatables.min.js"></script>
    <script src="../user/js/sb-admin-charts.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable( {
            initComplete: function () {
                this.api().columns().every( function () {
                    var column = this;
                    var select = $('<select ><option value=""></option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
     
                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            }
        } );
    } );
    </script>
  </div>
</body>

</html>
