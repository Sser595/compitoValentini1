<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Impianto.php';
require __DIR__ . '/controllers/ImpiantoController.php';
require __DIR__ . '/controllers/IndexController.php';


$app = AppFactory::create();

/*$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});*/
$app->get('/', 'IndexController:home');
$app->get("/impianto", "ImpiantoController:lista");
$app->get('/rilevatori_di_umidita', 'ImpiantoController:rilevatoriUmidita');

$app ->get('/rilevatori_di_umidita/{identificativo}', 'ImpiantoController:getRilUmById');
$app ->post('/rilevatori_di_umidita', 'ImpiantoController:createRilUm');
$app->get('/rilevatori_di_temperatura', 'ImpiantoController:rilevatoriTemperatura');


//$app->run();
