<?php

require_once("modelo/Desenvolvedor.php");
require_once("modelo/Estagiario.php");
require_once("modelo/Gerente.php");

do {
    echo "\n------- Cargos -------\n";
    echo "1 - Gerente ----------\n";
    echo "2 - Desenvolvedor ----\n";
    echo "3 - Estagiário -------\n";
    echo "0 - Sair -------------\n";
    echo "----------------------\n";

    $escolha = readline("Informe qual o cargo do funcionário: ");
    echo "-----\n\n";
    switch ($escolha) {
        case '1':
            $gerente = new Gerente();
            $gerente->setNome(readline("Informe o nome do gerente: "));
            echo $gerente->getDados();
            echo "-----\n\n";
            break;

        case '2':
            $desenvolvedor = new Desenvolvedor();
            $desenvolvedor->setNome(readline("Informe o nome do desenvolvedor: "));
            echo $desenvolvedor->getDados();
            echo "-----\n\n";
            break;

        case '3':
            $estagiario = new Estagiario();
            $estagiario->setNome(readline("Informe o nome do estagiário: "));
            echo $estagiario->getDados();
            echo "-----\n\n";
            break;

        case '0':
            echo "Saindo do programa . . . \n";
            break;

        default:
            echo "Você digitou um opção que não existe. Digite novamente.\n\n";
            break;
    }
} while ($escolha != 0);
