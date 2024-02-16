<?php

$numeroLido = readline("Informe un número: ");

    for ($i=$numeroLido; $i >0 ; $i--) { 
        print $numeroLido . ", ";
        $numeroLido--;
    }