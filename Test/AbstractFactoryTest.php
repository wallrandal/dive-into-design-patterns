<?php

namespace Test;

use App\AbstractFactory\FabricasConcretas\KitDeVerao;
use App\AbstractFactory\Client;
use App\AbstractFactory\FabricasConcretas\KitDeInverno;
use App\AbstractFactory\ProdutosConcretos\BatomDeInverno;
use App\AbstractFactory\ProdutosConcretos\BatomDeVerao;
use App\AbstractFactory\ProdutosConcretos\PaletaDeInverno;
use App\AbstractFactory\ProdutosConcretos\PaletaDeVerao;
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
