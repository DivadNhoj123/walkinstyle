<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-dark">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5 text-white" href="<?= base_url('admin/adminPanel'); ?>"><img src="<?= base_url('assets'); ?>/logo/1.png" class="mr-2" alt="logo" style="background-color: white; border-radius: 50%; padding: 5px;"> <small>Walk N Style</small></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets'); ?>/logo/1.png" alt="logo" style="background-color: white; border-radius: 100%;"></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav ">
            <li class="nav-item nav-search d-none d-lg-block">
                <a href="" class="nav-link">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="ti-shopping-cart"></i>
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                        <span class="input-group-text" id="search">
                            <i class="icon-search"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="<?= base_url('assets'); ?>/logo/Walk-N-Style.png" alt="profile" />
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item">
                        <i class="ti-settings text-primary"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#logout">
                        <i class="ti-power-off text-primary"></i>
                        Logout
                    </a>

                </div>
            </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>
<div class="modal fade" id="logout">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <div class="col text-center">
                    <i class="ti-user text-primary icon-lg"></i>

                </div>
                <div class="col text-center">
                    <h4>
                        Are you sure you want to logout?
                    </h4>
                </div>
                <div class="col text-center">
                    <div class="justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                        <a href=" <?= base_url('admin/logout'); ?>" class="btn btn-primary float-end ">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>