<?php
abstract class Figura {
    private $nombre;
    private $color;

    public function __construct($nombre, $color) {
        $this->nombre = $nombre;
        $this->color = $color;
    }
    public function get_nombre(){
        return $this -> nombre;
        }

    public function get_color(){
        return $this -> color;
        }
    

    abstract public function calcular_radio();
    abstract public function calcular_diametro();
    abstract public function calcular_area();


}

class Circulo extends Figura {
    private $radio;

    public function __construct($nombre, $color, $radio) {
        parent::__construct($nombre, $color);
        $this->radio = $radio;
    }

    public function calcular_radio() {
        return $this->radio;
    }

    public function calcular_diametro() {
        return $this->radio * 2;
    }
    public function calcular_area() {
        return pi() * pow($this->radio, 2);
    }
    
}

$circulo1 = new Circulo('primer circulo', 'Rojo', 5);
echo '<br>' . 'El nombre del circulo es: ' . $circulo1->get_nombre();
echo '<br>' . 'El color del circulo es: ' . $circulo1->get_color();
echo '<br>' . 'El radio del circulo es: ' . $circulo1->calcular_radio();
echo '<br>' . 'El diametro del circulo es: ' . $circulo1->calcular_diametro();
echo '<br>' . "El area del circulo es: " . $circulo1->calcular_area();
?>
