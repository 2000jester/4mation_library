<?php

namespace App\Http\Controllers;
use App\Traits\Funcs;
use App\Traits\UserFuncs;

class UsersController extends Controller{

    use Funcs;
    use UserFuncs;

    public function login(){
        if(empty(Funcs::getCookieTrait('user'))){
            return view('pages.login');
        } else {
            return redirect(Funcs::getCookieTrait('lastPage'));
        }
    }
    public function logout(){
        Funcs::removeCookieTrait('user');
        Funcs::removeCookieTrait('books');
        Funcs::removeCookieTrait('admin');
        return redirect('/');
    }
    public function loginAdmin(){
        if(Funcs::getCookieTrait('user')[0]->admin != 1){
            return redirect(Funcs::getCookieTrait('lastPage'));
        }
        if(empty(Funcs::getCookieTrait('userAdmin'))){
            return view('pages.loginAdmin');
        } else {
            return redirect(Funcs::getCookieTrait('lastPage'));
        }
    }
    public function setAdminCookie(){
        Funcs::sendPageCookieTrait();
        return redirect(Funcs::getCookieTrait('lastPage'))->withCookie(cookie('admin', serialize(true), 5));
    }
    public function setUserCookie(){
        Funcs::sendPageCookieTrait();
        $user = UserFuncs::getUserTrait(request('username'));
        if(count($user) == 0){
            return redirect('/login');
        }
        return redirect(Funcs::getCookieTrait('lastPage'))->withCookie(cookie('user', serialize($user), 5));
    }
}
