<?php 
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/clima', function() use($app) {

 $arreglo = ['Hola' => 'Mundo'];
 
  return $app->json($arreglo);
});

$app->run();
?>