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
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/dropify/dropify.min.css">
</head>

<body class="sidebar-dark">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-dark">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.svg" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
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
                            <img src="images/faces/face28.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a href="<?= base_url('admin/logout'); ?>" class="dropdown-item">
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
            <!-- partial:partials/_settings-panel.html -->
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
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
                        <a class="nav-link" href="">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Client</span>
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
                            <div class="alert alert-success">
                                <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                    <i class="ti-close"></i>
                                </button>
                                <span>
                                    <b> Success - </b> This is a regular notification made with ".alert-success"
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex">
                                            <h4 class="card-title">Shoes List</h4>
                                        </div>
                                        <div>
                                            <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#add-modal">
                                                <i class="ti-plus"></i>
                                                Shoe
                                            </a>
                                            <div class="modal fade" id="add-modal">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Add Product</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="<?= base_url('admin/add_product'); ?>" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <input type="file" id="input-file-now-custom-2" class="dropify" data-height="400" name="img">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-0">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Shoes</label>
                                                                                    <input type="text" class="form-control" name="shoes" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Brand</label>
                                                                                    <input type="text" class="form-control" name="brand" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Category</label>
                                                                                    <select class="form-control" name="category" required>
                                                                                        <option value="Sports">Sports</option>
                                                                                        <option value="Running">Running</option>
                                                                                        <option value="Snickers">Snickers</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">

                                                                                <div class="form-group">
                                                                                    <label>Color</label>
                                                                                    <input type="text" class="form-control" name="color" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group">
                                                                            <label>Description</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Enter ..." id="description" name="description"></textarea>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Price</label>
                                                                                    <input type="text" class="form-control" name="price" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Qty</label>
                                                                                    <input type="text" class="form-control" name="qty" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Shoes</th>
                                                    <th>Categories</th>
                                                    <th>Prices</th>
                                                    <th>Stocks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($shoes as $shoe) { ?>
                                                    <tr>
                                                        <td>
                                                            <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#show-modal<?= $shoe->id ?>">
                                                                <i class="ti-eye"></i>
                                                                
                                                            </a>
                                                            <a type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-modal<?= $shoe->id ?>">
                                                                <i class="ti-pencil-alt"></i>
                                                            </a>
                                                            <a type="button" class="btn btn-danger btn-sm">
                                                                <i class="ti-trash"></i>
                                                            </a>
                                                        </td>
                                                        <td><?= $shoe->shoes_name ?></td>
                                                        <td><?= $shoe->category ?></td>
                                                        <td class="text-success"> <i class="ti-money"></i><?= $shoe->price ?> </td>
                                                        <td><?= $shoe->stock ?></td>
                                                    </tr>
                                                    <div class="modal fade" id="show-modal<?= $shoe->id ?>">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">View Product</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                        <img src="<?= base_url('shoes/'.$shoe->img) ?>" class="mw-100 w-100 rounded" alt="image">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row mb-0">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Shoes</label>
                                                                                        <input type="text" class="form-control" value="<?= $shoe->shoes_name ?>" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Brand</label>
                                                                                        <input type="text" class="form-control" value="<?= $shoe->brand ?>" disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Category</label>
                                                                                        <input type="text" class="form-control" value="<?= $shoe->category ?>" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">

                                                                                    <div class="form-group">
                                                                                        <label>Color</label>
                                                                                        <input type="text" class="form-control" value="<?= $shoe->color ?>" disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="form-group">
                                                                                <label>Description</label>
                                                                                <textarea class="form-control" rows="3" disabled><?= $shoe->description ?></textarea>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Price</label>
                                                                                        <input type="text" class="form-control" value="<?= $shoe->price ?>" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label>Qty</label>
                                                                                        <input type="text" class="form-control" value="<?= $shoe->stock ?>" disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="edit-modal<?= $shoe->id ?>">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Update Product</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="<?= base_url('admin/update_product?id='.$shoe->id); ?>" method="POST" enctype="multipart/form-data">
                                                                    <input type="hidden" value="<?= $shoe->img ?>" name="default" >
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <!-- <input type="file" name="img"> -->
                                                                                <input type="file" id="input-file-now-custom-2" class="dropify" data-height="400" name="img">
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row mb-0">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <label>Shoes</label>
                                                                                            <input type="text" class="form-control" value="<?= $shoe->shoes_name ?>" name="shoes" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <label>Brand</label>
                                                                                            <input type="text" class="form-control" value="<?= $shoe->brand ?>" name="brand" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <label>Category</label>
                                                                                            <select class="form-control" name="category" required>
                                                                                                <option value="Sports">Sports</option>
                                                                                                <option value="Running">Running</option>
                                                                                                <option value="Snickers">Snickers</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">

                                                                                        <div class="form-group">
                                                                                            <label>Color</label>
                                                                                            <input type="text" class="form-control" value="<?= $shoe->color ?>" name="color" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label>Description</label>
                                                                                    <textarea class="form-control" rows="3" placeholder="Enter ..." id="description" name="description"><?= $shoe->description ?></textarea>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <label>Price</label>
                                                                                            <input type="text" class="form-control" value="<?= $shoe->price ?>" name="price" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            <label>Qty</label>
                                                                                            <input type="text" class="form-control"value="<?= $shoe->stock ?>"  name="qty" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </tbody>
                                        </table>
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
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="<?= base_url('assets'); ?>/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('assets'); ?>/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url('assets'); ?>/js/dataTables.select.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendors/dropify/dropify.min.js"></script>

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

            //dropify //
            $('.dropify').dropify();

                $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })

            function showNotification(from, align, type, message) {
                $.notify({
                    icon: "tim-icons icon-bell-55",
                    message: message

                }, {
                    type: type,
                    timer: 8000,
                    placement: {
                        from: from,
                        align: align
                    }
                });
            }

            // @if (session()->has('notification'))
            //     var notificationMessage = '{{ session('notification') }}';
            //     showNotification('top', 'center', 'success', notificationMessage);
            // @endif

            $('#skillForm').submit(function(event) {
                event.preventDefault();
                var form = $(this);

                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize(),
                    success: function(data) {
                        window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#editSkill').submit(function(event) {});
        });

        $('.delete').on('click', function() {
            let $this = $(this);
            let deleteId = $this.data('id');

            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
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
                    let route = "{{ route('skill.destroy', '__id__') }}";
                    route = route.replace('__id__', deleteId);

                    $.ajax({
                        url: route,
                        type: "DELETE",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        },
                        success: function(data) {
                            swal({
                                title: 'Deleted!',
                                text: 'Your data has been deleted successfully.',
                                icon: 'success',
                                button: 'OK',
                            }).then(() => {
                                location.reload(true); // Corrected reload statement
                            });
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            console.error(xhr.responseText);
                        }
                    });
                } else {
                    swal({
                        title: 'Cancelled',
                        text: 'Your data is safe.',
                        icon: 'info',
                        button: 'OK',
                    });
                }
            });
        });
    </script>
</body>

</html>