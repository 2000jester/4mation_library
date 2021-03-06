@extends('layouts.master')
@section('title')
    {{ $user[0]->first_name }} {{ $user[0]->last_name }}
@endsection
@section('header')
    <div class="row header-container">
        <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header">
            <h1>{{ $user[0]->first_name }} {{ $user[0]->last_name }} ( {{ $user[0]->username }} )
                @if($user[0]->admin == 1)
                    - Admin
                @endif
            </h1>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon header">
            @if($user[0]->admin == 1)
                <h1><i class="fa fa-user"></i></h1>
            @endif
        </div>
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-4 offset-2">
        <div class="row">
            <div class="user-table-header">Currently Borrowed</div>
            <table class="table table-striped table-hover">
                <thead class="dispBlock-overAuto">
                    <tr>
                        <th class="standard-table-width">Title</th>
                        <th class="standard-table-width">Author</th>
                    </tr>
                </thead>
                <tbody class="dispBlock-overAuto table-content-height">
                    @if(!empty($books))
                        @for($i = 0; $i<count($books); $i++)
                            <tr>
                                <td class="standard-table-width"><a href="/books/{{$books[$i]->barcode}}">{{ $books[$i]->title }}</a></td>
                                <td class="standard-table-width">{{ $books[$i]->author }}</td>
                            </tr>
                        @endfor
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-4">
        <div class="row">
            <div class="user-table-header">Currently Reserved</div>
                <table class="table table-striped table-hover">
                <thead class="dispBlock-overAuto">
                    <tr>
                        <th class="standard-table-width">Title</th>
                        <th class="standard-table-width">Author</th>
                    </tr>
                </thead>
                <tbody class="dispBlock-overAuto user-borrows-height">
                    @if(!empty($reservations))
                        @for($i = 0; $i<count($reservations); $i++)
                            <tr>
                                <td class="standard-table-width"><a href="/books/{{$reservations[$i]->barcode}}">{{ $reservations[$i]->title }}</a></td>
                                <td class="standard-table-width"><a >{{ $reservations[$i]->author }}</a></td>
                            </tr>
                        @endfor
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('form')
    <div class="row form-container">
        <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-6 offset-3 form-input">
            <form method="post" action="/menu" id="menu">
                {{ csrf_field() }}
            </form>
            <form method="post" action="/userLookup" id="userLookup">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection
@section('buttonBar')
    <a onClick="document.getElementById('userLookup').submit();" class="button">Search Another</a>
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection