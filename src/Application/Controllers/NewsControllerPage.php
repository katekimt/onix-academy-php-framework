<?php

namespace App\Application\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;

class NewsControllerPage
{

    public function __invoke(ServerRequestInterface $request, array $args = []): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write("<h6 style= 'opacity: 0%; margin: 0; padding: 0'>Page</h6><a></a>");
        if ((int)$args['id'] < 9) {
            include './src/Application/Views/page.php';
        } else {
            include './src/Application/Views/Error404.php';
        }
        return $response;
    }

    function getId(): int
    {
        $id = '';
        $slash = 0;
        for ($i = 0; $i < strlen($_SERVER['REQUEST_URI']); $i++) {
            if ($_SERVER['REQUEST_URI'][$i] == '/') {
                $slash++;
            } elseif ($slash == 2) {
                $id = $id . $_SERVER['REQUEST_URI'][$i];
            }
        }
        return (int)$id;
    }


}