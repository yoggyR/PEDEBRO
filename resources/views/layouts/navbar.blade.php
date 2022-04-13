<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <img src="{{ asset('img') }}/pedebro.png" alt="" width="28" height="28"
                    class="d-inline-block align-text-top"> PEDEBRO
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'home' ? 'actived' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ $title === 'job' ? 'actived' : '' }}" href="/job">Job Vacancies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'about' ? 'actived' : '' }}" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="btn-outline-dark btn form-control" href="#" data-bs-toggle="modal"
                            data-bs-target="#signIn">Sign in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @include('log.signIn')
