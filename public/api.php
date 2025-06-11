<?php

include __DIR__ . '/../src/functions/http.php';

$endpoint = $_GET['e'];
$endpoint = str_replace(['.', '/', "\\"], '', $endpoint);
$endpointPath = __DIR__ . "/../src/api/{$endpoint}.php";

if (!file_exists($endpointPath)) {
	http_send_json(['message' => 'Not found'], 404);
	exit;
}


$endpointFunction = require($endpointPath);
$response = $endpointFunction();
http_send_json($response);
