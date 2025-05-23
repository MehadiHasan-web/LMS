<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('admin') }}/assets/img/favicon.png">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('admin/assets/css/material-dashboard.css?v=3.2.0') }}" rel="stylesheet" />
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Styles -->
    @livewireStyles
</head>

<body class="g-sidenav-show  bg-gray-100">


    {{-- <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')



        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div> --}}
    @include('dashboard.modules.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('dashboard.modules.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-2">
            {{ $slot }}
            @include('dashboard.modules.footer')
        </div>
    </main>





    @include('dashboard.modules.right-sidebar')
    @include('dashboard.modules.scripts')
</body>

</html>
