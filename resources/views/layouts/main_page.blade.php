@extends('master_page')
@section('page_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop

@section('main_content')
    <main class="pauoj-content">
        <div class="row">
        <div class="first-or-not">
            <h3>FIRST TIME HERE?</h3>Please <a href=""> Sign Up</a> first. OR <strong> <a href="">Login</a> ...</strong>
        </div>
        <div class="main-content">
        <div class="signup-content">
            <form action="">

            <div class="group-control">
                <label for="email" class="label-control">Email</label>
                <div class="controls">
                    <input type="text" name="email" value="" id="email" placeholder="Enter Your Email....">
                </div>
            </div>
            <div class="group-control">
                <label for="password" class="label-control">Password</label>
                <div class="controls">
                    <input type="password" name="password" value="" id="current_password" placeholder="">
                </div>
            </div>
            <div class="group-control">
                <label for="password" class="label-control">Confirm Password</label>
                <div class="controls">
                    <input type="password" name="password" value="" id="confirm_password" placeholder="">
                </div>
            </div>

            <button type="button" name="button" class="button-block"><span class="spn">Sign Up</span></button>
            </form>
            <h1 class="or_present">OR</h1>
            <div class="login-by-social-account">
                <div class="social-icon">
                    <a href="#" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                </div>
                <div class="social-icon">
                    <a href="#" class="github"><i class="fa fa-github fa-fw"></i></a>
                </div>
                <div class="social-icon">
                    <a href="#" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                </div>
                <div class="social-icon">
                    <a href="#" class="google-plus"><i class="fa fa-google-plus fa-fw"></i></a>
                </div>
                <div class="social-icon">
                    <a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                </div>
            </div>
        </div>
            <!--<div class="middle-content">-->
                <!--<h1 class="or_present">OR</h1>-->
            <!--</div>-->
        <div class="login-content">
            <form action="">

            <div class="group-control">
                <label for="email" class="label-control">Email</label>
                <div class="controls">
                    <input type="text" name="email" value="" id="lemail" placeholder="Enter Your Email....">
                </div>
            </div>

            <div class="group-control">
                <label for="password" class="label-control">Password</label>
                <div class="controls">
                    <input type="password" name="password" value="" id="password" placeholder="">
                </div>
            </div>

                <button type="button" name="button" class="button-block"><span class="spn">Sign In</span></button>
            </form>
            <h1 class="or_present">OR</h1>
            <div class="login-by-social-account">
                <div class="social-icon">
                    <a href="#" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                </div>
                <div class="social-icon">
                    <a href="#" class="github"><i class="fa fa-github fa-fw"></i></a>
                </div>
                <div class="social-icon">
                    <a href="#" class="linkedin"><i class="fa fa-linkedin fa-fw"></i></a>
                </div>
                <div class="social-icon">
                    <a href="#" class="google-plus"><i class="fa fa-google-plus fa-fw"></i></a>
                </div>
                <div class="social-icon">
                    <a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>
@stop
@section('page_js')
@stop
