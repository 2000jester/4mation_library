@extends('layouts.master')
@section('title')
    Admin Login
@endsection
@section('header')
    <div class="row header-container">
        <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header">
            <h1>Admin Login</h1>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon header">
            <h1><i class="fa fa-sign-in"></i></h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="row content-container">
        <div class="col-lg-8 offset-lg-2 content-text">
            Please enter your passord and amount of</br> time you wish to stay logged in bellow</br>
        </div>
    </div>
@endsection
@section('form')
    <div class="row form-container">
        <div class="col-6 offset-4">
            <form method="post" action="/setAdminCookie" id="loginForm">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="password">Password <span style="color:red">*</span></label>
                            <input name="password" type="password" class="form-control" id="password" autofocus="autofocus" autocomplete="off" placeholder="Enter Password">
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
    <a onClick="document.getElementById('loginForm').submit();" class="button">Login</a>
@endsection
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection