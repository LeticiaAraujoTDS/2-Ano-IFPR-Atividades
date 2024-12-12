<?php

require_once("modelo/Carro.php");
require_once("modelo/MicroOnibus.php");
require_once("modelo/Onibus.php");
require_once("modelo/Van.php");

echo "---Aluguel de Veículos-----\n";
echo "1 - Alugar Carro ----------\n";
echo "2 - Alugar Van ------------\n";
echo "3 - Alugar Micro-ônibus ---\n";
echo "4 - Alugar Ônibus ---------\n";
echo "---------------------------\n";
$escolha = readline("Informe qual transporte irá alugar: ");

switch ($escolha) {
    case '1':
        $carro = new Carro();
        $carro->setValorAluguel(readline("Informe o valor do aluguel: "));
        $carro->setValorAdicional(1.50);
        $carro->setKmRodados(readline("Informe quantos quilômetros irá andar com o veículo: "));
        echo $carro;
        break;

    case '2':
        $van = new Van();
        $van->setValorAluguel(readline("Informe o valor do aluguel: "));
        $van->setValorAdicional(2.10);
        $van->setKmRodados(readline("Informe quantos quilômetros irá andar com o veículo: "));
        echo $van;
        break;

    case '3':
        $microOnibus = new MicroOnibus();
        $microOnibus->setValorAluguel(readline("Informe o valor do aluguel: "));
        $microOnibus->setValorAdicional(2.75);
        $microOnibus->setKmRodados(readline("Informe quantos quilômetros irá andar com o veículo: "));
        echo $microOnibus;
        break;

    case '4':
        $onibus = new Onibus();
        $onibus->setValorAluguel(readline("Informe o valor do aluguel: "));
        $onibus->setValorAdicional(4.20);
        $onibus->setKmRodados(readline("Informe quantos quilômetros irá andar com o veículo: "));
        echo $onibus;
        break;

    default:
        # code...
        break;
}
