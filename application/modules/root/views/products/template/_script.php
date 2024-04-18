<!--begin::Javascript-->
<script>
    var hostUrl = "<?= base_url('assets/tem-plate'); ?>/";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="<?= base_url('assets/tem-plate'); ?>/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="<?= base_url('assets/tem-plate'); ?>/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="<?= base_url('assets/tem-plate'); ?>/js/widgets.bundle.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/js/custom/apps/chat/chat.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/js/custom/utilities/modals/create-project/type.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/js/custom/utilities/modals/create-project/budget.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/js/custom/utilities/modals/create-project/settings.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/js/custom/utilities/modals/create-project/team.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/js/custom/utilities/modals/create-project/targets.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/js/custom/utilities/modals/create-project/files.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/js/custom/utilities/modals/create-project/complete.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/js/custom/utilities/modals/create-project/main.js"></script>
<script src="<?= base_url('assets/tem-plate'); ?>/js/custom/utilities/modals/users-search.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
        $('.add-to-cart').on('click', function() {
            var cart = $('.shopping-cart');
            if (cart.length === 0) {
                console.error("Shopping cart element not found");
                return; // Exit the function if shopping cart element is not found
            }

            var imgtodrag = $(this).closest('.card').find(".standardized-image").eq(0);
            if (imgtodrag.length === 0) {
                console.error("Image to drag not found");
                return; // Exit the function if image to drag is not found
            }

            var imgclone = imgtodrag.clone()
                .offset({
                    top: imgtodrag.offset().top,
                    left: imgtodrag.offset().left
                })
                .css({
                    'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '100'
                })
                .appendTo($('body'))
                .animate({
                    'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
                }, 1000, 'easeInOutExpo');

            setTimeout(function() {
                cart.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                'height': 0
            }, function() {
                $(this).detach()
            });
        });
    });

    $(document).ready(function() {
        $('.add-to-cart').on('click', function(event) {
            event.preventDefault(); // Prevent default form submission
            var formData = $(this).closest('form').serialize(); // Serialize form data
            $.ajax({
                type: 'POST',
                url: $(this).closest('form').attr('action'), // Get form action URL
                data: formData,
                success: function(response) {
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                },
                error: function(xhr, status, error) {
                    // Handle error
                }
            });
        });
    });
</script>

</script>
<script>
    // Get the cart count element
    var cartCountElement = document.getElementById("cart-count");

    // Check if the cart count is equal to 0
    if (parseInt("<?php echo $cart; ?>") === 0) {
        // If count is 0, hide the element
        cartCountElement.style.display = "none";
    } else {
        // If count is not 0, show the element
        cartCountElement.style.display = "inline"; // or "block", depending on its original display property
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php foreach ($on_cart as $i => $cart) { ?>
                (function() {
                    const index = <?= $i ?>;
                    console.log("Processing cart item at index:", index);

                    // Get references to the input field and buttons for this specific cart item
                    const quantityInput = document.getElementById('quantityInput<?= $i ?>');
                    const minusBtn = document.getElementById('minusBtn<?= $i ?>');
                    const plusBtn = document.getElementById('plusBtn<?= $i ?>');

                    console.log("Quantity Input:", quantityInput);
                    console.log("Minus Button:", minusBtn);
                    console.log("Plus Button:", plusBtn);

                    // Add click event listeners to the plus and minus buttons if elements exist
                    if (quantityInput && minusBtn && plusBtn) {
                        minusBtn.addEventListener('click', () => {
                            decreaseQuantity();
                        });

                        plusBtn.addEventListener('click', () => {
                            increaseQuantity();
                        });

                        // Add blur event listener to the input field
                        quantityInput.addEventListener('blur', () => {
                            // Get the current value of the input field
                            let currentValue = parseInt(quantityInput.value);
                            // If the input field value is less than 1 or NaN, set it to 1
                            if (currentValue < 1 || isNaN(currentValue)) {
                                quantityInput.value = '1';
                            }
                        });

                        // Function to decrease quantity
                        function decreaseQuantity() {
                            // Get the current value of the input field
                            let currentValue = parseInt(quantityInput.value);
                            // Decrease the value by 1, ensuring it never goes below 1
                            if (currentValue > 1) {
                                quantityInput.value = currentValue - 1;
                            }
                        }

                        // Function to increase quantity
                        function increaseQuantity() {
                            // Get the current value of the input field
                            let currentValue = parseInt(quantityInput.value);
                            // Increase the value by 1
                            quantityInput.value = currentValue + 1;
                        }
                    } else {
                        console.error("Some elements not found for cart item at index:", index);
                    }
                })();
        <?php } ?>
    });
</script>


<!--end::Custom Javascript-->
<!--end::Javascript-->