<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('admin-panel/template/_header'); ?>
    <body class="sidebar-dark">
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <?php $this->load->view('admin-panel/template/_topbar'); ?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <?php $this->load->view('admin-panel/template/_sidebar'); ?>
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
        <?php $this->load->view('admin-panel/template/_script'); ?>
    </body>
</html>