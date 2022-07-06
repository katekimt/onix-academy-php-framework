<?php

namespace App\Application\Controllers;

class ListController
{
    public function execute(): void
    {
        include './src/Application/Views/list.php';
    }

}