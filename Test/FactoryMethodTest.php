<?php

namespace Test;

use DesignPatterns\FactoryMethod\CriadoresConcretos\Shelf;
use DesignPatterns\FactoryMethod\Client;
use DesignPatterns\FactoryMethod\CriadoresConcretos\Digital;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
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
