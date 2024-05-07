<script>
    "use strict";
    var KTAppEcommerceProducts = function() {
        var t, e, n = () => {
            t.querySelectorAll('[data-kt-ecommerce-product-filter="accept"]').forEach((t => {
                t.addEventListener("click", (function(t) {
                    t.preventDefault();
                    const n = t.target.closest("tr"),
                        productId = t.target.dataset.productId, // assuming product ID is stored in a data attribute
                        r = n.querySelector('[data-kt-ecommerce-product-filter="product_name"]').innerText;
                    Swal.fire({
                        text: "Are you sure you want to accept to deliver " + r + "?",
                        icon: "info",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, Accept!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-success",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then((function(t) {
                        if (t.value) {
                            // Send AJAX request to update status
                            $.ajax({
                                url: '<?= base_url('root/AcceptToDeliver'); ?>', // Change the URL to your route
                                method: 'POST',
                                data: {
                                    productId: productId
                                },
                                success: function(response) {
                                    Swal.fire({
                                        text: "You have accepted " + r + " to deliver!.",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn fw-bold btn-primary"
                                        }
                                    }).then((function() {
                                        window.location.reload();
                                    }));
                                }
                            });
                        } else if (t.dismiss === "cancel") {
                            Swal.fire({
                                text: r + " was not deleted.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            });
                        }
                    }));
                }));
            }));

            t.querySelectorAll('[data-kt-ecommerce-product-filter="delivered"]').forEach((t => {
                t.addEventListener("click", (function(t) {
                    t.preventDefault();
                    const n = t.target.closest("tr"),
                        productId = t.target.dataset.productId, // assuming product ID is stored in a data attribute
                        r = n.querySelector('[data-kt-ecommerce-product-filter="product_name"]').innerText;
                    Swal.fire({
                        text: "Are you sure you want to mark " + r + " as delivered?",
                        icon: "info",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, Mark as Delivered!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-success",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then((function(t) {
                        if (t.value) {
                            // Send AJAX request to update status
                            $.ajax({
                                url: '<?= base_url('root/successDelivered'); ?>', // Change the URL to your route
                                method: 'POST',
                                data: {
                                    productId: productId
                                },
                                success: function(response) {
                                    Swal.fire({
                                        text: r + " has been marked as delivered!.",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn fw-bold btn-primary"
                                        }
                                    }).then((function() {
                                        window.location.reload();
                                    }));
                                }
                            });
                        } else if (t.dismiss === "cancel") {
                            Swal.fire({
                                text: r + " was not marked as delivered.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            });
                        }
                    }));
                }));
            }));
        };
        return {
            init: function() {
                (t = document.querySelector("#kt_ecommerce_products_table")) && ((e = $(t).DataTable({
                    info: !1,
                    order: [],
                    pageLength: 10,
                    columnDefs: [{
                        render: DataTable.render.number(",", ".", 2),
                        targets: 4
                    }, {
                        orderable: !1,
                        targets: 0
                    }, {
                        orderable: !1,
                        targets: 5
                    }]
                })).on("draw", (function() {
                    n()
                })), document.querySelector('[data-kt-ecommerce-product-filter="search"]').addEventListener("keyup", (function(t) {
                    e.search(t.target.value).draw()
                })), (() => {
                    const t = document.querySelector('[data-kt-ecommerce-product-filter="status"]');
                    $(t).on("change", (t => {
                        let n = t.target.value;
                        "all" === n && (n = ""), e.column(6).search(n).draw()
                    }))
                })(), n())
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function() {
        KTAppEcommerceProducts.init()
    }));
</script>