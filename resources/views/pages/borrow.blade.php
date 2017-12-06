@extends('layouts.master')
@section('title')
    Borrow
@endsection
@section('header')
    <h1>Borrow</h1>
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
    @endif
@endsection
@section('form')
    <form method="post" action="/setBooksCookie" id="barcode">
        {{ csrf_field() }}
        <input type="text" name="barcode" autofocus="autofocus" autocomplete="off">
    </form>
    @if (!empty(unserialize(Cookie::get('books'))))
        <div class="fixed-button">
            <form method="post" action="/checkout" id="checkout">
                {{ csrf_field() }}
                <input type="submit" value="Checkout" class="button">
            </form>
            <form method="post" action="/clearCart" id="clearCart">
                {{ csrf_field() }}
                <input type="submit" value="Clear Cart" class="button">
            </form>
        </div>
    @endif
@endsection
@if(!empty(unserialize(Cookie::get('books'))))
    @section('formAnchor')
        <a onClick="document.getElementById('barcode').submit();" class="button">Add To Cart</a></br>
        <a onClick="document.getElementById('checkout').submit();" class="button">Checkout</a></br>
        <a onClick="document.getElementById('clearCart').submit();" class="button">Clear Cart</a></br>
    @endsection
@endif
@if(empty(unserialize(Cookie::get('books'))))
    @section('formAnchor')
        <a onClick="document.getElementById('barcode').submit();" class="button">Add To Cart</a>
    @endsection
@endif