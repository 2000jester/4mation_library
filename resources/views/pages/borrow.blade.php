@extends('layouts.master')
@section('title')
    Borrow
@endsection
@section('header')
    <div class="row header-container">
        <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header">
            <h1>Borrow</h1>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon header">
            <h1><i class="fa fa-shopping-cart"></i></h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="row content-container">
        <div class="col-lg-12 content-text">
            @if (!empty(unserialize(Cookie::get('books'))) && !empty($bookData))
                <div class="row">
                    <div class="col-lg-4 offset-lg-2">
                        Please scan a book or enter the barcode
                        <div class="row borrowForm-containerPadded">
                            <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-6 offset-2 form-input">
                                <form method="post" action="/setBooksCookie" id="barcode">
                                    {{ csrf_field() }}
                                    <input type="text" value="{{ $dataToBeStored }}" name="barcode" autofocus="autofocus" autocomplete="off" class="borrow-form">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 verticalLine">
                        Your Cart
                        <div class="userCartTable-container">
                            <table style="width: 100%" class="table table-hover">
                                <tbody class="dispBlock-overAuto table-content-height">
                                    @foreach ($bookData as $book)
                                        <tr>
                                            <td class="book-list-left-width"> {{ $book->title }}</td>
                                            <td class="book-list-right-width align-right"><a href="/removeFromCart/{{ $book->barcode }}"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                Welcome {{ unserialize(Cookie::get('user'))[0]->first_name }}!</br>
                Please scan a book or enter the barcode to start
            @endif
        </div>
    </div>
@endsection
@section('form')
    <div class="row form-container">
            @if (empty(unserialize(Cookie::get('books'))) && empty($bookData))
            <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-6 offset-2 form-input">
                <form method="post" action="/setBooksCookie" id="barcode">
                    {{ csrf_field() }}
                    <input type="text" value="{{ $dataToBeStored }}" name="barcode" autofocus="autofocus" autocomplete="off">
                </form>
                <form method="post" action="/" id="menu">
                    {{ csrf_field() }}
                </form>
            </div>
        @else
            <div class="col-lg-4 offset-lg-1 col-md-4 offset-md-1 col-sm-4 offset-sm-1 col-6 offset-1 form-input">
                <form method="post" action="/" id="menu">
                    {{ csrf_field() }}
                </form>
                <div class="fixed-button">
                    <form method="post" action="/checkout" id="checkout">
                        {{ csrf_field() }}
                    </form>
                    <form method="post" action="/clearCart" id="clearCart">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        @endif
    </div>
@endsection
@if(!empty(unserialize(Cookie::get('books'))))
    @section('buttonBar')
        <div class="row">
            <div class="col-lg-4 offset-lg-2">
                <a onClick="document.getElementById('barcode').submit();" class="button">Add To Cart</a>
                <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
            </div>
            <div class="col-lg-4">
                <a onClick="document.getElementById('checkout').submit();" class="button">Checkout</a>
                <a onClick="document.getElementById('clearCart').submit();" class="button">Clear Cart</a>
            </div>
        </div>
    @endsection
@endif
@if(empty(unserialize(Cookie::get('books'))))
    @section('buttonBar')
        <a onClick="document.getElementById('barcode').submit();" class="button">Add To Cart</a>
    @endsection
@endif