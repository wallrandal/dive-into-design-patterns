<?php

namespace FactoryMethod\App;

Interface MediaInterface
{
    public function openAndRead(string $book) : string;
}