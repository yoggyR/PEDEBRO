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
                            <li class="breadcrumb-item active">Edit job vacancies</li>
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-bold">Edit job vacancies</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="job name">Job name</label>
                                    <input type="text" class="form-control" id="job name" placeholder="Enter job name"
                                        value="{{ $jobs->job_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="max age">Max age</label>
                                    <input type="text" class="form-control" id="max age" placeholder="Enter max age"
                                        value="{{ $jobs->max_age }}">
                                </div>
                                <div class="form-group">
                                    <label for="hard skill">Hard skill</label>
                                    <input type="text" class="form-control" id="hard skill" placeholder="Enter hard skill"
                                        value="{{ $jobs->hard_skill }}">
                                </div>
                                <div class="form-group">
                                    <label for="soft skill">Soft skill</label>
                                    <input type="text" class="form-control" id="soft skill" placeholder="Enter soft skill"
                                        value="{{ $jobs->soft_skill }}">
                                </div>
                                <div class="form-group">
                                    <label for="job name">Date created</label>
                                    <input type="text" class="form-control" id="job name" placeholder="Enter job name"
                                        value="{{ $jobs->date_created->format('d-m-Y') }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Level</label>
                                    <select class="form-control js-example-basic-multiple" data-width="100%" name="level[]"
                                        multiple="multiple">
                                        @foreach ($levels as $level)
                                            <option value="{{ $level->pk_level_id }}" selected>
                                                {{ $level->level_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Education</label>
                                    <select class="form-control js-example-basic-multiple" data-width="100%"
                                        name="education[]" multiple="multiple">
                                        @foreach ($educations as $education)
                                            <option value="{{ $education->pk_education_id }}">
                                                {{ $education->education_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <select class="form-control js-example-basic-multiple" data-width="100%"
                                        name="location[]" multiple="multiple">
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->pk_location_id }}">
                                                {{ $location->location_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="closing date">Closing date</label>
                                    <input type="text" class="form-control picker" id="closing date"
                                        placeholder="Enter closing date"
                                        value="{{ $jobs->closing_date->format('d-m-Y') }}">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ...">{{ $jobs->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <button type="button" class="btn btn-outline-dark" style="float: right;">Save changes</button>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
