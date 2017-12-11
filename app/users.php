<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\users;
use Illuminate\Support\Facades\DB;

class users extends Model
{
    public static function getUserFromDBByUsername($username){
        return DB::table('users')->select()->where('username', '=', $username)->get();
    }

    public static function getUserFromDBByFirstName($firstName){
        return DB::table('users')->select()->where('first_name', '=', $firstName)->get();
    }

    public static function getUserFromDBByLastName($lastName){
        return DB::table('users')->select()->where('last_name', '=', $lastName)->get();
    }

    public static function setupUserReservedInDB($username){
        return DB::table('users')->where('username', '=', $username)->update(['reserved'=>serialize([])]);
    }

    public static function reserveBookInDB($barcode, $username){
        $userReserved = users::getUserFromDBByUsername($username)[0]->reserved;
        $userReserved = unserialize($userReserved);
        array_push($userReserved, [$barcode,date('d.m.y')]);
        DB::table('users')->where('username','=',$username)
            ->update([
                'reserved' => serialize($userReserved),
            ]);
        return true;
    }
}
