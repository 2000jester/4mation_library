<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\book_genres;
use Illuminate\Support\Facades\DB;

class book_genres extends Model{
    public static function addBookGenreToDB($barcode,$genre){
        return DB::table('book_genres')->insert(
            ['barcode'=>$barcode,'genre'=>$genre]
        );
    }
    public static function deleteAllFromDB(){
        return DB::table('book_genres')->delete();
    }
    public static function getGenresByIdFromDB($barcode){
        return DB::table('book_genres')->where('barcode','=',$barcode)->get();
    }
}
