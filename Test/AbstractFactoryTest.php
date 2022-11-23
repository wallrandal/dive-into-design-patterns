<?php

namespace Test;

use DesignPatterns\AbstractFactory\FabricasConcretas\KitDeVerao;
use DesignPatterns\AbstractFactory\Client;
use DesignPatterns\AbstractFactory\FabricasConcretas\KitDeInverno;
use DesignPatterns\AbstractFactory\ProdutosConcretos\BatomDeInverno;
use DesignPatterns\AbstractFactory\ProdutosConcretos\BatomDeVerao;
use DesignPatterns\AbstractFactory\ProdutosConcretos\PaletaDeInverno;
use DesignPatterns\AbstractFactory\ProdutosConcretos\PaletaDeVerao;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testVerao()
    {
        $client = new Client(new KitDeVerao());

        $result = $client->execute();
        $this->assertIsArray($result);
        $this->assertTrue(array_key_exists("batom", $result));
        $this->assertTrue(array_key_exists("paleta", $result));
        $this->assertInstanceOf(PaletaDeVerao::class, $result["paleta"]);
        $this->assertInstanceOf(BatomDeVerao::class, $result["batom"]);
    }

    public function testInverno()
    {
        $client = new Client(new KitDeInverno());

        $result = $client->execute();
        $this->assertIsArray($result);
        $this->assertTrue(array_key_exists("batom", $result));
        $this->assertTrue(array_key_exists("paleta", $result));
        $this->assertInstanceOf(PaletaDeInverno::class, $result["paleta"]);
        $this->assertInstanceOf(BatomDeInverno::class, $result["batom"]);
    }
}
