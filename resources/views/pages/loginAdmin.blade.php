@extends('layouts.master')
@section('title')
    Admin Login
@endsection
@section('content')
    Please enter your passord bellow</br>
@endsection
@section('form')
    <form method="post" action="/setAdminCookie" id="barcode">
        {{ csrf_field() }}
        {{Form::password('password', array('autofocus'=>'autofocus','autocomplete'=>'off', 'id'=>'password'))}}</br>
        <input type="submit" value="Login" class="button">
    </form>
@endsection
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection