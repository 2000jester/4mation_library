<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.style')
        <title>Library - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        @yield('style')
    </head>
    <body>
        <div class="topright-nav">
            @if($_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/returnBook' && $_SERVER['REQUEST_URI'] != '/checkout')
                <a href="/">menu</a>
            @endif
            @if ($_SERVER['REQUEST_URI'] != '/login' && $_SERVER['REQUEST_URI'] != '/loginAdmin')
                @if (!empty(Cookie::get('user')))
                    <a href="/logout">logout</a>
                @elseif (empty(Cookie::get('user')))
                    <a href="/login">login</a>
                @endif
                @if(!empty(Cookie::get('user')))
                    @if (unserialize(Cookie::get('user'))[0]->admin == 1 && empty(Cookie::get('admin')))
                        <a href="/loginAdmin">admin</a>
                    @endif
                @endif
            @endif
        </div>
        <div class="full-height content flex-center">
            <div class="main-content">
                @yield('content')
            </div>
            <div class="fixed-button">
                @yield('form')
            </div>
        </div>
        @yield('script')
    </body>
</html>
