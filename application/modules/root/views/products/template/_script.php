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
        const quantityInputs = document.querySelectorAll('.quantityInput');
        const minusBtns = document.querySelectorAll('[id^="minusBtn"]');
        const plusBtns = document.querySelectorAll('[id^="plusBtn"]');

        minusBtns.forEach((minusBtn, index) => {
            minusBtn.addEventListener('click', () => {
                decreaseQuantity(index);
            });
        });

        plusBtns.forEach((plusBtn, index) => {
            plusBtn.addEventListener('click', () => {
                increaseQuantity(index);
            });
        });

        function decreaseQuantity(index) {
            let currentValue = parseInt(quantityInputs[index].value);
            if (currentValue > 1) {
                quantityInputs[index].value = currentValue - 1;
            }
        }

        function increaseQuantity(index) {
            let currentValue = parseInt(quantityInputs[index].value);
            quantityInputs[index].value = currentValue + 1;
        }
    });
</script>>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', calculateTotal);
        });

        // Add event listener for form submission
        const form = document.querySelector('form'); // Assuming there is only one form on the page

        form.addEventListener('submit', function(event) {
            // Call the function to calculate total before form submission
            calculateTotal();
        });
    });

    function calculateTotal() {
        let orderTotal = 0;
        const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
        checkboxes.forEach(function(checkbox) {
            const container = checkbox.closest('.border.border-dashed.border-gray-300.rounded.px-7.py-3.mb-6');
            if (container) {
                const priceElement = container.querySelector('.badge.badge-light-success');
                if (priceElement) {
                    const priceStr = priceElement.textContent.trim();
                    // Remove non-numeric characters and parse as float
                    const price = parseFloat(priceStr.replace(/[^\d.-]/g, ''));
                    if (!isNaN(price)) {
                        orderTotal += price;
                        console.log('Price:', price); // Log the parsed price for debugging
                    } else {
                        console.error('Invalid price:', priceStr); // Log an error if the price is invalid
                    }
                } else {
                    console.error('Price element not found');
                }
            } else {
                console.error('Container element not found');
            }
        });

        console.log('Order Total:', orderTotal); // Log the order total for debugging

        const shippingFee = 150; // Shipping fee
        const totalAmount = orderTotal + shippingFee; // Calculate total amount

        console.log('Total Amount:', totalAmount); // Log the total amount for debugging

        const totalOrderAmountElement = document.querySelector('#totalOrderAmount');
        const totalAmountElement = document.querySelector('#totalAmount');
        const totalInputElement = document.querySelector('#totalInput'); // Select the input element by ID

        if (totalOrderAmountElement && totalAmountElement && totalInputElement) {
            // Format the total amounts using Intl.NumberFormat
            const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'php' // Adjust the currency as needed
            });

            totalOrderAmountElement.textContent = formatter.format(orderTotal);
            totalAmountElement.textContent = formatter.format(totalAmount);

            // Set the value of the input element
            totalInputElement.value = formatter.format(totalAmount);
        } else {
            console.error('Total amount elements not found'); // Log an error if the total amount elements are not found
        }
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get references to all the checkboxes and the checkout button
        const checkboxes = document.querySelectorAll('.checkoutCheckbox');
        const checkoutButton = document.getElementById('checkoutButton');

        // Function to update UI based on checkbox state
        function updateUI() {
            let isChecked = false;
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    isChecked = true;
                    return;
                }
            });

            if (isChecked) {
                checkoutButton.classList.remove('disabled');
                checkoutButton.removeAttribute('aria-disabled');
                checkoutButton.href = '#'; // Update href attribute if necessary
            } else {
                checkoutButton.classList.add('disabled');
                checkoutButton.setAttribute('aria-disabled', 'true');
                checkoutButton.removeAttribute('href'); // Remove href attribute if necessary
            }
        }

        // Add event listener to each checkbox
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                // Update UI and save checkbox state to localStorage
                updateUI();
                localStorage.setItem('checkoutCheckboxState', this.checked);
            });
        });

        // Add event listener to the checkout button to prevent default action if disabled
        checkoutButton.addEventListener('click', function(event) {
            if (this.classList.contains('disabled')) {
                event.preventDefault();
            }
        });

        // Restore checkbox state from localStorage on page load
        const savedCheckboxState = localStorage.getItem('checkoutCheckboxState');
        if (savedCheckboxState === 'true') {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = true;
            });
        } else {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }
        // Update UI based on restored checkbox state
        updateUI();
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const gcashRadio = document.getElementById('gcash_radio');
        const paymayaRadio = document.getElementById('paymaya_radio');
        const codRadio = document.getElementById('cod_radio');
        const continueButton = document.getElementById('continue_button');

        gcashRadio.addEventListener("click", function() {
            console.log("G Cash radio clicked");
            continueButton.disabled = false;
        });

        paymayaRadio.addEventListener("click", function() {
            console.log("Pay Maya radio clicked");
            continueButton.disabled = false;
        });

        codRadio.addEventListener("click", function() {
            console.log("COD radio clicked");
            continueButton.disabled = false;
        });
    });
</script>
<!--end::Custom Javascript-->
<!--end::Javascript-->