<?php

namespace App\Http\Controllers;
use App\Traits\Funcs;
use App\Traits\UserFuncs;
use App\Traits\UserBookFuncs;
use App\Traits\BookFuncs;

class UsersController extends Controller{

    use Funcs;
    use UserFuncs;
    use UserBookFuncs;
    use BookFuncs;


    public function login(){
        if(empty(Funcs::getCookieTrait('user'))){
            return view('pages.login');
        } elseif(!empty(Funcs::getCookieTrait('lastPage'))) {
            return redirect(Funcs::getCookieTrait('lastPage'));
        } else {
            return redirect('/');
        }
    }
    public function logout(){
        Funcs::removeCookieTrait('user');
        Funcs::removeCookieTrait('books');
        Funcs::removeCookieTrait('admin');
        Funcs::removeCookieTrait('data');
        Funcs::removeCookieTrait('bookInfo');
        return redirect('/');
    }
    public function loginAdmin(){
        if(empty(Funcs::getCookieTrait('user'))){
            return redirect(Funcs::getCookieTrait('lastPage'));
        }
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
        $user = UserFuncs::getUserByUsernameTrait(request('username'));
        if(count($user) == 0){
            return redirect('/login');
        }
        return redirect(Funcs::getCookieTrait('lastPage'))->withCookie(cookie('user', serialize($user), 5));
    }

    public function userLookup(){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        Funcs::checkAdminTrait();
        return view('pages.userLookup');
    }

    public function DisplayUsers(){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        Funcs::checkAdminTrait();
        if(Funcs::getCookieTrait('lastPage') != "/userLookup"){
            return redirect('/userLookup');
        }
        if(request('phrase') == ""){
            return redirect('/userLookup');
        }
        $results = UserFuncs::userIsLikePhraseTrait(explode(' ', request('phrase')));

        /*$books = UserBookFuncs::getUserBookByUserTrait($user[0]->username);
        for($i = 0; $i<count($books); $i++){
            $books[$i] = BookFuncs::getBookTrait($books[$i]->book);
        }*/
        return view('pages.displayUsers', array('users'=>$results,'phrase'=>request('phrase')));
    }

    public function displayUser(){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        Funcs::checkAdminTrait();
        if(Funcs::getCookieTrait('lastPage') != "/searchUser"){
            return redirect('/userLookup');
        }
        Funcs::sendPageCookieTrait();
        if(empty(Funcs::getCookieTrait('data'))){
            return redirect('userLookup');
        }
        return view('pages.displayUser', ['user'=>Funcs::getCookieTrait('data')[0],'books'=>Funcs::getCookieTrait('data')[1]]);
    }
}
