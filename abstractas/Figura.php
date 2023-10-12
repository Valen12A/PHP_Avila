<?php
//Una clase abstracta esta hecha para ser heredada por otra. NO se puede instanciar.
//Las clases abstractas se usaran para estandarizar las aplicaciones.
//Las figuras puedehn ser cuadrados, triangulos, rectangulos...

abstract class Figura{
    private float $n_lados= 1;
    private string $nombres;

    public function __construct(float $n_lados, string $nombres) {
        $this->n_lados = $n_lados;
        $this->nombres =$nombres;
    }
    public function get_n_lados(){
        return $this->n_lados;
    }
    public function get_nombres(){
        return $this->nombres;
    }

    public function imprimir(){
        echo 'soy un metodo de una clase abstrata' . Figura::get_nombres();
    }
}

/*$cuadrado1 = new Cuadrado();

$cuadrado1 -> imprimir();

$triangulo =new Figura();

$triangulo -> imprimir();

*/