<div class="modal fade" id="edit-modal<?= $shoe->id ?>">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/update_product/' . $shoe->id); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="<?= $shoe->img ?>" name="default">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img id="previewImage<?= $shoe->id ?>" src="<?= base_url('shoes/' . $shoe->img) ?>" class="mw-100 w-100 rounded" alt="image">
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-0">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Product Image</label>
                                        <input type="file" name="img" class="file-upload-default" id="imageInput<?= $shoe->id ?>">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="Change Product Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
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
                                        <input type="text" class="form-control" value="<?= $shoe->stock ?>" name="qty" required>
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