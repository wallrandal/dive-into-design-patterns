<?php

namespace App\FactoryMethod\ProdutosConcretos;

use App\FactoryMethod\MediaInterface;

class Shelf implements MediaInterface
{

    public function openAndRead(string $book): string
    {
        return "the reader finished ${book} on physical copy";
    }
}
