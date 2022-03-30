<!DOCTYPE html>

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Ads</title>
<link rel=icon href=img/favicon.png sizes="20x20" type="image/png">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/simple-chart.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<html>

<body class="common-body">

    <div class="main-container">
        @include('header')
        @include('sidebar')
        <div class="main-content-container">
            @yield('content')
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/progress-bar.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/js/simple-chart.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/my.js')}}"></script>
</body>

</html>