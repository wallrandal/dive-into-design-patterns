<?php

namespace App\AbstractFactory\FabricasAbstratas;

use App\AbstractFactory\ProdutosAbstratos\Batom;
use App\AbstractFactory\ProdutosAbstratos\Paleta;

Interface SephoraFactory
{
    public function criaBatom() : Batom;

    public function criaPaleta(): Paleta;
}