@extends('layouts.master')
@section('title')
    Search for {{ $phrase }}
@endsection
@section('body')
    <div class="full-height content flex-center">
        <div class="left-align">
            @for($i = 0; $i<count($bookInfo); $i++)
                @if(count($bookInfo) == 0)
                    return redirect(Cookie::get('lastPage'));
                @endif
                {{ $bookInfo[$i]->title." -> ".$bookInfo[$i]->author }}</br>
            @endfor
        </div>
        <form method="post" action="/bookLookup" id="button">
            {{ csrf_field() }}
            <input type="submit" value="Search Another" class="button">
        </form>
    </div>
@endsection
@section('style')
<style>
    .left-align{
        text-align:left;
    }
</style>
@endsection