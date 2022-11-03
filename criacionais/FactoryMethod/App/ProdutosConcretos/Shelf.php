<?php

namespace FactoryMethod\App\ProdutosConcretos;

use FactoryMethod\App\MediaInterface;

class Shelf implements MediaInterface
{

    public function openAndRead(string $book): string
    {
        return "the reader finished ${book} on physical copy";
    }
}
