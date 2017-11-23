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
    public static function rawQuery($query){
        return DB::table('books')->select("*")->wherein()

        select * from books where barcode in (select barcode from(select barcode, count(*) as counted from books group by barcode having counted > 1) as barcodes)
    }
    public static function getBookFromDB($barcode){
        return DB::table('books')->select()->where('barcode', '=', $barcode)->get();
    }
}
