<section class="lattest-product-area pb-40 category-list">
    <div class="row">
        <?php foreach ($shoes as $shoe) { ?>
            <!-- single product -->
            <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <!-- Assuming $shoes is your collection of shoes -->
                    <img class="img-fluid standardized-image" src="<?= base_url('shoes/' . $shoe->img) ?>" alt="">
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
                            <a href="" class="social-info">
                                <span class="ti-bag"></span>
                                <p class="hover-text">add to bag</p>
                            </a>
                            <a href="" class="social-info">
                                <span class="lnr lnr-heart"></span>
                                <p class="hover-text">Wishlist</p>
                            </a>
                            <a href="" class="social-info">
                                <span class="lnr lnr-move"></span>
                                <p class="hover-text">view more</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- single product -->
        <?php } ?>
    </div>
</section>