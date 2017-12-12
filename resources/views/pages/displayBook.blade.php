@extends('layouts.master')
@section('title')
    {{ $bookData[0]->title }}
@endsection
@section('header')
    <h1>{{ $bookData[0]->title }}</h1>
@endsection
@section('content')
    Author : {{ $bookData[0]->author }}</br>
    Year : {{ $bookData[0]->year }}</br>
    @if($borrowed == true)
        Available : No</br>
    @else
        Available : Yes</br>
    @endif
    Number of Reserves : {{ $numberOfReserves }}</br>
@endsection
@section('form')
    <form method="post" action="/reserve/{{ $bookData[0]->barcode }}" id="reserve">
        {{ csrf_field() }}
    </form>
    <form method="post" action="/unreserve/{{ $bookData[0]->barcode }}" id="unreserve">
        {{ csrf_field() }}
    </form>
    <form method="post" action="/borrow" id="borrow">
        {{ csrf_field() }}
        <input type="hidden" name="barcode" value="{{$bookData[0]->barcode}}"/>
    </form>
    <form method="post" action="/menu" id="menu">
        {{ csrf_field() }}
    </form>
    <form method="post" action="/login" id="login">
        {{ csrf_field() }}
    </form>
@endsection
@section('formAnchor')
    @if($user == false && $borrowed == false)
        <a onClick="document.getElementById('login').submit();" class="button">Login To Borrow</a></br>
    @elseif($user == false && $borrowed == true && $numberOfReserves == 0)
        <a onClick="document.getElementById('login').submit();" class="button">Login To Reserve</a></br>
    @elseif($user == false && $borrowed == true && $numberOfReserves > 0)
        <a onClick="document.getElementById('login').submit();" class="button">Login To Add Or Cancel Reservations</a></br>
    @else
        @if($borrowed == false)
            <a onClick="document.getElementById('borrow').submit();" class="button">Borrow</a></br>
        @elseif($reservedByCurrentUser == true)
            <a onClick="document.getElementById('unreserve').submit();" class="button">Cancel Reservation</a></br>
        @elseif($borrowed == true && $reserved == false)
            <a onClick="document.getElementById('reserve').submit();" class="button">Reserve</a></br>
        @elseif($borrowed == true && $reserved == true)
            <a onClick="document.getElementById('reserve').submit();" class="button">Join Reserve Queue</a></br>
        @endif
    @endif
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a></br>
@endsection