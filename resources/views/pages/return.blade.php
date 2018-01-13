@extends('layouts.master')
@section('title')
    Return
@endsection
@section('header')
    <div class="row header-container-nh">
        <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header-nh">
            <h1>Return</h1>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon-nh header-nh">
            <h1><i class="fa fa-archive"></i></h1>
        </div>
    </div>
@endsection
@if ($returned == false)
    @if($error == true)
        @section('content')
            <div class="row content-container-nh">
                <div class="col-lg-8 offset-lg-2 content-text-nh">
                    Error! The book was not able to be returned
                </div>
            </div>
        @endsection
        @section('form')
            <div class="row form-container-nh">
                <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-6 offset-3 form-input-nh">
                    <form method="post" action="/return" id="barcode">
                        {{ csrf_field() }}
                    </form>
                    <form method="post" action="/" id="menu">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        @endsection
    @else
        @section('content')
                <div class="row content-container-nh">
                    <div class="col-lg-8 offset-lg-2 content-text-nh">
                        Please scan a book or enter the barcode to return it
                    </div>
                </div>
        @endsection
        @section('form')
            <div class="row form-container-nh">
                <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-6 offset-3 form-input-nh">
                    <form method="post" action="/returnBook" id="barcode">
                        {{ csrf_field() }}
                        {{Form::text('barcode', null, array('autofocus'=>'autofocus','autocomplete'=>'offm', 'value'=>'potato'))}}</br>
                    </form>
                    <form method="post" action="/" id="menu">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        @endsection
    @endif
@elseif ($returned == true)
    @section('content')
        <div class="row content-container-nh">
            <div class="col-lg-8 offset-lg-2 content-text-nh">
                The Book has been returned</br>
            </div>
        </div>
    @endsection
    @section('form')
        <div class="row form-container-nh">
            <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-6 offset-3 form-input-nh">
                <form method="post" action="/return" id="barcode">
                    {{ csrf_field() }}
                </form>
                    <form method="post" action="/" id="menu">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    @endsection
@endif
@if($returned == false)
    @section('buttonBar')
        <a onClick="document.getElementById('barcode').submit();" class="button">Return</a>
        <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
    @endsection
@elseif($returned == false && $error == false)
    @section('buttonBar')
        <a onClick="document.getElementById('barcode').submit();" class="button">Return</a>
        <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
    @endsection
@else
    @section('buttonBar')
        <a onClick="document.getElementById('barcode').submit();" class="button">Return Another</a>
        <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
    @endsection
@endif
@section('script')
    <script>
        document.getElementById("barcode").focus();
    </script>
@endsection
