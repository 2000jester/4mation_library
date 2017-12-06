@extends('layouts.master')
@section('title')
    Checkout
@endsection
@section('content')
    Thanks {{ unserialize(Cookie::get('user'))[0]->first_name }},</br>
    your books have been borrowed </br></br>
@endsection
@section('form')
    <form method="post" action="/borrow">
        {{ csrf_field() }}
        <input type="submit" value="Borrow More" class="button">
    </form>
    <form method="post" action="/">
        {{ csrf_field() }}
        <input type="submit" value="Menu" class="button">
    </form>
@endsection