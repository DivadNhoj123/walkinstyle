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
                        <img src="<?= base_url('shoes/' . $shoe->img) ?>" class="mw-100 w-100 rounded" alt="image">
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