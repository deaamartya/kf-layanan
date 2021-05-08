<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Kimia Farma')</title>

    {{-- Styles --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/gogi/vendors/bundle.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/assets/gogi/assets/css/app.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/assets/dokter/css/layouts.css') }}" type="text/css">
    
    {{-- Extra Styles --}}
    @yield('extra-styles')
</head>
<body class="horizontal-navigation scrollable-layout">
    {{-- Start Preloader --}}
    {{-- <div class="preloader">
        <div class="preloader-icon"></div>
        <span>Loading...</span>
    </div> --}}
    {{-- End of Preloader --}}

    {{-- Sidebar Group --}}
    {{-- @include('dokter/layouts/sidebar-group') --}}

    {{-- Start Layout Wrapper --}}
    <div class="layout-wrapper">

        {{-- Header --}}
        @include('dokter/layouts/header')

        {{-- Start Content Wrapper --}}
        <div class="content-wrapper">

            {{-- Navigation --}}
            @include('dokter/layouts/navigation')

            {{-- Start Content Body --}}
            <div class="content-body">

                {{-- Content --}}
                @yield('content')

                {{-- Footer --}}
                @include('dokter/layouts/footer')

            </div>
            {{-- End of Content Body --}}

        </div>
        {{-- End of Content Wrapper --}}
    </div>
    {{-- End of Layout Wrapper --}}
    
    {{-- Gogi Script --}}
    <script src="{{ asset('/assets/gogi/vendors/bundle.js') }}"></script>
    <script src="{{ asset('/assets/fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('/assets/gogi/assets/js/app.min.js') }}"></script>

    {{-- Extra Scripts --}}
    @yield('extra-scripts')
</body>
</html>