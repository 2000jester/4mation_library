@extends('layouts.master')
@section('title')
    Login
@endsection
@section('header')
    <div class="row header-container">
        <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header">
            <h1>Login</h1>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon header">
            <h1><i class="fa fa-sign-in"></i></h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="row content-container">
        <div class="col-lg-8 offset-lg-2 content-text">
            Please scan your card or enter your username and amount of</br> time you wish to stay logged in bellow
        </div>
    </div>
@endsection
@section('form')
    <div class="row form-container">
        <div class="col-6 offset-4">
            <form method="post" action="/setUserCookie" id="login">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="username">Username <span style="color:red">*</span></label>
                            <input name="username" type="text" class="form-control" id="username" autofocus="autofocus" autocomplete="off" placeholder="Enter Username">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input tabindex="0" data-toggle="popover" title="Time Value" data-content="This will define how long your session will last before the system asks you to log in again, the default value is 5 minutes" data-placement="top" name="time" type="text" class="form-control" id="time" autofocus="autofocus" autocomplete="off" placeholder="Between 0 and 30">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('buttonBar')
    <span onClick="document.getElementById('login').submit();" class="button">Login</span>
@endsection
@section('script')
    <script>
        document.getElementById("username").focus();
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
        $('#time').popover({
            trigger: 'focus'
        })
    </script>
@endsection