<?php
//Home Page
Route::get('/', 'UserBooksController@home');
Route::get('/menu', 'UserBooksController@home');
Route::get('/home', 'UserBooksController@home');
Route::post('/', 'UserBooksController@home');
Route::post('/menu', 'UserBooksController@home');
Route::post('/home', 'UserBooksController@home');
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
Route::post('/return', 'UserBooksController@return');
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
//display search reults
Route::get('/displayUsers', 'UsersController@displayUsers');
Route::post('/displayUsers', 'UsersController@displayUsers');
//return book info 
Route::get('/displayBooks', 'BooksController@displayBooks');
Route::post('/displayBooks', 'BooksController@displayBooks');
//individual book page
Route::get('/books/{barcode}','BooksController@get');
Route::post('/books/{barcode}','BooksController@get');
//book reserve
Route::get('/reserve/{barcode}','ReservationsController@reserve');
Route::post('/reserve/{barcode}','ReservationsController@reserve');
//cancel reservation
Route::get('/unreserve/{barcode}', 'ReservationsController@unreserve');
Route::post('/unreserve/{barcode}', 'ReservationsController@unreserve');
//display individual user
Route::get('/users/{username}', 'UsersController@get');
Route::post('/users/{username}', 'UsersController@get');
//help page
Route::get('/help', 'UserBooksController@help');
Route::post('/help', 'UserBooksController@help');
//remove from cart
Route::get('/removeFromCart/{barcode}', 'UserBooksController@removeFromCart');
Route::post('/removeFromCart/{barcode}', 'UserBooksController@removeFromCart');
//delete book
Route::get('/books/delete/{barcode}', 'BooksController@deleteBook');
Route::post('/books/delete/{barcode}', 'BooksController@deleteBook');