@extends('layouts.master')
@section('title')
    Admin Login
@endsection
@section('content')
    Please enter your passord bellow</br>
@endsection
@section('form')
    <form method="post" action="/setAdminCookie" id="loginForm">
        {{ csrf_field() }}
        {{Form::password('password', array('autofocus'=>'autofocus','autocomplete'=>'off', 'id'=>'password'))}}</br>
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('loginForm').submit();" class="button">Login</a>
@endsection
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection