<?php

require_once("modelo/Aluno.php");
require_once("modelo/Turma.php");

$turma = new Turma("TDS", "Desenvolvimento de Sistemas");
$a = array();

for ($i=0; $i < 5; $i++) { 
    $alunos = new Aluno;
    $alunos->setNome(readline("Informe o nome do aluno: "));
    $alunos->setIdade(readline("Informe a idade do aluno: "));
    array_push($a, $alunos);
}
$turma->setAlunos($a);
foreach ($turma->getAlunos() as $b) {
    echo $b;
}