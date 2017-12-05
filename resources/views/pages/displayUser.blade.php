@extends('layouts.master')
@section('title')
    Display {{ $user[0]->first_name }}
@endsection
@section('body')
    <div class="full-height content flex-center">
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
        <form method="post" action="/userLookup" id="button">
            {{ csrf_field() }}
            <input type="submit" value="Search Another" class="button">
        </form>
    </div>
@endsection
@section('style')
<style>
</style>
@endsection