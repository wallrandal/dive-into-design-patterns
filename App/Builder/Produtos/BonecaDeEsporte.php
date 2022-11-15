<?php

namespace App\Builder\Produtos;

class BonecaDeEsporte
{
    private $doll;
    private $accessories;

    public function setDoll(string $doll)
    {
        $this->doll = $doll;
    }

    public function getDoll() : ?string
    {
        return $this->doll;
    }

    public function setAccessories(string $accessories)
    {
        $this->accessories = $accessories;
    }

    public function getAccessories() : ?string
    {
        return $this->accessories;
    }
}