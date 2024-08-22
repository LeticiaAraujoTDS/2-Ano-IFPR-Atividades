<?php

    $a = (int) readline("Informe um valor para a: ");
    $b = (int) readline("Infome um valor para b: ");

    if($a < $b) {
        for ($i = $a +1; $i < $b ; $i++) { 
       
            if ($i % 5 == 0) {

                print "$i" . " é divisível por 5. \n";

            }
        }
    } else {
        for ($i = $b + 1; $i < $a ; $i++) { 
       
            if ($i % 5 == 0) {

                print "$i" . " é divisível por 5. \n";

            }
        }
    }
