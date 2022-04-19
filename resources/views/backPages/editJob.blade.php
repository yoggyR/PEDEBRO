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
                            <li class="breadcrumb-item"><a href="/opened">Opened</a></li>
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
                                    <input type="text" class="form-control" id="job name" placeholder="Enter job name">
                                </div>
                                <div class="form-group">
                                    <label for="max age">Max age</label>
                                    <input type="text" class="form-control" id="max age" placeholder="Enter max age">
                                </div>
                                <div class="form-group">
                                    <label for="hard skill">Hard skill</label>
                                    <input type="text" class="form-control" id="hard skill"
                                        placeholder="Enter hard skill">
                                </div>
                                <div class="form-group">
                                    <label for="soft skill">Soft skill</label>
                                    <input type="text" class="form-control" id="soft skill"
                                        placeholder="Enter soft skill">
                                </div>
                                <div class="form-group">
                                    <label for="job name">Date created</label>
                                    <input type="text" class="form-control" id="job name" placeholder="Enter job name"
                                        value="{{ date('d-m-Y') }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Level</label>
                                    <select class="form-control js-example-basic-multiple" data-width="100%" name="level[]"
                                        multiple="multiple">
                                        <option value="AL">All</option>
                                        <option value="Fresh graduate">Fresh graduate</option>
                                        <option value="Experience">Experience</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Education</label>
                                    <select class="form-control js-example-basic-multiple" data-width="100%"
                                        name="education[]" multiple="multiple">
                                        <option value="all education">All</option>
                                        <option value="sma/smk">SMA/SMK</option>
                                        <option value="d3">D3</option>
                                        <option value="d3">S1</option>
                                        <option value="d3">S2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <select class="form-control js-example-basic-multiple" data-width="100%"
                                        name="location[]" multiple="multiple">
                                        <option value="all location">All</option>
                                        <option value="prabumulih">Prabumulih</option>
                                        <option value="jakarta">Jakarta</option>
                                        <option value="lampung">Lampung</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="job name">Closing date</label>
                                    <input type="date" class="form-control" id="job name" placeholder="Enter job name">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
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