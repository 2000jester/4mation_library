@extends('layouts.master')
@section('title')
    {{ $user[0]->first_name }} {{ $user[0]->last_name }}
@endsection
@section('header')
    <h1>{{ $user[0]->first_name }} {{ $user[0]->last_name }} - 
        @if($user[0]->admin == 1) 
            Admin 
        @endif 
    {{ $user[0]->team }}</h1>
@endsection
@section('content')

@endsection
@section('form')
    <form method="post" action="/menu" id="menu">
        {{ csrf_field() }}
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a></br>
@endsection