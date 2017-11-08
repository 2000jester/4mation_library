@extends('layouts.master')
@section('title')
    Checkout
@endsection
@section('body')
    <div class="full-height content flex-center">
        Thanks {{ unserialize(Cookie::get('user'))[0]->first_name }},</br>
        your books have been borrowed </br></br>
        <a class="button" href="/borrow">Borrow More</a></br>
        <a class="button" href="/">Menu</a>
    </div>
@endsection
@section('style')
@endsection