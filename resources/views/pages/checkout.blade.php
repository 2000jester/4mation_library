@extends('layouts.master')
@section('title')
    Checkout
@endsection
@section('header')
    <h1><div>Checkout</div><div class="icon-pos"><i class="fa fa-shopping-cart"></i></div></h1>
@endsection
@section('content')
    Thanks {{ unserialize(Cookie::get('user'))[0]->first_name }},</br>
    your books have been borrowed </br></br>
@endsection
@section('form')
    <form method="post" action="/borrow" id="borrowMore">
        {{ csrf_field() }}
    </form>
    <form method="post" action="/" id="menu">
        {{ csrf_field() }}
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('borrowMore').submit();" class="button">Borrow More</a>
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection