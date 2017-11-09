<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\user_books;
use App\books;
use App\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Cookie;
use Illuminate\Http\RedirectResponse;
use App\Traits\Funcs;

class UserBooksController extends Controller{

    use Funcs;

    public function home(){
        $this->sendPageCookie();
        return view('pages.home');
    }


    public function login(){
        if(empty($this->getCookie('user'))){
            return view('pages.login');
        } else {
            return redirect('/borrow');
        }
    }


    public function borrow(){
        $this->sendPageCookie();
        $this->checkUser();
        return view('pages.borrow')->with('bookData', $this->getBookData($this->getCookie('books')));
    }


    public function checkout(){
        $this->sendPageCookie();
        $this->checkUser();
        if(empty($this->getCookie('books'))){
            return redirect('/borrow');
        }
        $books = $this->getCookie('books');
        for($i = 0; $i< count($books); $i++){
            $bookToBeReturned = user_books::getUserBook($books[$i]);
            if(!empty($bookToBeReturned[0])){
                $user = users::getUser($bookToBeReturned[0]->user);

                $message = "Hello ".$user[0]->first_name.",\rthe book you had on loan called '".books::getBook($bookToBeReturned[0]->book)[0]->title."',\rhas been loaned by another user.";
                $message = wordwrap($message, 70, "\r\n");

                $subject = '4Mation Library';

                $from = 'From: 4mation-library \r\n';

                mail($user[0]->email, $subject, $message, $from);
                $this->returnBook($books[$i]);
            }
            $this->borrowBook($this->getCookie('user')[0]->username,$books[$i]);
        }
            
        Cookie::queue(Cookie::forget('books'));
        return view('pages.checkout');//->with('bookData', getBookData(getCookie('books')));
    }


    public function return(){
        $this->sendPageCookie();
        return view('pages.return')->with('returned', false);
    }


    public function returnBook(){
        $this->returnBook(request('barcode'));
        return view('pages.return')->with('returned', true);
    }


    public function help(){
        $this->sendPageCookie();
        return view('pages.help');
    }


    public function logout(){
        Cookie::queue(Cookie::forget('user'));
        Cookie::queue(Cookie::forget('books'));
        return redirect('/');
    }
}
