<?php

require_once("Calculadora.php");

class Soma extends Calculadora{
    //sobreescrevendo o metodo calcular
    public function calcular(){
        $soma = $this->getNumA() + $this->getNumB();
        return "A soma dos números A = " . $this->getNumA() . " + B = " . $this->getNumB() . " é igual a " . $soma . ".\n";
    }
}