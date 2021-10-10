<?php declare(strict_types=1);

namespace src\peticion;

use Exception;

class Ruta
{
    private array $_rutas;
    private string $_ruta;

    public function __construct(array $rutas, array $ruta)
    {
        $this->_rutas = $rutas;
        $this->_ruta = $this->setRuta($ruta);
    }

    public function ruta(): string
    {
        return $this->_ruta;
    }

    private function setRuta(array $ruta): string
    {
        if(!isset($ruta['url']))
        {
            throw new Exception("La ruta no existe"); 
        }
        
        $ruta = explode('/', filter_var(rtrim($ruta['url'], '/'), FILTER_SANITIZE_URL));

        if(!array_key_exists($ruta[0], $this->_rutas))
        {
            throw new Exception("La ruta no existe"); 
        }

        return $ruta[0];
    }
}