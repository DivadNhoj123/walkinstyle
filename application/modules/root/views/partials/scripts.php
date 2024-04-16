<script src="<?= base_url('assets/landingTemplate'); ?>/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/landingTemplate'); ?>/js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url('assets/landingTemplate'); ?>/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/landingTemplate'); ?>/js/jquery.sticky.js"></script>
<script src="<?= base_url('assets/landingTemplate'); ?>/js/nouislider.min.js"></script>
<script src="<?= base_url('assets/landingTemplate'); ?>/js/countdown.js"></script>
<script src="<?= base_url('assets/landingTemplate'); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/landingTemplate'); ?>/js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="<?= base_url('assets/landingTemplate'); ?>/js/gmaps.min.js"></script>
<script src="<?= base_url('assets/landingTemplate'); ?>/js/main.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
        $('.add-to-cart').on('click', function() {
            var cart = $('.shopping-cart');
            var imgtodrag = $(this).closest('.single-product').find(".standardized-image").eq(0);
            if (imgtodrag) {
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
            }
        });
    });
</script>