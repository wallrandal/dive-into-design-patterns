<?php

namespace App\AbstractFactory;

USE App\AbstractFactory\FabricasAbstratas\SephoraFactory;

class Client
{
    private SephoraFactory $factory;

    public function __construct(SephoraFactory $factory)
    {
        $this->factory = $factory;
    }

    public function execute(): array
    {
        return [
            "batom"  => $this->factory->criaBatom(),
            "paleta" => $this->factory->criaPaleta(),
        ];
    }
}
