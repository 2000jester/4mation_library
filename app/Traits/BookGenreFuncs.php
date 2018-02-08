<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\book_genres;
use Cookie;

trait BookGenreFuncs{
    public static function addBookGenreTrait($barcode,$genre){
        return book_genres::addBookGenreToDB($barcode,$genre);
    }
    public static function deleteAllTrait(){
        return book_genres::deleteAllFromDB();
    }
}