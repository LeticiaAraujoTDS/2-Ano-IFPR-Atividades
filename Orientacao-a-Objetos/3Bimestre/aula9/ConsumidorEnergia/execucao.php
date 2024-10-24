<?php

require_once("modelo/Residencial.php");
require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");

$escolha = 0;

do {
    echo "\n*****************************";
    echo "\n* 1 - Consumo Residencial ***";
    echo "\n* 2 - Consumo Comercial   ***";
    echo "\n* 3 - Consumo Industrial  ***";
    echo "\n* 0 - Sair ******************\n";

    $escolha = readline("Informe qual o seu tipo de consumo: ");

    switch ($escolha) {
        case '1':
            $residencial = new Residencial();
            $residencial->setConsumo(readline("Informe quantos Kwh foram consumidos na residencia: "));
            echo"Calculando o valor . . . ";
            echo "\nO valor da sua fatura é de R$" . $residencial->getValorFatura() . " reais.\n";
            break;

        case '2':
            $comercial = new Comercial();
            $comercial->setConsumo(readline("Informe quantos Kwh foram consumidos no comércio: "));
            echo"Calculando o valor . . . ";
            echo "\nO valor da sua fatura é de R$" . $comercial->getValorFatura() . " reais.\n";
            break;

        case '3':
            $industrial = new Industrial();
            $industrial->setConsumo(readline("Informe quantos Kwh foram consumidos na industria: "));
            echo"Calculando o valor . . . ";
            echo "\nO valor da sua fatura é de R$" . $industrial->getValorFatura() . " reais.\n";
            break;

        case '0':
            echo "Saindo do programa.\n";
            break;

        default:
            echo "Digite um valor válido.\n";
            break;
    }
} while ($escolha != 0);
