<?php

namespace App\FactoryMethod\CriadoresConcretos;

use App\FactoryMethod\Library;
use App\FactoryMethod\MediaInterface;
use App\FactoryMethod\ProdutosConcretos\Digital as ProdutosConcretosDigital;

class Digital extends Library
{

    public function chooseMedia(): MediaInterface
    {
        return new ProdutosConcretosDigital();
    }
}