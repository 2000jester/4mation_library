<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\books;
use App\user_books;
use App\Traits\Funcs;

class BooksController extends Controller{

    use Funcs;

    public function setBooksCookie(){
        $this->checkUser();
        if(empty($this->getBook(request('barcode'))[0])){
            return redirect("/borrow");
        }
        $bookToAdd = $this->getUserBook(request('barcode'));
        if(!empty($bookToAdd[0])){
            if($bookToAdd[0]->user == $this->getCookie('user')[0]->username){
                return redirect('/borrow');
            }
        }
        if(empty($this->getCookie('books'))){
            return redirect('/borrow')->withCookie(cookie('books', serialize([request('barcode')]), 5));
        } else {
            $array = $this->getCookie('books');
            array_push($array, request('barcode'));
            return redirect('/borrow')->withCookie(cookie('books', serialize($array), 5));//,cookie('user', getUserCookie(),5));
        }
    }
}
