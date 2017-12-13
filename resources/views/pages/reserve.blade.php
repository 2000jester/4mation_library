@extends('layouts.master')
@section('title')
    Reserve
@endsection
@section('header')
    @if($error == false)
        <h1><div>Successful</div><div class="icon-pos"><i class="fa fa-check"></i></div></h1>
    @else
        <h1><div>Ooops</div><div class="icon-pos"><i class="fa fa-close"></i></div></h1>
    @endif
@endsection
@section('content')
    {{ $message }}
@endsection
@section('form')
    <form method="post" action="/menu" id="menu">
        {{ csrf_field() }}
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection