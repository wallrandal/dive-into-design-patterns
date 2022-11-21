<?php

namespace App\Prototype;

class Page
{
    protected Author $author;
    protected string $title;

    protected array $comments;

    public function __construct(string $title, Author $author)
    {
        $this->title  = $title;
        $this->author = $author;
        $this->comments = [];
    }

    public function getAuthor() : Author
    {
        return $this->author;
    }

    public function addComment(string $comment) : void
    {
        array_push($this->comments, $comment);
    }

    public function getComments() : array
    {
        return $this->comments;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function __clone()
    {
        $this->title = "{$this->title} cópia";
        $this->comments = [];
    }
}