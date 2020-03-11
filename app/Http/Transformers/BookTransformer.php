<?php

namespace App\Http\Transformers;

use App\Http\Transformers\Traits\TransformerMapTrait;
use Src\Book;

class BookTransformer
{
    use TransformerMapTrait;

    public function transform(Book $book): array
    {
        return [
            'name' => $book->name,
        ];
    }
}
