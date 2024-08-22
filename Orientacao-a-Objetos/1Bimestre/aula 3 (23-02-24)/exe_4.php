<?php

    function media($a, $b, $c){

        $media =  ( ($a * 3) + ($b * 5) + ($c * 2) ) / 10;
        printf ("A média ponderada é %.2f \n", $media);
    }

    $nota1 = readline("Informe o valor da nota 1: ");
    $nota2 = readline("Informe o valor da nota 2: ");
    $nota3 = readline("Informe o valor da nota 3: ");

    media($nota1, $nota2, $nota3);