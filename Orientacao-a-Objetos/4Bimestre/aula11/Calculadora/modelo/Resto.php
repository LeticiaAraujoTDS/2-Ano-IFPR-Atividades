<?php

require_once("Calculadora.php");

class Resto extends Calculadora{
    //sobreescrevendo o metodo calcular
    public function calcular(){
        $resto = $this->getNumA() % $this->getNumB();
        return "O resto da divisão de A = " . $this->getNumA() . " / B = " . $this->getNumB() . " é igual a " . $resto . ".\n";
    }
}