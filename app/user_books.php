<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class user_books extends Model
{
    public static function getUserBookFromDB($barcode){
        return DB::table('user_books')->select()->where('book', '=', $barcode)->get();
    }
    public static function deleteUserBookFromDB($barcode){
        DB::table('user_books')->where('book', '=', $barcode)->delete();
    }
    public static function addUserBookToDB($username, $barcode){
        DB::table('user_books')->insert(
            ['user'=>$username,'book'=>$barcode,'date_borrowed'=>date("d.m.y")]
        );
    }
}
