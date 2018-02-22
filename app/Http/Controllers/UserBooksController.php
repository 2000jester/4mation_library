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
        $dataToBeStored = Funcs::getCookieTrait('dataToBeStored');
        Funcs::removeCookieTrait('dataToBeStored');
        return view('pages.borrow', array(
            'bookData'=>BookFuncs::getBookDataTrait(Funcs::getCookieTrait('books')),
            'barcode'=>request('barcode'),
            'dataToBeStored'=>$dataToBeStored
        ));
    }
    public function borrowFromBookDisplay(){
        return redirect('borrow')->withCookie(cookie('books', serialize([request('barcode')])));
    }
    public function checkout(){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        $user = Funcs::getCookieTrait('user');
        if(empty(Funcs::getCookieTrait('books'))){
            return redirect('/borrow')->withCookie(cookie('errorMessage', serialize("No books were in cart!")));
        }
        $books = Funcs::getCookieTrait('books');
        for($i = 0; $i< count($books); $i++){
            $reservation = ReservationFuncs::getNextInLineTrait($books[$i]);
            if($reservation->count() != 0){
                if($user[0]->username != $reservation[0]->user){
                    return redirect('/borrow')->withCookie(cookie('errorMessage', serialize("Another user has '".$books[$i]->title."' on reserve!")));
                }
            }
            UserBookFuncs::borrowBookTrait($user[0]->username,$books[$i]);
        }
            
        Funcs::removeCookieTrait('books');
        return redirect('/borrow')->withCookie(cookie('successMessage', serialize("Checkout successful!")));
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
            return redirect('/return')->withCookie(cookie('successMessage', serialize("The book was returned successfully!")));
        } else {
            return redirect('/return')->withCookie(cookie('errorMessage', serialize("The book was unable to be returned!")));
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
    public function removeFromCart($barcode){
        $books = Funcs::getCookieTrait('books');
        if(in_array($barcode,$books)){
            $key = array_search($barcode,$books);
            unset($books[$key]);
        }
        function reindex(&$the_array) {
            $temp = $the_array;
            $the_array = array();
            foreach($temp as $value) {
                $the_array[] = $value; 
            } 
        }  
        reindex($books);
        return redirect('/borrow')->withCookie(cookie('books', serialize($books)));
    }
}
