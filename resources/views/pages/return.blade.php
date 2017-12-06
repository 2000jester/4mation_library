@extends('layouts.master')
@section('title')
    Return
@endsection
@if ($returned == false)
    @section('content')
            Please scan a book or enter the barcode to return it
    @endsection
    @section('form')
        <form method="post" action="/returnBook" id="barcode">
            {{ csrf_field() }}
        </form>
        <form method="post" action="/" id="menu">
            {{ csrf_field() }}
        </form>
    @endsection
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
@section('formAnchor')
    <a onClick="document.getElementById('barcode').submit();" class="button">Return Another</a></br>
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection
