        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('img') }}/pedebro.png" alt="PEDEBRO Logo" class="brand-image">
                <span class="brand-text ">
                    <h5 class="font-weight-bold">PEDEBRO</h5>
                </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('template') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item mt-3 mb-3">
                            <a href="/" class="nav-link {{ $title === 'dashboard' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item mt-3 mb-3 {{ $title === 'opened' || $title === 'closed' ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ $title === 'opened' || $title === 'closed' ? 'active' : '' }}">
                                <i class="nav-icon bi bi-briefcase-fill"></i>
                                <p>
                                    Job Vacancies
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/opened" class="nav-link {{ $title === 'opened' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Opened</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/closed" class="nav-link {{ $title === 'closed' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Closed</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item mt-3 mb-3 {{ $title === 'newest' || $title === 'accepted' || $title === 'rejected' ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ $title === 'newest' || $title === 'accepted' || $title === 'rejected' ? 'active' : '' }}">
                                <i class="nav-icon bi bi-people-fill"></i>
                                <p>
                                    Applicants
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/newest" class="nav-link {{ $title === 'newest' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Newest</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accepted" class="nav-link {{ $title === 'accepted' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Accepted</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/rejected" class="nav-link {{ $title === 'rejected' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rejected</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item mt-3 mb-3 {{ $title === 'willing' || $title === 'waiting' || $title === 'refuse' ? 'menu-open' : '' }}">
                            <a href="#"
                                class="nav-link {{ $title === 'willing' || $title === 'waiting' || $title === 'refuse' ? 'active' : '' }}">
                                <i class="nav-icon bi bi-chat-fill"></i>
                                <p>
                                    Interview
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/willing" class="nav-link {{ $title === 'willing' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Willing</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/waiting" class="nav-link {{ $title === 'waiting' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Waiting</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/refuse" class="nav-link {{ $title === 'refuse' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Refuse</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mt-3 mb-3">
                            <a href="/" class="nav-link">
                                <i class="nav-icon bi bi-door-open-fill"></i>
                                <p>
                                    Sign out
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
