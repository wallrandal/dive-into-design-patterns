<?php

namespace DesignPatterns\AbstractFactory\FabricasConcretas;

use DesignPatterns\AbstractFactory\ProdutosAbstratos\Batom;
use DesignPatterns\AbstractFactory\ProdutosAbstratos\Paleta;
use DesignPatterns\AbstractFactory\ProdutosConcretos\BatomDeVerao;
use DesignPatterns\AbstractFactory\ProdutosConcretos\PaletaDeVerao;
use DesignPatterns\AbstractFactory\FabricasAbstratas\SephoraFactory;

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
