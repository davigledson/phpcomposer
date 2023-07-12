<?php 

include ('vendor/autoload.php');

use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'https://source.unsplash.com/random');

header('Content-Type: image/jpeg');

echo $response->getBody();


?>