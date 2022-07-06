<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/bootstrap.php';

use App\Application\Routing\Route;
use App\Application\Controllers\NewsControllerPage;

try {
    $request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
    );
    $router = new League\Route\Router;
    $router->map('GET', '/news/{id:\d+}', NewsControllerPage::class);
    $response = $router->dispatch($request);
    (new \Zend\Diactoros\Response\SapiEmitter())->emit($response);
} catch (Exception) {
    try {
        Route::get('/', 'HomeController@execute');
        Route::get('/news', 'NewsController@execute');
        Route::get('/list', 'ListController@execute');
        Route::get('/login', 'LoginController@execute');
        Route::get('/register', 'RegisterController@execute');
    }
    catch (Exception) {
        echo "<h1>Error 404</h1>";
    }

}











