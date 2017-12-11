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
@endsection
@section('form')
    <form method="post" action="/reserve/{{ $bookData[0]->barcode }}" id="reserve">
        {{ csrf_field() }}
    </form>
    <form method="post" action="/borrow" id="borrow">
        {{ csrf_field() }}
    </form>
    <form method="post" action="/menu" id="menu">
        {{ csrf_field() }}
    </form>
@endsection
@section('formAnchor')
    @if($borrowed == true)
        <a onClick="document.getElementById('reserve').submit();" class="button">Reserve</a></br>
    @elseif($reserved == true)
        <a onClick="document.getElementById('reserve').submit();" class="button">Join Reserve Queue</a></br>
    @else
        <a onClick="document.getElementById('borrow').submit();" class="button">Borrow</a></br>
    @endif
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a></br>
@endsection