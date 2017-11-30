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
        } else {
            return redirect(Funcs::getCookieTrait('lastPage'));
        }
    }
    public function logout(){
        Funcs::removeCookieTrait('user');
        Funcs::removeCookieTrait('books');
        Funcs::removeCookieTrait('admin');
        Funcs::removeCookieTrait('data');
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
        Funcs::sendPageCookieTrait();
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

    public function searchUser(){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        Funcs::checkAdminTrait();
        if(Funcs::getCookieTrait('lastPage') != "/userLookup"){
            return redirect('/userLookup');
        }
        $user = UserFuncs::getUserByUsernameTrait(request('username'));
        if(empty($user[0]->first_name)){
            $user = UserFuncs::getUserByFirstNameTrait(request('username'));
        }
        if(empty($user[0]->first_name)){
            $user = UserFuncs::getUserByLastNameTrait(request('username'));
        }
        if(empty($user[0]->first_name)){
            $names = explode(' ', request('username'));
            $firstSearch = UserFuncs::getUserByFirstNameTrait(ucfirst($names[0]));
            $secondSearch = UserFuncs::getUserByLastNameTrait(ucfirst($names[1]));
            if($firstSearch == $secondSearch){
                $user = $firstSearch;
            }
        }
        if(empty($user[0]->first_name)){
            $names = explode(' ', request('username'));
            array_push($names,$names[0]);
            $names[0] = $names[1];
            $names[1] = $names[2];
            $firstSearch = UserFuncs::getUserByFirstNameTrait(ucfirst($names[0]));
            $secondSearch = UserFuncs::getUserByLastNameTrait(ucfirst($names[1]));
            if($firstSearch == $secondSearch){
                $user = $firstSearch;
            }
        }
        $books = UserBookFuncs::getUserBookByUserTrait($user[0]->username);
        for($i = 0; $i<count($books); $i++){
            $books[$i] = BookFuncs::getBookTrait($books[$i]->book);
        }
        $data = [$user,$books];
        return redirect('/displayUser')->withCookie(cookie('data', serialize($data), 1));
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
