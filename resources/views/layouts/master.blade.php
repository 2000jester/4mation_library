<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.style')
        <title>Library - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        @yield('style')
    </head>
    <body>
        @if($_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/returnBook' && $_SERVER['REQUEST_URI'] != '/checkout')
            <a class="topright-nav" href="/">menu</a>
        @endif
        @if (!empty(Cookie::get('user')))
            <a class="topright-nav" href="/logout">logout</a>
        @elseif (empty(Cookie::get('user')))
             <a class="topright-nav" href="/login">login</a>
        @endif
        @yield('body')
    </body>
</html>
