<?php

namespace DesignPatterns\AbstractFactory\ProdutosConcretos;

use DesignPatterns\AbstractFactory\ProdutosAbstratos\Paleta;

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
