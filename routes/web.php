<?php
//Home Page
Route::get('/', function () {
    return view('pages.home');
});
//login Page
Route::get('/login', 'UserBooksController@login');
Route::post('/login', 'UserBooksController@login');
//setCookie functions
Route::post('/setUserCookie', 'UserBooksController@setUserCookie');
Route::post('/setBooksCookie', 'UserBooksController@setBooksCookie');
//borrow page
Route::get('/borrow', 'UserBooksController@borrow');
Route::post('/borrow', 'UserBooksController@borrow');
//checkout page
Route::get('/checkout', 'UserBooksController@checkout');
Route::post('/checkout', 'UserBooksController@checkout');
//Return Page (accessed via home page)
Route::get('/return', 'UserBooksController@return');
//Return book function
Route::get('/returnBook', 'UserBooksController@returnBook');
Route::post('/returnBook', 'UserBooksController@returnBook');
//Help Page (accessed via home page)
Route::get('/help', 'UserBooksController@help');
//logout function
Route::get('/logout', 'UserBooksController@logout');
