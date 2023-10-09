<?php

require_once ('Computador.php');
require_once ('Computador_laptop.php');
require_once ('Computador_desktop.php');


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



$compuatdor1_des = new Computador_desktop('Dell', '64RAM', 'RAM', 'GBytes', '250.500Gbytes', 'IOS', 'Office 365', 'CPU', 4,'False');

$computador2_des = new Computador_desktop('Asus', '20RAM', 'RAM', 'Tbytes', '300.000GTbytes', 'Windows', 'Office 365', 'ADM', 3, 'False');
echo '<br>';
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


$fechaActual = Computador::obtener_fecha();
echo 'La fehca actual es: '. $fechaActual. '<div>';