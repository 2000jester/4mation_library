@extends('layouts.master')
@section('title')
    Login
@endsection
@section('content')
    <div class="login-content">
        Please scan your card or enter your username bellow to login
    </div>
@endsection
@section('form')
    <form method="post" action="/setUserCookie" id="barcode">
        {{ csrf_field() }}
        {{Form::text('username', null, array('autofocus'=>'autofocus','autocomplete'=>'off'))}}</br>
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('barcode').submit();" class="button">Login</a>
@endsection
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection