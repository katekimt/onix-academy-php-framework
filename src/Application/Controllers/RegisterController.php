<?php

namespace App\Application\Controllers;

class RegisterController
{
    public function execute(): void
    {
        include './src/Application/Views/register.php';
    }

}