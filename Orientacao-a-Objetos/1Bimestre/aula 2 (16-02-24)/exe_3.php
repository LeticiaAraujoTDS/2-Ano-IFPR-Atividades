<?php

    $a = readline("Informe o valor de a: ");
    $b = readline("Informe o valor de b: ");
    $c = readline("Informe o valor de c: ");

    if ($a < $b && $a < $c) {
        print "O " . $a . " é o menor número.";
    } elseif ($b < $a && $b < $c ) {
        print "O " . $b . " é o menor número.";
    } else {
        print "O " . $c . " é o menor número.";
    }
    
