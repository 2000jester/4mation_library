<?php

namespace App\Http\Controllers;
use App\Traits\Funcs;
use App\Traits\BookFuncs;
use App\Traits\UserBookFuncs;

class BooksController extends Controller{

    use Funcs;
    use BookFuncs;
    use UserBookFuncs;

    public function setBooksCookie(){
        Funcs::checkUserTrait();
        if(empty(BookFuncs::getBookTrait(request('barcode'))[0])){
            return redirect("/borrow");
        }
        $bookToAdd = UserBookFuncs::getUserBookByBookTrait(request('barcode'));
        if(!empty($bookToAdd[0])){
            if($bookToAdd[0]->user == Funcs::getCookieTrait('user')[0]->username){
                return redirect('/borrow');
            }
        }
        if(empty(Funcs::getCookieTrait('books'))){
            return redirect('/borrow')->withCookie(cookie('books', serialize([request('barcode')]), 5));
        } else {
            $array = Funcs::getCookieTrait('books');
            array_push($array, request('barcode'));
            return redirect('/borrow')->withCookie(cookie('books', serialize($array), 5));
        }
    }
    public function checkDupes(){
        Funcs::checkUserTrait();
        Funcs::checkAdminTrait();
        $results = BookFuncs::checkDupesTrait();
        return view('pages.dupes', ['dupes' => $results]);
    }
    public function bookLookup(){
        Funcs::sendPageCookieTrait();
        Funcs::removeCookieTrait('bookInfo');
        return view('pages.bookLookup');
    }
    public function displayBooks(){
        $results = BookFuncs::searchBookByPhraseTrait(request('phrase'));
        return view('pages.displayBooks', ['phrase' => request('phrase'),'bookInfo' => $results]);
    }
    public function get($barcode){
        $bookData = BookFuncs::getBookTrait($barcode);
        $borrowed = UserBookFuncs::getUserBookByBookTrait($barcode);
        if(empty($borrowed[0])){
            $borrowed = false;
        } else {
            $borrowed = true;
        }
        if(empty($bookData[0]->date_reserved)){
            $reserved = false;
        } else {
            $reserved = true;
        }
        return view('pages.displayBook', array('bookData'=>$bookData, 'borrowed'=>$borrowed, 'reserved'=>$reserved));
    }
    public function reserve($barcode){
        
    }
}
