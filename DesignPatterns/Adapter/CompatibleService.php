<?php

namespace DesignPatterns\Adapter;

/**
 * O CompatibleService representa a serviço
 * que já está no formato que o Cliente
 * reconhece.
 */
class CompatibleService implements DataInterface
{
    public function retrieveMessage() : string
    {
        return 'Informação no formato correto.';
    }
}