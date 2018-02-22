@extends('layouts.master')
@section('title')
    {{ $bookData[0]->title }}
@endsection
@section('header')
    <div class="row header-container">
        <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header">
            <h1>{{ $bookData[0]->title }}</h1>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon header">
            <h1><i class="fa fa-book"></i></h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="row content-container">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 content-text">
                    Author : {{ $bookData[0]->author }}</br></br>
                    Year : {{ $bookData[0]->year }}</br></br>
                    @if($borrowed == true)
                        Available : No</br></br>
                    @else
                        Available : Yes</br></br>
                    @endif
                    Number of Reserves : {{ $numberOfReserves }}</br></br>
                    Genres : 
                    @foreach($genres as $genre)
                        </br> {{ $genre }}
                    @endforeach</br></br>
                </div>
            </div>
            @if(!empty(unserialize(Cookie::get('admin')))){
                <div class="row">
                    <div class="col-lg-2 offset-lg-5" style="text-align:center;">
                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete</p></br>
                                        <p> - {{ $bookData[0]->title }}</p></br>
                                        <p>from the database?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default lightButton" data-dismiss="modal">Cancel</button>
                                        <a href="delete/{{ $bookData[0]->barcode }}"class="btn btn-danger btn-ok">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-default lightButton" data-toggle="modal" data-target="#confirm-delete">
                            Delete Book From Database
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
@section('form')
    <form method="post" action="/reserve/{{ $bookData[0]->barcode }}" id="reserve">
        {{ csrf_field() }}
    </form>
    <form method="post" action="/unreserve/{{ $bookData[0]->barcode }}" id="unreserve">
        {{ csrf_field() }}
    </form>
    <form method="post" action="/borrowFromBookDisplay" id="borrow">
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
@section('buttonBar')
    @if($user == false && $borrowed == false)
        <a onClick="document.getElementById('login').submit();" class="button">Login To Borrow</a>
    @elseif($user == false && $borrowed == true && $numberOfReserves == 0)
        <a onClick="document.getElementById('login').submit();" class="button">Login To Reserve</a>
    @elseif($user == false && $borrowed == true && $numberOfReserves > 0)
        <a onClick="document.getElementById('login').submit();" class="button">Login To Add Or Cancel Reservations</a>
    @else
        @if($borrowed == false)
            <a onClick="document.getElementById('borrow').submit();" class="button">Borrow</a>
        @elseif($reservedByCurrentUser == true)
            <a onClick="document.getElementById('unreserve').submit();" class="button">Cancel Reservation</a>
        @elseif($borrowed == true && $reserved == false)
            <a onClick="document.getElementById('reserve').submit();" class="button">Reserve</a>
        @elseif($borrowed == true && $reserved == true)
            <a onClick="document.getElementById('reserve').submit();" class="button">Join Reserve Queue</a>
        @endif
    @endif
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection