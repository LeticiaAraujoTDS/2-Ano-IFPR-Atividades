<?php

require_once("Calculadora.php");

class Subtracao extends Calculadora{
    //sobreescrevendo o metodo calcular
    public function calcular(){
        $subtracao = $this->getNumA() - $this->getNumB();
        return "A subtração dos números A = " . $this->getNumA() . " - B = " . $this->getNumB() . " é igual a " . $subtracao . ".\n";
    }
}