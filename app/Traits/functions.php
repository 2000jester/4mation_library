<?php
namespace App\Traits;
use Illuminate\Http\Request;
use App\user_books;
use App\books;
use App\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Cookie;
use Illuminate\Http\RedirectResponse;

trait GlobalFuncs{
    function getCookie($cookieName){
        return unserialize(Cookie::get($cookieName));
    }
    function getBookData($booksCookie){
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
    function borrowBook($username, $barcode){
        DB::table('user_books')->insert(
            ['user'=>$username,'book'=>$barcode,'date_borrowed'=>date("d.m.y")]
        );
    }
    function returnBook($barcode){
        DB::table('user_books')->where('book', '=', $barcode)->delete();
    }
    function checkUser(){
        if(empty(getCookie('user'))){
            \App::abort(302, '', ['Location' => '/login']);
        }
    }
    function sendPageCookie(){
        Cookie::queue(Cookie::forever('lastPage',serialize($_SERVER['REQUEST_URI'])));
    }
}