<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Cookie;

trait Funcs{
    public static function getCookieTrait($cookieName){
        return unserialize(Cookie::get($cookieName));
    }
    public static function checkUserTrait(){
        if(empty(Funcs::getCookieTrait('user'))){
            \App::abort(302, '', ['Location' => '/login']);
        }
    }
    public static function sendPageCookieTrait(){
        Cookie::queue(Cookie::forever('lastPage',serialize($_SERVER['REQUEST_URI'])));
    }
    public static function removeCookieTrait($cookie){
        Cookie::queue(Cookie::forget($cookie));
    }
}