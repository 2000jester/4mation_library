@extends('layouts.master')
@section('title')
    Checkout
@endsection
@section('body')
    <div class="full-height content flex-center">
        Thanks {{ unserialize(Cookie::get('user'))[0]->first_name }},</br>
        your books have been borrowed </br></br>
        <div class="button fixed-button">
            <a href="/borrow">Borrow More</a></br>
            <a href="/">Menu</a>
        </div>
    </div>
@endsection
@section('style')
@endsection