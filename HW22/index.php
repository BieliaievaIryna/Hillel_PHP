<?php

require_once 'Response.php';

$requestBody = file_get_contents('php://input');

try {
    $response = new Response($requestBody);
    $response->send();
} catch (Exception $exception) {
    echo $exception->getMessage();
}