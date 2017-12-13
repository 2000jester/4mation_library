@extends('layouts.master')
@section('title')
    Book Search
@endsection
@section('header')
    <h1><div>Book Search</div><div class="icon-pos"><i class="fa fa-search"></i></div></h1>
@endsection
@section('content')
    <div class="login-content">
        Please enter the phrase you wish to search for a book by</br>
        You may also search for a book by Author
    </div>
@endsection
@section('form')
    <form method="post" action="/displayBooks" id="phrase">
        {{ csrf_field() }}
        {{Form::text('phrase', null, array('autofocus'=>'autofocus','autocomplete'=>'off'))}}</br>
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('phrase').submit();" class="button">Search</a>
@endsection
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection