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
        Funcs::sendPageCookie();
        return view('pages.home');
    }
    public function login(){
        if(empty(Funcs::getCookie('user'))){
            return view('pages.login');
        } else {
            return redirect('/borrow');
        }
    }
    public function borrow(){
        Funcs::sendPageCookie();
        Funcs::checkUser();
        return view('pages.borrow')->with('bookData', BookFuncs::getBookData(Funcs::getCookie('books')));
    }
    public function checkout(){
        Funcs::sendPageCookie();
        Funcs::checkUser();
        if(empty(Funcs::getCookie('books'))){
            return redirect('/borrow');
        }
        $books = Funcs::getCookie('books');
        for($i = 0; $i< count($books); $i++){
            $bookToBeReturned = UserBookFuncs::getUserBook($books[$i]);
            if(!empty($bookToBeReturned[0])){
                $user = UserFuncs::getUser($bookToBeReturned[0]->user);

                $message = "Hello ".$user[0]->first_name.",\rthe book you had on loan called '".BookFuncs::getBook($bookToBeReturned[0]->book)[0]->title."',\rhas been loaned by another user.";
                $message = wordwrap($message, 70, "\r\n");

                $subject = '4Mation Library';

                $from = 'From: 4mation-library \r\n';

                mail($user[0]->email, $subject, $message, $from);
                UserBookFuncs::returnBookTrait($books[$i]);
            }
            UserBookFuncs::borrowBook(Funcs::getCookie('user')[0]->username,$books[$i]);
        }
            
        Funcs::removeCookie('books');
        return view('pages.checkout');
    }
    public function return(){
        Funcs::sendPageCookie();
        return view('pages.return')->with('returned', false);
    }
    public function returnBook(){
        UserBookFuncs::returnBookTrait(request('barcode'));
        return view('pages.return')->with('returned', true);
    }
    public function help(){
        Funcs::sendPageCookie();
        return view('pages.help');
    }
    public function logout(){
        Funcs::removeCookie('user');
        Funcs::removeCookie('books');
        return redirect('/');
    }
}
