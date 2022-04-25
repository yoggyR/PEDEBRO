@extends('frontLayouts.main')
@section('frontContent')
    <div class=" mt-4 mb-5 bg-white">
        <div class="container py-5">
            <h2 class="mb-4 fw-bold">My profile</h2>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <img src="{{ asset('img') }}/FotoYoggy.jpg" class="img-fluid" alt="..."
                            style="border-top-left-radius: 5px;">
                    </div>
                    <div class="col-lg-9">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h4 class="card-title fw-bold mb-lg-4 mb-sm-3">Personal data</h4>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-5 fw-bold">Full name</div>
                                        <div class="col-sm-9 col-lg-7 mb-2">Yoggy Rachmawan</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-5 fw-bold">Place, date of birth</div>
                                        <div class="col-sm-9 col-lg-7 mb-2">Prabumulih, 10-01-1997</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-5 fw-bold">Gender</div>
                                        <div class="col-sm-9 col-lg-7 mb-2">Male</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-5 fw-bold">ID card number</div>
                                        <div class="col-sm-9 col-lg-7 mb-2">12345678910111213</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-5 col-lg-4 fw-bold">Phone number</div>
                                        <div class="col-sm-9 col-lg-7 mb-2">089624735217</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-5 fw-bold">Email</div>
                                        <div class="col-sm-9 col-lg-7 mb-2">yoggyrachmawan12@gmail.com</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-5 fw-bold">Address</div>
                                        <div class="col-sm-9 col-lg-7 mb-4">Jl. Mekar Sari, No.105, Kota Prabumulih</div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h4 class="card-title fw-bold mb-lg-4 mb-sm-3">Document</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-2  fw-bold">CV</div>
                                        <div class="col-lg-2 col-sm-1  mb-1"><i class="bi bi-check-circle "></i></div>
                                        <div class="col-lg-3 col-sm-9  mb-4">
                                            <a type="button" href="#" class="btn btn-outline-dark btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#cDocument">Check</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-2 fw-bold">ID card</div>
                                        <div class="col-lg-2 col-sm-1 mb-1"><i class="bi bi-check-circle "></i></div>
                                        <div class="col-lg-3 col-sm-9 mb-4">
                                            <a type="button" href="#" class="btn btn-outline-dark btn-sm">Check</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-2 fw-bold">Certificate</div>
                                        <div class="col-lg-2 col-sm-1 mb-1"><i class="bi bi-check-circle "></i></div>
                                        <div class="col-lg-3 col-sm-9 mb-4">
                                            <a type="button" href="#" class="btn btn-outline-dark btn-sm">Check</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-2 fw-bold">Transcripts</div>
                                        <div class="col-lg-2 col-sm-1 mb-1"><i class="bi bi-x-circle"></i></div>
                                        <div class="col-lg-3 col-sm-9 mb-4">
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
    @include('frontPages.modalCheckDocument')
@endsection
