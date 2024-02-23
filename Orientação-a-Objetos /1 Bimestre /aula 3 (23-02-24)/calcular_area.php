<?php

    function calcular_area ($raio){
  
        $pi = 3.14;
        $calcular = $pi * ($raio * $raio);
        return $calcular;

    }
    function calcular_circunferencia($raio){

        $pi = 3.14;
        $calculo = 2 * $pi * $raio;
        return $calculo;
    }

    for ($i=0; $i < 3; $i++) { 
        
        $a = readline ("Informe o raio do círculo em cm: ");
        $resultado = calcular_area($a);
        $result = calcular_circunferencia($a);
        printf ("%.2f cm é a área do círculo.\n", $resultado);
        printf ("%.2f cm é a circunferência do círculo.\n", $resultado);
        //para usar o %d e etc, precisa usar o printf("");
    }