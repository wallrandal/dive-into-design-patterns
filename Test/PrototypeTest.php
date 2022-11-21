<?php

namespace Test;

use App\Prototype\Author;
use App\Prototype\Page;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCopyPage()
    {
        # prepare: crio um autor, pagina e comentarios e salvo
        $author = new Author('Wall Randal');
        $page   = new Page('Como usar o Prototype', $author);
        $page->addComment('Ótimo texto!');
        # run: copio a pagina
        $secondPage = clone $page;

        # assert: garanto que a pagina foi criada com comentarios zeraods
        $this->assertEquals($secondPage->getAuthor(), $author);
        $this->assertEquals($secondPage->getComments(), []);
        $this->assertEquals($secondPage->getTitle(), 'Como usar o Prototype cópia');
    }
}
