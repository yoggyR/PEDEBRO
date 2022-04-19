<div class="modal fade" id="eProfile">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-bold modal-title"><img src="{{ asset('img') }}/pedebro.png" alt="" width="26"
                        height="26" class="d-inline-block align-text-top"> PEDEBRO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 class="mb-4 text-bold">Edit profile</h2>
                <div class="card p-3">
                    <div class="form-group">
                        <label for="exampleInputFile">Photo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose photo</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Full name">Full name</label>
                        <input type="text" class="form-control" id="Full name" placeholder="Enter full name">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="Place">Place</label>
                                <input type="text" class="form-control" id="Place" placeholder="Enter Place">
                            </div>
                            <div class="col-lg-6">
                                <label for="Date of birth">Date of birth</label>
                                <input type="date" class="form-control" id="Date of birth"
                                    placeholder="Enter Date of birth">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Phone number">Phone number</label>
                        <input type="text" class="form-control" id="Phone number" placeholder="Enter Phone number">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" id="Email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" style="float: right">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
