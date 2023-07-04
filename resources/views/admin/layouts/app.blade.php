<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('site/assets/image/favicon.ico') }}" type="image/x-icon">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('site/admin/assets/node_modules/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/admin/assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ asset('site/admin/assets/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{ asset('site/admin/assets/node_modules/c3-master/c3.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('site/admin/css/style.css') }}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('site/admin/css/pages/dashboard1.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('site/admin/css/colors/default.css') }}" id="theme" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main>
            <div class="fix-header fix-sidebar card-no-border">
                <div class="preloader">
                    <div class="loader">
                        <div class="loader__figure"></div>
                        <p class="loader__label">नेपाल सरकार,प्रदेश प्रमुखकाे कार्यालय गण्डकी प्रदेश, पाेखरा</p>
                </div>
            </div>
            @yield('content')
        </main>
    </div>

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('site/admin/assets/node_modules/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('site/admin/assets/node_modules/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('site/admin/assets/node_modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('site/admin/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('site/admin/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('site/admin/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('site/admin/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{ asset('site/admin/assets/node_modules/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('site/admin/assets/node_modules/morrisjs/morris.min.js') }}"></script>
    <!--c3 JavaScript -->
    <script src="{{ asset('site/admin/assets/node_modules/d3/d3.min.js') }}"></script>
    <script src="{{ asset('site/admin/assets/node_modules/c3-master/c3.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('site/admin/js/dashboard1.js') }}"></script>
</body>
</html>
