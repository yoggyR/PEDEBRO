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
                        {{-- <div class="dropdown mt-1">
                            <a href="#"
                                class="d-flex align-items-center text-black text-decoration-none dropdown-toggle"
                                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('img') }}/person-circle.svg" alt="" width="32" height="32"
                                    class="rounded-circle me-2">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end text-small shadow"
                                aria-labelledby="dropdownUser1">
                                <li>
                                    <label class="dropdown-item fw-bold">Hi, Yoggy Rachmawan</label>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>

                                    <a class="dropdown-item {{ $title === 'myProfile' ? 'activedUser' : '' }}" href="/myProfile"><i class="bi bi-person-lines-fill"></i> My
                                        profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ $title === 'applicationHistory' ? 'activedUser' : '' }}" href="/applicationHistory"><i class="bi bi-file-text-fill"></i>
                                        Application history</a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ $title === 'changePassword' ? 'activedUser' : '' }}" href="/changePassword"><i class="bi bi-exclamation-circle-fill"></i>
                                        Change password</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i class="bi bi-door-open-fill"></i> Sign out</a>
                                </li>
                            </ul>
                        </div> --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @include('log.signIn')
