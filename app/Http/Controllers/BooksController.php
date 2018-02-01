<?php

namespace App\Http\Controllers;
use App\Traits\Funcs;
use App\Traits\BookFuncs;
use App\Traits\UserBookFuncs;
use App\Traits\UserFuncs;
use App\Traits\ReservationFuncs;

class BooksController extends Controller{

    use Funcs;
    use BookFuncs;
    use UserBookFuncs;
    use UserFuncs;
    use ReservationFuncs;

    public function setBooksCookie(){
        Funcs::checkUserTrait(request('barcode'));
        if(empty(BookFuncs::getBookTrait(request('barcode'))[0])){
            return redirect("/borrow")->withCookie(cookie('errorMessage', serialize('Invalid barcode')));;
        }
        if(!empty(Funcs::getCookieTrait('books')[0]) && in_array(request('barcode'), Funcs::getCookieTrait('books'))){
            return redirect("/borrow")->withCookie(cookie('errorMessage', serialize('Book already in cart!')));
        }
        $bookToAdd = UserBookFuncs::getUserBookByBookTrait(request('barcode'));
        if(!empty($bookToAdd[0])){
            if($bookToAdd[0]->user == Funcs::getCookieTrait('user')[0]->username){
                return redirect('/borrow')->withCookie(cookie('errorMessage', serialize('You already have this book on loan')));;
            }
        }
        if(empty(Funcs::getCookieTrait('books'))){
            return redirect('/borrow')->withCookie(cookie('books', serialize([request('barcode')])));
        } else {
            $array = Funcs::getCookieTrait('books');
            array_push($array, request('barcode'));
            return redirect('/borrow')->withCookie(cookie('books', serialize($array)));
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
        Funcs::sendPageCookieTrait();
        $user = Funcs::getCookieTrait('user');
        if(empty($user[0])){
            $bookData = BookFuncs::getBookTrait($barcode);
            $borrowed = UserBookFuncs::isBorrowedTrait($barcode);
            $numberOfReserves = ReservationFuncs::getNumberOfReservationsTrait($barcode);
            $reserved = $numberOfReserves > 0 ? true : false;
            return view('pages.displayBook', array(
                'user'=>false,
                'bookData'=>$bookData, 
                'borrowed'=>$borrowed, 
                'reserved'=>$reserved,
                'numberOfReserves'=>$numberOfReserves
            ));
        } else {
            $bookData = BookFuncs::getBookTrait($barcode);
            $borrowed = UserBookFuncs::isBorrowedTrait($barcode);
            $numberOfReserves = ReservationFuncs::getNumberOfReservationsTrait($barcode);
            $reserved = $numberOfReserves > 0 ? true : false;
            $reservedByCurrentUser = ReservationFuncs::doesUserHaveReservedTrait($barcode, Funcs::getCookieTrait('user')[0]->username);
            $borrowedByCurrentUser = UserBookFuncs::doesUserHaveBorrowedTrait($barcode, Funcs::getCookieTrait('user')[0]->username);
            return view('pages.displayBook', array(
                'user'=>true,
                'bookData'=>$bookData, 
                'borrowed'=>$borrowed, 
                'reserved'=>$reserved, 
                'numberOfReserves'=>$numberOfReserves,
                'reservedByCurrentUser'=>$reservedByCurrentUser,
                'borrowedByCurrentUser'=>$borrowedByCurrentUser
            ));
        }
    }

    public function deleteBook($barcode){
        Funcs::checkUserTrait();
        Funcs::checkAdminTrait();
        if(!empty(BookFuncs::getBookTrait($barcode))){
            if(BookFuncs::deleteBookTrait($barcode)){
                $url = "books/".$barcode;
                $url = "/".$url;
                if(Funcs::getCookieTrait('lastPage') != $url){
                    return redirect(Funcs::getCookieTrait('lastPage'))->withCookie(cookie('successMessage',serialize('Book was successfully deleted!')));
                } else {
                    return redirect('/')->withCookie(cookie('successMessage',serialize('Book was successfully deleted!')));
                }
            }
        }
    }

    public function bookAdd(){
        return view('pages.bookAdd');
    }
}
