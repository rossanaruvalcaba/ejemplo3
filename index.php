<?php
require_once __DIR__.'/../vendor/autoload.php';
$app = new Silex\Application();
$app->get('/clima', function() use($app){ 
    //$arreglo = ['Rossana 412098761'];
	$arreglo = ['Rossana' => '412098761'];
	return $app->json($arreglo);
});

$app->run();