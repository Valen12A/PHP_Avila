<?php 
//Espacio de nombres para las clases de la empresa ABC.
//No debe escribir código PHP anes del namespace.

namespace Abc;

class Persona {
    public string $nombre;
    public string $correo;
    public static string $saludo;

    public function __construct(
        string $nombre,
        string $correo,
        string $saludo)
        {
        $this->nombre = $nombre;
        $this->correo = $correo;
        self::$saludo = $saludo;
    }
    public function obtener_datos(){
        print_r($this->nombre, $this->correo, self::$saludo);
    }

}