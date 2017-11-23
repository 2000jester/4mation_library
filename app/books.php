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
        return DB::table('books')->select($query)->get();
    }
    public static function getBookFromDB($barcode){
        return DB::table('books')->select()->where('barcode', '=', $barcode)->get();
    }
}
