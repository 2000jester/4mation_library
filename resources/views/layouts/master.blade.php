<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.style')
        <title>Library - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://use.fontawesome.com/6c369d3d4b.js"></script>
        @yield('style')
    </head>
    <body>
        <div class="topright-nav">
            @if ($_SERVER['REQUEST_URI'] != '/login' && $_SERVER['REQUEST_URI'] != '/loginAdmin')
                @if(!empty(Cookie::get('user')))
                    @if (unserialize(Cookie::get('user'))[0]->admin == 1 && empty(Cookie::get('admin')))
                        <a href="/loginAdmin">admin</a>
                    @endif
                @endif
                @if (!empty(Cookie::get('user')))
                    <a href="/logout">logout</a>
                @elseif (empty(Cookie::get('user')))
                    <a href="/login">login</a>
                @endif
            @endif
            @if($_SERVER['REQUEST_URI'] != '/')
                <a href="/">menu</a>
            @endif
        </div>
        <div class="full-height content flex-center @yield('divStyle')">
            <div class="header">
                @yield('header')
            </div>
            <div class="main-content">
                @yield('content')
                @yield('form')
            </div>
            <div class="fixed-button">
                @yield('formAnchor')
            </div>
        </div>
        @yield('script')
    </body>
    <script>
        window.addEventListener('resize', function(event){
            if(window.innerWidth < 600){
                var buttons = document.getElementsByClassName("button");
                for(var i = 0; i<buttons.length;i++){
                    buttons[i].setAttribute('class','button-small');
                }
            } else if(window.innerWidth > 600){
                var buttons = document.getElementsByClassName("button-small");
                for(var i = 0; i<buttons.length;i++){
                    buttons[i].setAttribute('class','button');
                }
            }
        });
    </script>
</html>
