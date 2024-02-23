<?php

    function verificar($a) {

        if (($a% 2 !== 0) && ($a % 3 !== 0) && ($a % 1 == 0) && ($a % $a == 0)) {

            printf ("%d é um número primo.\n", $a);

        } elseif (($a == 2) or ($a ==3)) {

            printf ("%d é um número primo.\n", $a);

        } else 

            printf ("%d não é um número primo.\n", $a);
    }

    $num = 0;

    do {

       $num = readline("Informe um número: ");
       verificar($num);
       
    } while ($num >= 2);
