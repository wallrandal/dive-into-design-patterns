<?php

namespace App\FactoryMethod\CriadoresConcretos;

use App\FactoryMethod\Library;
use App\FactoryMethod\MediaInterface;
use App\FactoryMethod\ProdutosConcretos\Shelf as ProdutosConcretosShelf;

class Shelf extends Library
{

    public function chooseMedia(): MediaInterface
    {
        return new ProdutosConcretosShelf();
    }
}
