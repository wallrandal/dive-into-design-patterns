<?php

namespace App\Prototype;

class Author
{
    protected string $authorName;

    public function __construct(string $authorName)
    {
        $this->authorName = $authorName;
    }
}