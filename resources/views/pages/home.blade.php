@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <div class="title">
        <div id="content-logo">
            <a href="/">{{ Html::image('photos/logo.png', "logo", array('id' => 'home-logo')) }}</a>
        </div>
    </div>
    <div class="links">
        <a href="/borrow">Borrow <i class="fa fa-shopping-cart"></i></a>
        <a href="/return">Return <i class="fa fa-archive"></i></a>
        <a href="/bookLookup">Search <i class="fa fa-search"></i></a>
        <a href="/help">Help <i class="fa fa-question"></i></a>
        @if(!empty(unserialize(Cookie::get('admin'))))
            <div class="dropdown">
                <button onclick="dropDown()" class="dropbtn">Admin Functions</button>
                <div id="adminFunctions" class="dropdown-content">
                    <a href="/userLookup">Search a User <div class="icon-float"><i class="fa fa-search"></i></div></a>
                    <a href="/checkDupes">Check Duplicate Barcodes <div class="icon-pos-small"><i class="fa fa-barcode"></i></div></a>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('script')
    <script>
        function dropDown() {
            document.getElementById("adminFunctions").classList.toggle("show");
        }
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                    }
                }
            }
        }

        var elems = document.querySelectorAll(".main-content");
        [].forEach.call(elems, function(el) {
            el.classList.remove("main-content");
        });
    </script>
@endsection