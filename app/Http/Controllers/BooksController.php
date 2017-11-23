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
        $bookToAdd = UserBookFuncs::getUserBookTrait(request('barcode'));
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
        if(Funcs::getCookieTrait('user')[0]->admin == 0){
            return redirect(Funcs::getCookieTrait('lastPage'));
        }
        $query = "select * from books where barcode in (select barcode from(select barcode, count(*) as counted from books group by barcode having counted > 1) as barcodes)";
        $results = BookFuncs::rawQueryTrait($query);
        /*
        $allBooks = BookFuncs::getAllBooksTrait();
        $dupeBooks = [];
        for($i = 0; $i<count($allBooks);$i++){
            for($j = 0; $j<count($allBooks);$j++){
                if($allBooks[$i]->barcode == $allBooks[$j]->barcode && $i != $j){
                    array_push($dupeBooks,$allBooks[$i]->title." : ".$allBooks[$i]->barcode);
                }
            }
        }
        if(count($dupeBooks) > 0){
            dd($dupeBooks);
        }*/
    }
}
