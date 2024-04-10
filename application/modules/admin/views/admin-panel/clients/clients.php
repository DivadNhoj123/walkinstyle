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
                                            <h4 class="card-title">clients List</h4>
                                        </div>
                                    </div>

                                    <div class="table-responsive">

                                        <table class="table table-hover table-striped" id="client-listing">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Middlename</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($clients as $client) { ?>
                                                    <tr>
                                                        <td>
                                                            <a type="button" class="btn btn-info pt-2 pb-2 btn-sm" data-toggle="modal" data-target="#view-modal<?= $client->id ?>">
                                                                <i class="ti-info-alt"></i>
                                                            </a>
                                                            <?php $this->load->view('admin-panel/clients/modals/view_modal', ['client' => $client]); ?>
                                                            <a type="button" class="btn btn-danger pt-2 pb-2 delete-client" data-id="<?= $client->id ?>">
                                                                <i class="ti-trash"></i>
                                                            </a>
                                                        </td>
                                                        <td><?= $client->first_name ?></td>
                                                        <td><?= $client->last_name ?></td>
                                                        <td><?= $client->middle_name ?></td>
                                                        <td><?= $client->email ?> </td>
                                                        <td><?= $client->phone ?> </td>
                                                    </tr>
                                                    <?php $this->load->view('admin-panel/clients/scripts/scripts'); ?>
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