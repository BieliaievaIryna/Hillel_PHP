<?php

require_once 'Response.php';

$response = new Response;
$response->sendResponse('{"message": "Hello, world!"}', 'application/json');
//$response->sendResponse('<root><message>response content 2</message></root>', 'application/xml');
//$response->sendResponse('response content 3', 'text/html');
