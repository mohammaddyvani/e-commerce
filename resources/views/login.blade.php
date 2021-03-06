@extends('layouts.app')

@section('content')

    <!-- Begin Uren's Login Register Area -->
    <div class="uren-login-register_area">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$errors->first()}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                    <!-- Login Form s-->
                    <form action="{{route('auth.login')}}" method="post" >
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Login</h4>
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <label>Email*</label>
                                    <input type="text" placeholder="Email" name="email">
                                </div>
                                <div class="col-12 mb--20">
                                    <label>Password</label>
                                    <input type="password" placeholder="Password" name="password">
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="forgotton-password_info">
                                        <a href="#"> Forgotten pasward?</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="uren-login_btn">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    <!-- Register Form s-->
                    <form action="{{route('auth.register')}}" method="post">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Register</h4>
                            <div class="row">
                                <div class="col-md-6 col-12 mb--20">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" placeholder="First Name">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Last Name</label>
                                    <input type="text" name="lastname" placeholder="Last Name">
                                </div>
                                <div class="col-md-12">
                                    <label>Email Address*</label>
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirm_password" placeholder="Confirm Password">
                                </div>
                                <div class="col-12">
                                    <button class="uren-register_btn">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Uren's Login Register Area  End Here -->


@endsection