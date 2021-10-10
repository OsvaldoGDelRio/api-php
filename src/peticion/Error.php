<?php
namespace src\peticion;

class Error
{
    public function respuesta()
    {
        $res = [
            'message' => 'error'
        ];

        return json_encode($res, JSON_PRETTY_PRINT);
    }
}