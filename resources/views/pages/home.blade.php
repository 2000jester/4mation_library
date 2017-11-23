@extends('layouts.master')
@section('title')
    Home
@endsection
@section('body')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title">
                <div id="content-logo">
                    {{ Html::image('photos/logo.png', "logo", array('id' => 'home-logo')) }}
                </div>
            </div>
            <div class="links">
                <a href="/borrow">Borrow</a>
                <a href="/return">Return</a>
                <div class="dropdown">
                    <button onclick="dropdown()" class="dropbtn">Admin Functions</button>
                    <div id="adminFunctions" class="dropdown-content">
                        <a href="/checkDupes">Check Duplicate Barcodes</a>
                        <a href="/userLookup">Search a User</a>
                    </div>
                </div>
                <a href="/help">Help</a>
            </div>
        </div>
    </div>
    <script>
        function dropDown() {
            document.getElementById("adminFunctions").classList.toggle("show");
        }
        // Close the dropdown if the user clicks outside of it
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
    </script>
@endsection
@section('style')
<style>
    #home-logo{
        width: 50%;
    }
    .links{
        margin-top: -3%;
    }

    .dropbtn {
        background-color: #5EC0D5;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #f1f1f1;
    }

    .show {
        display:block;
    }
</style>
@endsection