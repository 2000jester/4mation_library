<?php
//Home Page
Route::get('/', 'UserBooksController@home');
Route::get('/menu', 'UserBooksController@home');
Route::get('/home', 'UserBooksController@home');
//login Page
Route::get('/login', 'UsersController@login');
Route::post('/login', 'UsersController@login');
//admin login
Route::get('/loginAdmin', 'UsersController@loginAdmin');
Route::post('/loginAmind', 'UsersController@loginAdmin');
//setCookie functions
Route::get('/setUserCookie', 'UsersController@setUserCookie');
Route::post('/setUserCookie', 'UsersController@setUserCookie');
Route::get('/setAdminCookie', 'UsersController@setAdminCookie');
Route::post('/setAdminCookie', 'UsersController@setAdminCookie');
Route::get('/setBooksCookie', 'BooksController@setBooksCookie');
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
//search for a book
Route::get('/bookLookup', 'BooksController@bookLookup');
Route::post('/bookLookup', 'BooksController@bookLookup');
//logout function
Route::get('/logout', 'UsersController@logout');
//clear cart function
Route::post('/clearCart', 'UserBooksController@clearCart');
//check for dupe barcodes
Route::get('/checkDupes', 'BooksController@checkDupes');
//Search a user
Route::get('/userLookup', 'UsersController@userLookup');
Route::post('/userLookup', 'UsersController@userLookup');
//get the user data
Route::get('/searchUser', 'UsersController@searchUser');
Route::post('/searchUser', 'UsersController@searchUser');
//display the user data
Route::get('/displayUser', 'UsersController@displayUser');
Route::post('/displayUser', 'UsersController@displayUser');
//search for book by phrase
Route::get('/searchForPhrase', 'BooksController@searchForPhrase');
Route::post('/searchForPhrase', 'BooksController@searchForPhrase');
//return book info 
Route::get('/displayBooks', 'BooksController@displayBooks');
Route::post('/displayBooks', 'BooksController@displayBooks');
//reserve a book
Route::get('/reserveBook', 'BooksController@reserveBook');
Route::post('/reserveBook', 'BooksController@reserveBook');