@extends('layouts.master')
@section('title')
    Borrow
@endsection
@section('body')
    <div class="full-height content flex-center">
            @if (empty(Cookie::get('books')))
                Welcome {{ unserialize(Cookie::get('user'))[0]->first_name }}!
                Please scan a book or enter the barcode to start
            @elseif (!empty($bookData))
                Your Cart :
                <div class="book-list">
                    @foreach ($bookData as $book)
                         - {{ $book->title }} </br>
                    @endforeach
                </div>
            @endif
            <form method="post" action="/setBooksCookie" id="barcode">
            {{ csrf_field() }}
            <input type="text" name="barcode" autofocus="autofocus" autocomplete="off">
            </form>
            @if (!empty(unserialize(Cookie::get('books'))))
                <form method="post" action="/checkout">
                    {{ csrf_field() }}
                    <input type="submit" value="Checkout" class="button">
                </form>
            @endif
    </div>
@endsection
@section('style')
    <style>
        .book-list{
            font-size: 18px;
            padding-top: 3vh;
            padding-bottom: 6vh;
        }
    </style>
@endsection