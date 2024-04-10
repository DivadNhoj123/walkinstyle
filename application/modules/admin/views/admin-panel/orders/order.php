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
                                            <h4 class="card-title">Orders List</h4>
                                        </div>
                                    </div>

                                    <div class="table-responsive">

                                        <table class="table table-hover table-striped" id="client-listing">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Buyer</th>
                                                    <th>Amount</th>
                                                    <th>Payment Method</th>
                                                    <th>Order Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($orders as $order) { ?>
                                                    <tr>
                                                        <td>
                                                            <a type="button" class="btn btn-primary btn-sm pt-2 pb-2" data-toggle="modal" data-target="#show-modal<?= $order->id ?>">
                                                                <i class="ti-eye"></i>

                                                            </a>
                                                        </td>
                                                        <td><?= $order->first_name ?></td>
                                                        <td><?= $order->shoes_name ?></td>
                                                        <td><?= $order->payment_method ?></td>
                                                        <td><?= $order->order_date ?> </td>
                                                    </tr>
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