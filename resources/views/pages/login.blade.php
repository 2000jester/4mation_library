@extends('layouts.master')
@section('title')
    Login
@endsection
@section('body')
    <div class="full-height content flex-center">
        <div class="login-content">
            Please scan your card or enter your username bellow to login
        </div>
        <form method="post" action="/setUserCookie" id="barcode">
            {{ csrf_field() }}
            {{Form::text('username', null, array('autofocus'=>'autofocus','autocomplete'=>'off'))}}
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
    </style>
@endsection