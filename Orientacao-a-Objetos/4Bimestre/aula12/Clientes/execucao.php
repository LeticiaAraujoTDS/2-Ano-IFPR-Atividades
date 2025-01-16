<?php

// require_once("util/conexao.php");
require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
// $conexao = Conexao::GetCon();
// print_r($conexao); 

echo "\n--- Cadastro de Clientes ---- \n";
echo "1 - Cadastrar Cliente PF ----- \n";
echo "2 - Cadastrar Cliente PJ -----\n";
echo "3 - Listar Clientes ----------\n";
echo "4 - Buscar Clientes ----------\n";
echo "5 - Excluir Cliente ----------\n";
echo "0 - Sair ---------------------\n";

$opcao = readline("Informe a opção: ");

do {
    switch ($opcao) {
        case '1':

            $cliente = new ClientePF();
            $cliente->setNome(readline("Informe o seu nome: "));
            $cliente->setNomeSocial(readline("Informe o nome Social: "));
            $cliente->setCpf(readline("Informe o seu CPF: "));
            $cliente->setEmail(readline("Informe o seu e-mail: "));
            print_r($cliente);
            break;

        case '2':

            break;

        case '3':

            break;

        case '4':

            break;

        case '5':

            break;

        case '0':
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida! Digite novamente.";
            break;
    }
} while ($opcao != 0);
