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
    <style>
        #toast-container > .toast-error {
            background-image:  url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeG1sbnM6c3ZnanM9Imh0dHA6Ly9zdmdqcy5jb20vc3ZnanMiIHZlcnNpb249IjEuMSIgd2lkdGg9IjUxMiIgaGVpZ2h0PSI1MTIiIHg9IjAiIHk9IjAiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yNTYgNTEyYzMwLjY5MiAwIDU3LjEyMi0xOC41MzkgNjguNzE5LTQ1aC0xMzcuNDM4YzExLjU5NyAyNi40NjEgMzguMDI4IDQ1IDY4LjcxOSA0NXoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiLz48cGF0aCBkPSJtNDExIDI0Ny44NjJ2LTMyLjg2MmMwLTY5LjgyMi00Ni40MTEtMTI5LjAwMS0xMTAtMTQ4LjMzdi0yMS42N2MwLTI0LjgxMy0yMC4xODctNDUtNDUtNDVzLTQ1IDIwLjE4Ny00NSA0NXYyMS42N2MtNjMuNTkgMTkuMzI5LTExMCA3OC41MDctMTEwIDE0OC4zM3YzMi44NjJjMCA2MS4zMzItMjMuMzc4IDExOS40ODgtNjUuODI3IDE2My43NTYtNC4xNiA0LjMzOC01LjMyOSAxMC43MzktMi45NzEgMTYuMjY3czcuNzg4IDkuMTE1IDEzLjc5OCA5LjExNWg0MjBjNi4wMSAwIDExLjQzOS0zLjU4NyAxMy43OTctOS4xMTVzMS4xODktMTEuOTI5LTIuOTctMTYuMjY3Yy00Mi40NDktNDQuMjY4LTY1LjgyNy0xMDIuNDI1LTY1LjgyNy0xNjMuNzU2em0tMTQwLTE4Ny4xMzRjLTQuOTM3LS40NzYtOS45NC0uNzI4LTE1LS43MjhzLTEwLjA2My4yNTItMTUgLjcyOHYtMTUuNzI4YzAtOC4yNzEgNi43MjktMTUgMTUtMTVzMTUgNi43MjkgMTUgMTV6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIi8+PHBhdGggZD0ibTQ1MSAyMTVjMCA4LjI4NCA2LjcxNiAxNSAxNSAxNXMxNS02LjcxNiAxNS0xNWMwLTYwLjEtMjMuNDA0LTExNi42MDMtNjUuOTAxLTE1OS4xLTUuODU3LTUuODU3LTE1LjM1NS01Ljg1OC0yMS4yMTMgMHMtNS44NTggMTUuMzU1IDAgMjEuMjEzYzM2LjgzMSAzNi44MzEgNTcuMTE0IDg1LjggNTcuMTE0IDEzNy44ODd6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIi8+PHBhdGggZD0ibTQ2IDIzMGM4LjI4NCAwIDE1LTYuNzE2IDE1LTE1IDAtNTIuMDg2IDIwLjI4NC0xMDEuMDU1IDU3LjExNC0xMzcuODg2IDUuODU4LTUuODU4IDUuODU4LTE1LjM1NSAwLTIxLjIxMy01Ljg1Ny01Ljg1OC0xNS4zNTUtNS44NTgtMjEuMjEzIDAtNDIuNDk3IDQyLjQ5Ny02NS45MDEgOTguOTk5LTY1LjkwMSAxNTkuMDk5IDAgOC4yODQgNi43MTYgMTUgMTUgMTV6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIi8+PC9nPjwvZz48L3N2Zz4K') !important;
            background-size: 24px 24px;
        }
    </style>
@yield('head')

<!-- App css -->
    <link rel="stylesheet" href="{{ asset('assets/gogi/assets/css/app.min.css') }}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="scrollable-layout">
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
    <span>Loading...</span>
</div>
<!-- ./ Preloader -->

<!-- Sidebar group -->
<div class="sidebar-group">

    <!-- BEGIN: Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title d-flex justify-content-between">
                    Settings
                    <a class="btn-sidebar-close" href="#">
                        <i class="ti-close"></i>
                    </a>
                </h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Settings -->

    <!-- BEGIN: Chat List -->
    <div class="sidebar" id="chat-list">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title d-flex justify-content-between">
                    Chats
                    <a class="btn-sidebar-close" href="#">
                        <i class="ti-close"></i>
                    </a>
                </h6>
                <div class="list-group list-group-flush">
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Cass Queyeiro</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Evered Asquith</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item px-0 d-flex align-items-start">
                        <div class="pr-3">
                            <div class="avatar avatar-state-danger">
                                <span class="avatar-title bg-success rounded-circle">F</span>
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Francisco Ubsdale</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item px-0 d-flex align-items-start">
                        <div class="pr-3">
                            <div class="avatar avatar-state-success">
                                <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Natale Janu</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="badge badge-primary badge-pill ml-auto mb-2">3</span>
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Orelie Rockhall</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Barbette Bolf</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-warning rounded-circle">D</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Dudley Laborde</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-success">
                                <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Barbaraanne Riby</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Mariana Ondrousek</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Ruprecht Lait</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Cosme Hubbold</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-secondary rounded-circle">M</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Mallory Darch</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Chat List -->

