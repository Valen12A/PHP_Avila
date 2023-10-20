<?php

$lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$filtrar_pares = function($numero) {
    return ($numero % 2) == 0;
};

$numeros_pares = array_filter($lista, $filtrar_pares);

$numeros_pares = array_values($numeros_pares);

print_r($numeros_pares);

