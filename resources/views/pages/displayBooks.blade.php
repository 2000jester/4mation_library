@extends('layouts.master')
@section('title')
    Search for "{{ $phrase }}"
@endsection
@section('body')
    <div class="full-height content flex-center justify-content-normal padding bookList">
        <div class="left-align">
            @if(count($bookInfo) == 0)
                There were no results for the phrase "{{ $phrase }}"
            @endif
            @for($i = 0; $i<count($bookInfo); $i++)
                <a href="test.text">{{ $bookInfo[$i]->title." -> ".$bookInfo[$i]->author }}</a></br></br>
            @endfor
        </div>
        <div class="fixed">
            <form method="post" action="/bookLookup" id="button">
                {{ csrf_field() }}
                <input type="submit" value="Search Again" class="button">
            </form>
        </div>
    </div>
@endsection
@section('style')
<style>
    .left-align{
        text-align:left;
        font-size: 20px;
        padding-left:110px;
        padding-right:110px;
    }
    a:link{
        text-decoration: none;
        text-color: black;
    }
    a:visited{
        text-decoration: none;
        text-color: black;
    }
    .justify-content-normal{
        justify-content: normal;
    }
    .padding{
        padding-top: 20px;
    }
    .fixed{
        position:fixed;
        bottom: 15px;
    }
    .bookList{
        height: calc(100vh - 102px);
        overflow: auto;
    }
</style>
@endsection