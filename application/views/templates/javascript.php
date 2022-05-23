</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Bootstrap core JavaScript-->
<!-- the jQuery Library -->


<!-- <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<!-- <script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"></script> -->


<!-- Page level plugins -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script> -->


<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
        });
    } );
</script>
<script>
    $(document).ready(function() {
        $('#dataTablesK').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel','pageLength'
            ],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]

        });
    } );
</script>

<!-- Page level custom scripts -->
<!-- <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script> -->

<!-- sweetalert -->
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<!-- <script src="<?php echo base_url() ?>assets/js/myscript.js"></script> -->
<script src="<?php echo base_url() ?>assets/js/flashdata.js"></script>

<!-- tooltip -->
<script src="<?php echo base_url() ?>assets/js/tooltip.js"></script>

</body>

</html>