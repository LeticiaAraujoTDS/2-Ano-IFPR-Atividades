<?php

    $a = (int) readline("Informe um número: ");
    $b = (int) readline("Infomr um  número: ");

    if($a < $b) {
        for ($i=$a +1; $i < $b ; $i++) { 
       
            if ($i % 5 == 0) {

                print "$i" . " é divisível por 5. \n";

            }
        }
    } else {
        for ($i=$b + 1; $i < $a ; $i++) { 
       
            if ($i % 5 == 0) {

                print "$i" . " é divisível por 5. \n";

            }
        }
    }
