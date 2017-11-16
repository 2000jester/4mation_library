@extends('layouts.master')
@section('title')
    Admin Login
@endsection
@section('body')
    <div class="full-height content flex-center">
        <form method="post" action="/setAdminCookie" id="barcode">
            {{ csrf_field() }}
            <div class="login-content">
                Please enter your passord bellow</br>
                {{Form::text('password', null, array('autocomplete'=>'off'))}}</br>
            </div>
            <input type="submit" value="Login" class="button">
        </form>
    </div>
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection
@section('style')
    <style>
        .login-content{
            width: 100%;
        }
        .small-text{
            font-size: 20px;
        }
    </style>
@endsection