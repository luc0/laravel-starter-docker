<?php

namespace Src\Services;

use Illuminate\Support\Collection;
use Src\Book;

class BookService
{
    public function getAllBooks(): Collection
    {
        return Book::all();
    }
}
