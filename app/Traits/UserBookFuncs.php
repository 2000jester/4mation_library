<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\user_books;
use Cookie;

trait UserBookFuncs{
    public static function borrowBookTrait($username, $barcode){
        user_books::addUserBookToDB($username, $barcode);
    }
    public static function returnBookTrait($barcode){
        user_books::deleteUserBookFromDB($barcode);
    }
    public static function getUserBookTrait($barcode){
        return user_books::getUserBookFromDB($barcode);
    }
}