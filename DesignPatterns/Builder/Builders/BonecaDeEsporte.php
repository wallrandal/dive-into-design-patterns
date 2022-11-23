<?php

namespace DesignPatterns\Builder\Builders;

use DesignPatterns\Builder\Produtos\BonecaDeEsporte as BonecaDeEsporteConcreta;

class BonecaDeEsporte implements Builder
{
    private $doll;
    public function __construct()
    {
        $this->doll = new BonecaDeEsporteConcreta();   
    }

    public function reset()
    {
        return new BonecaDeEsporteConcreta();
    }

    public function setDoll() : void
    {
        $this->doll->setDoll('boneca de roupa de judô');
    }

    public function setAccessories() : void
    {
        $this->doll->setAccessories('possui skate e faixa preta');
    }
}