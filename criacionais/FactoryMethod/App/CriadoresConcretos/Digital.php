<?php

namespace FactoryMethod\App\CriadoresConcretos;

use FactoryMethod\App\Library;
use FactoryMethod\App\MediaInterface;
use FactoryMethod\App\ProdutosConcretos\Digital as ProdutosConcretosDigital;

class Digital extends Library
{

    public function chooseMedia(): MediaInterface
    {
        return new ProdutosConcretosDigital();
    }
}