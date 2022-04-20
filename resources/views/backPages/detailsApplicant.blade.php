<div class="modal fade" id="dApplicant">
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
                <h2 class="mb-4 text-bold">Details applicant</h2>
                <div class="card p-3">
                    <h4 class="text-bold mb-lg-4">Personal data</h4>
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <img src="{{ asset('img') }}/img.jpg" class="img-fluid" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 mb-lg-2 text-bold">Full name</div>
                                    <div class="col-lg-8 mb-2">Yoggy Rachmawan</div>
                                    <div class="col-lg-4 mb-lg-2 text-bold">Place, date of birth</div>
                                    <div class="col-lg-8 mb-2">Prabumulih, 10-01-1998</div>
                                    <div class="col-lg-4 mb-lg-2 text-bold">Gender</div>
                                    <div class="col-lg-8 mb-2">Male</div>
                                    <div class="col-lg-4 mb-lg-2 text-bold">ID card number</div>
                                    <div class="col-lg-8">12345688901122334455</div>
                                    <div class="col-lg-4 mb-lg-2 text-bold">Phone number</div>
                                    <div class="col-lg-8 mb-2">089624835218</div>
                                    <div class="col-lg-4 mb-lg-2 text-bold">Email</div>
                                    <div class="col-lg-8 mb-2">yoggyrachmawan12@gmail.com</div>
                                    <div class="col-lg-4 mb-lg-2 text-bold">Address</div>
                                    <div class="col-lg-8 mb-4">Jl. Mekar Sari, No.105, RT/RW 003/004, Kel.
                                        Majasari, Kec. Prabumulih Selatan, Kota Prabumulih</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-3">
                    <h4 class="text-bold mb-lg-4">Document</h4>
                    <div class="row">
                        <div class="col-lg-2  text-bold">CV</div>
                        <div class="col-lg-3  text-lg-center mb-1"><i class="bi bi-check-circle "></i></div>
                        <div class="col-lg-7  mb-4">
                            <a type="button" href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal"
                                data-target="#daDocument" title="Details">Check</a>
                        </div>

                        <div class="col-lg-2 text-bold">ID card</div>
                        <div class="col-lg-3 text-lg-center mb-1"><i class="bi bi-check-circle "></i></div>
                        <div class="col-lg-7 mb-4">
                            <a type="button" href="#" class="btn btn-outline-dark btn-sm">Check</a>
                        </div>

                        <div class="col-lg-2 text-bold">Certificate</div>
                        <div class="col-lg-3 text-lg-center mb-1"><i class="bi bi-check-circle "></i></div>
                        <div class="col-lg-7 mb-4">
                            <a type="button" href="#" class="btn btn-outline-dark btn-sm">Check</a>
                        </div>

                        <div class="col-lg-2 text-bold">Transcripts</div>
                        <div class="col-lg-3 text-lg-center mb-1"><i class="bi bi-x-circle"></i>
                        </div>
                        <div class="col-lg-7 mb-4">
                            <a type="button" href="#" class="btn btn-outline-dark btn-sm">Check</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <label class="mr-auto">&COPY; 2022 PEDEBRO.</label>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@include('backPages.detailsApplicantDocument')
