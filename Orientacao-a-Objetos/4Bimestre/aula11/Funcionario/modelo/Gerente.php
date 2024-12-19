<?php

require_once("Funcionario.php");

class Gerente extends Funcionario
{

    public function getSalario()
    {
        $salario = 1500 * 4.5;
        return  $salario;
    }

    public function getFuncao()
    {
        $cargo = "Gerente";
        return $cargo;
    }
}
