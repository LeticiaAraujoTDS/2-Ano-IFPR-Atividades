<?php

    $numImpar = 0;
    $numPar = 0;

    for ($i=0; $i < 10; $i++) { 

        $num = readline("Informe um número: ");

        if ($num % 2 == 0) {

            $numPar = $numPar + 1;

        } else {
            
            $numImpar = $numImpar + 1;
        }
    }
    print "A quantidade de números pares é "  . $numPar . " e a quantidade de números ímpares é " . $numImpar ;
