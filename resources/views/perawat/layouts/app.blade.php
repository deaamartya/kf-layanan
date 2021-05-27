<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Kimia Farma')</title>

    <link rel="shortcut icon" href="{{ asset('/assets/gogi/assets/media/image/logo.png') }}"/>
    <link rel="stylesheet" href="{{ asset('/assets/gogi/vendors/bundle.css') }}" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/gogi/assets/css/app.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/perawat/css/layouts.css') }}" type="text/css">
    @yield('extra-styles')

</head>
<body class="scrollable-layout">
<!-- Preloader -->
{{-- <div class="preloader">
    <div class="preloader-icon"></div>
    <span>Loading...</span>
</div> --}}
<!-- ./ Preloader -->

<!-- Layout wrapper -->
<div class="layout-wrapper">

    <!-- Header -->
    <div class="header d-print-none" style="padding-top: 15px;margin-bottom: 10px;">
        <div class="header-container">
            <div class="header-left justify-content-center">
                <div class="navigation-toggler">
                    <a href="#" data-action="navigation-toggler">
                        <i data-feather="menu"></i>
                    </a>
                </div>

                <div class="header-logo" style="background-color: white;padding: 7px;border-radius: 5px;vertical-align: middle;">
                    <a href="{{ url('/') }}" style="height: auto">
                        <img class="logo" src="{{ asset('/assets/gogi/assets/media/image/logo.png') }}" alt="logo" height="40">
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
                            <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                                <i data-feather="bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="border-bottom px-4 py-3 text-center d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Notifications</h5>
                                    {{-- @php
                                        $count = '0';
                                        foreach(Session::get('online') as $online){
                                            if($online['STATUS'] == 0){
                                                $count = $count + 1;
                                            }
                                        }
                                    @endphp
                                    <small class="opacity-7">{{$count}}   notifications</small> --}}
                                </div>
                                <div class="dropdown-scroll">
                                    <ul class="list-group list-group-flush">
                                        {{-- @foreach(Session::get('online') as $pasien)
                                        @if($pasien['STATUS'] == "0")
                                        <li class="px-4 py-3 list-group-item">
                                            <a href="{{ route('pesanan-online') }}" class="d-flex align-items-center hide-show-toggler">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <span
                                                            class="avatar-title bg-info-bright text-info rounded-circle">
                                                            <i class="ti-tag"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Ada pesanan dari {{$pasien['NAMA_PASIEN']}}
                                                        <i title="Mark as read" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        @endif
                                        @endforeach --}}
                                    </ul>
                                </div>
                                <!-- <div class="px-4 py-3 text-right border-top">
                                    <ul class="list-inline small">
                                        <li class="list-inline-item mb-0">
                                            <a href="#">Mark All Read</a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
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
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper mt-3">
        <!-- begin::navigation -->
        <div class="navigation">
            <div class="navigation-header">
                <span>Navigation</span>
                <a href="#">
                    <i class="ti-close"></i>
                </a>
            </div>
            <div class="navigation-menu-body">
                <ul>
                    <li>
                        <a href="{{ url('/perawat') }}" id="home-menu">
                            <span class="nav-link-icon">
                                <i class="fas fa-home"></i>
                            </span>
                            <span>Home</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end::navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content @yield('parentClassName')">
                @yield('content')
            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer">
                <div class="text-white">© {{ date('Y') }} Created by Dimas Dea Sadam</div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

    <script src="{{ asset('/assets/gogi/vendors/bundle.js') }}"></script>
    <script src="{{ asset('/assets/gogi/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('/assets/fontawesome/js/all.min.js') }}"></script>
    <script>
        toastr.options = {
                        timeOut: 3000,
                        progressBar: true,
                        showMethod: "slideDown",
                        hideMethod: "slideUp",
                        showDuration: 200,
                        hideDuration: 200
                    }
    </script>
    @yield('extra-scripts')
</body>
</html>