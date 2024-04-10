<div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 80px;">
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="<?= base_url('root/shop'); ?>">Dashboard</a></li>
                            <li class="nav-item "><a class="nav-link" href="<?= base_url('root/shop'); ?>">Order</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item">
                                <a href="#" class="cart" style="position: relative;">
                                    <span class="ti-bag"></span>
                                    <span style="position: absolute; top: -40px;" class="text-danger"><strong>1</strong></span>
                                </a>
                            </li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="nav-profile-img">
                                        <img src="<?= base_url('assets/landingTemplate'); ?>/img/r12.jpg" alt="image" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                                    </div>
                                </a>
                                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#logout">
                                        <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Modal Quick Product View -->

        </div>
        <div class="search_input" id="search_input_box" style="display: none;">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
</div>
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
                <h6 class="title title-up">LOGOUT</h6>
            </div>
            <div class="modal-body">
                <div class="col text-center">
                    <i class="ti-user text-primary"></i>
                </div>
                <div class="col text-center">
                    <h4>
                        Are you sure you want to logout?
                    </h4>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <a href=" <?= base_url('admin/logout'); ?>" class="btn btn-danger float-end ">Yes</a>
            </div>
        </div>
    </div>
</div>