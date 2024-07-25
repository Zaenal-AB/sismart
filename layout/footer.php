    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.2.0
        </div>
        <strong>Copyright &copy; 2024 <a href="#">SMPIT Anak Sholeh Mataram</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap Select JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.14/js/bootstrap-select.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.selectpicker').selectpicker();
        });
    </script>


    <!-- jQuery -->
    <script src="assets/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/admin/plugins/jszip/jszip.min.js"></script>
    <script src="assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/admin/dist/js/adminlte.min.js"></script>
    <!-- ICON  -->
    <script src="https://kit.fontawesome.com/b28b8dbd18.js" crossorigin="anonymous"></script>



    <!-- Page specific cetak pdf/exel dll script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            $("#example3").DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": false,
                "responsive": true,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
        });
    </script>

    </script>
    </body>

    </html>