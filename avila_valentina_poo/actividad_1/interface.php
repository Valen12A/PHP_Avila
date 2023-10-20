<?php
interface Forma {
    public function calcular_area();
    public function calcular_perimetro();
}
class Circulo implements Forma {
    private $radio;
    
    public function __construct($radio) {
        $this->radio = $radio;
    }
    
    public function calcular_area() {
        return 3.1416 * $this->radio * $this->radio;
    }
    
    public function calcular_perimetro() {
        return 2 * 3.1416 * $this->radio;
    }
}

$circulo1 = new Circulo(5);
echo '<br>' . 'El area del circulo es: ' . $circulo1->calcular_area();
echo '<br>' , 'El perimetrodel circulo es'. $circulo1->calcular_perimetro();
?>


