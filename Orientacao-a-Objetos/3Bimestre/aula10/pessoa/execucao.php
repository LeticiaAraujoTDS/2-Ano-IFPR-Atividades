<?php

require_once("modelo/PessoaFisica.php");
require_once("modelo/PessoaJuridica.php");

function listarPessoas(array $pessoas)
{
    echo "PESSOAS CADASTRADAS\n";
    $i = 1;
    foreach ($pessoas as $p) {
        if ($p instanceof PessoaFisica) {
            echo $i . " - " . $p->getDadosPf();
            $i++;
        } elseif($p instanceof PessoaJuridica) {
            echo $i . " - " . $p->getDadosPj();
        }
    }
}

$opcao = 0;
$pessoas = array();

do {
    echo "\n\n------MENU------\n";
    echo "1- Cadastrar pessoa física\n";
    echo "2- Cadastrar pessoa jurídica\n";
    echo "3- Listar\n";
    echo "4- Excluir\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    echo "\n";
    switch ($opcao) {
        case 1:
            $pf = new PessoaFisica();
            $pf->setNome(readline("Informe o nome: "));
            $pf->setIdade(readline("Informe a idade: "));
            $pf->setCpf(readline("Informe o CPF: "));
            array_push($pessoas, $pf);
            break;

        case 2:
            $pj = new PessoaJuridica();
            $pj->setNome(readline("Informe o nome: "));
            $pj->setNomeFantasia(readline("Informe o nome fantasia: "));
            $pj->setCnpj(readline("Informe o CNPJ: "));
            array_push($pessoas, $pj);
            break;

        case 3:
            listarPessoas($pessoas);
            break;

        case 4:
            listarPessoas($pessoas);

            $idx = readline("Informe o índice da pessoa a ser excluída: ");

            if ($idx > 0 && $idx <= count($pessoas))
                array_splice($pessoas, $idx - 1, 1);
            else
                echo "Índice informado é inválido.\n";
            break;

        case 0:
            echo "Programa encerrado!!\n";
            break;

        default:
            echo "Opção inválida\n";
    }
} while ($opcao != 0);
