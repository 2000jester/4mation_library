<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\books;
use Illuminate\Support\Facades\DB;

class books extends Model{
    
    public static function getAllFromDB(){
        return DB::table('books')->select()->where('deleted','=','0')->get();
    }
    public static function checkDupesFromDB(){
        return DB::select(DB::raw("SELECT * FROM books WHERE barcode IN (SELECT barcode FROM(SELECT barcode, count(*) AS counted From books GROUP BY barcode HAVING counted > 1) AS barcodes) AND deleted = 0"));
    }
    public static function getBookFromDB($barcode){
        return DB::table('books')->select()->where([['barcode', '=', $barcode],['deleted','=','0']])->get();
    }

    public static function searchBookByPhraseFromDB($phrase){
        return DB::table('books')->select()->where([['title','like','%'.$phrase.'%'],['deleted','=','0']])->orWhere([['author','like','%'.$phrase.'%'],['deleted','=','0']])->orWhere([['barcode','like','%'.$phrase.'%'],['deleted','=','0']])->get();
    }

    public static function deleteBookFromDB($barcode){
        return DB::table('books')->where([['barcode','=',$barcode],['deleted','=','0']])->update(['deleted' => 1]);
    }
}
