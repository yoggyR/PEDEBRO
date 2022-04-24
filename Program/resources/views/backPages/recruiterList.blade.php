@extends('backLayouts.main')
@section('backContent')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users</h1>
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
                        <h3 class="card-title text-bold">Recruiter list</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-7">
                                <a type="button" href="{{ route('FormCreate_Recruiter') }}"
                                    class="btn btn-outline-secondary"><i class="bi bi-plus-lg"></i>
                                    Add new recruiter</a>
                            </div>
                            <div class="col-5">
                                <form action="{{ route('Read_RecruiterList') }}" method="GET">
                                    <div class="input-group">
                                        <input type="search" name="search" class="form-control float-right"
                                            placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recruiterList as $index => $list)
                                    <tr>
                                        <td>{{ $index + $recruiterList->firstItem() }}</td>
                                        <td>{{ $list->full_name }}</td>
                                        <td>{{ $list->email }}</td>
                                        <td>{{ $list->gender }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-outline-secondary" data-toggle="modal"
                                                    data-target="#dRecruiter{{ $list->pk_user_id }}" title="Details"><i
                                                        class="bi bi-file-earmark-text-fill"></i></a>
                                                <a href="#" data-id="{{ $list->pk_user_id }}"
                                                    data-name="{{ $list->full_name }}"
                                                    data-fk="{{ $list->fk_position_id }}"
                                                    class="btn btn-outline-secondary delete" title="Delete"><i
                                                        class="bi bi-trash3-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('backPages.detailsRecruiter')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <div style="float: right;">
                            {{ $recruiterList->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
