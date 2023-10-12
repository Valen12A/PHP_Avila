<?php
require_once('Computador.php');

class Computador_laptop extends Computador{
    private bool $tactil;
    private int $pot_bateria;
    public function __construct(string $fabricante, string $cap_memoria, string $tipo_memoria, string $tipo_almacenamiento, string $cap_almacenamiento, string $sistema_operativo, string $suite_oficina, string $procesador, int $num_puertoUSB, bool $tactil, int $pot_bateria ) {
        parent::__construct($fabricante, $cap_memoria, $tipo_memoria, $tipo_almacenamiento, $cap_almacenamiento, $sistema_operativo, $suite_oficina, $procesador, $num_puertoUSB);
    
        $this->tactil = $tactil;
        $this->pot_bateria = $pot_bateria;
    }
    public function get_tactil(){
        return $this->tactil;
    }
    public function get_pot_bateria(){
        return $this->pot_bateria;
    }

    public function set_tactil($tactil){
        $this->tactil = $tactil;
    }
    public function set_pot_bateria($pot_bateria){
        $this->pot_bateria = $pot_bateria;
    }
}

/*
$computador1_lap = new Computador_laptop('Lenovo', '32RAM', 'RAM', 'Bytes', '250.500Bytes', 'Linux', 'Office 365', 'ADM', 3, 'True', 45);

$computador2_lap = new Computador_laptop('Hp', '20RAM', 'RAM', 'Gbytes', '300.000Gbytes', 'Windows', 'Office 365', 'ADM', 3, 'False', 45);

echo '<br>' . 'Compuatdor1';
echo '<br>' . 'Fabricantes: ' . $computador1_lap->get_fabricante();
echo '<br>' . 'Tipo de memoria: ' . $computador1_lap->get_tipo_memoria();
echo '<br>' . 'Capacidad de memoria:' . $computador1_lap -> get_cap_memoria();
echo '<br>' . 'Tipo de almacenamiento: ' . $computador1_lap->get_tipo_almacenamiento();
echo '<br>' . 'Capacidad de almacenamiento: ' . $computador1_lap->get_cap_almacenamiento();
echo '<br>' . 'Sistema operativo:' . $computador1_lap -> get_sistema_operativo();
echo '<br>' . 'Suite oficina: ' . $computador1_lap->get_suite_oficina();
echo '<br>' . 'Procesador: ' . $computador1_lap->get_procesador();
echo '<br>' . 'Numero de puertos USB:' . $computador1_lap -> get_num_puertoUSB();
echo '<br>' . 'Tactil:' . $computador1_lap -> get_tactil();
echo '<br>' . 'Potencia bateria:' . $computador1_lap -> get_pot_bateria();
echo '<br>';


echo '<br>' . 'Compuatdor2';
echo '<br>' . 'Fabricantes: ' . $computador2_lap->get_fabricante();
echo '<br>' . 'Tipo de memoria: ' . $computador2_lap->get_tipo_memoria();
echo '<br>' . 'Capacidad de memoria:' . $computador2_lap -> get_cap_memoria();
echo '<br>' . 'Tipo de almacenamiento: ' . $computador2_lap->get_tipo_almacenamiento();
echo '<br>' . 'Capacidad de almacenamiento: ' . $computador2_lap->get_cap_almacenamiento();
echo '<br>' . 'Sistema operativo:' . $computador2_lap -> get_sistema_operativo();
echo '<br>' . 'Suite oficina: ' . $computador2_lap->get_suite_oficina();
echo '<br>' . 'Procesador: ' . $computador2_lap->get_procesador();
echo '<br>' . 'Numero de puertos USB:' . $computador2_lap -> get_num_puertoUSB();
echo '<br>' . 'Tactil:' . $computador2_lap -> get_tactil();
echo '<br>' . 'Potencia bateria:' . $computador2_lap -> get_pot_bateria();
echo '<br>';
*/
