<?php
//Funcão
function verificar($num)
{
    //é 1 pq ele não é primo
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= ($num) / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

//Programa Principal
$vetor_num = array();
while (true) {
    $num = readline("Informe um número: ");
    //tem que ser 0 pq pede para o progrma encerra se for digitado o número 0
    if ($num <= 0) {
        print "Programa encerrado.\n";
        print "Os números primos são: \n";
        foreach ($vetor_num as $resultados) {
            print $resultados . "\n";
        }
        break;
    }
    if (verificar($num)) {
        array_push($vetor_num, $num);
    }
}
