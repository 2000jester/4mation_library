@extends('layouts.master')
@section('title')
    Return
@endsection
@section('header')
    <h1>Return</h1>
@endsection
@if ($returned == false)
    @if($error == true)
        @section('content')
            Error! The book was not able to be returned
        @endsection
        @section('form')
            <form method="post" action="/return" id="barcode">
            {{ csrf_field() }}
            </form>
            <form method="post" action="/" id="menu">
            {{ csrf_field() }}
            </form>
        @endsection
    @else
        @section('content')
                Please scan a book or enter the barcode to return it
        @endsection
        @section('form')
            <form method="post" action="/returnBook" id="barcode">
                {{ csrf_field() }}
                {{Form::text('barcode', null, array('autofocus'=>'autofocus','autocomplete'=>'offm', 'value'=>'potato'))}}</br>
            </form>
            <form method="post" action="/" id="menu">
            {{ csrf_field() }}
            </form>
        @endsection
    @endif
@elseif ($returned == true)
    @section('content')
            The Book has been returned</br>
    @endsection
    @section('form')
        <form method="post" action="/return" id="barcode">
        {{ csrf_field() }}
        </form>
        <form method="post" action="/" id="menu">
        {{ csrf_field() }}
        </form>
    @endsection
@endif
@if($returned == false)
    @section('formAnchor')
        <a onClick="document.getElementById('barcode').submit();" class="button">Return</a>
        <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
    @endsection
@elseif($returned == false && $error == false)
    @section('formAnchor')
        <a onClick="document.getElementById('barcode').submit();" class="button">Return</a>
        <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
    @endsection
@else
    @section('formAnchor')
        <a onClick="document.getElementById('barcode').submit();" class="button">Return Another</a>
        <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
    @endsection
@endif
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection
