<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url('assets'); ?>/vendors/chart.js/Chart.min.js"></script>
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
<script>
    (function($) {
        'use strict';
        $(function() {
            // Initialize the DataTable
            var dataTable = $('#order-listing').DataTable({
                "aLengthMenu": [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"]
                ],
                "iDisplayLength": 5,
                "language": {
                    search: ""
                }
            });

            // Find the search input field
            var searchInput = $('#order-listing_filter').find('input');

            // Create the button element (anchor tag)
            var button = $('<a/>', {
                'class': 'btn btn-sm btn-success ml-1', // Set the class of the anchor tag
                'data-toggle': 'modal', // Add data-toggle attribute
                'data-target': '#add-modal', // Add data-target attribute
                html: '<i class="ti-plus"></i> Shoe' // Set the inner HTML content of the anchor tag
            });

            // Append the button next to the search input
            searchInput.after(button);

            // Add placeholder for the search input
            searchInput.attr('placeholder', 'Search');

            // Remove the form-control-sm class from length select element
            $('#order-listing_length').find('select').removeClass('form-control-sm');
        });

        $(function() {
            $('#client-listing').DataTable({
                "aLengthMenu": [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"]
                ],
                "iDisplayLength": 5,
                "language": {
                    search: ""
                }
            });
            $('#client-listing').each(function() {
                var datatable = $(this);
                // SEARCH - Add the placeholder for Search and Turn this into in-line form control
                var search_input = datatable.closest('.dataTables_wrapper').find(
                    'div[id$=_filter] input');
                search_input.attr('placeholder', 'Search');
                search_input.removeClass('form-control-sm');
                // LENGTH - Inline-Form control
                var length_sel = datatable.closest('.dataTables_wrapper').find(
                    'div[id$=_length] select');
                length_sel.removeClass('form-control-sm');
            });
        });
    })(jQuery);
</script>
<