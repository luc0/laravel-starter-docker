<?php
namespace App\Http\Controllers;

use Src\Services\BookService;

class BookController extends Controller {

    /**
     * @var BookService
     */
    private $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index()
	{
        $books = $this->bookService->getAllBooks();
        dd($books);

		return view('books');
	}
}
