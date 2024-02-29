<?php

    function verificar($num) {

            if ($num < 2) {
                return false; 
            }
            
            for ($i = 2; $i <= ($num)/2; $i++) {
                if ($num % $i == 0) {
                    return false; 
                }
            }

        return true;
    }

    /* Programa principal */
    
    $num = 0;

    while (true) {

        $num = readline("Informe um número para saber se é primo ou não: ");

            if ($num < 2) {
                print "Programa encerrado, pois digitou um número menor que 2.\n";
                break;
            }
        
            if (verificar($num)) {
                print ($num . " é um número primo.\n");
            } else {
                print ($num . " não é um número primo.\n");
            }
    }
