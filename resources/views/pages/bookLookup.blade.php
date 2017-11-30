@extends('layouts.master')
@section('title')
    Book Search
@endsection
@section('body')
    <div class="full-height content flex-center">
        <div class="login-content">
            Please enter the phrase you wish to search for a book by
        </div>
        <form method="post" action="/searchForPhrase" id="phrase">
            {{ csrf_field() }}
            {{Form::text('phrase', null, array('autofocus'=>'autofocus','autocomplete'=>'off'))}}</br>
            <input type="submit" value="Search" class="button">
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