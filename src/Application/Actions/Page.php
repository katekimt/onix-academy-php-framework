<?php

namespace App\Application\Actions;

class Page
{
    public string $text;
    public string $title;


    public function __construct(string $text, string $title)
    {
        $this->text = $text;
        $this->title = $title;
    }

    public function getText(): void
    {
        echo $this->text;
    }

    public function getTitle(): void
    {
        echo $this->title;
    }
}