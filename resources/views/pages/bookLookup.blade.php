@extends('layouts.master')
@section('title')
    Book Search
@endsection
@section('body')
    <div class="full-height content flex-center">
        <div class="login-content">
            Please enter the phrase you wish to search for a book by</br>
            You may also search for a book by Author
        </div>
        <div>
            <form method="post" action="/displayBooks" id="phrase">
                {{ csrf_field() }}
                {{Form::text('phrase', null, array('autofocus'=>'autofocus','autocomplete'=>'off'))}}</br>
                <div class="fixed-button">
                    <input type="submit" value="Search" class="button">
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection
@section('style')
    <style>
    </style>
@endsection