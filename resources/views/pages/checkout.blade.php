@extends('layouts.master')
@section('title')
    Checkout
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
    <a onClick="document.getElementById('borrowMore').submit();" class="button">Borrow More</a></br>
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection