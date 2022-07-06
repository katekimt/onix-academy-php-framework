<?php

namespace App\Application\Controllers;

class HomeController
{
    public function execute(): void
    {
        include './src/Application/Views/index.php';
    }
}