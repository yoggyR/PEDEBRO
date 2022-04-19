<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('img') }}/pedebro.png" alt="PEDEBROogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    {{-- <a class="nav-link" role="button" href="/"><i class="bi bi-door-open-fill"
                            title="Sign out"></i></a> --}}
                            <label class="nav-link"><i class="bi bi-calendar2-week-fill"></i> {{ date('d-m-Y') }}</label>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
