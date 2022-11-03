<?php

namespace FactoryMethod\Test;

use FactoryMethod\App\CriadoresConcretos\Shelf;
use FactoryMethod\App\Client;
use FactoryMethod\App\CriadoresConcretos\Digital;
use FactoryMethod\App\CriadoresConcretos\Shelf as CriadoresConcretosShelf;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testDigital()
    {   
        $reader = new Client("O Avesso da Pele");
        
        $result = $reader->execute(new Digital());
        $message = "the reader finished O Avesso da Pele on kindle";
        $this->assertEquals($message, $result);
    }

    public function testShelf()
    {
        $reader = new Client("O Avesso da Pele");

        $result = $reader->execute(new Shelf());
        $message = "the reader finished O Avesso da Pele on physical copy";
        $this->assertEquals($message, $result);
    }
}
