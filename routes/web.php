<?php

use Illuminate\Support\Facades\Route;
use Src\Book;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', 'BookController@index');
