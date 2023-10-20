<?php
class Encadenamiento {
    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function duplicar_numero() {
        $this->valor *= 2;
        return $this;
    }

    public function sumar_numero($numero) {
        $this->valor += $numero;
        return $this;
    }

    public function obtener_valor() {
        return $this->valor;
    }
}

$objeto1 = new Encadenamiento(2);

$resultado = $objeto1->duplicar_numero()->sumar_numero(2)->obtener_valor();

echo $resultado; 
?>