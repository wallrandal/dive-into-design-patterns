<?php

namespace App\AbstractFactory\ProdutosConcretos;

use App\AbstractFactory\ProdutosAbstratos\Paleta;

class PaletaDeVerao implements Paleta
{
    public function temCase() : string
    {
        return "quadrada na cor amarela";
    }

    public function temCores(): string
    {
        return "azul, verde e rosa";
    }
}
