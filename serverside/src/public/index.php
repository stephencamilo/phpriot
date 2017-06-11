<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response) {
  return $response->write('Funciona querido!');
});
$app->get('/data', function (Request $request, Response $response) {
  $vemcomigo = '[{
  	"title": "Avoid excessive caffeine",
  	"done": true
  }, {
  	"title": "Hidden item",
  	"hidden": true
  }, {
  	"title": "Be less provocative"
  }, {
  	"title": "Be nice to people"
  }]'; 
  return $response->withJson($vemcomigo);
});
$app->post('/', function (Request $request, Response $response) {
  $name = $request->getParsedBody();
  $data = json_encode($name['data']);
  $response->write($data);
  return $response;
});
require 'options.php';
$app->run();
