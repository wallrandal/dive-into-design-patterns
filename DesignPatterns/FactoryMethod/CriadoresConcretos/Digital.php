<?php

namespace DesignPatterns\FactoryMethod\CriadoresConcretos;

use DesignPatterns\FactoryMethod\Library;
use DesignPatterns\FactoryMethod\MediaInterface;
use DesignPatterns\FactoryMethod\ProdutosConcretos\Digital as ProdutosConcretosDigital;

class Digital extends Library
{

    public function chooseMedia(): MediaInterface
    {
        return new ProdutosConcretosDigital();
    }
}