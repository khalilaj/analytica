@extends('layouts.app')

@section('title','Dashboard')

@section('content')
<div class="container">
            <div class="row">
                <div class="locksreen-col text-center">
                    <h3>Login to TopCar Analytics</h3>
                    @include('layouts.partial.msg')
                    <form method="POST" class="m-t" role="form" action="{{ route('login') }}">
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

        @endsection