<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Walk In Style | Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets'); ?>images/favicon.png" />
    <!-- plugins:js -->
    <script src="<?= base_url('assets'); ?>/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/sweetalert/sweetalert.min.js"></script>

    <!-- endinject -->
</head>

<body class="sidebar-dark">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-dark">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5 text-white" href="<?= base_url('admin/adminPanel'); ?>"><img src="<?= base_url('assets'); ?>/logo/1.png" class="mr-2" alt="logo" style="background-color: white; border-radius: 50%; padding: 5px;"> <small>Walk N Style</small></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets'); ?>/logo/1.png" alt="logo" style="background-color: white; border-radius: 100%;"></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
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
                            <a href="<?= base_url('admin/logout'); ?>" class="dropdown-item logout">
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
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/adminPanel'); ?>">
                            <i class="ti-desktop menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/product'); ?>">
                            <i class="ti-package menu-icon"></i>
                            <span class="menu-title">Shoes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/product'); ?>">
                            <i class="ti-shopping-cart menu-icon"></i>
                            <span class="menu-title">Orders</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link collapsed" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                            <i class="ti-shopping-cart menu-icon"></i>
                            <span class="menu-title">Orders</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="charts" style="">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html"></a></li>
                            </ul>
                        </div>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Client</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/product'); ?>">
                            <i class="ti-money menu-icon"></i>
                            <span class="menu-title">Profits</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="ti-settings menu-icon"></i>
                            <span class="menu-title">Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Welcome Back</h3>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <div class="justify-content-end d-flex">
                                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                                <a class="dropdown-item" href="#">January - March</a>
                                                <a class="dropdown-item" href="#">March - June</a>
                                                <a class="dropdown-item" href="#">June - August</a>
                                                <a class="dropdown-item" href="#">August - November</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title">Sales Report</p>
                                        <a href="#" class="text-info">View all</a>
                                    </div>
                                    <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                                    <div id="sales-legend" class="chartjs-legend mt-4 mb-2">
                                        <ul class="1-legend">
                                            <li><span style="background-color: rgb(152, 189, 255);"></span>Offline Sales</li>
                                            <li><span style="background-color: rgb(75, 73, 172);"></span>Online Sales</li>
                                        </ul>
                                    </div>
                                    <canvas id="sales-chart" width="686" height="342" style="display: block; height: 274px; width: 549px;" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin transparent">
                            <div class="row">
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <p class="mb-4">Today’s Sales</p>
                                            <p class="fs-30 mb-2">0</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Total Sales</p>
                                            <p class="fs-30 mb-2">0</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                                    <div class="card card-light-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Total Products</p>
                                            <p class="fs-30 mb-2">0</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 stretch-card transparent">
                                    <div class="card card-light-danger">
                                        <div class="card-body">
                                            <p class="mb-4">Number of Buyers</p>
                                            <p class="fs-30 mb-2">0</p>
                                        </div>
                                    </div>
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


    <!-- Plugin js for this page -->
    <script src="<?= base_url('assets'); ?>/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url('assets'); ?>/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('assets'); ?>/js/off-canvas.js"></script>
    <script src="<?= base_url('assets'); ?>/js/hoverable-collapse.js"></script>
    <script src="<?= base_url('assets'); ?>/js/template.js"></script>
    <script src="<?= base_url('assets'); ?>/js/settings.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url('assets'); ?>/js/dashboard.js"></script>
    <script src="<?= base_url('assets'); ?>/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
    <script>
    $(document).ready(function() {
        $('.logout').on('click', function(e) {
            e.preventDefault(); // Prevent default link behavior

            let route = $(this).attr('href');

            swal({
                title: "Are you sure?",
                text: "You will be logged out!",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3f51b5',
                cancelButtonColor: '#ff4081',
                confirmButtonText: 'OK',
                cancelButtonText: 'Cancel',
                buttons: {
                    cancel: {
                        visible: true,
                        className: "btn btn-danger",
                    },
                    confirm: {
                        className: "btn btn-primary",
                    }
                }
            }).then((confirmed) => {
                if (confirmed) {
                    // Perform AJAX request to logout
                    $.ajax({
                        url: route,
                        type: "POST", // Change to appropriate method (POST/GET) based on your CI routes
                        data: {
                            csrf_token_name: '<?= $this->security->get_csrf_hash(); ?>'
                        },
                        dataType: 'json', // Expect JSON response
                        success: function(response) {
                            // Redirect after logout
                            window.location.href = '<?= base_url(); ?>';
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            // Handle error response
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        });
    });
</script>
</body>

</html>