<?php

namespace DesignPatterns\AbstractFactory\ProdutosConcretos;

use DesignPatterns\AbstractFactory\ProdutosAbstratos\Batom;

class BatomDeVerao implements Batom
{
    public function temCor(): string
    {
        return "vermelha";
    }

    public function temEmbalagem(): string
    {
        return "quadrada de plástico";
    }
}
