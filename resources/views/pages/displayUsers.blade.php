@extends('layouts.master')
@section('title')
    Results for {{ $phrase }}
@endsection
@section('header')
    <h1><div>Search results for "{{ $phrase }}"</div><div class="icon-pos"><i class="fa fa-users"></i></div></h1>
@endsection
@section('content')
    <div class="left-align">
        @section('divStyle')
            justify-content-normal
        @endsection
        @if(count($users) == 0)
            There were no results for the phrase "{{ $phrase }}"
        @else
            <table style="width: 100%">
                <thead class="dispBlock-overAuto">
                <tr>
                    <th class="user-list-first-width">Username</th>
                    <th class="user-list-second-width">First Name</th>
                    <th class="user-list-third-width">Last Name</th>
                </tr>
                </thead>
                <tbody class="dispBlock-overAuto user-list-height">
                    @for($i = 0; $i<count($users); $i++)
                    <tr>
                        <td class="user-list-first-width"><a href="users/{{ $users[$i]->username }}"> {{ $users[$i]->username }} </a></td>
                        <td class="user-list-second-width"><a href="users/{{ $users[$i]->username }}"> {{ $users[$i]->first_name }} </a></td>
                        <td class="user-list-third-width"><a href="users/{{ $users[$i]->username }}"> {{ $users[$i]->last_name }} </a></td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        @endif
    </div>
@endsection
@section('form')
    <form method="post" action="/userLookup" id="userLookup">
        {{ csrf_field() }}
    </form>
    <form method="post" action="/" id="menu">
        {{ csrf_field() }}
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('userLookup').submit();" class="button">Search Another</a>
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection