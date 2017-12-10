<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\books;
use Illuminate\Support\Facades\DB;

class books extends Model
{
    public static function getAllFromDB(){
        return books::all();
    }
    public static function checkDupesFromDB(){
        return DB::select(DB::raw("SELECT * FROM books WHERE barcode IN (SELECT barcode FROM(SELECT barcode, count(*) AS counted From books GROUP BY barcode HAVING counted > 1) AS barcodes)"));

        // select * from books where barcode in (select barcode from(select barcode, count(*) as counted from books group by barcode having counted > 1) as barcodes)
    }
    public static function getBookFromDB($barcode){
        return DB::table('books')->select()->where('barcode', '=', $barcode)->get();
    }

    public static function searchBookByPhraseFromDB($phrase){
        return DB::select(DB::raw("SELECT * FROM books WHERE title LIKE '%$phrase%' OR author LIKE '%$phrase%'"));
    }

    public static function reserveBookInDB($barcode, $username){
        $query = ("UPDATE books SET date_reserved = ".date('d.m.y').", reserved = $username WHERE barcode = $barcode");
        return DB::select(DB::raw($query))->get();
    }
}
