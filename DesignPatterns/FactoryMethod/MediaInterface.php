<?php

namespace DesignPatterns\FactoryMethod;

Interface MediaInterface
{
    public function openAndRead(string $book) : string;
}