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
        if(!ReservationFuncs::doesUserHaveReservedTrait($barcode,$user[0]->username) && 
           !UserBookFuncs::doesUserHaveBorrowedTrait($barcode,$user[0]->username) &&
           UserBookFuncs::isBorrowedTrait($barcode)
        ){
            ReservationFuncs::reserveBookTrait($barcode, $user[0]->username);
            return view('pages.reserve', array('error'=>false,'message'=>'Book has been successfully reserved'));
        } elseif(ReservationFuncs::doesUserHaveReservedTrait($barcode,$user[0]->username)){
            return view('pages.reserve', array('error'=>true,'message'=>'Already Reserved'));
        } elseif(UserBookFuncs::doesUserHaveBorrowedTrait($barcode,$user[0]->username)){
            return view('pages.reserve', array('error'=>true,'message'=>'Already Borrowed'));
        } elseif(!UserBookFuncs::isBorrowedTrait($barcode)){
            return view('pages.reserve', array('error'=>true,'message'=>'Book is available'));
        }
    }
    public function unreserve($barcode){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        $user = Funcs::getCookieTrait('user');
        if(ReservationFuncs::doesUserHaveReservedTrait($barcode,$user[0]->username)){
            ReservationFuncs::unreserveBookTrait($barcode, $user[0]->username);
            return view('pages.reserve', array('error'=>false,'message'=>'Reservation was successfully cancelled'));
        } elseif(!ReservationFuncs::doesUserHaveReservedTrait($barcode,$user[0]->username)){
            return view('pages.reserve', array('error'=>true,'message'=>'This book was never reserved'));
        }
    }
}
