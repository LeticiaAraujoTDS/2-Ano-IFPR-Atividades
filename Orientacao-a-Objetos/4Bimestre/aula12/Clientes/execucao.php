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

    $opcao = readline("Informe a opção: ");

    switch ($opcao) {
        case '1':

            $cliente = new ClientePF();
            $cliente->setNome(readline("Informe o seu nome: "));
            $cliente->setNomeSocial(readline("Informe o nome Social: "));
            $cliente->setCpf(readline("Informe o seu CPF: "));
            $cliente->setEmail(readline("Informe o seu e-mail: "));
            print_r($cliente);

            $clienteDAO = new ClienteDAO;
            $clienteDAO->inserirCliente($cliente);
            echo "Cliente PF cadastrado com sucesso.\n";
            break;

        case '2':

            $cliente = new ClientePJ();
            $cliente->setRazaoSocial(readline("Informe a razão social: "));
            $cliente->setNomeSocial(readline("Informe o nome Social: "));
            $cliente->setCnpj(readline("Informe o seu CNPJ: "));
            $cliente->setEmail(readline("Informe o seu e-mail: "));
            print_r($cliente);

            $clienteDAO = new ClienteDAO;
            $clienteDAO->inserirCliente($cliente);
            echo "Cliente PJ cadastrado com sucesso.\n";
            break;

        case '3':
            $clienteDao = new ClienteDAO;
            $clientes = $clienteDao->listarClientes();
            foreach ($clientes as $c) {
                printf(
                    "%d - %s | %s | %s | %s | %s\n",
                    $c->getId(),
                    $c->GetTipo(),
                    $c->getNomeSocial(),
                    $c->GetIdentificacao(),
                    $c->GetNroDoc(),
                    $c->getEmail()
                );
            }
            break;

        case '4':
             // 1. Ler o ID do cliente
            $id = readline("Informe o ID do cliente que deseja buscar: ");
        
            // 2. Chamar o método que retorna o objeto cliente do banco de dados
            $clienteDAO = new ClienteDAO();
            $cliente = $clienteDAO->buscarPorId($id);
        
            // 3. Verificar se o cliente retornado é diferente de NULL
            if ($cliente !== null) {
                echo "Cliente encontrado:\n";
                printf(
                    "%d- %s | %s|  %s | %s\n", $cliente->getId(), $cliente->getTipo(), $cliente->getNomeSocial(),$cliente->getIdentificacao(), $cliente->getEmail());
            } else {
                echo "Cliente não encontrado!\n";
            }
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
