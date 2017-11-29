@extends('layouts.master')
@section('title')
    Lookup User
@endsection
@section('body')
    <div class="full-height content flex-center">
        <div class="search-content">
            Please enter the users username or name bellow
        </div>
        <form method="post" action="/displayUser" id="username">
            {{ csrf_field() }}
            {{Form::text('username', null, array('autofocus'=>'autofocus','autocomplete'=>'off'))}}</br>
            <input type="submit" value="Search" class="button">
        </form>
    </div>
    <script>
        document.getElementById("username").focus();
    </script>
@endsection