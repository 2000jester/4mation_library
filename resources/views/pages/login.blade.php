@extends('layouts.master')
@section('title')
    Login
@endsection
@section('header')
    <div class="row header-container-nh">
        <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header-nh">
            <h1>Login</h1>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon-nh header-nh">
            <h1><i class="fa fa-sign-in"></i></h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="row content-container-nh">
        <div class="col-lg-8 offset-lg-2 content-text-nh">
            Please scan your card or enter your username bellow to login
        </div>
    </div>
@endsection
@section('form')
    <div class="row form-container-nh">
        <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-6 offset-3 form-input-nh">
            <form method="post" action="/setUserCookie" id="barcode">
                {{ csrf_field() }}
                {{Form::text('username', null, array('autofocus'=>'autofocus','autocomplete'=>'off'))}}</br>
            </form>
        </div>
    </div>
@endsection
@section('buttonBar')
    <span onClick="document.getElementById('barcode').submit();" class="button">Login</span>
@endsection
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection