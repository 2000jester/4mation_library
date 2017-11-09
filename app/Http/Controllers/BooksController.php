<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\books;
use App\user_books;
use App\Traits\Funcs;

class BooksController extends Controller{

    use Funcs;

    public function setBooksCookie(){
        checkUser();
        if(empty(books::getBook(request('barcode'))[0])){
            return redirect("/borrow");
        }
        $bookToAdd = user_books::getUserBook(request('barcode'));
        if(!empty($bookToAdd[0])){
            if($bookToAdd[0]->user == getCookie('user')[0]->username){
                return redirect('/borrow');
            }
        }
        if(empty(getCookie('books'))){
            return redirect('/borrow')->withCookie(cookie('books', serialize([request('barcode')]), 5));
        } else {
            $array = getCookie('books');
            array_push($array, request('barcode'));
            return redirect('/borrow')->withCookie(cookie('books', serialize($array), 5));//,cookie('user', getUserCookie(),5));
        }
    }
}
