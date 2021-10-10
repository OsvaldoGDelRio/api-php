<?php declare(strict_types=1);

namespace src\peticion;

use Exception;

use src\peticion\Ruta;

class Peticion
{
    private Ruta $_ruta;
    private array $_rutas;
    private string $_peticion;

    public function __construct(Ruta $ruta, array $rutas, string $peticion)
    {
        $this->_ruta = $ruta;
        $this->_rutas = $rutas;
        $this->_peticion = $this->setPeticion($peticion);
    }

    public function peticion(): string
    {
        return $this->_peticion;
    }

    public function datos(): object
    {
        return json_decode(file_get_contents("php://input"));
    }

    private function setPeticion(string $peticion): string
    {
        if(!in_array($peticion, $this->_rutas[$this->_ruta->ruta()]))
        {
            throw new Exception("La ruta no acepta este método de petición");
        }

        return $peticion;
    }
}