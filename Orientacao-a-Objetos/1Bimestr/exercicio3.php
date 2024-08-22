<?php

$turmas = array();

//Ler as turmas
for ($i=0; $i < 4; $i++) { 
    $turma = array();
    $turma["curso"] = readline("Informe o curso da turma " . $i . ": ");
    $turma["ano"] = readline("Informe o ano da turma " . $i . ": ");
    $turma["qtdAlunos"] = readline("Informe a quantidade de alunos da turma " . $i . ": ");
    array_push($turmas, $turma);
}
$a = 0;
foreach ($turmas as $turma) {
    $a = $a + $turma["qtdAlunos"];
}
print ("\nA quantidade de alunos é " . $a . ".\n");