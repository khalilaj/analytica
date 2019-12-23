<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/metisMenu.css')}}" media="all"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css"/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @stack('css')
</head>
<body class="fixed-left">
    <div id="app">
        <div class="wrapper">
            @if(Request::is('dealer*'))
                @include('layouts.partial.sidebar')
            @endif
            <div class="main-panel">
                @if(Request::is('dealer*'))
                    @include('layouts.partial.topbar')
                @endif
                    @yield('content')
                @if(Request::is('dealer*'))
                    @include('layouts.partial.footer')
                @endif
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!--   Core JS Files   -->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js')}}"></script> 
    <script src="{{ asset('backend/js/bootstrap-notify.js') }}"></script>
    {!! Toastr::message() !!}
    @stack('scripts')
</body>
</html>
