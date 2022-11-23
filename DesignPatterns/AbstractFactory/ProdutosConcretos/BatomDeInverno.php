<?php

namespace DesignPatterns\AbstractFactory\ProdutosConcretos;

use DesignPatterns\AbstractFactory\ProdutosAbstratos\Batom;

class BatomDeInverno implements Batom
{
    public function temCor(): string
    {
        return "azul";
    }

    public function temEmbalagem(): string
    {
        return "redonda de acrílico";
    }
}
