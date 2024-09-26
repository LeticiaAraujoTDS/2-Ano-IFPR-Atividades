<?php

require_once("modelo/Funcionario.php");
require_once("modelo/Departamento.php");

$funcionarios = [];

for ($i=1; $i <= 5 ; $i++) { 
    echo "Cadastro $i: \n";
    $dept = new Departamento();
    $dept->setNome(readline("Qual o nome do departamento do funcionário $i:  "));
    $dept->setNumeroSala(readline("Qual o número da sala do funcionário $i:  "));

    $func = new Funcionario();
    $func->setNome(readline("Qual o nome do funcionário $i:  "));
    $func->setCargo(readline("Qual o cargo do funcionário $i:  "));
    $func->setSalario(readline("Qual o salário do funcionário $i:  "));
    $func->setDepto($dept);

    array_push($funcionarios, $func);
}

foreach ($funcionarios as $key => $f) {
    echo "Funcionário " . ($key+1) . ": " . $f;
}