<div class="header d-print-none">
    <div class="header-container">
        <div class="header-left justify-content-center">
            <div class="navigation-toggler">
                <a href="#" data-action="navigation-toggler">
                    <i data-feather="menu"></i>
                </a>
            </div>

            <div class="header-logo" style="background-color: white;padding: 2px 5px;margin: 15px 0;border-radius: 10px;">
                <a href="{{ url('/') }}">
                    <img class="logo" src="{{ asset('assets/gogi/assets/media/image/logo.png') }}" alt="logo" height="40">
                </a>
            </div>
        </div>

        <div class="header-body">
            <div class="header-body-left">
                <ul class="navbar-nav">
                    <li class="nav-item mr-3">
                        <div class="header-search-form">
                            <form>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn header-search-close-btn">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="header-body-right">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown d-none d-md-block">
                        <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        @include('perawat/layouts/notification')
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                            <figure class="avatar avatar-sm">
                                <img src="{{ asset('/assets/gogi/assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle" alt="avatar">
                            </figure>
                            <span class="ml-2 d-sm-inline d-none">Febriyanthi</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="text-center py-4">
                                <figure class="avatar avatar-lg mb-3 border-0">
                                    <img src="{{ asset('/assets/gogi/assets/media/image/user/man_avatar3.jpg') }}"
                                         class="rounded-circle" alt="image">
                                </figure>
                                <h5 class="text-center">Febriyanthi</h5>
                                <div class="mb-3 small text-center text-muted">PERAWAT</div>
                                <a href="#" class="btn btn-outline-light btn-rounded">Manage Your Account</a>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i data-feather="user" class="mr-1"></i>
                                    Profil Saya
                                </a>
                                <a href="#" class="list-group-item text-danger">
                                   <i data-feather="log-out" class="mr-1"></i>
                                   Logout
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item header-toggler">
                <a href="#" class="nav-link">
                    <i data-feather="arrow-down"></i>
                </a>
            </li>
        </ul>
    </div>
</div>