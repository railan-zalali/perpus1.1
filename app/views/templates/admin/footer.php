</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-primary" href="<?= BASEURL; ?>/admin_logout/logout">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= BASEURL; ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= BASEURL; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= BASEURL; ?>/js/sb-admin-2.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/chart.js/Chart.min.js"></script>
<script src="<?= BASEURL; ?>/js/demo/chart-area-demo.js"></script>
<script src="<?= BASEURL; ?>/js/demo/chart-pie-demo.js"></script>

<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.colVis.min.js"></script>
<script src="<?php echo BASEURL; ?>/js/adminscript.js"></script>
<script>
    const today = new Date();
    const year = today.getFullYear();
    const month = (today.getMonth() + 1).toString().padStart(2, '0');
    const day = today.getDate().toString().padStart(2, '0');
    const todayFormatted = `${year}-${month}-${day}`;

    const inputDate = document.querySelector('#input-tanggal');

    var hari = new Date();
    var dd = String(hari.getDate()).padStart(2, '0');
    var mm = String(hari.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = hari.getFullYear();

    hari = yyyy + '-' + mm + '-' + dd;
    document.getElementById("input-tanggal").value = hari;
    document.getElementById("taun").value = hari;

    function openAndPrint() {
        var newTab = window.open('<?= BASEURL ?>/admin/print_anggota');
        newTab.onload = function() {
            newTab.print();
        };
    }
</script>
</body>

</html>