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
                <div class="col-12">
                    <nav class="navbar sticky-top navbar-light">
                        <div class="row" style="width:100%">
                            <div class="col-1">
                                @if( (($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/menu' || $_SERVER['REQUEST_URI'] == '/home') && !empty(Cookie::get('user'))) || ($_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/menu' && $_SERVER['REQUEST_URI'] != '/home'))
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="fa fa-bars"></span>
                                    </button>
                                @endif
                            </div>
                            @if(!empty(unserialize(Cookie::get('errorMessage'))))
                                <div class="row">
                                    <div class="col-8 offset-1 userAlert">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong> {{ unserialize(Cookie::get('errorMessage')) }} </strong>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    Cookie::queue(\Cookie::forget('errorMessage'));
                                @endphp
                            @endif
                            @if(!empty(unserialize(Cookie::get('successMessage'))))
                                <div class="row">
                                    <div class="col-8 offset-1 userAlert">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong> {{ unserialize(Cookie::get('successMessage')) }} </strong>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    Cookie::queue(\Cookie::forget('successMessage'));
                                @endphp
                            @endif
                            <div class="col-4 offset-7" style="text-align:right;">
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
                    </nav>
                    <div class="collapse" id="navbarToggleExternalContent">
                        <div class="bg-dark p-4">
                            @if(!empty(Cookie::get('user')))
                                <div class="navbarDropdown">
                                    <div class="col-lg-12">
                                        @if($_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/menu' && $_SERVER['REQUEST_URI'] != '/home')
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <a href="/" class="navbarLinks">Menu</a>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="/" class="navbarLinks">
                                                        <i class="fa fa-home"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                        @if(!empty(unserialize(Cookie::get('admin'))))
                                            @if($_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/menu' && $_SERVER['REQUEST_URI'] != '/home')
                                                <hr>
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <a href="/userLookup" class="navbarLinks">Search a User</a>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="/userLookup" class="navbarLinks">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <a href="/checkDupes" class="navbarLinks">View Duplicate Barcodes</a>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="/checkDupes" class="navbarLinks">
                                                        <i class="fa fa-barcode"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <a href="/bookEdit" class="navbarLinks">Book Add / Edit / Delete</a>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="/userLookup" class="navbarLinks">
                                                        <i class="fa fa-book"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                        @if(!empty(Cookie::get('user')))
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <a href="users/{{ unserialize(Cookie::get('user'))[0]->username }}"class="navbarLinks">My Account</a>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="users/{{ unserialize(Cookie::get('user'))[0]->username }}" class="navbarLinks">
                                                        <i class="fa fa-user-o"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <a href="/userLookup" class="navbarLinks">Logout</a>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="/logout" class="navbarLinks">
                                                        <i class="fa fa-sign-out"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @yield('header')
            @yield('content')
            @yield('form')
            <div class="row button-container fixed-bottom">
                <div class="col-12 form-button">
                    @yield('buttonBar')
                </div>
            </div>
            @yield('script')
        </div>
    </body>
    <script>
        setTimeout(function(){ 
            $('button[data-dismiss="alert"]').trigger('click');
         }, 5000);
    </script>
</html>
