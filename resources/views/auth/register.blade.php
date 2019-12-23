

<!DOCTYPE html>

<html>
    
 <head>
        <title>Top Car Analytics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge" />
 
        <link rel="stylesheet" href="{{ secure_asset('frontend/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/metisMenu.css')}}" media="all">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/morris-0.4.3.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/style.css')}}">
    </head>
    <body class="fixed-left">
<div class="container">
            <div class="row">
                <div class="locksreen-col text-center">
                    <h3>Register with TopCar </h3>
                    @include('layouts.partial.msg')
 
                    <form method="POST"class="m-t"  action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class=" col-form-label text-md-right">Name</label>

                            <div  >
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class=" col-form-label text-md-right">E-Mail Address</label>

                            <div >
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="  col-form-label text-md-right">Password</label>

                            <div >
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class=" col-form-label text-md-right">Confirm Password</label>

                            <div >
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                        <button type="submit" class="btn btn-theme btn-lg btn-block ">Register</button><br>
                        
                        <p class=" text-center"><small>Already have an account</small></p>
                        <a href="/login">Login</a><br><br>
                        <p>Copyright &copy; 2020 TopCar</p>
                        </div>


                       
                    </form>

                </div>
            </div>
        </div>
        <!-- Plugins  -->
      <!--   Core JS Files   -->
      <script type="text/javascript" src="{{ secure_asset('frontend/js/jquery.min.js')}}"></script>
     <script type="text/javascript" src="{{ secure_asset('frontend/js/bootstrap.min.js')}}"></script> 
     <script src="{{ secure_asset('backend/js/bootstrap-notify.js') }}"></script>
    </body>


</html>
