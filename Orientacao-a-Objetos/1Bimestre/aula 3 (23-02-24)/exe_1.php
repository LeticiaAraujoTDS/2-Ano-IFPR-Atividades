<?php

    function funcao($x){

        $f = (5 * $x) + (2 * $x) + 3;
        print "$f. \n";

    }

    for ($i=0; $i < 5; $i++) { 
        $y = readline("Informe um valor para x: ");
        funcao($y);
    }