<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testConsumeIncompatibleService()
    {
        # Prepare: classe Cliente chama o Adapter, que implementa o AdapterInterface        
        # Run: classe cliente consome o Serviço incompatível por meio do Adapter
        # Assert: garanto que a tradução foi feita corretamente
    }
}