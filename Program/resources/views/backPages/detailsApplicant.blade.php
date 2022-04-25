<div class="modal fade" id="dApplicant{{ $list->pk_user_id }}">
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
                            <img src="{{ asset('img') }}/fotoYoggy.jpg" class="img-fluid" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5 text-bold">Full name</div>
                                    <div class="col-lg-8 col-sm-7 mb-2">{{ $list->full_name }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5 text-bold">Place, date of birth</div>
                                    <div class="col-lg-8 col-sm-7 mb-2">{{ $list->place }},
                                        {{ $list->date_of_brith->format('d-m-Y') }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5 text-bold">Gender</div>
                                    <div class="col-lg-8 col-sm-7 mb-2">{{ $list->gender }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5 text-bold">ID card number</div>
                                    <div class="col-lg-8 col-sm-7 mb-2">{{ $list->IDcard_number }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5 text-bold">Phone number</div>
                                    <div class="col-lg-8 col-sm-7 mb-2">{{ $list->phone_number }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5 text-bold">Email</div>
                                    <div class="col-lg-8 col-sm-7 mb-2">{{ $list->email }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5 text-bold">Address</div>
                                    <div class="col-lg-8 col-sm-7 mb-4">{{ $list->address }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-3">
                    <h4 class="text-bold mb-4">Document</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-4 col-sm-3 text-bold">CV</div>
                                <div class="col-lg-2 col-sm-1  mb-1"><i class="bi bi-check-circle "></i></div>
                                <div class="col-lg-6 col-sm-8 mb-4">
                                    <a type="button" href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal"
                                        data-target="#daDocument" title="Details">Check</a>
                                </div>

                                <div class="col-lg-4 col-sm-3 text-bold">ID card</div>
                                <div class="col-lg-2 col-sm-1  mb-1"><i class="bi bi-check-circle "></i></div>
                                <div class="col-lg-6 col-sm-8 mb-4">
                                    <a type="button" href="#" class="btn btn-outline-dark btn-sm">Check</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-4 col-sm-3 text-bold">Certificate</div>
                                <div class="col-lg-2 col-sm-1  mb-1"><i class="bi bi-check-circle "></i></div>
                                <div class="col-lg-6 col-sm-8 mb-4">
                                    <a type="button" href="#" class="btn btn-outline-dark btn-sm">Check</a>
                                </div>

                                <div class="col-lg-4 col-sm-3 text-bold">Transcripts</div>
                                <div class="col-lg-2 col-sm-1  mb-1"><i class="bi bi-x-circle"></i>
                                </div>
                                <div class="col-lg-6 col-sm-8 mb-4">
                                    <a type="button" href="#" class="btn btn-outline-dark btn-sm">Check</a>
                                </div>
                            </div>
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
