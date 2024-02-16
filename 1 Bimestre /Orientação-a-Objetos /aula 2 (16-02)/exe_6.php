<?php

    $a = readline("Informe o valor do coeficiente a: ");
    $b = readline("Informe o valor do coeficiente b: ");
    $c = $a;

    $n = 0;

    for ($i=1; $i <= $b; $i++) { 
        
        $c = $n +$a;
        $n = $c;
    }

    print ("$c\n");
