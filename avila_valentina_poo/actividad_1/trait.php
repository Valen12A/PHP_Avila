<?php

trait datos {
    public function imprimir_datos() {
        echo 'Hola, esto es un trait.'. '<br>';
        echo 'Los trait son como clases pero no pueden ser intanciados por ellos mismos.' , '<br>';
        echo 'Sriven para reutilizar codigo.' . '<br>';
    }
}

class Persona{
    use datos;
}

$persona1 = new Persona();
$persona1->imprimir_datos(); 

?>