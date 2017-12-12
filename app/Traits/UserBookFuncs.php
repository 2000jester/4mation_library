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
        return user_books::returnUserBookFromDB($barcode);
    }
    public static function getUserBookByBookTrait($barcode){
        return user_books::getUserBookFromDBByBook($barcode);
    }
    public static function getUserBookByUserTrait($username){
        return user_books::getUserBookFromDBByUser($username);
    }
    public static function isBorrowedTrait($barcode){
        return user_books::isBorrowedInDB($barcode);
    }
    public static function doesUserHaveBorrowedTrait($barcode, $username){
        return user_books::doesUserHaveBorrowedInDB($barcode, $username);
    }
}