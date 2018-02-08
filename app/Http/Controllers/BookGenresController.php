<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Funcs;
use App\Traits\BookFuncs;
use App\Traits\GenreFuncs;
use App\Traits\BookGenreFuncs;

class BookGenresController extends Controller{
    public function merge(){
        $allGenres = GenreFuncs::getAllGenresTrait();
        $genresArray = array();
        foreach($allGenres->toArray() as $item){
            $genresArray[$item->genre] = $item->id;
        }
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        Funcs::checkAdminTrait();
        BookGenreFuncs::deleteAllTrait();
        $books = BookFuncs::getAllBooksTrait();
        foreach($books as $book){
            $genres = explode(",",$book->genres);
            if($genres[0] != ""){
                foreach($genres as $genre){
                    BookGenreFuncs::addBookGenreTrait($book->barcode,$genresArray[trim($genre)]);
                }
            }
        }
    }
}
