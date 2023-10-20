<?php
declare(strict_types=1);

class Aprendiz {
    private string $nombre;
    private string $apellidos;
    private string $programa;
    private int $num_ficha;
    private string $centro_formacion;

    public function __construct(string $nombre, string $apellidos, string $programa, int $num_ficha, string $centro_formacion) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->programa = $programa;
        $this->num_ficha = $num_ficha;
        $this->centro_formacion = $centro_formacion;
    }

    public function get_nombre(){
        return $this -> nombre;
        }
    public function get_apellidos(){
        return $this -> apellidos;
        }
    public function get_programa(){
        return $this -> programa;
        }
        public function get_num_ficha(){
            return $this -> num_ficha;
            }
        public function get_centro_formacion(){
            return $this -> centro_formacion;
            }
}


class Ficha{
    private int $num_ficha;
    private string $programa;
    private int $ambiente_formacion;
    private int $num_aprendices;
    private $aprendices;

    public function __construct(int $num_ficha, string $programa, int $ambiente_formacion, int $num_aprendices) {
        $this->num_ficha = $num_ficha;
        $this->ambiente_formacion = $ambiente_formacion;
        $this->programa = $programa;
        $this->num_aprendices = $num_aprendices;
    }

    public function get_num_ficha(){
        return $this -> num_ficha;
        }
    public function get_ambiente_formacion(){
        return $this -> ambiente_formacion;
        }
    public function get_programa(){
        return $this -> programa;
        }
    public function get_num_aprendices(){
        return $this -> num_aprendices;
        }
    public function agregarAprendiz(Aprendiz $aprendiz) {
        $this->aprendices[] = $aprendiz;
    }
    public function get_aprendices() {
        return $this->aprendices;
        }
    
}

$aprendiz1 = new Aprendiz('Valentina','Avila Ramirez','ADSO',2693630, 'CIDE');
$aprendiz2 = new Aprendiz('Juan','Gomez Prada','ADSO',2693630, 'CIDE');
$aprendiz3 = new Aprendiz('Danna','Jimenez Castro','ADSO',2693630, 'CIDE');
$aprendiz4 = new Aprendiz('Maikol','Garcia Mendez','ADSO',2693630, 'CIDE');
$aprendiz5 = new Aprendiz('Cristian','Leon Valencia','ADSO',2693630, 'CIDE');
$aprendiz6 = new Aprendiz('Ronald','Puerto Pinilla','ADSO',2693630, 'CIDE');


$adso = new Ficha(2693630, 'ADSO', 206, 18);
$adso->agregarAprendiz($aprendiz1);
$adso->agregarAprendiz($aprendiz2);
$adso->agregarAprendiz($aprendiz3);
$adso->agregarAprendiz($aprendiz4);
$adso->agregarAprendiz($aprendiz5);
$adso->agregarAprendiz($aprendiz6);

echo "Ficha: " . $adso->get_programa() . "<br>";
echo "Numero de ficha: " . $adso->get_num_ficha() . "<br>";
echo "Numpero de aprendices: " . $adso->get_num_aprendices() . "<br>";
echo "Ambiente de formacion: " . $adso->get_ambiente_formacion() . "<br>";
echo "Aprendices de la Ficha:<br>";
foreach ($adso->get_aprendices() as $aprendiz) {
    echo "<br>" . "Nombre: " . $aprendiz->get_nombre() . "<br>";
    echo "<br>" . "Apellidos: " . $aprendiz->get_apellidos() ."<br>";
    echo "<br>" . "Programa: " . $aprendiz->get_programa() ."<br>";
    echo "<br>" . "Ficha: " . $aprendiz->get_num_ficha() ."<br>";
    echo "<br>" . "Programa: " . $aprendiz->get_centro_formacion() ."<br>";

}
