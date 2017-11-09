<?php
//Home Page
Route::get('/', 'UserBooksController@home');
//login Page
Route::get('/login', 'UserBooksController@login');
Route::post('/login', 'UserBooksController@login');
//setCookie functions
Route::post('/setUserCookie', 'UsersController@setUserCookie');
Route::post('/setBooksCookie', 'BooksController@setBooksCookie');
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
