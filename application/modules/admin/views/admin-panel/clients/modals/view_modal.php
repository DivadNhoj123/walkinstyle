<div class="modal fade" id="view-modal<?= $client->id ?>">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-capitalize"><?= $client->first_name ?> Information</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <!-- <img src="<?= base_url('clients/' . $client->img) ?>" class="mw-100 w-100 rounded" alt="image"> -->
                    </div>
                    <div class="col-md-8">
                        <div class="row mb-0">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Fistname</label>
                                    <input type="text" class="form-control" value="<?= $client->first_name ?>" disabled>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Middlename</label>
                                    <input type="text" class="form-control" value="<?= $client->middle_name ?>" disabled>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Lastname</label>
                                    <input type="text" class="form-control" value="<?= $client->last_name ?>" disabled>
                                </div>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="<?= $client->email ?>" disabled>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="<?= $client->phone ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" value="<?= $client->address ?>" disabled>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Zipcode</label>
                                    <input type="text" class="form-control" value="<?= $client->zipcode ?>" disabled>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" value="<?= $client->country ?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>