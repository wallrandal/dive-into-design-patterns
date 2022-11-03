<?php

namespace FactoryMethod\App\ProdutosConcretos;

use FactoryMethod\App\MediaInterface;

class Digital implements MediaInterface
{

    public function openAndRead(string $book): string
    {
        $message = "the reader finished ${book} on kindle";
        return $message;
    }
}