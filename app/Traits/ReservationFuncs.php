<?php
namespace App\Traits;
use App\reservations;

trait ReservationFuncs{
    public static function getNumberOfReservationsTrait($barcode){
        return reservations::getNumberOfReservationsFromDB($barcode);
    }
    public static function doesUserHaveReservedTrait($barcode, $username){
        return reservations::doesUserHaveReservedInDB($barcode, $username);
    }
    public static function reserveBookTrait($barcode, $username){
        return reservations::reserveBookInDB($barcode, $username);
    }
    public static function unreserveBookTrait($barcode, $username){
        return reservations::unreserveBookInDB($barcode, $username);
    }
    public static function getReservationsByUserTrait($username){
        return reservations::getReservationsByUserFromDB($username);
    }
    public static function getNextInLineTrait($barcode){
        return reservations::getNextInLineFromDB($barcode);
    }
}