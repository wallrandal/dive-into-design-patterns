<?php

namespace DesignPatterns\AbstractFactory\FabricasConcretas;

use DesignPatterns\AbstractFactory\ProdutosAbstratos\Batom;
use DesignPatterns\AbstractFactory\ProdutosAbstratos\Paleta;
use DesignPatterns\AbstractFactory\ProdutosConcretos\BatomDeInverno;
use DesignPatterns\AbstractFactory\ProdutosConcretos\PaletaDeInverno;
use DesignPatterns\AbstractFactory\FabricasAbstratas\SephoraFactory;

class KitDeInverno implements SephoraFactory
{
    public function criaBatom() : Batom
    {
        return new BatomDeInverno();
    }

    public function criaPaleta() : Paleta
    {
        return new PaletaDeInverno();
    }
}
