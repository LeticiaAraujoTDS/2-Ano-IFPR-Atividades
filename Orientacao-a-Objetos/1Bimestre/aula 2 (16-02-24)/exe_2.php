<?php

    $valorTotal =(float) 0;

    for ($i=0; $i < 40; $i++) { 
        $valorDado = (float)readline("Com quanto você pode contribuir? ");
        if ($valorDado == 0) {
            printf("O valor arrecadado é de R$%.2f .\n", $valorTotal);
            die();
        } 
        $valorTotal += $valorDado;
    }

    printf("O valor total arrecadado é de R$%.2f", $valorTotal );

    
