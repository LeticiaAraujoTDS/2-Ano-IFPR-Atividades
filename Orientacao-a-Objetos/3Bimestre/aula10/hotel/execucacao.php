<?php 

require_once("modelo/Hotel.php");
require_once("modelo/Restaurante.php");
require_once("modelo/PontoTuristico.php");

function listarEspacos(array $espaco)
{
    echo "Espaços Cadastrados: \n";
    $i = 1;
    foreach ($espaco as $objetoEspaco) {
        if ($objetoEspaco instanceof Hotel) {
            echo $i . " - " . $objetoEspaco->getDadosHotel();
            $i++;
        } elseif($objetoEspaco instanceof Restaurante) {
            echo $i . " - " . $objetoEspaco->getDadosRestaurante();
            $i++;
        } elseif ($objetoEspaco instanceof PontoTuristico) {
            echo $i . " - " . $objetoEspaco->getDadosPontoTuristico();
            $i++;
        }
    }
}
$espaco = array();
$escolha = 0;

do{
    echo "\n1 - Cadastrar Espaço\n";
    echo "2 - Excluir Espacos\n";
    echo "3 - Listar Espacos\n";
    echo "0 - Sair\n";
    $escolha = readline("Escolha uma opcao: ");

    switch ($escolha) {
        case '1':
            echo "\n1 - Hotel\n";
            echo "2 - Restaurante\n";
            echo "3 - Ponto Turistico\n";
            $tipoEspaco = readline("Escolha o tipo de espaço: ");
            switch ($tipoEspaco) {
                case '1':
                    $espacoHotel = new Hotel();
                    $espacoHotel->setNome(readline("Informe o nome do Hotel: "));
                    $espacoHotel->setEndereco(readline("Informe o endereco do Hotel: "));
                    $espacoHotel->setNumeroEstrelas(readline("Informe o numero de estrelas: "));
                    $cafeIn = readline("Informe se o hotel tem café da manha incluso (1- Sim ou 2- Não): ");
                    if ($cafeIn == 1) {
                        $espacoHotel->setCafeIncluso(true);
                    } else {
                        $espacoHotel->setCafeIncluso(false);
                    }
                    array_push($espaco, $espacoHotel);
                break;

                case '2':
                    $espacoRestaurante = new Restaurante();
                    $espacoRestaurante->setNome(readline("Informe o nome do Restaurante:"));
                    $espacoRestaurante->setEndereco(readline("Informe o endereço do Restaurante: "));
                    $espacoRestaurante->setTipoComida(readline("Informe o tipo de comida que o restaurante serve: "));
                    array_push($espaco, $espacoRestaurante);
                break;

                case '3':
                    $espacoPontoTuristico = new PontoTuristico();
                    $espacoPontoTuristico->setNome(readline("Informe o nome do Ponto Turistico:"));
                    $espacoPontoTuristico->setEndereco(readline("Informe o endereco do Ponto Turístico: "));
                    $espacoPontoTuristico->setDuracaoVisita(readline("Informe quantos dias durará a visita: "));
                    array_push($espaco, $espacoPontoTuristico);
                break;
                
                default:
                    echo ("\nOpção inválida. Digite novamente.\n");
                break;
            }
        break;

        case '2':
            listarEspacos($espaco);
            $idx = readline("Informe o índice da lista a ser excluída: ");

            if ($idx > 0 && $idx <= count($espaco)){
                array_splice($espaco, $idx - 1, 1);
            } else {
                echo "\nÍndice informado é inválido.\n";
            } 
        break;

        case '3':
            listarEspacos($espaco);
        break;

        case '0':
            echo "\nEncerrando o programa...\n";
        break;
        
        default:
            echo "\nOpção inválida. Digite novamente.\n";
            break;
    }
}while($escolha != 0);