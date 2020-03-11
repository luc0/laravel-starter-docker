<?php

namespace App\Http\Requests;

class BookRequest
{
    const NAME = 'name';

    public function name(): string
    {
        return request(self::NAME);
    }
}
