<?php

namespace App\FactoryMethod;

use App\FactoryMethod\Library;

class Client
{
    private $book;

    public function __construct(string $book)
    {
        $this->book = $book;
    }

    public function execute(Library $library) : string
    {
        return $library->read($this->book);
    }
}