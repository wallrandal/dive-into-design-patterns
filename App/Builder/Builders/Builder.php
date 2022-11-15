<?php

namespace App\Builder\Builders;

Interface Builder
{
    public function reset();

    public function setDoll() : void;

    public function setAccessories() : void;
}