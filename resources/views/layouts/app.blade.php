<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kimia Farma</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/gogi/assets/media/image/logo.png') }}"/>

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/vendors/bundle.css') }}" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

@yield('head')

<!-- App css -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/assets/css/app.min.css') }}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="horizontal-navigation scrollable-layout">
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
    <span>Loading...</span>
</div>
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
                        <img class="logo" src="{{ asset('assets/gogi/assets/media/image/logo.png') }}" alt="logo" height="40">
                    </a>
                </div>
            </div>

            <div class="header-body">

                <div class="header-body-right">
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
    <div class="content-wrapper">
        <!-- begin::navigation -->
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

<!-- Main scripts -->
<script src="{{ asset('assets/gogi/vendors/bundle.js') }}"></script>

@yield('script')

<!-- App scripts -->
<script src="{{ asset('assets/gogi/assets/js/app.min.js') }}"></script>
</body>
</html>
