<?php

namespace App\Application\Database;

use App\Application\Database\Article;

class DatabaseArticles
{
    private array $data = [];

    public function __construct()
    {
        $rawData = json_decode(file_get_contents('./db.json'), true);
        foreach ($rawData as $articleData) {
            // $this->data[] = new Article($articleData['name_article'], $articleData['id']);
            $this->data[] = Article::fromArray($articleData);
        }
    }

    public function listAll(): array
    {
        return $this->data;
    }

    public function add(string $name_article, int $id, string $text): void
    {
        $this->data[] = Article::fromArray([
            'name_article' => $name_article,
            'id' => $id,
            'text' => $text,
        ]);
    }

    public function findByNameArticle(string $name_article): ?Article
    {
        foreach ($this->data as $item) {
            if ($item->name_article === $name_article) {
                return $item;
            }
        }
        return null;
    }

    public function findByText(string $text): ?Article
    {
        foreach ($this->data as $item) {
            if ($item->text === $text) {
                return $item;
            }
        }
        return null;
    }

    public function findById(int $id): ?Article
    {
        foreach ($this->data as $item) {
            if ($item->id === $id) {
                return $item;
            }
        }
        return null;
    }

    public function deleteByNameArticle(string $name_article): bool
    {
        foreach ($this->data as $key => $item) {
            if ($item->name_article === $name_article) {
                unset($this->data[$key]);
                return true;
            }
        }
        return false;
    }

    public function deleteAllByNameArticle(string $name_article): void
    {
        foreach ($this->data as $key => $item) {
            if ($item->name_article === $name_article) {
                unset($this->data[$key]);

            }
        }
    }

    public function deleteById(int $id): bool
    {
        foreach ($this->data as $key => $item) {
            if ($item->id === $id) {
                unset($this->data[$key]);
                return true;
            }
        }
        return false;
    }

    public function deleteAllById(int $id): void
    {
        foreach ($this->data as $key => $item) {
            if ($item->id === $id) {
                unset($this->data[$key]);
            }
        }
    }

    public function save(): void
    {
        $data = array_map(function (Article $article) {
            return $article->toArray();
        }, $this->data);
        file_put_contents('./db.json', json_encode($data));
    }
}