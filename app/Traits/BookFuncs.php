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
    public static function getBookTrait($barcode,$includeDel = false){
        return books::getBookFromDB($barcode,$includeDel);
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
    public static function deleteBookTrait($barcode){
        return books::deleteBookFromDB($barcode);
    }
    public static function addBookToDBTrait($data){
        return books::addBookToDB($data);
    }
    public static function undoDeleteInDBTrait($data){
        return books::undoDeleteInDB($data);
    }
}