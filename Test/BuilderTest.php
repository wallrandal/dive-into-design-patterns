<?php

namespace Test;

use App\Builder\Diretor;
use App\Builder\Builders\BonecaDeTrabalho;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testBonecaDeTrabalho()
    {
        $bonecaEscolhida = new BonecaDeTrabalho();
        $diretor = new Diretor($bonecaEscolhida);
        $result = $diretor->construirBoneca();
        $this->assertInstanceOf(BonecaDeTrabalho::class, $result);
        $this->assertEquals($result->getDoll(), 'boneca de trabalho de terno roxo');
    }
}
