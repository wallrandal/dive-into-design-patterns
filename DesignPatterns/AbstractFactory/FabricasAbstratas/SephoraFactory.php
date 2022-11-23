<?php

namespace DesignPatterns\AbstractFactory\FabricasAbstratas;

use DesignPatterns\AbstractFactory\ProdutosAbstratos\Batom;
use DesignPatterns\AbstractFactory\ProdutosAbstratos\Paleta;

Interface SephoraFactory
{
    public function criaBatom() : Batom;

    public function criaPaleta(): Paleta;
}