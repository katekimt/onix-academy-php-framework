<?php

namespace App\Application\Database;

class Article
{
    public string $name_article;
    public int $id;
    public string $text;


    public static function fromArray(array $params): self
    {
        $article = new self();
        $article->name_article = $params['name_article'];
        $article->id = $params['id'];
        $article->text =$params['text'];
        return $article;
    }

    public function toArray(): array
    {
        return [
            'name_article' => $this->name_article,
            'id' => $this->id,
            'text' => $this->text,
        ];
    }
}