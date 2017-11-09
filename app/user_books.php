<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class user_books extends Model
{
    public static function getUserBook($book){
        return DB::table('user_books')->select()->where('book', '=', $book)->get();
    }
}
