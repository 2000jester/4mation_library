<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Cookie;

trait BookFuncs{
    public function getCookie($cookieName){
        return unserialize(Cookie::get($cookieName));
    }
    public function checkUser(){
        if(empty($this->getCookie('user'))){
            \App::abort(302, '', ['Location' => '/login']);
        }
    }
    public function sendPageCookie(){
        Cookie::queue(Cookie::forever('lastPage',serialize($_SERVER['REQUEST_URI'])));
    }
    public function removeCookie($cookie){
        Cookie::queue(Cookie::forget($cookie));
    }
}