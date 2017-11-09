<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\user_books;
use App\books;
use App\users;
use Cookie;



trait Funcs{
    public function getCookie($cookieName){
        return unserialize(Cookie::get($cookieName));
    }
    public function getBookData($booksCookie){
        if(!empty($booksCookie)){
            $books = $booksCookie;
            $bookData = [];
            for($i = 0; $i < count($books); $i++){
                array_push($bookData,
                    books::getBook(
                        $books[$i]
                    )
                );
            }
            if(!empty($bookData)){
                for($i = 0; $i < count($bookData); $i++){
                    $bookData[$i] = $bookData[$i][0];
                }
                return $bookData;
            }
        }
    }
    public function borrowBook($username, $barcode){
        user_books::addUserBook($username, $barcode);
    }
    public function returnBook($barcode){
        user_books::deleteUserBookFromDB($barcode);
    }
    public function getUser($username){
        return users::getUserFromDB($username);
    }
    public function getBook($barcode){
        return books::getBookFromDB($barcode);
    }
    public function getUserBook($barcode){
        return user_books::getUserBookFromDB($barcode);
    }
    public function deleteUserBook($barcode){
        user_books::deleteUserBookFromDB($barcode);
    }
    public function addUserBook($barcode){
        user_books::addUserBookToDB($barcode);
    }
    public function checkUser(){
        if(empty($this->getCookie('user'))){
            \App::abort(302, '', ['Location' => '/login']);
        }
    }
    public function sendPageCookie(){
        Cookie::queue(Cookie::forever('lastPage',serialize($_SERVER['REQUEST_URI'])));
    }
    public function removeCookie($cookie){
        Cookie::queue(Cookie::forget($cookie));
    }
}