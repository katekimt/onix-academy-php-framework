<?php

namespace App\Application\Routing;

use App\Application\Controllers\ListController;
use App\Application\Controllers\LoginController;
use App\Application\Controllers\RegisterController;
use App\Application\Controllers\HomeController;
use App\Application\Controllers\NewsController;


class Route
{
    static public array $routes = [];

    static public function get($uri, $move): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'GET' && $uri == $_SERVER['REQUEST_URI']) {
            $controller = explode('@', $move)[0];
            $method = explode('@', $move)[1];
            $controller = '\App\Application\Controllers\\' . $controller;
            $objectController = new $controller;
            $objectController->$method();

        }
        self::$routes[] = $uri;

    }

    static public function post($uri, $move): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'POST' && $uri == $_SERVER['REQUEST_URI']) {
            $controller = explode('@', $move)[0];
            $method = explode('@', $move)[1];
            $controller = '\App\Application\Controllers\\' . $controller;
            $objectController = new $controller;
            $objectController->$method();

        }
        self::$routes[] = $uri;

    }


}