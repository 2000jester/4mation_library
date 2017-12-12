<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\reservations;
use Illuminate\Support\Facades\DB;

class reservations extends Model{
    public static function getNumberOfReservationsFromDB($barcode){
        $results = DB::table('reservations')->select()->where('book','=',$barcode)->get();
        return count($results);
    }
    public static function doesUserHaveReservedInDB($barcode, $username){
        $results = DB::table('reservations')->select()->where([
            ['user', '=', $username],
            ['book', '=', $barcode]
        ])->get();
        return empty($results[0]) ? false : true;
    }
    public static function reserveBookInDB($barcode, $username){
        return DB::table('reservations')->insert(
            ['user'=>$username,'book'=>$barcode,'date_reserved'=>date("Y-m-d H:i:s")]
        );
    }
    public static function unreserveBookInDB($barcode, $username){
        return DB::table('reservations')->where([
            ['user','=',$username],
            ['book','=',$barcode]
        ])->delete();
    }
}
