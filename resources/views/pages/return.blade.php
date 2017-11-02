@extends('layouts.master')
@section('title')
    Return
@endsection
@if ($returned == false)
    @section('body')
        <div class="full-height content flex-center">
            <div class="welcome-text">
                    Please scan a book or enter the barcode to return it
                <form method="post" action="/returnBook" id="barcode">
                    {{ csrf_field() }}
                    <input type="text" name="barcode" autofocus="autofocus" autocomplete="off">
                </form>
            </div>
        </div>
    @endsection
@elseif ($returned == true)
    @section('body')
    <div class="full-height content flex-center">
        <div class="welcome-text">
            The Book has been returned</br>
            <a class="button" href="/return">Return Another</a></br>
            <a class="button" href="/">Menu</a>
        </div>
    </div>
    @endsection
@endif
@section('style')
    <style>
        .content{
            font-size: 30px;
        }
    </style>
@endsection