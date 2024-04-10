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
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex">
                                            <h4 class="card-title">Shoes List</h4>
                                        </div>
                                        <?php $this->load->view('admin-panel/products/modals/add-modal'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php if (isset($_GET['success']) && $_GET['success'] == 'true') {
                                            if (isset($_GET['method']) && $_GET['method'] == 'add') { ?>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-success">
                                                            <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                                                <i class="ti-close"></i>
                                                            </button>
                                                            <span>
                                                                <b> Success - </b> Product added successfully
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } elseif (isset($_GET['method']) && $_GET['method'] == 'update') { ?>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-success">
                                                            <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                                                <i class="ti-close"></i>
                                                            </button>
                                                            <span>
                                                                <b> Success - </b> Product updated successfully
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }
                                        } elseif (isset($_GET['error']) && $_GET['error'] == 'true') { ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-danger">
                                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                                            <i class="ti-close"></i>
                                                        </button>
                                                        <span>
                                                            <b> Error - </b> Failed to add/update product
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <div class="table-responsive">

                                        <table class="table table-hover table-striped" id="order-listing">
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
                                                            <a type="button" class="btn btn-primary btn-sm pt-2 pb-2" data-toggle="modal" data-target="#show-modal<?= $shoe->id ?>">
                                                                <i class="ti-eye"></i>

                                                            </a>
                                                            <a type="button" class="btn btn-info btn-sm pt-2 pb-2" data-toggle="modal" data-target="#edit-modal<?= $shoe->id ?>">
                                                                <i class="ti-pencil-alt"></i>
                                                            </a>
                                                            <a type="button" class="btn btn-danger btn-sm delete-shoes pt-2 pb-2" data-id="<?= $shoe->id ?>">
                                                                <i class="ti-trash"></i>
                                                            </a>
                                                        </td>
                                                        <td><?= $shoe->shoes_name ?></td>
                                                        <td><?= $shoe->category ?></td>
                                                        <td class="text-success"> <i class="ti-money"></i><?= $shoe->price ?> </td>
                                                        <td><?= $shoe->stock ?></td>
                                                    </tr>
                                                    <?php $this->load->view('admin-panel/products/modals/view-modal', ['shoe' => $shoe]); ?>
                                                    <?php $this->load->view('admin-panel/products/modals/edit-modal', ['shoe' => $shoe]); ?>
                                                    <?php $this->load->view('admin-panel/products/scripts'); ?>
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
                <?php $this->load->view('admin-panel/template/_footer'); ?>
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