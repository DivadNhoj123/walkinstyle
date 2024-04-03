<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url('assets'); ?>/vendors/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="<?= base_url('assets'); ?>/js/dataTables.select.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/dropify/dropify.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/file-upload.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('assets'); ?>/js/off-canvas.js"></script>
<script src="<?= base_url('assets'); ?>/js/hoverable-collapse.js"></script>
<script src="<?= base_url('assets'); ?>/js/template.js"></script>
<script src="<?= base_url('assets'); ?>/js/settings.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url('assets'); ?>/js/dashboard.js"></script>
<script src="<?= base_url('assets'); ?>/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->

<script>
    (function($) {
        'use strict';
        $('.dropify').dropify();
    })(jQuery);

    // Function to handle previewing image for a specific modal
    function previewImage(event, shoeId) {
        const input = event.target;
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const preview = document.getElementById('previewImage' + shoeId);
                preview.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Loop through each file input and bind the event listener
    document.querySelectorAll('[id^="imageInput"]').forEach(item => {
        const shoeId = item.id.replace('imageInput', ''); // Extract shoe id
        item.addEventListener('change', (event) => previewImage(event, shoeId));
    });
</script>