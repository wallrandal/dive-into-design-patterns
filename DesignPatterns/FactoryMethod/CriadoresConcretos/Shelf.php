<?php

namespace DesignPatterns\FactoryMethod\CriadoresConcretos;

use DesignPatterns\FactoryMethod\Library;
use DesignPatterns\FactoryMethod\MediaInterface;
use DesignPatterns\FactoryMethod\ProdutosConcretos\Shelf as ProdutosConcretosShelf;

class Shelf extends Library
{

    public function chooseMedia(): MediaInterface
    {
        return new ProdutosConcretosShelf();
    }
}
