<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php $this->load->view('partials/stylesheets'); ?>

<body id="category">
    <!-- Start Header Area -->
    <?php $this->load->view('partials/headers'); ?>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <?php $this->load->view('partials/banner'); ?>
    <!-- End Banner Area -->
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div class="head">Browse Categories</div>
                    <ul class="main-categories">
                        <li class="main-nav-list"><a class="border-bottom-0" data-toggle="collapse" href="#babyCare" aria-expanded="false" aria-controls="babyCare"><span class="lnr lnr-arrow-right"></span>Baby Care<span class="number">(48)</span></a>
                            <ul class="collapse" id="babyCare" data-toggle="collapse" aria-expanded="false" aria-controls="babyCare">
                                <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                <li class="main-nav-list child"><a href="#" class="border-bottom-0">Meat<span class="number">(11)</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-filter mt-50">
                    <div class="top-filter-head">Product Filters</div>
                    <div class="common-filter">
                        <div class="head">Brands</div>
                        <form action="#">
                            <ul>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                            </ul>
                        </form>
                    </div>
                    <div class="common-filter">
                        <div class="head">Color</div>
                        <form action="#">
                            <ul>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
                                        Leather<span>(29)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
                                        with red<span>(19)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting">
                        <select style="display: none;">
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                        </select>
                        <div class="nice-select" tabindex="0"><span class="current">Default sorting</span>
                            <ul class="list">
                                <li data-value="1" class="option selected">Default sorting</li>
                                <li data-value="1" class="option">Default sorting</li>
                                <li data-value="1" class="option">Default sorting</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sorting mr-auto">
                        <select style="display: none;">
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                        </select>
                        <div class="nice-select" tabindex="0"><span class="current">Show 12</span>
                            <ul class="list">
                                <li data-value="1" class="option selected">Show 12</li>
                                <li data-value="1" class="option">Show 12</li>
                                <li data-value="1" class="option">Show 12</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pagination">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->

                <!-- Start Best Seller -->
                <?php $this->load->view('sections/product-section'); ?>
                <!-- End Best Seller -->

                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting mr-auto">
                        <select style="display: none;">
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                        </select>
                        <div class="nice-select" tabindex="0"><span class="current">Show 12</span>
                            <ul class="list">
                                <li data-value="1" class="option selected">Show 12</li>
                                <li data-value="1" class="option">Show 12</li>
                                <li data-value="1" class="option">Show 12</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pagination">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>
    <!-- Start related-product Area -->
    <section class="related-product-area section_gap"></section>
    <!-- End related-product Area -->

    <!-- start footer Area -->
    <?php $this->load->view('partials/footer'); ?>
    <!-- End footer Area -->
</body>
<?php $this->load->view('partials/scripts'); ?>

</html>