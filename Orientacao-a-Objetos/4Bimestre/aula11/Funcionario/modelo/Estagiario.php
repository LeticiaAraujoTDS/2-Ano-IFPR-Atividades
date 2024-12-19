<?php

require_once("Funcionario.php");

class Estagiario extends Funcionario
{


    public function getSalario()
    {
        $salario = 1500 * 0.8;
        return $salario;
    }

    public function getFuncao()
    {
        $cargo = "Estagiário";
        return $cargo;
    }
}
