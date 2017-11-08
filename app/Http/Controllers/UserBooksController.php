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

function getCookie($cookieName){
    return unserialize(Cookie::get($cookieName));
}
function getBookData($booksCookie){
    if(!empty($booksCookie)){
        $books = $booksCookie;
        $bookData = [];
        for($i = 0; $i < count($books); $i++){
            array_push($bookData,
                books::getBook(
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
function borrowBook($username, $barcode){
    DB::table('user_books')->insert(
        ['user'=>$username,'book'=>$barcode,'date_borrowed'=>date("d.m.y")]
    );
}
function returnBook($barcode){
    DB::table('user_books')->where('book', '=', $barcode)->delete();
}
function checkUser(){
    if(empty(getCookie('user'))){
        \App::abort(302, '', ['Location' => '/login']);
    }
}
function sendPageCookie(){
    Cookie::queue(Cookie::forever('lastPage',serialize($_SERVER['REQUEST_URI'])));
}
class UserBooksController extends Controller
{
    public function home(){
        sendPageCookie();
        return view('pages.home');
    }
    public function setUserCookie(){
        sendPageCookie();
        $user = users::getUser(request('username'));
        if(count($user) == 0){
            return redirect('/login');
        }
        return redirect(getCookie('lastPage'))->withCookie(cookie('user', serialize($user), 5));
    }


    public function setBooksCookie(){
        checkUser();
        if(empty(books::getBook(request('barcode'))[0])){
            return redirect("/borrow");
        }
        $bookToAdd = DB::table('user_books')->where('book', '=', request('barcode'))->get();
        if(!empty($bookToAdd[0])){
            if($bookToAdd[0]->user == getCookie('user')[0]->username){
                return redirect('/borrow');
            }
        }
        if(empty(getCookie('books'))){
            return redirect('/borrow')->withCookie(cookie('books', serialize([request('barcode')]), 5));
        } else {
            $array = getCookie('books');
            array_push($array, request('barcode'));
            return redirect('/borrow')->withCookie(cookie('books', serialize($array), 5));//,cookie('user', getUserCookie(),5));
        }
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
            dd($bookToBeReturned);
            if(!empty($bookToBeReturned[0])){
                $user = users::getUser($bookToBeReturned[0]->user);
                $message = "Hello ".$user[0]->first_name.",\r the book you had on loan called '".books::getBook($bookToBeReturned[0]->book)[0]->title."',\r has been loaned by another user.";
                $message = wordwrap($message, 70, "\r\n");
                mail($user[0]->email, '4Mation Library', $message);
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
