<?php

namespace DesignPatterns\Builder;

use DesignPatterns\Builder\Builders\Builder;
class Diretor
{
    private $builder;
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }
    public function construirBoneca() : Builder
    {
        $this->builder->reset();
        $this->builder->setDoll();
        $this->builder->setAccessories();
        return $this->builder;
    }
}