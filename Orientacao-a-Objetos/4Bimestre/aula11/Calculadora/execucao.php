<?php

require_once("modelo/Divisao.php");
require_once("modelo/Multiplicar.php");
require_once("modelo/Resto.php");
require_once("modelo/Soma.php");
require_once("modelo/Subtracao.php");

do {
    echo "\n";
    $numA = readline("Informe o valor do número A: ");
    $numB = readline("Informe o valor do número B: ");
    if ($numA == 0 && $numB == 0) {
        echo "Ambos os valores informados são 0. Saindo . . .\n";
        break;
    } else {
        echo "\n";
        echo "----Calculadora----\n";
        echo "1 - Soma ----------\n";
        echo "2 - Subtração -----\n";
        echo "3 - Multiplicação -\n";
        echo "4 - Divisão -------\n";
        echo "5 - Resto ---------\n";
        echo "-------------------\n";
        $escolha = readline("Informe sua escolha: ");
        switch ($escolha) {
            case '1':
                $soma = new Soma($numA, $numB);
                echo $soma->calcular();
                break;

            case '2':
                $subtracao = new Subtracao($numA, $numB);
                echo $subtracao->calcular();
                break;
            case '3':
                $multiplicacao = new Multiplicar($numA, $numB);
                echo $multiplicacao->calcular();
                break;

            case '4':
                $divisao = new Divisao($numA, $numB);
                echo $divisao->calcular();
                break;

            case '5':
                $resto = new Resto($numA, $numB);
                echo $resto->calcular();
                break;

            default:
                # code...
                break;
        }
    }
} while (true);
