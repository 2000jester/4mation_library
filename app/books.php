<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\books;
use Illuminate\Support\Facades\DB;

class books extends Model
{
    public static function getAll(){
        return books::all();
    }
    public static function getBook($book){
        return DB::table('books')->select()->where('bar_code', '=', $book)->get();
    }
}
