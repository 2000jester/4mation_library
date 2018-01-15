@extends('layouts.master')
@section('title')
    Results for {{ $phrase }}
@endsection
@section('header')
    <div class="row header-container-nh">
        <div class="col-lg-6 offset-lg-2 col-md-6 offset-md-2 col-sm-8 offset-sm-1 col-10 header-nh">
            <h1>Search results for "{{ $phrase }}"</h1>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 col-2 header-icon-nh header-nh">
            <h1><i class="fa fa-users"></i></h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="row content-container-nh">
        <div class="col-lg-8 offset-lg-2 content-text-nh">
            @section('divStyle')
                justify-content-normal
            @endsection
            @if(count($users) == 0)
                There were no results for the phrase "{{ $phrase }}"
            @else
                <table style="width: 100%" class="table table-striped table-hover">
                    <thead class="dispBlock-overAuto">
                    <tr>
                        <th class="user-list-first-width">Username</th>
                        <th class="user-list-second-width">First Name</th>
                        <th class="user-list-third-width">Last Name</th>
                    </tr>
                    </thead>
                    <tbody class="dispBlock-overAuto table-content-height">
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
    </div>
@endsection
@section('form')
    <div class="row form-container-nh">
        <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-6 offset-3 form-input-nh">
            <form method="post" action="/userLookup" id="userLookup">
                {{ csrf_field() }}
            </form>
            <form method="post" action="/" id="menu">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection
@section('buttonBar')
    <a onClick="document.getElementById('userLookup').submit();" class="button">Search Another</a>
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection