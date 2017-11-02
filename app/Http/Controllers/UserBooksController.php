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
    if($cookieName == 'books'){
        return unserialize(Cookie::get($cookieName));
    }
    return Cookie::get($cookieName);
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
    Cookie::queue(Cookie::forever('lastPage',$_SERVER['REQUEST_URI']));
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
        return redirect(getCookie('lastPage'))->withCookie(cookie('user', $user, 5));
    }


    public function setBooksCookie(){
        checkUser();
        if(empty(books::getBook(request('barcode'))[0])){
            return redirect("/borrow");
        }
        $loanedBook = DB::table('user_books')->where('book', '=', request('barcode'))->get();
        if(!empty($loanedBook[0])){
            if($loanedBook[0]->user == getCookie('user')[0]->username){
                return redirect('/borrow');
            } else {
                returnBook(request('barcode'));
                //TODO
                //
                //SEND EMAIL TO USER THAT HAD THE BOOK ON LOAN
                //
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
