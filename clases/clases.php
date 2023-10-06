<?php
echo 'Estamos trabajando PHP';

// Un script
//variables
$nombre = 'valentina';  //string
$edad = 17;             //entero
$peso = 48.8;           //decimal
$activo = TRUE;

echo ('hola');

echo '<br>' . $peso . '<br>' . $edad;


if ($edad >= 18){
    echo '<br>' . 'Eres mayor de edad';
}
else {
 echo '<br>' . 'Eres menor de edad';
}
?>
<?php
class Aprendiz{
    public string $tipo_documento;
    public string $num_documento;
    public string $nombres;
    public string $apellidos;
    public string $correo;
    public int $edad;
    public bool $activo;
    public float $peso;

public function __construct($tipo_documento, $num_documento, $nombres, $apellidos, $correo, $edad, $activo, $peso) {
    $this->tipo_documento = $tipo_documento;
    $this->num_documento = $num_documento;
    $this->nombres = $nombres;
    $this->apellidos = $apellidos;
    $this->correo = $correo;
    $this->edad = $edad;
    $this->activo = $activo;
    $this->peso = $peso;
}
}

$aprendiz1 = new Aprendiz('CC', '112545663', 'Juan', 'Rodriguez Lopez', 'juan45@gmail.com', 25, 1, 80.4);

echo '<br>' . 'Tipo de documento =' . $aprendiz1->tipo_documento;
echo '<br>' . 'Numero de documento =' . $aprendiz1->num_documento;
echo '<br>' . 'Nombre =' .$aprendiz1->nombres;
echo '<br>' . 'Apellidos =' . $aprendiz1->apellidos;
echo '<br>' . 'Correo =' . $aprendiz1->correo;
echo '<br>' . 'Edad =' . $aprendiz1->edad;
echo '<br>' . 'Estado = Activo' . $aprendiz1->activo;
echo '<br>' . 'Peso =' .$aprendiz1->peso; 

class Docente{
    private string $tipo_documento;
    private string $num_documento;

    public function __construct($tipo_documento, $num_documento) {
        $this->tipo_documento = $tipo_documento;
        $this->num_documento = $num_documento;
    }
    public function get_tipo_documento(){
        return $this -> tipo_documento;
    }
    public function get_num_documento(){
        return $this -> num_documento;
    }
    public function set_tipo_documento($tipo_documento){
        $this -> tipo_documento = $tipo_documento;
    }
    public function set_num_documento($num_documento){
        $this -> num_documento= $num_documento;
    }
}

$docente1 = new Docente('CC', '1542668554');
$docente2 = new Docente('TI', '1589625562');
$docente3 = new Docente('TI', '1002668554');
$docente4 = new Docente('CC', '1542660000');
$docente5 = new Docente('RC', '1542000554');

// '<br>' . 'Tipo de documento =' . $dosente1->tipo_documento; //error de encapsulamiento
//echo '<br>' . 'Numero de documento =' . $dosente1->num_documento;

echo '<br>' . 'DOCENTE 1';
echo '<br>' . 'Tipo de documento=' .$docente1->get_tipo_documento();
echo '<br>' . 'Numero de documento=' .$docente1->get_num_documento();

echo '<br>' . 'DOCENTE 2';
echo '<br>' . 'Tipo de documento=' .$docente2->get_tipo_documento();
echo '<br>' . 'Numero de documento=' .$docente2->get_num_documento();

echo '<br>' . 'DOCENTE 3';
echo '<br>' . 'Tipo de documento=' .$docente3->get_tipo_documento();
echo '<br>' . 'Numero de documento=' .$docente3->get_num_documento();

echo '<br>' . 'DOCENTE 4';
echo '<br>' . 'Tipo de documento=' .$docente4->get_tipo_documento();
echo '<br>' . 'Numero de documento=' .$docente4->get_num_documento();

echo '<br>' . 'DOCENTE 5';
echo '<br>' . 'Tipo de documento=' .$docente5->get_tipo_documento();
echo '<br>' . 'Numero de documento=' .$docente5->get_num_documento();

$docente1 -> set_tipo_documento('T.I');
$docente1 -> set_num_documento('1100000445');
$docente2 -> set_tipo_documento('CC');
$docente2 -> set_num_documento('1114524521');
$docente3 -> set_tipo_documento('RC');
$docente3 -> set_num_documento('1114520000');
$docente4 -> set_tipo_documento('CC');
$docente4 -> set_num_documento('1114525630');
$docente5 -> set_tipo_documento('RC');
$docente5 -> set_num_documento('1114521005');

