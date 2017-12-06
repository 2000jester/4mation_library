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
        <input type="submit" value="Search" class="button">
    </form>
@endsection
@section('script')
    <script>
        document.getElementById("username").focus();
    </script>
@endsection