<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\books;
use Illuminate\Support\Facades\DB;

class genre extends Model{

    public static function getAllFromDB(){
        return DB::table('genres')->select()->get();
    }
}
