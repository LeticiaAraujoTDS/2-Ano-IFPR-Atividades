<?php

//require_once("util/conexao.php");
require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("dao/ClienteDAO.php");
//$conexao = Conexao::GetCon();
//print_r($conexao); 

do {

    echo "\n--- Cadastro de Clientes ---- \n";
    echo "1 - Cadastrar Cliente PF ----- \n";
    echo "2 - Cadastrar Cliente PJ -----\n";
    echo "3 - Listar Clientes ----------\n";
    echo "4 - Buscar Clientes ----------\n";
    echo "5 - Excluir Cliente ----------\n";
    echo "0 - Sair ---------------------\n";
    echo "\n---\n";

    $opcao = readline("Informe a opção: ");
    echo "\n---\n";

    switch ($opcao) {
        case '1':

            $cliente = new ClientePF();
            $cliente->setNome(readline("Informe o seu nome: "));
            $cliente->setNomeSocial(readline("Informe o nome Social: "));
            $cliente->setCpf(readline("Informe o seu CPF: "));
            $cliente->setEmail(readline("Informe o seu e-mail: "));

            $clienteDAO = new ClienteDAO;
            $clienteDAO->inserirCliente($cliente);
            echo "\n---\n";
            echo "Cliente PF cadastrado com sucesso.";
            echo "\n---\n";
            break;

        case '2':

            $cliente = new ClientePJ();
            $cliente->setRazaoSocial(readline("Informe a razão social: "));
            $cliente->setNomeSocial(readline("Informe o nome Social: "));
            $cliente->setCnpj(readline("Informe o seu CNPJ: "));
            $cliente->setEmail(readline("Informe o seu e-mail: "));

            $clienteDAO = new ClienteDAO;
            $clienteDAO->inserirCliente($cliente);
            echo "\n---\n";
            echo "Cliente PJ cadastrado com sucesso.";
            echo "\n---\n";
            break;

        case '3':

            $clienteDao = new ClienteDAO;
            $clientes = $clienteDao->listarClientes();
            echo "Listando Clientes: \n";
            foreach ($clientes as $c) {
                echo $c;
            }
            echo "---\n";
            break;

        case '4':

            $id = readline("Informe o ID do cliente que deseja buscar: ");
            $clienteDAO = new ClienteDAO();
            $cliente = $clienteDAO->buscarPorId($id);
            if ($cliente !== null) {
                echo "\n---\n";
                echo "Cliente encontrado:\n";
                echo $cliente;
            } else {
                echo "Cliente não encontrado!\n";
            }
            echo "---\n";
            break;

        case '5':

             $clienteDao = new ClienteDAO;
             $cliente = $clienteDao->listarClientes();
             foreach ($cliente as $c) {
                 echo $c;
             }
            do {
                $id = readline("Informe o ID que deseja excluir: ");
                $cliente = $clienteDao->buscarPorId($id);
                if ($cliente !== null) {
                    $cliente = $clienteDao->excluirPorId($id);
                    if ($cliente) {
                        echo "\n---\n";
                        echo "Cliente " . $id . " excluído!";
                        echo "\n---\n";
                    } else {
                        echo "\n---\n";
                        echo "Cliente não excluído!";
                        echo "\n---\n";
                    }
                    $cliente = $clienteDao->listarClientes();
                    foreach ($cliente as $c) {
                        echo $c;
                    }
                    echo "---\n";
                } else {
                    echo "\n---\n";
                    echo "Cliente não encontrado!";
                    echo "\n---\n";
                }
            } while ($cliente == null);

            break;

        case '0':
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida! Digite novamente.";
            break;
    }
} while ($opcao != 0);
