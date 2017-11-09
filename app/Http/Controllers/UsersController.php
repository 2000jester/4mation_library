<?php

namespace App\Http\Controllers;

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
