<?php declare(strict_types=1);

namespace src\factory;

use src\FactoryClassInterface;
use src\peticion\Peticion;
use src\peticion\Router as PeticionRouter;
use src\peticion\Ruta;

class Router implements FactoryClassInterface
{
    public function crear(array $array): PeticionRouter
    {
        $ruta = new Ruta($array['rutas'], $array['url']);
        $peticion = new Peticion($ruta, $array['rutas'], $array['peticion']);
        return new PeticionRouter($peticion, $ruta);
    }
}