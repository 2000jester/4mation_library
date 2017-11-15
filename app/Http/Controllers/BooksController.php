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
        Funcs::checkUser();
        if(empty(BookFuncs::getBook(request('barcode'))[0])){
            return redirect("/borrow");
        }
        $bookToAdd = UserBookFuncs::getUserBook(request('barcode'));
        if(!empty($bookToAdd[0])){
            if($bookToAdd[0]->user == Funcs::getCookie('user')[0]->username){
                return redirect('/borrow');
            }
        }
        if(empty(Funcs::getCookie('books'))){
            return redirect('/borrow')->withCookie(cookie('books', serialize([request('barcode')]), 5));
        } else {
            $array = Funcs::getCookie('books');
            array_push($array, request('barcode'));
            return redirect('/borrow')->withCookie(cookie('books', serialize($array), 5));
        }
    }
}
