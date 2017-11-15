<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\user_books;
use Cookie;

trait UserBookFuncs{
    public function borrowBook($username, $barcode){
        user_books::addUserBookToDB($username, $barcode);
    }
    public function returnBookTrait($barcode){
        user_books::deleteUserBookFromDB($barcode);
    }
    public function getUserBook($barcode){
        return user_books::getUserBookFromDB($barcode);
    }
}