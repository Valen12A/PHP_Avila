<?php
require_once('Automotor.php');

class Camion extends Automotor{
   
    //Atributos de la subclase Automovil
    private string $tipo;
    private string $color;
   
    //Creando constructor completo incluyendo los atributos propios y los de la Superclase Automotor
    public function __construct(string $marca, string $modelo, int $precio, int $num_ejes, float $cap_carga) {
       
        //Invocando el contructor de la Superclase para acceder a sus datos
        parent::__construct($marca, $modelo, $precio);
       
        //Declarando el destino de los atributos de la subclase Automovil
        $this->tipo = $num_ejes;
        $this->color = $cap_carga;
    }
    //Los métodos SET se usan para asignar valores a los atributos
    public function set_num_ejes($num_ejes){
        $this->tipo=$num_ejes;
    }
    public function set_cap_carga($cap_carga){
        $this->color=$cap_carga;
    }
    //Con el método GET se devuelven o recuperan los datos de los aributos
    public function get_num_ejes(){
        return $this->tipo;
    }
    public function get_cap_carga(){
        return $this->color;
    }
}

$mi_camion = new Camion('Renault Trucks','2021',100000000,6,2);
echo '<br>';
echo 'Marcar: '. $mi_camion->get_marca();
echo '<br>';
echo 'Modelo: '. $mi_camion->get_modelo();
echo '<br>';
echo 'Precio: '. $mi_camion->get_precio();
echo '<br>';
echo 'Ejes: '. $mi_camion->get_num_ejes();
echo '<br>';
echo 'Capacidad: '. $mi_camion->get_cap_carga();
