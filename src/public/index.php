<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!--<h1>Hello, world!</h1>-->
<?php

include ('vendor/autoload.php');

$faker = Faker\Factory::create('pt_Br');

$nome = $faker->name();


echo 'ola';

use GuzzleHttp\Client;
$client = new Client();
$chave = '333cb84f4a1f4164b18141430230507';
$response = $client->request('GET', 'https://api.weatherapi.com/v1/current.json?q=brasilia&key=' . $chave);

$tempo = $response->getBody();

$tempo = json_decode($tempo);

print_r($tempo);
echo $response->getBody();
//$response = $client->request('GET', 'https://g1.com.br');

//echo $response->getStatusCode(); // 200
//echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
//echo $response->getBody();

?>

<div class="card" style="width: 18rem;">
  <img src="https://robohash.org/<?php echo $nome; ?>.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $nome ?></h5>
    <p class="card-text"><?php echo $faker->email(); ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


<!--<h1><?php echo $nome; ?></h1>
<img class="col-lg-4" src="https://robohash.org/<?php echo $nome?>.png">-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>