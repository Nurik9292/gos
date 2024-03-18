<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('admins/assets/img/ugur/favicon.ico')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admins/assets/img/ugur/favicon.ico')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admins/assets/img/ugur/favicon.ico')}}">
    <link rel="manifest" href="{{asset('admins/assets/img/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('admins/assets/img/favicon/safari-pinned-tab.svg')}}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{asset('admins/vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{asset('admins/vendor/notyf/notyf.min.css')}}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{asset('admins/css/volt.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('admins/css/custom.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('admins/css/dataTable.css')}}" rel="stylesheet">


    <script src="{{asset('admins/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admins/vendor/summernote-0.8.18-dist/popper.min.js')}}"></script>
    <script src="{{asset('admins/vendor/summernote-0.8.18-dist/boostrap.min.js')}}"></script>
    <link href="{{asset('admins/vendor/summernote-0.8.18-dist/summernote-bs4.min.css')}}" rel="stylesheet">
    <script src="{{asset('admins/vendor/summernote-0.8.18-dist/summernote-bs4.min.js')}}"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('admin.includes.sidebar')
    <div class="content">
        @include('admin.includes.navbar')
        @yield('content')
    </div>
</body>
</html>



<!-- Core -->
<script src="{{asset('admins/vendor/@popperjs/core/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admins/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>



<!-- Vendor JS -->
<script src="{{asset('admins/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>

<!-- Slider -->
<script src="{{asset('admins/vendor/nouislider/dist/nouislider.min.js')}}"></script>

<!-- Smooth scroll -->
<script src="{{asset('admins/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

<!-- Datepicker -->
<script src="{{asset('admins/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

<!-- Sweet Alerts 2 -->
<script src="{{asset('admins/vendor/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

<!-- Moment JS -->
<script src="{{asset('admins/js/moment.min.js')}}"></script>

<!-- Vanilla JS Datepicker -->
<script src="{{asset('admins/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

<!-- Notyf -->
<script src="{{asset('admins/vendor/notyf/notyf.min.js')}}"></script>

<!-- Simplebar -->
<script src="{{asset('admins/vendor/simplebar/dist/simplebar.min.js')}}"></script>

<!-- Github buttons -->
<script src="{{asset('admins/js/moment.min.js')}}"></script>

<!-- Volt JS -->
<script src="{{asset('admins/assets/js/volt.js')}}"></script>
