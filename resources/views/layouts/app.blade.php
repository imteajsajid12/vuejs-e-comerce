<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
     <!-- CSS here -->
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Scripts -->






    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('css/app.css') }}"defer></script> --}}


</head>
<body>
    <div id="app">


        <example-component></example-component>
        {{-- <main class="py-4">
            @yield('content')
        </main> --}}
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
    <!-- JS here -->
<style src="cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css"></style>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('./assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('./assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('./assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('./assets/js/jquery.slicknav.min.js') }}"></script>


    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('./assets/js/main.js') }}"></script>






    </body>
    </html>
