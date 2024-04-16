<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('products/template/_header'); ?>

<body class="sidebar-dark">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php $this->load->view('products/template/_topbar'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php $this->load->view('products/template/_sidebar'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <?php foreach ($shoes as $shoe) { ?>
                            <div class="col-md-3 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="display-4"><?= $shoe->shoes_name ?></h6>
                                        <img class="img-fluid standardized-image" src="<?= base_url('shoes/' . $shoe->img) ?>" alt="item">
                                        <div class="border border-bottom border-secondary mb-2 mt-2"></div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 class="fw-bold">
                                                    P
                                                    <?= $shoe->price ?>
                                                    <div class="row ml-1">
                                                        <a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a>
                                                        <a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a>
                                                        <a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a>
                                                        <a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a>
                                                        <a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a>
                                                        <a href="#"><img src="<?= base_url('assets/template'); ?>/images/star-icon.png"></a>
                                                    </div>
                                                </h4>

                                            </div>

                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-sm btn-primary add-to-cart">
                                                    <i class="ti-shopping-cart"></i>
                                                    Add Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024. Walk N Style. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with Krischel</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?php $this->load->view('products/template/_script'); ?>
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
    </script>
</body>

</html>