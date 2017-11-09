<?php

namespace App\Http\Controllers;
use App\Traits\Funcs;

class UsersController extends Controller{

    use Funcs;

    public function setUserCookie(){
        $this->sendPageCookie();
        $user = $this->getUser(request('username'));
        if(count($user) == 0){
            return redirect('/login');
        }
        return redirect($this->getCookie('lastPage'))->withCookie(cookie('user', serialize($user), 5));
    }
}
