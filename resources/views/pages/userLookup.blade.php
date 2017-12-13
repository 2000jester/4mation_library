@extends('layouts.master')
@section('title')
    Search a User
@endsection
@section('header')
    <h1><div>Search A User</div><div class="icon-pos"><i class="fa fa-search"></i></div></h1>
@endsection
@section('content')
    Please enter the users username or name bellow
@endsection
@section('form')
    <form method="post" action="/displayUsers" id="phrase">
        {{ csrf_field() }}
        {{Form::text('phrase', null, array('autofocus'=>'autofocus','autocomplete'=>'off'))}}</br>
    </form>
    <form method="post" action="/" id="menu">
        {{ csrf_field() }}
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('phrase').submit();" class="button">Search</a>
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection
@section('script')
    <script>
        document.getElementById("phrase").focus();
    </script>
@endsection