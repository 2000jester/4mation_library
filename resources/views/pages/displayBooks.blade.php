@extends('layouts.master')
@section('title')
    Search for "{{ $phrase }}"
@endsection
@section('content')
    <div class="left-align">
        @if(count($bookInfo) == 0)
            There were no results for the phrase "{{ $phrase }}"
        @endif
        <table>
            <tr>
                <td>Title</td>
                <td>Author</td>
            </tr>
                @for($i = 0; $i<count($bookInfo); $i++)
                <tr>
                    <td><a href="{{ $bookInfo[$i]->barcode }}"> {{ $bookInfo[$i]->title }} </a></td>
                    <td><a href="{{ $bookInfo[$i]->barcode }}"> {{ $bookInfo[$i]->author }} </a></td>
                </tr>
                @endfor
    </div>
@endsection
@section('form')
    <form method="post" action="/bookLookup" id="button">
        {{ csrf_field() }}
        <input type="submit" value="Search Again" class="button">
    </form>
@endsection