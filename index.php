<?php
require 'vendor/autoload.php';
$client = new GuzzleHttp\Client(['base_uri' => 'http://sebapi.com/']);
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MiwiaWF0IjoxNTk3NzYzNjI4LCJleHAiOjE2MDAzNTU2Mjh9.yb0FbqnoRQPQt3g15SAsZ71TYcykBWyNZhQPkue9HpA';
$headers = [
    'Authorization' => 'Bearer ' . $token,
    'Accept'        => '*/*',
];
$response = $client->request(
    'GET',
    'birds',
    [
        'headers' => $headers
    ]
);

echo  $response->getBody();
