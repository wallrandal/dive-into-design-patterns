<?php

namespace App\FactoryMethod\ProdutosConcretos;

use App\FactoryMethod\MediaInterface;

class Digital implements MediaInterface
{

    public function openAndRead(string $book): string
    {
        $message = "the reader finished ${book} on kindle";
        return $message;
    }
}