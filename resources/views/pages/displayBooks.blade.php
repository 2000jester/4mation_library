@extends('layouts.master')
@section('title')
    Search for "{{ $phrase }}"
@endsection
@section('header')
    <h1><div>Search results for "{{ $phrase }}"</div><div class="icon-pos"><i class="fa fa-book"></i></div></h1>
@endsection
@section('content')
    <div class="left-align">
        @section('divStyle')
            justify-content-normal
        @endsection
        @if(count($bookInfo) == 0)
            There were no results for the phrase "{{ $phrase }}"
        @else
            <table style="width: 100%">
                <thead class="dispBlock-overAuto">
                <tr>
                    <th class="book-list-left-width">Title</th>
                    <th class="book-list-right-width">Author</th>
                </tr>
                </thead>
                <tbody class="dispBlock-overAuto book-list-height">
                    @for($i = 0; $i<count($bookInfo); $i++)
                    <tr>
                        <td class="book-list-left-width"><a href="books/{{ $bookInfo[$i]->barcode }}"> {{ $bookInfo[$i]->title }} </a></td>
                        <td class="book-list-right-width">{{ $bookInfo[$i]->author }}</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        @endif
    </div>
@endsection
@section('form')
    <form method="post" action="/bookLookup" id="bookLookup">
        {{ csrf_field() }}
    </form>
    <form method="post" action="/menu" id="menu">
        {{ csrf_field() }}
    </form>
@endsection
@section('formAnchor')
    <a onClick="document.getElementById('bookLookup').submit();" class="button">Search Again</a>
    <a onClick="document.getElementById('menu').submit();" class="button">Menu</a>
@endsection