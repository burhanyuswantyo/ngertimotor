<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center text-muted">
    All Rights Reserved by Adminmart. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url() ?>files/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>files/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url() ?>files/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<!-- apps -->
<script src="<?= base_url() ?>files/dist/js/app-style-switcher.js"></script>
<script src="<?= base_url() ?>files/dist/js/feather.min.js"></script>
<script src="<?= base_url() ?>files/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url() ?>files/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url() ?>files/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="<?= base_url() ?>files/assets/extra-libs/c3/d3.min.js"></script>
<script src="<?= base_url() ?>files/assets/extra-libs/c3/c3.min.js"></script>
<script src="<?= base_url() ?>files/assets/libs/chartist/dist/chartist.min.js"></script>
<script src="<?= base_url() ?>files/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="<?= base_url() ?>files/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?= base_url() ?>files/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url() ?>files/dist/js/pages/dashboards/dashboard1.min.js"></script>
<script>
    $('.check-input').on('click', function() {
        const kerusakanId = $(this).data('kerusakan');
        const gejalaId = $(this).data('gejala');

        $.ajax({
            url: "<?= base_url('kerusakan/ubahrelasi'); ?>",
            type: 'post',
            data: {
                kerusakanId: kerusakanId,
                gejalaId: gejalaId
            },
            success: function() {
                document.location.href = "<?= base_url('kerusakan/ubah/'); ?>" + kerusakanId;
            }
        })
    });
</script>
</body>

</html>