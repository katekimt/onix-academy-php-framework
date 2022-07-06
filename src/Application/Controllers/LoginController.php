<?php

namespace App\Application\Controllers;

class LoginController
{
    public function execute(): void
    {
        include './src/Application/Views/login.php';
    }
}