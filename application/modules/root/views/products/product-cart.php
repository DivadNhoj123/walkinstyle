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
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8">
                                    <h3 class="font-weight-bold">My Cart</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped" id="client-listing">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Product</th>
                                                    <th></th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($shoes as $shoe) { ?>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </td>
                                                        <td><img class="img-fluid standardized-image" src="<?= base_url('shoes/' . $shoe->img) ?>" alt="item"></td>
                                                        <td><?= $shoe->shoes_name ?></td>
                                                        <td><?= $shoe->price ?></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Your Order</h4>
                                    <div class="border border-secondary mb-2"></div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h6>Products</h6>
                                        </div>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4">
                                            <h6>Total</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p>Kyrie 12</p>
                                        </div>
                                        <div class="col-sm-4 text-center">x1</div>
                                        <div class="col-sm-4">1,000</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p>Shipping Fee</p>
                                        </div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-4">150</div>
                                    </div>
                                    <div class="border border-secondary mb-2"></div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-4">
                                            <h6>Sub - Total</h6>
                                        </div>
                                        <div class="col-sm-4">
                                            <span class="badge badge-info" style="border-radius: 2px;">P 112</span>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-sm-12">
                                            <h6>Payment Method</h6>
                                            <div class="row">
                                                <div class="col-sm-12 mb-2">
                                                    <button class="btn btn-outline-info  btn-block">
                                                        <i class="ti-gcash"></i>
                                                        G Cash  
                                                    </button>
                                                </div>
                                                <div class="col-sm-12 mb-2">
                                                    <button class="btn btn-outline-success  btn-block">
                                                        <i class="ti-shopping-cart"></i>
                                                        Pay Maya
                                                    </button>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button class="btn btn-outline-secondary  btn-block">
                                                        Cash On Delivery (COD)
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <button class="btn btn-block btn-success">
                                        <i class="ti-shopping-cart"></i>
                                        Check out
                                    </button>
                                </div>
                            </div>
                        </div>
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
</body>

</html>