<?php

require_once 'Router.php';

$router = new Router;
$router->addRoute('/', [
    'GET' => "Controller@methodGet",
    'POST' => "Controller@methodPost"
]);

try {
    $router->processRoute();
} catch (Exception $exception) {
    echo $exception->getMessage();
}
