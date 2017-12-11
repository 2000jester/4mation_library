<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\books;
use Cookie;

trait BookFuncs{
    public static function getBookDataTrait($booksCookie){
        if(!empty($booksCookie)){
            $books = $booksCookie;
            $bookData = [];
            for($i = 0; $i < count($books); $i++){
                array_push($bookData,
                    books::getBookFromDB(
                        $books[$i]
                    )
                );
            }
            if(!empty($bookData)){
                for($i = 0; $i < count($bookData); $i++){
                    $bookData[$i] = $bookData[$i][0];
                }
                return $bookData;
            }
        }
    }
    public static function getBookTrait($barcode){
        return books::getBookFromDB($barcode);
    }
    public static function getAllBooksTrait(){
        return books::getAllFromDB();
    }
    public static function checkDupesTrait(){
        return books::checkDupesFromDB();
    }
    public static function searchBookByPhraseTrait($phrase){
        return books::searchBookByPhraseFromDB($phrase);
    }
    public static function getNumberOfReservesTrait($username){
        return books::getNumberofReservesFromDB($username);
    }
}