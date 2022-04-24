@extends('frontLayouts.main')
@section('frontContent')
    <div class=" mt-4 mb-5 bg-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="bi bi-filter-square mb-3 fw-bold"> Select</h2>
                    <div class="mb-3">
                        <label for="Job name" class="form-label fw-bold">Job name</label>
                        <select class="form-select" aria-label="Default select example" id="Job name">
                            <option selected>All</option>
                            <option value="1">Web Developer</option>
                            <option value="2">Administration</option>
                            <option value="3">IT Suport</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Level" class="form-label fw-bold fw-bold">Level</label>
                        <select class="form-select" aria-label="Default select example" id="Level">
                            <option selected>All</option>
                            <option value="1">Fresh graduate</option>
                            <option value="1">Experience</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Education" class="form-label fw-bold">Education</label>
                        <select class="form-select" aria-label="Default select example" id="Education">
                            <option selected>All</option>
                            <option value="1">SMA/SMK</option>
                            <option value="1">D3</option>
                            <option value="1">S1</option>
                            <option value="1">S2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Location" class="form-label fw-bold">Location</label>
                        <select class="form-select" aria-label="Default select example" id="Location">
                            <option selected>All</option>
                            <option value="1">Prabumulih</option>
                            <option value="1">Jakarta</option>
                            <option value="1">Bandung</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-9 ms-auto ps-lg-4 mt-5">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <h5 class="fw-bold card-header"><img src="{{ asset('img') }}/pedebro.png" alt="" width="26"
                                    height="26" class="d-inline-block align-text-top"> PEDEBRO</h5>
                            <div class="card-body">
                                <h4 class="card-title">Web Developer</h4>
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
                                            <li>Date created : 18-04-2022</li>
                                            <li>Closing date : 28-04-2022</li>
                                            <li>Status : <span class="badge bg-success">Opened</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <a type="button" href="#" class="btn btn-outline-dark" data-bs-toggle="modal"
                                    data-bs-target="#job" style="float: right">Check</a>
                                @include('frontPages.modalJob')
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <h5 class="fw-bold card-header"><img src="{{ asset('img') }}/pedebro.png" alt="" width="26"
                                    height="26" class="d-inline-block align-text-top"> PEDEBRO</h5>
                            <div class="card-body">
                                <h4 class="card-title">Administration</h4>
                                <h6 class="">| Experience | Fresh graduate |</h6>
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
                                            <li>Education : SMA/SMK, D3, S1</li>
                                            <li>Location : Bandung</li>
                                            <li>Date created : 18-04-2022</li>
                                            <li>Closing date : 20-04-2022</li>
                                            <li>Status : <span class="badge bg-success">Opened</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <a type="button" href="#" class="btn btn-outline-dark" style="float: right">Check</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <h5 class="fw-bold card-header"><img src="{{ asset('img') }}/pedebro.png" alt="" width="26"
                                    height="26" class="d-inline-block align-text-top"> PEDEBRO</h5>
                            <div class="card-body">
                                <h4 class="card-title">IT Support</h4>
                                <h6 class="">| Experience | </h6>
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
                                            <li>Education : S1, S2</li>
                                            <li>Location : Jakarta</li>
                                            <li>Date created : 18-04-2022</li>
                                            <li>Closing date : 20-04-2022</li>
                                            <li>Status : <span class="badge bg-success">Opened</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <a type="button" href="#" class="btn btn-outline-dark" style="float: right">Check</a>
                            </div>
                        </div>
                    </div>
                    <nav style="float:right;" class="mt-4">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="bi bi-chevron-double-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="bi bi-chevron-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
