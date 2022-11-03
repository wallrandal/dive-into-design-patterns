<?php

namespace App\FactoryMethod;

Interface MediaInterface
{
    public function openAndRead(string $book) : string;
}