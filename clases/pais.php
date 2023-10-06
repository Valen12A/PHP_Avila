<?php
class Pais{
    public string $nombre;
    public string $capital;
    public string $moneda;

    public function __construct($nombre, $capital, $moneda) {
        $this->nombre = $nombre;
        $this->capital = $capital;
        $this->moneda = $moneda;}

    public function get_nombre(){
        return $this -> nombre;
        }
    public function get_capital(){
        return $this -> capital;
        }
    public function get_moneda(){
        return $this -> moneda;
        }
}


$pais1 = new Pais('Colombia', 'Bogotá', 'Peso Colombiano');
$pais2 = new Pais('Argentina','Buenos aires', 'Peso Argentino');
$pais3 = new Pais('Estados unidos', 'Washington', 'Dolar');
$pais4 = new Pais('Chile','Santiago de chile', 'Peso Chileno');
$pais5 = new Pais('Rusia', 'Moscu', 'Rublo');


echo '<br>' . 'pais 1';
echo '<br>' . 'Nombre del pais: ' . $pais1->get_nombre();
echo '<br>' . 'La capital del pais:' . $pais1->get_capital();
echo '<br>' . 'La moneda del pais:' . $pais1 -> get_moneda();
echo '<br>';

echo '<br>' . 'pais 2';
echo '<br>' . 'Nombre del pais: ' . $pais2->get_nombre();
echo '<br>' . 'La capital del pais:' . $pais2->get_capital();
echo '<br>' . 'La moneda del pais:' . $pais2-> get_moneda();
echo '<br>';

echo '<br>' . 'pais 3';
echo '<br>' . 'Nombre del pais: ' . $pais3->get_nombre();
echo '<br>' . 'La capital del pais:' . $pais3->get_capital();
echo '<br>' . 'La moneda del pais:' . $pais3-> get_moneda();
echo '<br>';

echo '<br>' . 'pais 4';
echo '<br>' . 'Nombre del pais: ' . $pais4->get_nombre();
echo '<br>' . 'La capital del pais:' . $pais4->get_capital();
echo '<br>' . 'La moneda del pais:' . $pais4-> get_moneda();
echo '<br>';

echo '<br>' . 'pais 5';
echo '<br>' . 'Nombre del pais: ' . $pais5->get_nombre();
echo '<br>' . 'La capital del pais:' . $pais5->get_capital();
echo '<br>' . 'La moneda del pais:' . $pais5-> get_moneda();
echo '<br>';


function devolver_fecha(){
    $fecha_hora= date ('Y-M-D H:i:s');
    return $fecha_hora;
}

$fecha_hora = devolver_fecha();
echo '<br>' . 'La fecha y la hora actual es: ' . $fecha_hora;