<?php
namespace App\Traits;
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

    public static function getAllUsersTrait(){
        return users::getAllUsersFromDB();
    }

    public static function userIsLikePhraseTrait($phrases){
        return users::userIsLikePhraseFromDB($phrases);
    }
}