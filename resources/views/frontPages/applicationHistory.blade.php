@extends('frontLayouts.main')
@section('frontContent')
    <div class=" mt-4 mb-5 bg-white">
        <div class="container py-5">
            <h2 class="mb-4 fw-bold">Application history</h2>
            <div class="card mb-3">
                <div class="row g-0">
                    <h6 class="fw-bold card-header">Apply date : 14-04-2022</h6>
                    <div class="card-body">
                        <a href="#" style="text-decoration: none;" data-bs-toggle="modal"
                        data-bs-target="#job">
                            <h4 class="card-title">Web Developer</h4>
                        </a>
                        <h6>| Fresh graduate |</h6>
                        <div class="row">
                            <div class="col-lg-7 mb-3">
                                <p class="card-text">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit.
                                    Voluptate optio ex sunt consequatur placeat, cumque id omnis dolorum harum. Ad
                                    optio atque accusantium. Suscipit quidem natus reprehenderit sunt nesciunt
                                    tempore, sequi asperiores architecto ipsa culpa ea quo, amet in libero!</p>
                            </div>
                            <div class="col-lg-5">
                                <ul>
                                    <li>Education : D3, S1</li>
                                    <li>Location : Prabumulih</li>
                                    <li>Uploaded : 3 mins ago</li>
                                    <li>Closing : 20-04-2022</li>
                                    <li>Status : <span class="badge bg-success">Opened</span> </li>
                                </ul>
                            </div>
                        </div>
                        <a type="button" href="#" class="btn btn-outline-dark" style="float: right">Cancel</a>
                        @include('frontPages.modalJob')
                    </div>
                </div>
            </div>
            {{-- <h1 class="text-center mt-5 p-5 fw-normal"><i class="bi bi-clipboard2"></i>Empty !</h1> --}}
        </div>
    </div>
@endsection
