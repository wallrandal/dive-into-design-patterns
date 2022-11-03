<?php

namespace App\FactoryMethod;

abstract class Library
{
    abstract public function chooseMedia() : MediaInterface;

    public function read(string $book) : string
    {
        $media = $this->chooseMedia();
        return $media->openAndRead($book);
    }
}