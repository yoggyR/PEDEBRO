@extends('backLayouts.main')
@section('backContent')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">My profile</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <!-- container-fluid -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="{{ asset('template') }}/dist/img/user2-160x160.jpg" class="img-fluid"
                                    alt="profile">
                            </div>
                            <div class="col-lg-6 ">
                                <div class="row">
                                    <div class="col-lg-4 mb-lg-2 text-bold">Full name</div>
                                    <div class="col-lg-8 mb-2">Yoggy Rachmawan</div>

                                    <div class="col-lg-4 mb-lg-2 text-bold">Place, date of birth</div>
                                    <div class="col-lg-8 mb-2">Prabumulih, 10-01-1997</div>

                                    <div class="col-lg-4 mb-lg-2 text-bold">Phone number</div>
                                    <div class="col-lg-8 mb-2">0895801121100</div>

                                    <div class="col-lg-4 mb-lg-2 text-bold">Email</div>
                                    <div class="col-lg-8 mb-2">yoggyrachmawan12@gmail.com</div>

                                    <div class="col-lg-4 mb-lg-2 text-bold">Address</div>
                                    <div class="col-lg-8 mb-2">Jl. Mekar Sari, No.105, RT/RW 003/004, Kel. Majasari,
                                        Kec.
                                        Prabumulih Selatan, Kota Prabumulih</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <a type="button" href="#" class="btn btn-outline-dark" data-toggle="modal"
                            data-target="#eProfile" style="float: right">Edit profile</a>
                    </div>
                </div>
                <h3 class="mt-5 mb-4">Change password</h3>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Your current password</label>
                                <input type="password" class="form-control" id="formGroupExampleInput"
                                    placeholder="Your current password">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">New password</label>
                                <input type="password" class="form-control" id="formGroupExampleInput2"
                                    placeholder="New password">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <button type="button" class="btn btn-outline-dark" style="float: right">Save changes</button>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('backPages.editProfile')
@endsection
