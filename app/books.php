<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\books;
use Illuminate\Support\Facades\DB;
use App\Traits\UserFuncs;

class books extends Model{

    use UserFuncs;
    
    public static function getAllFromDB(){
        return books::all();
    }
    public static function checkDupesFromDB(){
        return DB::select(DB::raw("SELECT * FROM books WHERE barcode IN (SELECT barcode FROM(SELECT barcode, count(*) AS counted From books GROUP BY barcode HAVING counted > 1) AS barcodes)"));
    }
    public static function getBookFromDB($barcode){
        return DB::table('books')->select()->where('barcode', '=', $barcode)->get();
    }

    public static function searchBookByPhraseFromDB($phrase){
        return DB::table('books')->select()->where('title','like','%'.$phrase.'%')->orWhere('author','like','%'.$phrase.'%')->orWhere('barcode','like','%'.$phrase.'%')->get();
    }

    public static function getNumberOfReservesFromDB($barcode){
        $count = 0;
        $allUsers = UserFuncs::getallUsersTrait();
        for($i = 0; $i < count($allUsers); $i++){
            $unserialized = $allUsers[$i]->reserved;
            $serialized = unserialize($unserialized);
            for($j = 0; $j < count($serialized); $j++){
                if($serialized[$j][0] == $barcode){
                    $count++;
                }
            }
        }
        return $count;
    }
}
