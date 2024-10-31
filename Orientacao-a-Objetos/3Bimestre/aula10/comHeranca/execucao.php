<?php

require_once("modelo/Aluno.php");
require_once("modelo/Professor.php");
require_once("modelo/Pessoa.php");
//Aluno
$aluno = new Aluno();
$aluno->setNome("Leticia");
$aluno->setMatricula(2324345);
$aluno->setIdade(17);
$aluno->setRg(12345678998);

echo $aluno;