<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gabriel Rabotlhale">
    <title>G-Cinema | @yield('title')</title>

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- begin:: css -->
    <link href="{{ asset('/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/assets/plugins/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/plugins/hover-master/hover-min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/media.css') }}">
    <!-- end:: css -->


    <!-- begin:: favicons -->
    <link rel="apple-touch-icon" href="{{ asset('/assets/images/favicons/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('/assets/images/favicons/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('/assets/images/favicons/favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="" color="#2b303d">
    <link rel="icon" href="{{ asset('/assets/images/favicons/favicon.ico') }}">
    <meta name="theme-color" content="#7952b3">
    <!-- end:: favicons -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-primary">

<div class="app-wrapper">

    <!--begin::header -->
@include('includes.header')
<!--end::header -->

<!--begin::notifications -->
@include('includes.notifications')
<!--begin::notifications -->

<main>
    @yield('content')
</main>


<!--begin:: footer -->
@include('includes.footer')
<!--end:: footer -->

<!--begin::js files -->
<script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('/assets/js/app.js') }}" ></script>
<!--end::js files -->

<!--begin::modals -->
@include('includes.modals')
 <!--begin::modals -->

</div>

</body>
</html>