</div>
<!-- ./ Sidebar group -->

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
                                <div
                                    class="border-bottom px-4 py-3 text-center d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Notifications</h5>
                                    <small class="opacity-7">2   unread notifications</small>
                                </div>
                                <div class="dropdown-scroll">
                                    <ul class="list-group list-group-flush">
                                        <li class="px-4 py-2 text-center small text-muted bg-light">Today</li>
                                        <li class="px-4 py-3 list-group-item">
                                            <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <span
                                                            class="avatar-title bg-info-bright text-info rounded-circle">
                                                            <i class="ti-lock"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        2 steps verification
                                                        <i title="Mark as read" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">20 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-4 py-3 list-group-item">
                                            <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <span
                                                            class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                            <i class="ti-server"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Storage is running low!
                                                        <i title="Mark as read" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">45 sec ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-4 py-2 text-center small text-muted bg-light">Old Notifications</li>
                                        <li class="px-4 py-3 list-group-item">
                                            <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <span class="avatar-title bg-secondary-bright text-secondary rounded-circle">
                                                            <i class="ti-file"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        1 person sent a file
                                                        <i title="Mark as unread" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">Yesterday</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-4 py-3 list-group-item">
                                            <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                            <i class="ti-download"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        Reports ready to download
                                                        <i title="Mark as unread" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">Yesterday</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-4 py-3 list-group-item">
                                            <a href="#" class="d-flex align-items-center hide-show-toggler">
                                                <div class="flex-shrink-0">
                                                    <figure class="avatar mr-3">
                                                        <span class="avatar-title bg-primary-bright text-primary rounded-circle">
                                                            <i class="ti-arrow-top-right"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                        The invitation has been sent.
                                                        <i title="Mark as unread" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                    </p>
                                                    <span class="text-muted small">Last Week</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="px-4 py-3 text-right border-top">
                                    <ul class="list-inline small">
                                        <li class="list-inline-item mb-0">
                                            <a href="#">Mark All Read</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                                <figure class="avatar avatar-sm">
                                    <img src="{{ asset('assets/gogi/assets/media/image/user/man_avatar3.jpg') }}"
                                         class="rounded-circle"
                                         alt="avatar">
                                </figure>
                                <span class="ml-2 d-sm-inline d-none">Bony Gidden</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="text-center py-4">
                                    <figure class="avatar avatar-lg mb-3 border-0">
                                        <img src="{{ asset('assets/gogi/assets/media/image/user/man_avatar3.jpg') }}"
                                             class="rounded-circle" alt="image">
                                    </figure>
                                    <h5 class="text-center">Bony Gidden</h5>
                                    <div class="mb-3 small text-center text-muted">@bonygidden</div>
                                    <a href="#" class="btn btn-outline-light btn-rounded">Manage Your Account</a>
                                </div>
                                <div class="list-group">
                                    <a href="{{ route('profile') }}" class="list-group-item">View Profile</a>
                                    <a href="http://bifor.laborasyon.com/login" class="list-group-item text-danger"
                                       data-sidebar-target="#settings">Sign Out!</a>
                                </div>
                                <div class="p-4">
                                    <div class="mb-4">
                                        <h6 class="d-flex justify-content-between">
                                            Storage
                                            <span>%25</span>
                                        </h6>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success-gradient" role="progressbar" style="width: 40%;"
                                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <hr class="mb-3">
                                    <p class="small mb-0">
                                        <a href="#">Privacy policy</a>
                                    </p>
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
                        <a @if(request()->segment(1) == 'pasien'&& !request()->segment(2)) class="active" @endif href="{{ url('pasien') }}">
                            <span class="nav-link-icon">
                                <i data-feather="home"></i>
                            </span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'pasien' && request()->segment(2) == 'pembayaran') class="active" @endif href="{{ url('pasien/pembayaran') }}">
                            <span class="nav-link-icon">
                                <i data-feather="dollar-sign"></i>
                            </span>
                            <span>Pembayaran</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'pasien' && request()->segment(2) == 'riwayat-layanan-dokter') class="active" @endif href="{{ url('pasien/riwayat-layanan-dokter') }}">
                            <span class="nav-link-icon">
                                <i data-feather="list"></i>
                            </span>
                            <span>Riwayat Layanan Dokter</span>
                        </a>
                    </li>
                    <li>
                        <a @if(request()->segment(1) == 'pasien' && request()->segment(2) == 'resep-aktif') class="active" @endif href="{{ url('pasien/resep-aktif') }}">
                            <span class="nav-link-icon">
                                <i data-feather="clipboard"></i>
                            </span>
                            <span>Resep Aktif</span>
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

<!-- Main scripts -->
<script src="{{ asset('assets/gogi/vendors/bundle.js') }}"></script>

@yield('script')

<!-- App scripts -->
<script src="{{ asset('assets/gogi/assets/js/app.min.js') }}"></script>
</body>
</html>
