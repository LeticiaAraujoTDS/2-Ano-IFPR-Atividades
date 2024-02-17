<?php

    for ($i=0; $i < 5; $i++) { 
        
        $nome = readline("Informe o seu nome: ");
        $altura = (float)readline("Informe a sua altura (m): ");
        $peso = (int)readline("Informe o seu peso (kg): ");
        $imc = $peso / ($altura * $altura);
           // print ("\n$nome pesa $peso kg, tem altura de $altura m e imc de $imc. \n");
        printf("%s pesa %d, tem altura de %f e tem IMC de %.2f \n", $nome, $peso, $altura, $imc);
            //%s = string ; %d = int ; %f = float ; PARA DEFINIR CASAS DECIMAIS É SÓ % .NUMERO DE CASASf

    }
    
    
