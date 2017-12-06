@extends('layouts.master')
@section('title')
    Book Search
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
        <input type="submit" value="Search" class="button">
    </form>
@endsection
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection