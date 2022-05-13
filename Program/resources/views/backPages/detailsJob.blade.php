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
                            <li class="breadcrumb-item active">Details job vacancies</li>
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
                        <h3 class="card-title text-bold">Details job vacancies</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="text-bold">{{ $details1->job_name }}</h4>
                        <p>
                            {{ $details1->description }}
                        </p>
                        <h6>Qualification</h6>
                        <ul>
                            <li>
                                @foreach ($details2 as $level)
                                    {{ $level->level_name }}
                                @endforeach
                            </li>
                            <li>
                                @foreach ($details2 as $education)
                                    {{ $education->education_name }}
                                @endforeach
                            </li>
                            <li>
                                Max {{ $details1->max_age }} years old
                            </li>
                            <li>
                                {{ $details1->hard_skill }}
                            </li>
                            <li>
                                {{ $details1->soft_skill }}
                            </li>
                        </ul>
                        <h6>
                            Location :
                            @foreach ($details2 as $location)
                                {{ $location->location_name }}
                            @endforeach
                        </h6>
                        <h6>Date created : {{ $details1->date_created->format('d-m-Y') }}</h6>
                        <h6>Closing date : {{ $details1->closing_date->format('d-m-Y') }}</h6>
                        @if ($details1->job_status == 'Opened')
                            <h6>Status : <span class="badge bg-success">Opened</span></h6>
                        @endif
                        @if ($details1->job_status == 'Closed')
                            <h6>Status : <span class="badge bg-danger">Closed</span></h6>
                        @endif
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

{{-- <div class="modal fade" id="dJob{{ $job->pk_job_id }}">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-bold modal-title"><img src="{{ asset('img') }}/pedebro.png" alt="" width="26"
                        height="26" class="d-inline-block align-text-top"> PEDEBRO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 class="mb-4 text-bold"></h2>
                <div class="card p-3">
                    <h4 class="text-bold">{{ $job->job_name }}</h4>
                    <p>
                        {{ $job->description }}
                    </p>
                    <h6>Qualification</h6>
                    <ul>
                        <li>
                            @foreach ($dd as $it)
                                {{ $it->level_name }}
                            @endforeach
                        </li>
                        <li>
                        </li>
                        <li>Max {{ $job->max_age }} years old</li>
                        <li>{{ $job->hard_skill }}</li>
                        <li>{{ $job->soft_skill }}</li>
                    </ul>
                    <h6>Location : </h6>
                    <h6>Date created : {{ $job->date_created->format('d-m-Y') }}</h6>
                    <h6>Closing date : {{ $job->closing_date->format('d-m-Y') }}</h6>
                    @if ($job->job_status == 'Opened')
                        <h6>Status : <span class="badge bg-success">Opened</span></h6>
                    @endif
                    @if ($job->job_status == 'Closed')
                        <h6>Status : <span class="badge bg-danger">Closed</span></h6>
                    @endif

                </div>
            </div>
            <div class="modal-footer">
                <label class="mr-auto">&COPY; 2022 PEDEBRO.</label>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div> --}}
