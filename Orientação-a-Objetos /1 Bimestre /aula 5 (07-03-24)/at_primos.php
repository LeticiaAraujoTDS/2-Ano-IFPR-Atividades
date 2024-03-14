<?php

function verificar($num)
{
    if ($num <= 0) {
        return false;
    }
    for ($i = 2; $i <= ($num) / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

/* Programa principal */

$num = 0;
$num_vetor = [];

while (true) {
    $num = readline("Informe um número: ");
    if ($num <= 0) {
        print "Programa encerrado, pois digitou um número igual a 0 ou menor.\n";
        break;
    }
    if (verificar($num)) {
        array_push($num_vetor, $num);
    }
}
print("Os números primo são: \n");
foreach ($num_vetor as $resultados) {
    print "$resultados\n";
}