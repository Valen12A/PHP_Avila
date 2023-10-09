<?php
class Pared{
    private string $materiales;
    public function __construct($materiales){
        $this->materiales= $materiales;
        echo 'Soy el Constructor. Se ejecuta automáticamente';
    }
    public function get_materiales(){
        return $this->materiales;
    }
    public function set_materiales($materiales){
        $this->materiales = $materiales;
    }
    public function saludar(){
        echo '<br>'.'Invocando un método PHP. ';
    }
}
//Declarar un objeto
$pared_sala = new Pared('Bloque número 5, 20x20 cm');
$pared2 = new Pared('Bloque número 10 10x10 cm');

$pared2 ->saludar();

