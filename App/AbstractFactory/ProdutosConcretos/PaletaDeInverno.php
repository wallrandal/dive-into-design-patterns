<?php

namespace App\AbstractFactory\ProdutosConcretos;

use App\AbstractFactory\ProdutosAbstratos\Paleta;

class PaletaDeInverno implements Paleta
{
    public function temCase(): string
    {
        return "redonda na cor azul";
    }

    public function temCores(): string
    {
        return "marrom, cinza e turquesa";
    }
}
