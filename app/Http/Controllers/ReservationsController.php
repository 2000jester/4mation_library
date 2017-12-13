<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ReservationFuncs;
use App\Traits\UserBookFuncs;
use App\Traits\BookFuncs;
use App\Traits\Funcs;

class ReservationsController extends Controller{

    use ReservationFuncs;
    use UserBookFuncs;
    use BookFuncs;
    use Funcs;
    
    public function reserve($barcode){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        $user = Funcs::getCookieTrait('user');

        ReservationFuncs::reserveBookTrait($barcode, $user[0]->username);
        return view('pages.reserve', array('error'=>false,'message'=>'Book has been successfully reserved'));
    }
    public function unreserve($barcode){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        $user = Funcs::getCookieTrait('user');
        ReservationFuncs::unreserveBookTrait($barcode, $user[0]->username);
        return view('pages.reserve', array('error'=>false,'message'=>'Reservation was successfully cancelled'));
    }
}
