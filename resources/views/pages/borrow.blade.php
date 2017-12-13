@extends('layouts.master')
@section('title')
    Borrow
@endsection
@section('header')
    <h1><div>Borrow</div><div class="icon-pos"><i class="fa fa-shopping-cart"></i></div></h1>
@endsection
@section('content')
    @if (empty(Cookie::get('books')))
        Welcome {{ unserialize(Cookie::get('user'))[0]->first_name }}!
        Please scan a book or enter the barcode to start
    @elseif (!empty($bookData))
        Your Cart :
        <div class="small-list">
            @foreach ($bookData as $book)
                    - {{ $book->title }} </br>
            @endforeach
        </div>
        Please scan a book or enter the barcode
    @endif
@endsection
@section('form')
    <form method="post" action="/setBooksCookie" id="barcode">
        {{ csrf_field() }}
        <input type="text" value="{{$barcode}}" name="barcode" autofocus="autofocus" autocomplete="off">
    </form>
    <form method="post" action="/" id="menu">
        {{ csrf_field() }}
    </form>
    @if (!empty(unserialize(Cookie::get('books'))))
        <div class="fixed-button">
            <form method="post" action="/checkout" id="checkout">
                {{ csrf_field() }}
            </form>
            <form method="post" action="/clearCart" id="clearCart">
                {{ csrf_field() }}
            </form>
        </div>
    @endif
@endsection
@if(!empty(unserialize(Cookie::get('books'))))
    @section('formAnchor')
        <a onClick="document.getElementById('barcode').submit();" class="button">Add To Cart</a>
        <a onClick="document.getElementById('checkout').submit();" class="button">Checkout</a>
        <a onClick="document.getElementById('clearCart').submit();" class="button">Clear Cart</a>
        <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
    @endsection
@endif
@if(empty(unserialize(Cookie::get('books'))))
    @section('formAnchor')
        <a onClick="document.getElementById('barcode').submit();" class="button">Add To Cart</a>
    @endsection
@endif