<?php

    function soma ($num1, $num2){

        $soma = $num1 + $num2;
        //echo $soma . "\n";
        return $soma;
    }

    //Programa principal

    $soma = soma(1, 2);
    echo $soma . "\n";
    //para fazer o return funcionar precisa atribuir a função a uma variável, e depois fazer um echo ou print para ser escrito.
    // as variaveis e função soma são diferentes, poiso php permite que tenham o mesmo nome desde que não estejam no mesmo escopo
    //nunca usar variável global para não dar erro no programa