@extends('layouts.master')
@section('title')
    Reserve
@endsection
@section('header')
    @if($error == false)
        <div class="row header-container">
            <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header">
                <h1>Successful</h1>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon header">
                <h1><i class="fa fa-check"></i></h1>
            </div>
        </div>
    @else
        <div class="row header-container">
            <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header">
                <h1>Ooops</h1>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon header">
                <h1><i class="fa fa-close"></i></h1>
            </div>
        </div>
    @endif
@endsection
@section('content')
    <div class="row content-container">
        <div class="col-lg-8 offset-lg-2 content-text">
            {{ $message }}
        </div>
    </div>
@endsection
@section('form')
    <div class="row form-container">
        <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-6 offset-3 form-input">
            <form method="post" action="/menu" id="menu">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection