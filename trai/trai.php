<?php
    trait mensaje{
    public function imprimir_mensaje(){
        echo "Utilizando un trait en php para POO";
}
}

class Bienvenido {
    use mensaje;
}

$objeto1 = new Bienvenido();
$objeto1 -> imprimir_mensaje();

?>