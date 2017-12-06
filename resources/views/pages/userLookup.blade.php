@extends('layouts.master')
@section('title')
    Lookup User
@endsection
@section('content')
    Please enter the users username or name bellow
@endsection
@section('form')
    <form method="post" action="/searchUser" id="username">
        {{ csrf_field() }}
        {{Form::text('username', null, array('autofocus'=>'autofocus','autocomplete'=>'off'))}}</br>
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('username').submit();" class="button">Search</a>
@endsection
@section('script')
    <script>
        document.getElementById("username").focus();
    </script>
@endsection