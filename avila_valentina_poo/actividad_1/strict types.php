<?php
declare(strict_types=1);

function multiplicacion(int $numero1, int $numero2) {
    return $numero1 * $numero2;
}                                                       //Ejecutara sin problemas
$resultado = multiplicacion(5, 3); 
echo 'La mutiplicacion es:' . $resultado;



function division(int $numero1, int $numero2) {
    return $numero1 / $numero2;
}                                                       //Causara un error-
$resultado = division("5", "3"); 
?>