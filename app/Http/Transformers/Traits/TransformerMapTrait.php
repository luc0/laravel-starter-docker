<?php

namespace App\Http\Transformers\Traits;

trait TransformerMapTrait
{
    abstract public function transform($object);

    public function map(array $objects)
    {
        return array_map(function ($object) {
            return $this->transform($object);
        }, $objects);
    }
}
