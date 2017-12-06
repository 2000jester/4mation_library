@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <div class="title">
        <div id="content-logo">
            {{ Html::image('photos/logo.png', "logo", array('id' => 'home-logo')) }}
        </div>
    </div>
    <div class="links">
        <a href="/borrow">Borrow</a>
        <a href="/return">Return</a>
        <a href="/bookLookup">Search</a>
        <a href="/reserve">Reserve</a>
        @if(!empty(unserialize(Cookie::get('admin'))))
            <div class="dropdown">
                <button onclick="dropDown()" class="dropbtn">Admin Functions</button>
                <div id="adminFunctions" class="dropdown-content">
                    <a href="/userLookup">Search a User</a>
                    <a href="/checkDupes">Check Duplicate Barcodes</a>
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