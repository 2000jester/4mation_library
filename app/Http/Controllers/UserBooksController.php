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
use App\Traits\GlobalFuncs;

class UserBooksController extends Controller{

    use GlobalFuncs;

    public function home(){
        sendPageCookie();
        return view('pages.home');
    }


    public function login(){
        if(empty(getCookie('user'))){
            return view('pages.login');
        } else {
            return redirect('/borrow');
        }
    }


    public function borrow(){
        sendPageCookie();
        checkUser();
        return view('pages.borrow')->with('bookData', getBookData(getCookie('books')));
    }


    public function checkout(){
        sendPageCookie();
        checkUser();
        if(empty(getCookie('books'))){
            return redirect('/borrow');
        }
        $books = getCookie('books');
        for($i = 0; $i< count($books); $i++){
            $bookToBeReturned = DB::table('user_books')->where('book', '=', $books[$i])->get();
            if(!empty($bookToBeReturned[0])){
                $user = users::getUser($bookToBeReturned[0]->user);

                $message = "Hello ".$user[0]->first_name.",\r the book you had on loan called '".books::getBook($bookToBeReturned[0]->book)[0]->title."',\r has been loaned by another user.";
                $message = wordwrap($message, 70, "\r\n");

                $subject = '4Mation Library';

                $from = 'From: 4mation-library \r\n';

                mail($user[0]->email, $subject, $message, $from);
                returnBook($books[$i]);
            }
            borrowBook(getCookie('user')[0]->username,$books[$i]);
        }
            
        Cookie::queue(Cookie::forget('books'));
        return view('pages.checkout');//->with('bookData', getBookData(getCookie('books')));
    }


    public function return(){
        sendPageCookie();
        return view('pages.return')->with('returned', false);
    }


    public function returnBook(){
        returnBook(request('barcode'));
        return view('pages.return')->with('returned', true);
    }


    public function help(){
        sendPageCookie();
        return view('pages.help');
    }


    public function logout(){
        Cookie::queue(Cookie::forget('user'));
        Cookie::queue(Cookie::forget('books'));
        return redirect('/');
    }
}
