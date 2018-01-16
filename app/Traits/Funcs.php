<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Cookie;

trait Funcs{
    public static function getCookieTrait($cookieName){
        return unserialize(Cookie::get($cookieName));
    }
    public static function checkUserTrait($dataToBeStored = ''){
        if(empty(Funcs::getCookieTrait('user'))){
            Cookie::queue(Cookie::forever('dataToBeStored',serialize($dataToBeStored)));
            \App::abort(302, '', ['Location' => '/login']);
        }
    }
    public static function checkAdminTrait(){
        if(empty(Funcs::getCookieTrait('admin'))){
            \App::abort(302, '', ['Location' => '/loginAdmin']);
        }
    }
    public static function sendPageCookieTrait(){
        Cookie::queue(Cookie::forever('lastPage',serialize($_SERVER['REQUEST_URI'])));
    }
    public static function removeCookieTrait($cookie){
        Cookie::queue(Cookie::forget($cookie));
    }
    public static function sendMail($to,$subject,$message,$from){
        // $message = wordwrap($message, 100, "\r\n");
        $from = 'From: '.$from;
        mail($to, $subject, $message,$from);
    }
}