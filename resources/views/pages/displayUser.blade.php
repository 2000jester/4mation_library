@extends('layouts.master')
@section('title')
    {{ $user[0]->first_name }} {{ $user[0]->last_name }}
@endsection
@section('header')
    <h1><div>{{ $user[0]->first_name }} {{ $user[0]->last_name }} ( {{ $user[0]->username }} ) -
    @if($user[0]->admin == 1)
        Admin
    @endif
    </div>
    @if($user[0]->admin == 1)
        <div class="icon-pos"><i class="fa fa-user"></i></div></h1>
    @endif
@endsection
@section('content')
    @section('divStyle')
        justify-content-normal
    @endsection
    <div class="user-parent">
        <div class="user-child">
           <div class="user-borrows left-text">
                <div class="user-lists">
                    <div class="user-list-header">Currently Borrowed</div>
                    <table style="width: 100%;">
                        <thead class="dispBlock-overAuto">
                            <tr>
                                <th class="user-borrows-width">Title</th>
                                <th class="user-borrows-width">Author</th>
                            </tr>
                        </thead>
                        <tbody class="dispBlock-overAuto user-borrows-height">
                            @if(!empty($books))
                                @for($i = 0; $i<count($books); $i++)
                                    <tr>
                                        <td class="user-borrows-width"><a href="/books/{{$books[$i]->barcode}}">{{ $books[$i]->title }}</a></td>
                                        <td class="user-borrows-width">{{ $books[$i]->author }}</td>
                                    </tr>
                                @endfor
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="user-child">
            <div class="user-reserves  left-text">
                <div class="user-lists">
                    <div class="user-list-header">Currently Reserved</div>
                    <table style="width: 100%;">
                        <thead class="dispBlock-overAuto">
                            <tr>
                                <th class="user-borrows-width">Title</th>
                                <th class="user-borrows-width">Author</th>
                            </tr>
                        </thead>
                        <tbody class="dispBlock-overAuto user-borrows-height">
                            @if(!empty($reservations))
                                @for($i = 0; $i<count($reservations); $i++)
                                    <tr>
                                        <td class="user-borrows-width"><a href="/books/{{$reservations[$i]->barcode}}">{{ $reservations[$i]->title }}</a></td>
                                        <td class="user-borrows-width"><a href="">{{ $reservations[$i]->author }}</a></td>
                                    </tr>
                                @endfor
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('form')
    <form method="post" action="/menu" id="menu">
        {{ csrf_field() }}
    </form>
    <form method="post" action="/userLookup" id="userLookup">
        {{ csrf_field() }}
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('userLookup').submit();" class="button">Search Another</a>
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection