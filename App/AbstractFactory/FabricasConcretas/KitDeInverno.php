<?php

namespace App\AbstractFactory\FabricasConcretas;

use App\AbstractFactory\ProdutosAbstratos\Batom;
use App\AbstractFactory\ProdutosAbstratos\Paleta;
use App\AbstractFactory\ProdutosConcretos\BatomDeInverno;
use App\AbstractFactory\ProdutosConcretos\PaletaDeInverno;
use App\AbstractFactory\FabricasAbstratas\SephoraFactory;

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
