@extends('layouts.master')
@section('title')
    Return
@endsection
@section('header')
    <div class="row header-container">
        <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header">
            <h1>Return</h1>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon header">
            <h1><i class="fa fa-archive"></i></h1>
        </div>
    </div>
@endsection
@section('content')
        <div class="row content-container">
            <div class="col-lg-8 offset-lg-2 content-text">
                Please scan a book or enter the barcode to return it
            </div>
        </div>
@endsection
@section('form')
    <div class="row form-container">
        <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-6 offset-3 form-input">
            <form method="post" action="/returnBook" id="barcode">
                {{ csrf_field() }}
                <input type="text" name="barcode" autofocus="autofocus" autocomplete="off">
            </form>
            <form method="post" action="/" id="menu">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection
@section('buttonBar')
    <a onClick="document.getElementById('barcode').submit();" class="button">Return</a>
@endsection
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection
