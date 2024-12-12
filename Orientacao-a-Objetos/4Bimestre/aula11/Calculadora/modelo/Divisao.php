<?php

require_once("Calculadora.php");

class Divisao extends Calculadora{
    //sobreescrevendo o metodo calcular
    public function calcular(){
        $divisao = $this->getNumA() / $this->getNumB();
        return "A divisão dos números A = " . $this->getNumA() . " / B = " . $this->getNumB() . " é igual a " . $divisao . ".\n";
    }
}