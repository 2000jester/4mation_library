@extends('layouts.master')
@section('title')
    Borrow
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
            <form method="post" action="/checkout">
                {{ csrf_field() }}
                <input type="submit" value="Checkout" class="button">
            </form>
            <form method="post" action="/clearCart">
                {{ csrf_field() }}
                <input type="submit" value="Clear Cart" class="button">
            </form>
        </div>
    @endif
@endsection