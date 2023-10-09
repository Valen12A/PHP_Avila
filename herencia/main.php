<?php

require_once ('Automovil.php');

$auto1 = new Automovil('Chevrolet', '2014', 3000000, 'SEDAN', 'Azul');

//Subclase invocando  métodos de la superclase

echo 'Marca automovil' . $auto1->get_marca(). '<br>';
echo 'Modelo automovil' . $auto1->get_modelo(). '<br>';
echo 'Precio automovil' . $auto1->get_precio(). '<br>';

//Subclase invocando métodos de la superclase
echo 'Tipo' . $auto1 -> get_tipo(). '<br>';
echo 'Color' . $auto1 -> get_color(). '<br>';
$auto1 -> saludar();

require_once ('Camien.php');
$mi_camion = new Camion ('Renault  Trucks', '2021', 100000000, 6, 35);
 
//Subclase invocando métodos de la superclase
echo 'Marca Camion' . $mi_camion->get_marca(). '<br>';
echo 'Modelo Camion' . $mi_camion->get_modelo(). '<br>';
echo 'Precio Camion' . $mi_camion->get_precio(). '<br>';
$mi_camion ->saludar();

 