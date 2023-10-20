<?php
function metodo1($nombre, $saludo, $pregunta, $despedida) {
    echo   "$saludo $nombre, $pregunta, $despedida.";
}

metodo1(saludo: "Buenos dias", nombre: "Valentina", pregunta: "¿Como estas?",  despedida:"Adios");


function metodo2($nombre, $edad = "20", $estatura = "1.80", $profesion = "Programador") {
    echo '<br>' . "$nombre $edad $estatura $profesion";
}

metodo2("Juan"); 

