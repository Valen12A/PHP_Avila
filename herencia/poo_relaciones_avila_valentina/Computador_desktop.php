<?php
require_once('Computador.php');

class Computador_desktop extends Computador{
    private bool $ups;

    public function __construct(string $fabricante, string $cap_memoria, string $tipo_memoria, string $tipo_almacenamiento, string $cap_almacenamiento, string $sistema_operativo, string $suite_oficina, string $procesador, int $num_puertoUSB, bool $ups, ) {
        parent::__construct($fabricante, $cap_memoria, $tipo_memoria, $tipo_almacenamiento, $cap_almacenamiento, $sistema_operativo, $suite_oficina, $procesador, $num_puertoUSB);
        $this->ups = $ups;

    }
    public function get_ups(){
        return $this->ups;
    }
    public function set_ups($ups){
        $this->ups = $ups;
    }
}


$compuatdor1_des = new Computador_desktop('Dell', '64RAM', 'RAM', 'GBytes', '250.500Gbytes', 'IOS', 'Office 365', 'CPU', 4,'False');

$computador2_des = new Computador_desktop('Asus', '20RAM', 'RAM', 'Tbytes', '300.000GTbytes', 'Windows', 'Office 365', 'ADM', 3, 'False');

echo '<br>' . 'Compuatdor1';
echo '<br>' . 'Fabricantes: ' . $compuatdor1_des->get_fabricante();
echo '<br>' . 'Tipo de memoria: ' . $compuatdor1_des->get_tipo_memoria();
echo '<br>' . 'Capacidad de memoria:' . $compuatdor1_des -> get_cap_memoria();
echo '<br>' . 'Tipo de almacenamiento: ' . $compuatdor1_des->get_tipo_almacenamiento();
echo '<br>' . 'Capacidad de almacenamiento: ' . $compuatdor1_des->get_cap_almacenamiento();
echo '<br>' . 'Sistema operativo:' . $compuatdor1_des -> get_sistema_operativo();
echo '<br>' . 'Suite oficina: ' . $compuatdor1_des->get_suite_oficina();
echo '<br>' . 'Procesador: ' . $compuatdor1_des->get_procesador();
echo '<br>' . 'Numero de puertos USB:' . $compuatdor1_des -> get_num_puertoUSB();
echo '<br>' . 'UPS: ' . $compuatdor1_des -> get_ups();
echo '<br>';


echo '<br>' . 'Compuatdor2';
echo '<br>' . 'Fabricantes: ' . $computador2_des->get_fabricante();
echo '<br>' . 'Tipo de memoria: ' . $computador2_des->get_tipo_memoria();
echo '<br>' . 'Capacidad de memoria:' . $computador2_des -> get_cap_memoria();
echo '<br>' . 'Tipo de almacenamiento: ' . $computador2_des->get_tipo_almacenamiento();
echo '<br>' . 'Capacidad de almacenamiento: ' . $computador2_des->get_cap_almacenamiento();
echo '<br>' . 'Sistema operativo:' . $computador2_des -> get_sistema_operativo();
echo '<br>' . 'Suite oficina: ' . $computador2_des->get_suite_oficina();
echo '<br>' . 'Procesador: ' . $computador2_des->get_procesador();
echo '<br>' . 'Numero de puertos USB:' . $computador2_des -> get_num_puertoUSB();
echo '<br>' . 'UPS: ' . $computador2_des -> get_ups();
echo '<br>';
