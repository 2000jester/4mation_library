@extends('layouts.master')
@section('title')
    Display {{ $user[0]->first_name }}
@endsection
@section('header')
    <h1>Display {{ $user[0]->first_name }}</h1>
@endsection
@section('content')
    <div class="left-align user-data">
        Firstname : {{ ucfirst($user[0]->first_name) }}</br> 
        Surname : {{ ucfirst($user[0]->last_name) }}</br>
        Team : {{ ucfirst($user[0]->team) }}</br>
        Admin : @if($user[0]->admin == 1) {{ "Yes" }} @else {{ "No" }} @endif</br>
        Email : {{ $user[0]->email }}</br></br>

        @for($i = 0; $i<count($books); $i++)
            {{ $books[$i][0]->title." -> ".$books[$i][0]->author }}</br>
        @endfor
    </div>
@endsection
@section('form')
    <form method="post" action="/userLookup" id="userLookup">
        {{ csrf_field() }}
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('userLookup').submit();" class="button">Search Another</a>
@endsection