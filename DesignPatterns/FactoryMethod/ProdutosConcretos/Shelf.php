<?php

namespace DesignPatterns\FactoryMethod\ProdutosConcretos;

use DesignPatterns\FactoryMethod\MediaInterface;

class Shelf implements MediaInterface
{

    public function openAndRead(string $book): string
    {
        return "the reader finished ${book} on physical copy";
    }
}
