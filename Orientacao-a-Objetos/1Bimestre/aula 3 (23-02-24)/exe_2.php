<?php

    function area($base, $altura){

        $area = $base * $altura;
        printf ("%.2f cm é a área deste retângulo.\n", $area);

    }
    function perimetro($lado){

        $perimetro = $lado * 4;
        printf ("%.2f cm é o perímetro deste retângulo.\n", $perimetro);
    }

    for ($i=0; $i < 3; $i++) { 
        $b =(float) readline("Informe o valor da base do retângulo: ");
        $a =(float) readline("Informe o valor da altura do retângulo: ");
        $l =(float) readline("Informe o valor do lado do retângulo: ");

        area($b , $a);
        perimetro($l);
    }