<script src="<?= base_url('template'); ?>/js/custom/apps/ecommerce/catalog/save-product.js"></script>
<script>
    "use strict";

    // Class definition
    var KTAppEcommerceProducts = function() {
        // Shared variables
        var table;
        var datatable;

        // Private functions
        var initDatatable = function() {
            // Init datatable --- more info on datatables: https://datatables.net/manual/
            datatable = $(table).DataTable({
                "info": false,
                'order': [],
                'pageLength': 10,
                'columnDefs': [{
                        render: DataTable.render.number(',', '.', 2),
                        targets: 4
                    },
                    {
                        orderable: false,
                        targets: 0
                    }, // Disable ordering on column 0 (checkbox)
                    {
                        orderable: false,
                        targets: 7
                    }, // Disable ordering on column 7 (actions)
                ]
            });

            // Re-init functions on datatable re-draws
            datatable.on('draw', function() {
                handleDeleteRows();
            });
        }

        // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
        var handleSearchDatatable = () => {
            const filterSearch = document.querySelector('[data-kt-ecommerce-product-filter="search"]');
            filterSearch.addEventListener('keyup', function(e) {
                datatable.search(e.target.value).draw();
            });
        }

        // Handle status filter dropdown
        var handleStatusFilter = () => {
            const filterStatus = document.querySelector('[data-kt-ecommerce-product-filter="status"]');
            $(filterStatus).on('change', e => {
                let value = e.target.value;
                if (value === 'all') {
                    value = '';
                }
                datatable.column(6).search(value).draw();
            });
        }

        // Delete cateogry
        var handleDeleteRows = () => {
            // Select all delete buttons
            const deleteButtons = table.querySelectorAll('[data-kt-ecommerce-product-filter="delete_row"]');

            deleteButtons.forEach(d => {
                // Delete button on click
                d.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Select parent row
                    const parent = e.target.closest('tr');

                    // Get product ID
                    const productId = e.target.dataset.productId;

                    // Get product name
                    const productName = parent.querySelector('[data-kt-ecommerce-product-filter="product_name"]').innerText;

                    // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Are you sure you want to delete " + productName + "?",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then(function(result) {
                        if (result.value) {
                            // Send AJAX request to delete product
                            $.ajax({
                                url: 'admin/delete_client',
                                method: 'POST',
                                dataType: 'json',
                                data: {
                                    client_id: productId 
                                }, // Pass product ID
                                success: function(response) {
                                    if (response.success) {
                                        Swal.fire({
                                            text: "You have deleted " + productName + "!",
                                            icon: "success",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn fw-bold btn-primary",
                                            }
                                        }).then(function() {
                                            // Remove current row
                                            datatable.row($(parent)).remove().draw();
                                        });
                                    } else {
                                        // Handle error response
                                    }
                                }
                            });
                        } else if (result.dismiss === 'cancel') {
                            Swal.fire({
                                text: productName + " was not deleted.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            });
                        }
                    });
                })
            });
        }



        // Public methods
        return {
            init: function() {
                table = document.querySelector('#kt_ecommerce_products_table');

                if (!table) {
                    return;
                }

                initDatatable();
                handleSearchDatatable();
                handleStatusFilter();
                handleDeleteRows();
            }
        };
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function() {
        KTAppEcommerceProducts.init();
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('kt_ecommerce_add_product_submit').addEventListener('click', function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Get the content of the text editor
            var editorContent = document.querySelector('#kt_ecommerce_add_product_description .ql-editor').innerHTML;

            // Strip out <p> tags from the content
            var strippedContent = editorContent.replace(/<p>/g, '').replace(/<\/p>/g, '');

            // Set the stripped content to the hidden input field
            document.getElementById('descriptionInput').value = strippedContent;

            // Submit the form
            document.getElementById('kt_ecommerce_add_product_form').submit();
        });
    });
</script>