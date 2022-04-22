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
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('ShowRecruiterList') }}">Recruiter list</a></li>
                            <li class="breadcrumb-item active">Add new recruiter</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <!-- container-fluid -->
            <div class="container-fluid">
                <form action="{{ route('AddRecruiter') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-bold">Add new recruiter</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <input type="hidden" value="1" name="fk_position_id">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Photo</label>
                                <input type="file" name="photo"
                                    class="form-control-file @error('photo') is-invalid @enderror"
                                    id="exampleFormControlFile1">
                                @error('photo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Full name">Full name</label>
                                <input type="text" class="form-control @error('full_name') is-invalid @enderror"
                                    id="Full name" name="full_name" placeholder="Enter full name"
                                    value="{{ old('full_name') }}">
                                @error('full_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="Place">Place</label>
                                        <input type="text" class="form-control @error('place') is-invalid @enderror"
                                            id="Place" name="place" placeholder="Enter Place" value="{{ old('place') }}">
                                        @error('place')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="Date of birth">Date of birth</label>
                                        <input type="text" class="form-control picker @error('date_of_brith') is-invalid @enderror"
                                            id="Date of birth" name="date_of_brith" placeholder="Enter Date of birth"
                                            value="{{ old('date_of_brith') }}">
                                        @error('date_of_brith')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="Place">Gender</label>
                                        <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                            <option value="">Choose</option>
                                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                                Male
                                            </option>
                                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                                Female
                                            </option>
                                        </select>
                                        @error('gender')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Phone number">Phone number</label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                    id="Phone number" name="phone_number" placeholder="Enter Phone number"
                                    value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="Email"
                                    name="email" placeholder="Enter Email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="Password" name="password" placeholder="Enter Password">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" name="address" rows="3"
                                    placeholder="Enter ...">{{ old('address') }}</textarea>
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <button type="submit" class="btn btn-outline-dark" style="float: right;">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
