<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
<!-- Mirrored from html.designstream.co.in/pink-desh/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Nov 2019 17:44:47 GMT -->
<head>
        <title>Top Car Analytics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge" />
 
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/metisMenu.css')}}" media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/morris-0.4.3.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
    </head>
    <body class="fixed-left">
<div class="container">
            <div class="row">
                <div class="locksreen-col text-center">
                    <h3>Login to TopCar Analytics</h3>
                    @include('layouts.partial.msg')
                    <form method="POST"    action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control" placeholder="Password"  name="password" required>
                                        </div>
                                    </div>
                                </div>
                        <button type="submit" class="btn btn-theme btn-lg btn-block ">Login</button><br>
            
                        <p class=" text-center"><small>Do not have an account?</small></p>
                        <a href="/register">Create an account</a><br><br>
                        <p>Copyright &copy; 2020 TopCar</p>
                    </form>
                </div>
            </div>
        </div>
        <!-- Plugins  -->
     <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.slimscroll.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/moment.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.sparkline.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flot.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flot.time.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flot.tooltip.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flot.resize.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flot.pie.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flot.selection.js')}}"></script> 
 
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flot.stack.js')}}"></script> 
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flot.crosshair.js')}}"></script> 
    <script type="text/javascript" src="{{ asset('frontend/js/raphael-2.1.0.min.js')}}"></script> 
    <script type="text/javascript" src="{{ asset('frontend/js/morris.js')}}"></script> 
    <script type="text/javascript" src="{{ asset('frontend/js/Chart.min.js')}}"></script> 
    <script type="text/javascript" src="{{ asset('frontend/js/core.js')}}"></script> 
    <script type="text/javascript" src="{{ asset('frontend/js/mediaquery.js')}}"></script> 
    <script type="text/javascript" src="{{ asset('frontend/js/equalize.js')}}"></script> 
    <script type="text/javascript" src="{{ asset('frontend/js/app.js')}}"></script> 
    </body>


</html>
