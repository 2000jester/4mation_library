<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Library - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/6c369d3d4b.js"></script>
        @include('layouts.style')
        @yield('style')
    </head>
    <body>
        <div class="container">
            <div class="row nav" style="padding-top:10px;">
                <div class="col-lg-12" style="text-align:right;">
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
                    @if($_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/menu' && $_SERVER['REQUEST_URI'] != '/home')
                        <a href="/">menu</a>
                    @endif
                </div>
            </div>
            <div class="shown">
                @yield('header')
                @yield('content')
                @yield('form')
                <div class="row button-container fixed-bottom">
                    <div class="col-12 form-button">
                        @yield('buttonBar')
                    </div>
                </div>
            </div>
            <div class="hidden">
                <div class="row">
                    <div class="col-lg-4 offset-lg-2">
                        @yield('header')
                    </div>
                    <div class="col-lg-4">
                        @yield('content')
                        @yield('form')
                        <div class="row button-container fixed-bottom">
                            <div class="col-12 form-button">
                                @yield('buttonBar')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('script')
        </div>
    </body>
</html>
