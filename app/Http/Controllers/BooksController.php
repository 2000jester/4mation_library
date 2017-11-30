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
        Funcs::sendPageCookieTrait();
        $results = BookFuncs::searchBookByPhraseTrait(request('phrase'));
        if(empty(Funcs::getCookieTrait('bookInfo'))){
            return redirect("/bookLookup");
        }
        $phrase = Funcs::getCookieTrait('bookInfo')[0];
        $bookInfo = Funcs::getCookieTrait('bookInfo')[1];
        return view('pages.displayBooks', ['phrase' => request('phrase'),'bookInfo' => $results]);
    }
}
