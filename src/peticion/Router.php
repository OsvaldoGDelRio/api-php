<?php declare(strict_types=1);

namespace src\peticion;

use src\peticion\Peticion;
use src\peticion\Ruta;

class Router
{
    private Peticion $_peticion;
    private Ruta $_ruta;

    public function __construct(Peticion $peticion, Ruta $ruta)
    {
        $this->_peticion = $peticion;
        $this->_ruta = $ruta;
    }

    public function ruta(): string
    {
        return $this->_ruta->ruta();
    }

    public function peticion(): string
    {
        return $this->_peticion->peticion();
    }

    public function datos(): object
    {
        return $this->_peticion->datos();
    }
}