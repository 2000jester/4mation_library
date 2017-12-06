@extends('layouts.master')
@section('title')
    Search for "{{ $phrase }}"
@endsection
@section('header')
    <h1>Search results for "{{ $phrase }}"</h1>
@endsection
@section('content')
    <div class="left-align">
        @section('divStyle')
            justify-content-normal
        @endsection
        @if(count($bookInfo) == 0)
            There were no results for the phrase "{{ $phrase }}"
        @endif
        <table style="width: 100%">
            <thead style="display: block; overflow: auto;">
            <tr>
                <th style="width: calc((100vw - 220px)*0.7)">Title</th>
                <th style="width: calc((100vw - 220px)*0.3)">Author</th>
            </tr>
            </thead>
            <tbody style="display: block; overflow: auto; height: calc(100vh - 122px);">
                @for($i = 0; $i<count($bookInfo); $i++)
                <tr>
                    <td style="width: calc((100vw - 220px)*0.7)"><a href="{{ $bookInfo[$i]->barcode }}"> {{ $bookInfo[$i]->title }} </a></td>
                    <td style="width: calc((100vw - 220px)*0.3)"><a href="{{ $bookInfo[$i]->barcode }}"> {{ $bookInfo[$i]->author }} </a></td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
@section('form')
    <form method="post" action="/bookLookup" id="bookLookup">
        {{ csrf_field() }}
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('bookLookup').submit();" class="button">Search Again</a>
@endsection