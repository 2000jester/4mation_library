<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\users;
use Illuminate\Support\Facades\DB;

class users extends Model
{
    public static function getUser($username){
        return DB::table('users')->select()->where('username', '=', $username)->get();
    }
}
