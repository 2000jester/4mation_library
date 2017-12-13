<?php

namespace App\Http\Controllers;
use App\Traits\Funcs;
use App\Traits\UserFuncs;
use App\Traits\UserBookFuncs;
use App\Traits\BookFuncs;
use App\Traits\ReservationFuncs;

class UsersController extends Controller{

    use Funcs;
    use UserFuncs;
    use UserBookFuncs;
    use BookFuncs;
    use ReservationFuncs;


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

    public function displayUsers(){
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
        return view('pages.displayUsers', array('users'=>$results,'phrase'=>request('phrase')));
    }

    public function get($username){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        Funcs::checkAdminTrait();
        $user = UserFuncs::getUserByUsernameTrait($username);

        $tempBooks = UserBookFuncs::getUserBookByUserTrait($username);
        $books = [];
        for($i = 0; $i<count($tempBooks);$i++){
            array_push($books, BookFuncs::getBookTrait($tempBooks[$i]->book)[0]);
        }

        $tempReservations = ReservationFuncs::getReservationsByUserTrait($username);
        $reservations = [];
        for($i = 0; $i<count($tempReservations);$i++){
            array_push($reservations, BookFuncs::getBookTrait($tempReservations[$i]->book)[0]);
        }
        return view('pages.displayUser', array('user'=>$user, 'books'=>$books, 'reservations'=>$reservations));
    }
}
