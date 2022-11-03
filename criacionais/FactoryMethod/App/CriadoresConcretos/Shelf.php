<?php

namespace FactoryMethod\App\CriadoresConcretos;

use FactoryMethod\App\Library;
use FactoryMethod\App\MediaInterface;
use FactoryMethod\App\ProdutosConcretos\Shelf as ProdutosConcretosShelf;

class Shelf extends Library
{

    public function chooseMedia(): MediaInterface
    {
        return new ProdutosConcretosShelf();
    }
}
