<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\UserBookFuncs;
use App\Traits\Funcs;

class ReservationsController extends Controller{

    use UserBookFuncs;
    use Funcs;

    public function reserve($barcode){
        $user = Funcs::getCookieTrait('user');
        ReservationFuncs::reserveBookTrait($barcode, $user[0]->username);
        return view('pages.reserve', array('error'=>false,'message'=>'Book has been successfully reserved'));
    }
}
