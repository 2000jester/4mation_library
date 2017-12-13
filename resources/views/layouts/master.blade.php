<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.style')
        <title>Library - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
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
