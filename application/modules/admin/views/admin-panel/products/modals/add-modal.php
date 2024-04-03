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