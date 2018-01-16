<?php
namespace App\Http\Controllers;
use App\Traits\Funcs;
use App\Traits\BookFuncs;
use App\Traits\UserBookFuncs;
use App\Traits\ReservationFuncs;
use App\Traits\UserFuncs;

class UserBooksController extends Controller{

    use Funcs;
    use BookFuncs;
    use UserBookFuncs;
    use ReservationFuncs;
    use UserFuncs;

    public function home(){
        Funcs::sendPageCookieTrait();
        return view('pages.home');
    }
    public function borrow(){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        return view('pages.borrow', array(
            'bookData'=>BookFuncs::getBookDataTrait(Funcs::getCookieTrait('books')),
            'barcode'=>request('barcode'),
            'dataToBeStored'=>Funcs::getCookieTrait('dataToBeStored')
        ));
    }
    public function checkout(){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        $user = Funcs::getCookieTrait('user');
        if(empty(Funcs::getCookieTrait('books'))){
            return redirect('/borrow');
        }
        $books = Funcs::getCookieTrait('books');
        for($i = 0; $i< count($books); $i++){
            if($user[0]->username != ReservationFuncs::getNextInLineTrait($books[$i])[0]->user){
                return redirect('/borrow');
            }
            UserBookFuncs::borrowBookTrait($user[0]->username,$books[$i]);
        }
            
        Funcs::removeCookieTrait('books');
        return view('pages.checkout');
    }
    public function return(){
        Funcs::sendPageCookieTrait();
        return view('pages.return', array('returned'=>false, 'error'=>false));
    }
    public function returnBook(){
        if(UserBookFuncs::returnBookTrait(request('barcode')) > 0){
            $nextUser = ReservationFuncs::getNextInLineTrait(request('barcode'));
            if(!empty($nextUser[0])){
                $user = UserFuncs::getUserByUsernameTrait($nextUser[0]->user);
                $book = BookFuncs::getBookTrait(request('barcode'));
                Funcs::sendMail($user[0]->email,'Book Available','Hello '.$user[0]->first_name.', The book you had on reserve, '.$book[0]->title.', is now available. Please look in the reserved section of the library shelves.','4mation-library');
            }
            return view('pages.return',array('returned'=>true,'error'=>false));
        } else {
            return view('pages.return', array('returned'=>false,'error'=>true));
        }
    }
    public function help(){
        Funcs::sendPageCookieTrait();
        return view('pages.help');
    }
    public function clearCart(){
        Funcs::removeCookieTrait('books');
        return redirect('/borrow');
    }
}
