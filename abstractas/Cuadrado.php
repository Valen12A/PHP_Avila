<?php
require_once('Figura.php');

class Cuadrado extends Figura{
    private int $base;
    private int $altura;

    public function __construct( int $base, int $altura) {
        parent::__construct(4, 'Cuadrado');
        $this->base = $base;
        $this->altura = $altura;
    }

    public function get_base(){
        return $this->base;
    }

    public function get_altura(){
        return $this->altura;
    }

    public function set_base($base){
        $this->base = $base;
    }

    public function set_altura($altura){
        $this->altura = $altura;
    }

    public function calcular_area(){
        return ($this->base * $this->altura);
    }
}

$cuadrado1 = new Cuadrado(5,5);
echo 'El area del cuadrado es: '. $cuadrado1->calcular_area();