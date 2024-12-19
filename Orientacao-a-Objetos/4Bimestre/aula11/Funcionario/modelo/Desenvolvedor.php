<?php

require_once("Funcionario.php");

class Desenvolvedor extends Funcionario
{


    public function getSalario()
    {
        $salario = 1500 * 2.3;
        return $salario;
    }

    public function getFuncao()
    {
        $cargo = "Desenvolvedor";
        return $cargo;
    }
}
