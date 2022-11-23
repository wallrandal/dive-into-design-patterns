<?php

namespace DesignPatterns\Prototype;

class Author
{
    protected string $authorName;

    public function __construct(string $authorName)
    {
        $this->authorName = $authorName;
    }
}