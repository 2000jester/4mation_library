<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\user_books;
use App\books;
use App\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Cookie;
use Illuminate\Http\RedirectResponse;

function checkUser(){
    if(empty(getCookie('user'))){
        \App::abort(302, '', ['Location' => '/login']);
    }
}

function sendPageCookie(){
    Cookie::queue(Cookie::forever('lastPage',serialize($_SERVER['REQUEST_URI'])));
}

class UsersController extends Controller
{
    public function setUserCookie(){
        sendPageCookie();
        $user = users::getUser(request('username'));
        if(count($user) == 0){
            return redirect('/login');
        }
        return redirect(controller::getCookie('lastPage'))->withCookie(cookie('user', serialize($user), 5));
    }
}
