<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\genre;
use Cookie;

trait GenreFuncs{
    public static function getAllGenresTrait(){
        return genre::getAllFromDB();
    }
}