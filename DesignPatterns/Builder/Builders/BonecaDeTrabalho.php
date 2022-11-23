<?php

namespace DesignPatterns\Builder\Builders;

use DesignPatterns\Builder\Produtos\BonecaDeTrabalho as BonecaDeTrabalhoConcreta;

class BonecaDeTrabalho implements Builder
{
    private $doll;

    public function __construct()
    {
        $this->doll = new BonecaDeTrabalhoConcreta();   
    }
    public function reset()
    {
        return new BonecaDeTrabalhoConcreta();
    }

    public function setDoll() : void
    {
        $this->doll->setDoll('boneca de trabalho de terno roxo');
    }
    public function setAccessories() : void
    {
        $this->doll->setAccessories('possui notebook e pasta de documentos');
    }

    public function getDoll()
    {
        return $this->doll->getDoll();
    }
}