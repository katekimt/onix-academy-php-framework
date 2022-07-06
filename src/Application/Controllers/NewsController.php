<?php

namespace App\Application\Controllers;

class NewsController
{
    public function execute(): void
    {
        include './src/Application/Views/newsAll.php';
    }
}