<?php declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use src\Factory;
use src\peticion\Error;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');
header('Accept: application/json');
header('Content-Type: application/json;charset=utf-8');

try {
    
    $factory = new Factory();

    $router = $factory->crear('src\factory\Router', [
        'rutas' => [
            'api' => [
                'POST'
            ]
        ],
        'url' => $_REQUEST,
        'peticion' => $_SERVER['REQUEST_METHOD']
    ]);

    

} catch (\Throwable $th) {
    //throw $th;
    $err = new Error();
    echo $err->respuesta();
}


