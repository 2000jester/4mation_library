@extends('layouts.master')
@section('title')
    Search a User
@endsection
@section('header')
    <h1>Search a User</h1>
@endsection
@section('content')
    Please enter the users username or name bellow
@endsection
@section('form')
    <form method="post" action="/searchUser" id="username">
        {{ csrf_field() }}
        {{Form::text('username', null, array('autofocus'=>'autofocus','autocomplete'=>'off'))}}</br>
    </form>
    <form method="post" action="/" id="menu">
        {{ csrf_field() }}
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('username').submit();" class="button">Search</a></br>
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection
@section('script')
    <script>
        document.getElementById("username").focus();
    </script>
@endsection