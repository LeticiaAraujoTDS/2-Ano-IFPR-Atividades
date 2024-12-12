<?php

require_once("Calculadora.php");

class   Multiplicar extends Calculadora{
    //sobreescrevendo o metodo calcular
    public function calcular(){
        $multiplicacao = $this->getNumA() * $this->getNumB();
        return "A multiplicação dos números A = " . $this->getNumA() . " x B = " . $this->getNumB() . " é igual a " . $multiplicacao . ".\n";
    }
}