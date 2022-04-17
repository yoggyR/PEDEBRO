<div class="modal fade" id="eProfile" data-bs-keyboard="false" tabindex="-1" aria-labelledby="eProfileLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="fw-bold modal-title"><img src="{{ asset('img') }}/pedebro.png" alt="" width="26" height="26"
                        class="d-inline-block align-text-top"> PEDEBRO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pe-lg-4 ps-lg-4 mb-2">
                <h2 class="mb-4 fw-bold">Edit profile</h2>
                <div class="card mb-3 pe-2 ps-2">
                    <h4 class="fw-bold mt-3">Personal profile</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Full name</label>
                                    <input type="text" class="form-control" id="" placeholder=""
                                        value="Yoggy Rachmawan">
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label for="" class="form-label fw-bold">Place</label>
                                            <input type="text" class="form-control" id="" placeholder=""
                                                value="Prabumulih">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="" class="form-label fw-bold">Date of birth</label>
                                            <input type="date" class="form-control" id="" placeholder=""
                                                value="10-01-1997">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Gender</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">Choose...</option>
                                        <option value="2" selected>Male</option>
                                        <option value="3">Female</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="form-label fw-bold">Email</label>
                                    <input type="email" class="form-control" id="" placeholder=""
                                        value="yoggyrachmawan12@gmail.com">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Photo (.jpg)</label>
                                    <input type="file" class="form-control" id="" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">ID card number</label>
                                    <input type="text" class="form-control" id="" placeholder=""
                                        value="12345678901122334455" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Phone number</label>
                                    <input type="text" class="form-control" id="" placeholder="" value="089624735217">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Address</label>
                                    <textarea name="" id="" class="form-control">Jl. Mekar Sari, No.105, Kota Prabumulih</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card pe-2 ps-2">
                    <h4 class="fw-bold mt-3">Document</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">CV (.pdf)</label>
                                    <input type="file" class="form-control" id="" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">ID card (.pdf)</label>
                                    <input type="file" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Certificate (.pdf)</label>
                                    <input type="file" class="form-control" id="" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Transcripts (.pdf)</label>
                                    <input type="file" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark">Save changes</button>
            </div>
        </div>
    </div>
</div>
