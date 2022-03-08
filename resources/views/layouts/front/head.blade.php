<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}}-@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="{{asset('resources/front/images/fav-logo.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('resources/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('resources/front/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('resources/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('resources/front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('resources/front/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('resources/front/css/animate.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.min.css" />
    <link rel="stylesheet" href="{{asset('resources/front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('resources/front/css/responsive.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @yield('page-specific-styles')
</head>
