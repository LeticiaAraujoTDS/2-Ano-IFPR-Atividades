<?php

$numeroLido = readline("Informe un número: ");

    for ($i=$numeroLido; $i > 0 ; $i--) { 
        if ($numeroLido == 1) {
            print $numeroLido . " ";
            print "\n";
        }else {
            print $numeroLido . ", ";
            $numeroLido--;
        }
    }
