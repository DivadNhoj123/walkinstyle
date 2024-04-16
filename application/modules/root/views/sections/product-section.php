<section class="lattest-product-area pb-40 category-list">
    <div class="row">
        <?php foreach ($shoes as $shoe) { ?>
            <!-- single product -->
            <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <!-- Assuming $shoes is your collection of shoes -->
                    <img class="img-fluid standardized-image" src="<?= base_url('shoes/' . $shoe->img) ?>" alt="item">
                    <div class="product-details">
                        <h6><?= $shoe->shoes_name ?></h6>
                        <div class="price">
                            <h6>$<?= $shoe->price ?></h6>
                        </div>
                        <div class="prd-bottom">
                            <a href="<?= base_url('root/buy/' . $shoe->id); ?>" class="social-info">
                                <span class="ti-shopping-cart"></span>
                                <p class="hover-text">buy now</p>
                            </a>
                            <!-- add-to-cart -->
                            <a class="social-info" data-toggle="modal" data-target="#add-cart<?= $shoe->id ?>">
                                <span class="ti-bag"></span>
                                <p class="hover-text  add-to-cart">add to bag</p>
                            </a>
                            <a href="" class="social-info">
                                <span class="lnr lnr-heart"></span>
                                <p class="hover-text">Wishlist</p>
                            </a>
                        </div>
                        <div class="modal fade" id="add-cart<?= $shoe->id ?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="alert alert-success mb-0" role="alert">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="login_box_img">
                                                        <img class="img-fluid" src="<?= base_url('shoes/' . $shoe->img) ?>" style="height: 400px; width:400px;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i class="ti-close text-warning fw-bold"></i>
                                                    </button>
                                                    <h3><?= $shoe->shoes_name ?></h3>
                                                    <p id="description"><?= $shoe->description ?></p>
                                                    <form class="" action="" method="post">
                                                        <div class="row">
                                                            <div class="col-md-6 text-center">
                                                            <h2 class="text-warning">$<?= $shoe->price ?></h2>
                                                                <div class="product_count">
                                                                    <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                                                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                                                    <button onclick="var result = document.getElementById('sst'); var sst = parseInt(result.value); if( !isNaN(sst) && sst > 0 ) { result.value = sst - 1; } return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <button type="submit" class="btn primary-btn add-to-cart">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</section>