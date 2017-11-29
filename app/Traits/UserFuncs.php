<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\users;
use Cookie;

trait UserFuncs{
    public static function getUserByUsernameTrait($username){
        return users::getUserFromDBByUsername($username);
    }

    public static function getUserByFirstNameTrait($firstName){
        return users::getUserFromDBByFirstName($firstName);
    }

    public static function getUserByLastNameTrait($lastName){
        return users::getUserFromDBByLastName($lastName);
    }
}