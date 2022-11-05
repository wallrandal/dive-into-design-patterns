<?php

namespace App\AbstractFactory\FabricasConcretas;

use App\AbstractFactory\ProdutosAbstratos\Batom;
use App\AbstractFactory\ProdutosAbstratos\Paleta;
use App\AbstractFactory\ProdutosConcretos\BatomDeVerao;
use App\AbstractFactory\ProdutosConcretos\PaletaDeVerao;
use App\AbstractFactory\FabricasAbstratas\SephoraFactory;

class KitDeVerao implements SephoraFactory
{
    public function criaBatom(): Batom
    {
        return new BatomDeVerao();
    }

    public function criaPaleta(): Paleta
    {
        return new PaletaDeVerao();
    }
}
