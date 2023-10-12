<?php
require_once('Figura.php');


class Triangulo extends Figura{
    private int $base;
    private int $altura;

    public function __construct( int $base, int $altura) {
        parent::__construct(3 ,'Triangulo');
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
        return ($this->base * $this->altura)/2;
    }
 }

$triangulo2 = new Triangulo(10,5);
echo 'El area del triangulo es: '. $triangulo2->calcular_area();

?>

