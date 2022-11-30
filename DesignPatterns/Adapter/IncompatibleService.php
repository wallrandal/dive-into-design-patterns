<?php

namespace DesignPatterns\Adapter;

/**
 * IncompatibleService representa o serviço que é
 * útil ao contexto apresentado
 * mas não segue os padrões que o Client
 * reconhece.
 */
class IncompatibleService
{

    public function retrieveIncompatibleData() : array
    {
        return [
            0 => 'Informação no',
            1 => 'formato incorreto,',
            2 => 'mas mesmo assim é útil.'
        ];
    }
    
}