@extends('layouts.master')
@section('title')
    Book Search
@endsection
@section('header')
    <div class="row header-container">
        <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header">
            <h1>Book Search</h1>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon header">
            <h1><i class="fa fa-search"></i></h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="row content-container">
        <div class="col-lg-8 offset-lg-2 content-text">
            Please enter the phrase you wish to search for a book by</br>
            You may also search for a book by Author
        </div>
    </div>
@endsection
@section('form')
    <div class="row form-container">
        <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-6 offset-3 form-input">
            <form method="post" action="/displayBooks" id="phrase">
                {{ csrf_field() }}
                {{Form::text('phrase', null, array('autofocus'=>'autofocus','autocomplete'=>'off'))}}</br>
            </form>
        </div>
    </div>
@endsection
@section('buttonBar')
    <a onClick="document.getElementById('phrase').submit();" class="button">Search</a>
@endsection
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection