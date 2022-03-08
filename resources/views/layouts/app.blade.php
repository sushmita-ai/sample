<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>

    <title>{{ config('app.name', 'Consultancy') }}-@yield('title')</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- END META -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ mix('css/main.css') }}" type="text/css" rel="stylesheet"/>
    <!-- END STYLESHEETS -->
    @yield('page-specific-styles')
</head>
<body class="menubar-hoverable header-fixed">
    @include('layouts.admin.header')
    <!-- BEGIN BASE-->
    <div id="base">
        <div id="app">
            {{-- @yield('content') --}}
        </div>
        <!-- END CONTENT-->
        {{-- @include('layouts.admin.sidebar') --}}
    </div><!--end #base-->
    <!-- END BASE -->
    @include('layouts.admin.footer')
{!! Toastr::render() !!}
</body>
</html>
