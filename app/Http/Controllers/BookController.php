<?php
namespace App\Http\Controllers;

use Src\Book;

class BookController extends Controller {

	public function index()
	{
        $books = Book::all();
        dd($books);

		return view('books');
	}
}
