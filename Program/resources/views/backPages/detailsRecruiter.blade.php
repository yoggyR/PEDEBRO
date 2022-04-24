<div class="modal fade" id="dRecruiter{{ $list->pk_user_id }}">
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
                <h2 class="mb-4 text-bold">Details recruiter</h2>
                <div class="card p-3">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('storage/' . $list->photo) }}" class="img-fluid" alt="profile">
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4 mb-lg-2 text-bold">Full name</div>
                                <div class="col-lg-8 mb-2">{{ $list->full_name }}</div>

                                <div class="col-lg-4 mb-lg-2 text-bold">Place, date of birth</div>
                                <div class="col-lg-8 mb-2">{{ $list->place }},
                                    {{ $list->date_of_brith->format('d-m-Y') }}</div>

                                <div class="col-lg-4 mb-lg-2 text-bold">Gender</div>
                                <div class="col-lg-8 mb-2">{{ $list->gender }}</div>

                                <div class="col-lg-4 mb-lg-2 text-bold">Phone number</div>
                                <div class="col-lg-8 mb-2">{{ $list->phone_number }}</div>

                                <div class="col-lg-4 mb-lg-2 text-bold">Email</div>
                                <div class="col-lg-8 mb-2">{{ $list->email }}</div>

                                <div class="col-lg-4 mb-lg-2 text-bold">Address</div>
                                <div class="col-lg-8 mb-2">{{ $list->address }}</div>
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
