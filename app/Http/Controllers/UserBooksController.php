<?php
namespace App\Http\Controllers;
use App\Traits\Funcs;
use App\Traits\BookFuncs;
use App\Traits\UserBookFuncs;
use App\Traits\UserFuncs;

class UserBooksController extends Controller{

    use Funcs;
    use BookFuncs;
    use UserBookFuncs;
    use UserFuncs;

    public function home(){
        Funcs::sendPageCookieTrait();
        return view('pages.home');
    }
    public function login(){
        if(empty(Funcs::getCookieTrait('user'))){
            return view('pages.login');
        } else {
            return redirect('/borrow');
        }
    }
    public function borrow(){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        return view('pages.borrow')->with('bookData', BookFuncs::getBookDataTrait(Funcs::getCookieTrait('books')));
    }
    public function checkout(){
        Funcs::sendPageCookieTrait();
        Funcs::checkUserTrait();
        if(empty(Funcs::getCookieTrait('books'))){
            return redirect('/borrow');
        }
        $books = Funcs::getCookieTrait('books');
        for($i = 0; $i< count($books); $i++){
            $bookToBeReturned = UserBookFuncs::getUserBookTrait($books[$i]);
            if(!empty($bookToBeReturned[0])){
                $user = UserFuncs::getUserTrait($bookToBeReturned[0]->user);

                $message = "Hello ".$user[0]->first_name.",\rthe book you had on loan called '".BookFuncs::getBookTrait($bookToBeReturned[0]->book)[0]->title."',\rhas been loaned by another user.";
                $message = wordwrap($message, 70, "\r\n");

                $subject = '4Mation Library';

                $from = 'From: 4mation-library \r\n';

                mail($user[0]->email, $subject, $message, $from);
                UserBookFuncs::returnBookTrait($books[$i]);
            }
            UserBookFuncs::borrowBookTrait(Funcs::getCookieTrait('user')[0]->username,$books[$i]);
        }
            
        Funcs::removeCookieTrait('books');
        return view('pages.checkout');
    }
    public function return(){
        Funcs::sendPageCookieTrait();
        return view('pages.return')->with('returned', false);
    }
    public function returnBook(){
        UserBookFuncs::returnBookTrait(request('barcode'));
        return view('pages.return')->with('returned', true);
    }
    public function help(){
        Funcs::sendPageCookieTrait();
        return view('pages.help');
    }
    public function logout(){
        Funcs::removeCookieTrait('user');
        Funcs::removeCookieTrait('books');
        return redirect('/');
    }
}
