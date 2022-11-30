<?php

namespace Test;

use DesignPatterns\Adapter\Client;
use DesignPatterns\Adapter\ServiceAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testConsumeIncompatibleService()
    {
        # Prepare: classe Cliente chama o Adapter, que implementa o AdapterInterface
        $service = new ServiceAdapter();
        $client = new Client($service);      
        # Run: classe cliente consome o Serviço incompatível por meio do Adapter
        $message = $client->getMessage();
        # Assert: garanto que a tradução foi feita corretamente
        $expectedMessage = 'Informação no formato incorreto, mas mesmo assim é útil.';
        $this->assertEquals($expectedMessage, $message);
    }
}