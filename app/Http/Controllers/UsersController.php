<?php

namespace App\Http\Controllers;
use App\Traits\Funcs;
use App\Traits\UserFuncs;

class UsersController extends Controller{

    use Funcs;
    use UserFuncs;

    public function setUserCookie(){
        Funcs::sendPageCookieTrait();
        $user = UserFuncs::getUserTrait(request('username'));
        if(count($user) == 0){
            return redirect('/login');
        }
        return redirect(Funcs::getCookieTrait('lastPage'))->withCookie(cookie('user', serialize($user), 5));
    }
}
