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
            <input type="text" name="barcode" autofocus="autofocus" autocomplete="off">
        </form>
    @endsection
@elseif ($returned == true)
    @section('content')
            The Book has been returned</br>
    @endsection
    @section('form')
        <form method="post" action="/return" id="barcode">
            {{ csrf_field() }}
            <input type="submit" value="Return Another" class="button">
        </form>
        <form method="post" action="/" id="barcode">
            {{ csrf_field() }}
            <input type="submit" value="Menu" class="button">
        </form>
    @endsection
@endif
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection
