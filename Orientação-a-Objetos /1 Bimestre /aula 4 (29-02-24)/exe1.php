<?php

    $vetor = array();

    for ($i=0; $i < 10; $i++) { 
        $numero = readline("Informe um número: ");
        array_push($vetor, $numero);
    }

    $soma = 0;
    $a = 0;
    foreach ($vetor as $soma) {
        $soma += + $a;
        $a = $soma;
    }

    $media = $soma/10;

    print  "A média dos elementos dos vetor é " . $media . "\n";