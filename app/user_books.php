<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class user_books extends Model
{
    public static function getUserBookFromDBByBook($barcode){
        return DB::table('user_books')->select()->where('book', '=', $barcode)->get();
    }
    public static function getUserBookFromDBByUser($username){
        return DB::table('user_books')->select()->where('user', '=', $username)->get();
    }
    public static function returnUserBookFromDB($barcode){
        return DB::table('user_books')->where('book', '=', $barcode)->update(['date_returned'=>date("d.m.y")]);
    }
    public static function addUserBookToDB($username, $barcode){
        DB::table('user_books')->insert(
            ['user'=>$username,'book'=>$barcode,'date_borrowed'=>date("d.m.y"),'date_returned'=>'']
        );
    }
    public static function isBorrowedInDB($barcode){
        $result = DB::table('user_books')->select()->where('book','=',$barcode)->get();
        return empty($result[0]) ? false : true;
    }
    public static function doesUserHaveBorrowedInDB($barcode, $username){
        $result = DB::table('user_books')->select()->where([
            ['user','=',$username],
            ['book','=',$barcode]
        ])->get();
        return empty($result[0]) ? false : true;
    }
}
