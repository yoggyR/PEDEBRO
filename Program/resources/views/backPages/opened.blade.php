@extends('backLayouts.main')
@section('backContent')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Job vacancies</h1>
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
                    <div class="card-header">
                        <h3 class="card-title text-bold">Opened</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-7">
                                <a type="button" href="{{ route('FormCreate_JobVacancies') }}"
                                    class="btn btn-outline-secondary"><i class="bi bi-plus-lg"></i>
                                    Add new job vacancies</a>
                            </div>
                            <div class="col-5">
                                <div class="input-group">
                                    <input type="search" name="cari" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Job name</th>
                                    <th>Date created</th>
                                    <th>Closing date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Web Developer</td>
                                    <td>18-04-2022</td>
                                    <td>28-04-2022</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-outline-secondary" data-toggle="modal"
                                                data-target="#dJob" title="Details"><i class="bi bi-briefcase-fill"></i></a>
                                            <a href="/eJob" class="btn btn-outline-secondary" title="Edit"><i
                                                    class="bi bi-pen-fill"></i></a>
                                            <a href="#" class="btn btn-outline-secondary" title="Delete"><i
                                                    class="bi bi-trash3-fill"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Administration</td>
                                    <td>18-04-2022</td>
                                    <td>28-04-2022</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-outline-secondary" data-toggle="modal"
                                                data-target="#dJob" title="Details"><i class="bi bi-briefcase-fill"></i></a>
                                            <a href="/eJob" class="btn btn-outline-secondary" title="Edit"><i
                                                    class="bi bi-pen-fill"></i></a>
                                            <a href="#" class="btn btn-outline-secondary" title="Delete"><i
                                                    class="bi bi-trash3-fill"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('backPages.detailsJob')
@endsection
