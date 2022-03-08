<!DOCTYPE html>
<html>
<head>
    <title> CRUD</title>
    <link href='//fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="{{asset('demo/admin/css/theme-default/bootstrap.css?1422792965') }}" />
    <link type="text/css" rel="stylesheet" href="{{asset('demo/admin/css/theme-default/materialadmin.css?1425466319') }}" />
    <link type="text/css" rel="stylesheet" href="{{asset('demo/admin/css/theme-default/font-awesome.min.css?1422529194') }}" />
    <link type="text/css" rel="stylesheet" href="{{asset('demo/admin/css/theme-default/material-design-iconic-font.min.css?1421434286') }}" />
    <link type="text/css" rel="stylesheet" href="{{asset('demo/admin/css/theme-default/libs/toastr/toastr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/admin/css/app.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
    @yield('page-specific-styles')

<body>

<div class="container">
    @yield('content')
</div>
@include('admin.resource')
</body>
</html>


