<?php

namespace DesignPatterns\AbstractFactory\ProdutosAbstratos;

Interface Batom
{
    public function temCor() : string;
    
    public function temEmbalagem() : string;
}
