<?php

use Illuminate\Support\Facades\Route;
use Src\Book;
Route::get('/', function () {
    $books = Book::all();
    dd($books);
    return view('welcome');
});

Route::get('/books', 'BookController@index');
