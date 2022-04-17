@extends('frontLayouts.main')
@section('frontContent')
    <div class=" mt-2 mb-5 bg-white">
        <div class="container py-5">
            <h2 class="mb-5 fw-bold">My profile</h2>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <img src="{{ asset('img') }}/img.jpg" class="img-fluid" alt="..." style="border-top-left-radius: 5px;">
                    </div>
                    <div class="col-lg-9">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h4 class="card-title fw-bold mb-lg-4">Personal data</h4>
                                    <div class="row">
                                        <div class="col-lg-5 mb-lg-2 fw-bold">Full name</div>
                                        <div class="col-lg-7 mb-2">Yoggy Rachmawan</div>
                                        <div class="col-lg-5 mb-lg-2 fw-bold">Place, date of birth</div>
                                        <div class="col-lg-7 mb-2">Prabumulih, 10-01-1997</div>
                                        <div class="col-lg-5 mb-lg-2 fw-bold">Gender</div>
                                        <div class="col-lg-7 mb-2">Male</div>
                                        <div class="col-lg-5 mb-lg-2 fw-bold">ID card number</div>
                                        <div class="col-lg-7">12345678901122334455</div>
                                        <div class="col-lg-5 mb-lg-2 fw-bold">Phone number</div>
                                        <div class="col-lg-7 mb-2">089624735217</div>
                                        <div class="col-lg-5 mb-lg-2 fw-bold">Email</div>
                                        <div class="col-lg-7 mb-2">yoggyrachmawan12@gmail.com</div>
                                        <div class="col-lg-5 mb-lg-2 fw-bold">Address</div>
                                        <div class="col-lg-7 mb-4">Jl. Mekar Sari, No.105, Kota Prabumulih</div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h4 class="card-title fw-bold mb-lg-4">Document</h4>
                                    <div class="row">
                                        <div class="col-lg-6  fw-bold">CV</div>
                                        <div class="col-lg-2  text-lg-center mb-1"><i class="bi bi-check-circle "></i></div>
                                        <div class="col-lg-2  mb-4">
                                            <a type="button" href="#" class="btn btn-outline-dark btn-sm">Check</a>
                                        </div>

                                        <div class="col-lg-6 fw-bold">ID card</div>
                                        <div class="col-lg-2 text-lg-center mb-1"><i class="bi bi-check-circle "></i></div>
                                        <div class="col-lg-2 mb-4">
                                            <a type="button" href="#" class="btn btn-outline-dark btn-sm">Check</a>
                                        </div>

                                        <div class="col-lg-6 fw-bold">Certificate</div>
                                        <div class="col-lg-2 text-lg-center mb-1"><i class="bi bi-check-circle "></i></div>
                                        <div class="col-lg-2 mb-4">
                                            <a type="button" href="#" class="btn btn-outline-dark btn-sm">Check</a>
                                        </div>

                                        <div class="col-lg-6 fw-bold">Transcripts</div>
                                        <div class="col-lg-2 text-lg-center mb-1"><i class="bi bi-x-circle"></i></div>
                                        <div class="col-lg-2 mb-4">
                                            <a type="button" href="#" class="btn btn-outline-dark btn-sm">Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a type="button" href="#" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#eProfile"
                        style="float: right">Edit profile</a>
                </div>
            </div>
        </div>
    </div>
    @include('frontPages.modalEditProfile')
@endsection
