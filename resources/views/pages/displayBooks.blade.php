@extends('layouts.master')
@section('title')
    Search for "{{ $phrase }}"
@endsection
@section('body')
    <div class="full-height content flex-center justify-content-normal main-content">
        <div class="left-align">
            @if(count($bookInfo) == 0)
                There were no results for the phrase "{{ $phrase }}"
            @endif
            @for($i = 0; $i<count($bookInfo); $i++)
                <a href="test.text">{{ $bookInfo[$i]->title." -> ".$bookInfo[$i]->author }}</a></br></br>
            @endfor
        </div>
        <div class="fixed-button">
            <form method="post" action="/bookLookup" id="button">
                {{ csrf_field() }}
                <input type="submit" value="Search Again" class="button">
            </form>
        </div>
    </div>
@endsection
@section('style')
<style>
</style>
@endsection