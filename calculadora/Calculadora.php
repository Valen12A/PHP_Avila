<?php

class operacion{
    private int $operador1;
    private int $operador2;

    public function __construct() {
    }

    public function get_operador1(){
        return $this->operador1;
    }

    public function set_operando1(int $operando1){
        if(!empty($operador1) && is_numeric($operador1)){
            $this->operador1 = $operador1;
        }
        }
        public function get_operando2(){
        return $this->operador2;
        }
        public function set_operando2(int $operando2){
        if(!empty($operador2) && is_numeric($operando2)){
        $this->operador2 = $operador2;
        }
        }

    public function sumar(int $operador1, int $operador2){
        return  $operador1 + $operador2;
    }

    public function restar(int $operador1, int $operador2){
        return $operador1 - $operador2;
    }

    public function multplicar(int $operador1,$operador2){
        return $operador1 * $operador2;
    }

    public function dividir(int $operador1,int $operador2){
        if ($operador2 != 0) {
            return $operador1 / $operador2;
        }
        else {
            echo 'No es posible dividir por cero';
        return;
        }
}
}




$op = new operacion();
echo $op->dividir($num1,$num2);
