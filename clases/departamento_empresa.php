<?php
class DepartamentoEmpresa{
    public string $nombre;
    public string $objetivos;
    public string $servicios;

    public function __construct($nombre, $objetivos, $servicios) {
        $this->nombre = $nombre;
        $this->objetivos = $objetivos;
        $this->servicios = $servicios;}

    public function get_nombre(){
        return $this -> nombre;
        }
    public function get_objetivos(){
        return $this -> objetivos;
        }
    public function get_servicios(){
        return $this -> servicios;
        }
}


$departamento1 = new DepartamentoEmpresa('Departamento Financiero', 'Planeacion financiera', 'Contabilidad general');
$departamento2 = new DepartamentoEmpresa('Departamento De Recursos humanos','Seleccion oportuna', 'Reclutamiento y contratacion');
$departamento3 = new DepartamentoEmpresa('Departamento De Marketing', 'Correcta invetsigacion de mercados', 'Diseño de mercadotecnia');
$departamento4 = new DepartamentoEmpresa('Departamento De Compras','Comprar materiales', 'Calidad de materiles');
$departamento5 = new DepartamentoEmpresa('Departamento De Logistica', 'Implementar nuevas tecnologias', 'fabricante de tecnologia');


echo '<br>' . 'Departamento 1';
echo '<br>' . 'Nombre del departamento: ' . $departamento1->get_nombre();
echo '<br>' . 'Objetivos del departamento:' . $departamento1->get_objetivos();
echo '<br>' . 'Servicios del departamento:' . $departamento1 -> get_servicios();
echo '<br>';

echo '<br>' . 'Departamento 2';
echo '<br>' . 'Nombre del departamento: ' . $departamento2->get_nombre();
echo '<br>' . 'Objetivos del departamento:' . $departamento2->get_objetivos();
echo '<br>' . 'Servicios del departamento:' . $departamento2-> get_servicios();
echo '<br>';

echo '<br>' . 'Departamento 3';
echo '<br>' . 'Nombre del departamento: ' . $departamento3->get_nombre();
echo '<br>' . 'Objetivos del departamento:' . $departamento3->get_objetivos();
echo '<br>' . 'Servicios del departamento:' . $departamento3-> get_servicios();
echo '<br>';

echo '<br>' . 'Departamento 4';
echo '<br>' . 'Nombre del departamento: ' . $departamento4->get_nombre();
echo '<br>' . 'Objetivos del departamento:' . $departamento4->get_objetivos();
echo '<br>' . 'Servicios del departamento:' . $departamento4-> get_servicios();
echo '<br>';

echo '<br>' . 'Departamento 5';
echo '<br>' . 'Nombre del departamento: ' . $departamento5->get_nombre();
echo '<br>' . 'Objetivos del departamento:' . $departamento5->get_objetivos();
echo '<br>' . 'Servicios del departamento:' . $departamento5-> get_servicios();
echo '<br>';


function devolver_fecha(){
    $fecha_hora= date ('Y-M-D H:i:s');
    
     $fecha_hora;
}

$fecha_hora = devolver_fecha();
echo '<br>' . 'La fecha y la hora actual es: ' . $fecha_hora;