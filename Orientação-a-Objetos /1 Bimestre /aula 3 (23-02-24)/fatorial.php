<?php

    function fatorial ($a) {
        
        $c = 1;
        $n = $c;

        for ($i= $a; $i >= 1; $i--) { 
           
            $c = $n * $i;
            $n = $c;
        } 
        print "O fatorial é : $c\n";
    }
        do {
            $num = readline("Informe um número: ");
            if ($num == 0){
               print (" \n");
               die();
            }
            fatorial($num);
        } while ($num != 0);
    