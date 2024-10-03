<?php

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

$arrayPedidos = array();
$arrayPratos = array(
    new Prato(1, "Camarão à Milanesa", 110.00),
    new Prato(2, "Pizza Margherita ", 80.00),
    new Prato(3, "Macarrão à Carbonara", 60.00),
    new Prato(4, "Bife à Parmegiana", 75.00),
    new Prato(5, "Risoto ao Funghi", 70.00)
);

function retornaPrato($arrayPratos, $numeroPedido)
{
    foreach ($arrayPratos as $a) {
        if ($numeroPedido == $a->getNumero())
            return $a;
    }
    return null;
}

do {

    echo "\n\n----------MENU-----------\n";
    echo "1 - Cadastrar ------------\n";
    echo "2 - Cancelar -------------\n";
    echo "3 - Listar ---------------\n";
    echo "4 - Total de vendas ------\n";
    echo "0 - Sair -----------------\n";

    $opcao = readline("O que deseja fazer: ");
    echo "\n";
    switch ($opcao) {
        case '1':
            echo "Cardápio:\n\n";
            foreach ($arrayPratos as $a) {
                echo $a;
            }
            $pedido = new Pedido;
            $pedido->setNomeCliente(readline("Informe o nome do cliente: "));
            $pedido->setNomeGarcom(readline("Informe o nome do garçom: "));

            $prato = null;
            while ($prato == null) {
                $numeroPedido = readline("Informe o número do pedido: ");
                $prato = retornaPrato($arrayPratos, $numeroPedido);
            }

            $pedido->setPrato($prato);
            array_push($arrayPedidos, $pedido);
            break;

        case '2':

            echo "Você escolheu cancelar um pedido. Iremos listar os pedidos feitos.\n";
            foreach ($arrayPedidos as $key => $objetoPedido) {
                echo ($key + 1) . "° Pedido:\n" . $objetoPedido;
            }
            $op = readline("Informe o pedido que deseja excluir: ");
            $op -= 1;
            array_splice($arrayPedidos, $op, 1);
            break;

        case '3':
            foreach ($arrayPedidos as $key => $objetoPedido) {
                echo $objetoPedido;
            }
            break;

        case '4':
            $total = 0;
            foreach ($arrayPedidos as $objetoPedido) {
                $total += $objetoPedido->getPrato()->getValor();
            }
            echo "O valor total de pratos foi: R$" . $total . " reais.\n";
            break;

        case '0':
            echo "Serviço encerrado.\n";
            break;

        default:
            # code...
            break;
    }
} while ($opcao != 0);
