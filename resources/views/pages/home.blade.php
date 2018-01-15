@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 logo-container">
            <a href="/">{{ Html::image('photos/logo.png', "logo", array('id' => 'home-logo')) }}</a>
        </div>
    </div>
    @if(!empty(unserialize(Cookie::get('admin'))))
        <div class="row links" style="padding-left:10%;padding-right:10%;">
            <div class="col-lg-2 offset-lg-1">
                <a href="/borrow">Borrow <i class="fa fa-shopping-cart links-pad"></i></a>
            </div>
            <div class="col-lg-2">
                <a href="/return">Return <i class="fa fa-archive links-pad"></i></a>
            </div>
            <div class="col-lg-2"> 
                <a href="/bookLookup">Search <i class="fa fa-search links-pad"></i></a>
            </div>
            <div class="col-lg-2">    
                <a href="/help">Help <i class="fa fa-question links-pad"></i></a>
            </div>
            <div class="col-lg-2">  
                <div class="dropdown">
                    <button class="dropbtn">Admin Funcs <i class="fa fa-user"></i></button>
                    <div id="adminFunctions" class="dropdown-content">
                        <a href="/userLookup">Search a User <i class="fa fa-search"></i></a>
                        <a href="/checkDupes">Check Duplicate Barcodes <i class="fa fa-barcode"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @elseif(empty(unserialize(Cookie::get('admin'))))
        <div class="row links">
            <div class="col-lg-2 offset-lg-2 links-pad">
                <a href="/borrow">Borrow <i class="fa fa-shopping-cart links-pad"></i></a>
            </div>
            <div class="col-lg-2 links-pad">
                <a href="/return">Return <i class="fa fa-archive links-pad"></i></a>
            </div>
            <div class="col-lg-2 links-pad"> 
                <a href="/bookLookup">Search <i class="fa fa-search links-pad"></i></a>
            </div>
            <div class="col-lg-2 links-pad">    
                <a href="/help">Help <i class="fa fa-question links-pad" style="margin-bottom: 15%"></i></a>
            </div>
        </div>
    @endif
@endsection
@section('script')
    <script>
        $( document ).ready(function() {
            $('.dropbtn').on('click',function(){
                $('.dropdown-content').slideToggle('fast');
            });
        });
    </script>
@endsection