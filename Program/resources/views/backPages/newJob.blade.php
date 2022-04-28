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
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('Read_JobVacancies') }}">Opened</a></li>
                            <li class="breadcrumb-item active">Add new job vacancies</li>
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
                <form action="{{ route('Create_JobVacancies') }}" method="POST">
                    @csrf
                    <input type="hidden" value="Opened" name="job_status">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-bold">Add new job vacancies</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="job name">Job name</label>
                                        <input type="text" class="form-control @error('job_name') is-invalid @enderror"
                                            id="job name" name="job_name" placeholder="Enter job name"
                                            value="{{ old('job_name') }}">
                                        @error('job_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="max age">Max age</label>
                                        <input type="text" class="form-control @error('max_age') is-invalid @enderror"
                                            id="max age" name="max_age" placeholder="Enter max age"
                                            value="{{ old('max_age') }}">
                                        @error('max_age')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="hard skill">Hard skill</label>
                                        <input type="text" class="form-control @error('hard_skill') is-invalid @enderror"
                                            id="hard skill" name="hard_skill" placeholder="Enter hard skill"
                                            value="{{ old('hard_skill') }}">
                                        @error('hard_skill')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="soft skill">Soft skill</label>
                                        <input type="text" class="form-control @error('soft_skill') is-invalid @enderror"
                                            id="soft skill" name="soft_skill" placeholder="Enter soft skill"
                                            value="{{ old('soft_skill') }}">
                                        @error('soft_skill')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Date created">Date created</label>
                                        <input type="text" class="form-control" id="Date created" name="date_created"
                                            placeholder="Enter Date created" value="{{ date('Y-m-d') }}" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select
                                            class="form-control js-example-basic-multiple @error('pk_level_id') is-invalid @enderror"
                                            data-width="100%" name="pk_level_id[]" multiple="multiple">
                                            @foreach ($levels as $level)
                                                <option value="{{ $level->pk_level_id }}">
                                                    {{ $level->level_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('pk_level_id[]')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Education</label>
                                        <select class="form-control js-example-basic-multiple" data-width="100%"
                                            name="pk_education_id[]" multiple="multiple">
                                            @foreach ($educations as $education)
                                                <option value="{{ $education->pk_education_id }}">
                                                    {{ $education->education_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Location</label>
                                        <select class="form-control js-example-basic-multiple" data-width="100%"
                                            name="pk_location_id[]" multiple="multiple">
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->pk_location_id }}">
                                                    {{ $location->location_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Closing date">Closing date</label>
                                        <input type="text"
                                            class="form-control picker @error('closing_date') is-invalid @enderror"
                                            id="Closing date" name="closing_date" placeholder="Enter Closing date"
                                            value="{{ old('closing_date') }}">
                                        @error('closing_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Enter ..."
                                            name="description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <button type="submit" class="btn btn-outline-dark" style="float: right;">Publish</button>
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
