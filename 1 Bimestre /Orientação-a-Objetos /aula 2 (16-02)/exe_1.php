<?php

    $numeroLido = (int) readline("Informe um número: ");

    if ($numeroLido < 0 ) {
        
        print ("Este número é negativo e seu triplo é : " . $numeroLido * 3 . "\n");

    } else {

        print ("Este número é positivo e seu dobro é : " . $numeroLido * 2 . "\n");
    }
