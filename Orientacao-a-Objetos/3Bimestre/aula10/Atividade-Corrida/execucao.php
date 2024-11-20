<?php

require_once("modelo/Corrida.php");
require_once("modelo/Equipe.php");
require_once("modelo/Piloto.php");

$equipes = array();
$pilotos = array();
$ordemLargada = array();
$ganhou = false;

//Cadastrar as 4 Equipes
$equipe1 = new Equipe("Scuderia Ferrari HP", 1950, "Frédéric Vasseur", "Italiano");
array_push($equipes, $equipe1);
$equipe2 = new Equipe("Mercedes-AMG Petronas Formula One Team", 1954, "Toto Wolff", "Alemão");
array_push($equipes, $equipe2);
$equipe3 = new Equipe("McLaren F1 Team", 1966, "Andrea Stella", "Britânico");
array_push($equipes, $equipe3);
$equipe4 = new Equipe("Oracle Red Bull Racing", 2005, "Christian Horner", "Austríaco");
array_push($equipes, $equipe4);

//Cadastrar os 4 pilotos
$piloto1 = new Piloto("Charles Leclerc", 16, $equipe1, 27, "Monegasco");
array_push($pilotos, $piloto1);
$piloto2 = new Piloto("Lewis Hamilton", 44, $equipe2, 39, "Britânico");
array_push($pilotos, $piloto2);
$piloto3 = new Piloto("Oscar Piastri", 81, $equipe3, 23, "Australiano");
array_push($pilotos, $piloto3);
$piloto4 = new Piloto("Max Verstappen", 1, $equipe4, 27, "Neerlandês");
array_push($pilotos, $piloto4);

//funcoes
function realizarPitStop($tentativa)
{
    $acertou = (bool) rand(0, 1);
    if ($acertou) {
        echo "\n-----\n";
        echo "Parabéns! O " . $tentativa . "º pit stop foi um sucesso.\n";
    } else {
        echo "\n-----\n";
        echo "Infelizmente, o " . $tentativa . "º  pit stop não foi mal.\n";
    }
    return $acertou;
}
//Laço do Menu (do-while)
$escolha = 0;
do {
    echo "\n-----------------------------";
    echo "\n1 - Cadastrar Equipe --------";
    echo "\n2 - Cadastrar Piloto --------";
    echo "\n3 - Listar Equipes ----------";
    echo "\n4 - Listar Pilotos ----------";
    echo "\n5 - Modo Corrida ------------";
    echo "\n6 - Resultado Final ---------";
    echo "\n7 - Desistir do Campeonato --";
    echo "\n0 - Sair --------------------";
    echo "\n-----------------------------\n";
    $escolha = readline("Informe sua decisão: ");

    switch ($escolha) {
        case '1':
            echo "\nVocê escolheu cadastrar uma Equipe.\n";
            $equipe = new Equipe();
            $equipe->setNome(readline("Informe o nome da equipe: "));
            $equipe->setAnoEntrada(readline("Informe em qual ano a Equipe entrou no esporte: "));
            $equipe->setChefeEquipe(readline("Informe o nome do Chefe de Equipe: "));
            $equipe->setNacionalidade(readline("Informe a nacionalidade da Equipe: "));
            array_push($equipes, $equipe);
            echo "\n---------------\n";
            break;

        case '2':
            echo "\nVocê escolheu cadastrar um Piloto.\n";
            $piloto = new Piloto("", 0, $equipe1, 0, "");
            $piloto->setNome(readline("Informe o nome do piloto: "));
            $piloto->setNumero(readline("Informe o número do piloto: "));
            $piloto->setIdade(readline("Informe a idade do piloto: "));
            $piloto->setNacionalidade(readline("Informe a nacionalidade do piloto: "));
            $piloto->setEquipe($equipe);
            array_push($pilotos, $piloto);
            echo "\n---------------\n";
            break;

        case '3':
            $i = 1;
            foreach ($equipes as $objetoEquipe) {
                echo $i . " - " . $objetoEquipe->getDados();
                $i++;
            }
            break;

        case '4':
            $i = 1;
            foreach ($pilotos as $objetoPiloto) {
                echo $i . " - " . $objetoPiloto->getDados();
                $i++;
            }
            break;

        case '5':
            //Jogo
            echo "\n-----\n";
            echo "Você escolheu o Modo Corrida.\n";

            //Sorteio das posições da largada
            foreach ($pilotos as $objetoP) {
                $nomeP = $objetoP->getNome();
                array_push($ordemLargada, $nomeP);
            }
            shuffle($ordemLargada);

            //Exibe as posições de largada
            echo "As posições de largada são:\n";
            foreach ($ordemLargada as $posicao => $nomePiloto) {
                echo ($posicao + 1) . "º posição: " . $nomePiloto . "\n";
            }

            //1º Pit Stop
            echo "\n-----\n";
            echo "Hora do 1º Pit Stop. Escolha seu tipo de pneu:\n1 - Macio\n2 - Médio\n3 - Duro\n";
            $escolhaPneu = readline("Qual pneu irá escolher? ");
            $primeiroPitStop = realizarPitStop(1);

            //2º Pit Stop
            echo "\n-----\n";
            echo "Hora do 2º Pit Stop. Escolha novamente o tipo de pneu:\n1 - Macio\n2 - Médio\n3 - Duro\n";
            $escolhaPneu2 = readline("Qual pneu irá escolher? ");
            $segundoPitStop = realizarPitStop(2);

            if ($primeiroPitStop) {
                //Se o 1 pit foi bem
                if ($segundoPitStop) {
                    //1 e 2 pit foram ok
                    echo "\n-----\n";
                    echo "Parabéns! Você venceu a corrida com dois pit stops bem-sucedidos!\n";
                    echo "\n-----\n";
                    $ganhou = true;
                } else {
                    //1 pit ok, mas 2 pit não
                    echo "\n-----\n";
                    echo "Infelizmente, você perdeu a corrida devido ao segundo pit stop.\n";
                    echo "\n-----\n";
                    $ganhou = true;
                }
            } else {
                // Se o 1 pit não foi bem
                if ($segundoPitStop) {
                    // 1 pit foi mal, mas 2 ok
                    echo "\n-----\n";
                    echo "Você teve uma recuperação incrível! Mas ainda assim não venceu a corrida.\n";
                    echo "\n-----\n";
                    $ganhou = true;
                } else {
                    // 1 e 2 pit foram ruins
                    echo "\n-----\n";
                    echo "Infelizmente, você perdeu a corrida com ambos os pit stops falhando.\n";
                    echo "\n-----\n";
                    $ganhou = true;
                }
            }
            break;
        case '6':
            echo "\n-----\n";
            echo "Ordem final da corrida:\n";
            if ($ganhou) {
                for ($i = 0; $i < count($ordemLargada); $i++) {
                    if ($ordemLargada[$i] == $piloto->getNome()) {
                        array_splice($ordemLargada, $i, 1);
                        break;
                    }
                }
                //Usa-se essa funcao para colocar um elemento fora do array na posicao[0] e adiciona-o ao array
                array_unshift($ordemLargada, $piloto->getNome());
                shuffle($ordemLargada);
        
            } else {
                for ($i = 0; $i < count($ordemLargada); $i++) {
                    $num = rand(0,3);
                    if ($ordemLargada[$i] == $pilotos[$num]->getNome()) {
                        array_splice($ordemLargada, $i, 1);
                        break;
                    }
                }
                shuffle($ordemLargada);
                array_unshift($ordemLargada, $pilotos[$num]->getNome());
            }
            foreach ($ordemLargada as $posicao => $nomePiloto) {
                echo ($posicao + 1) . "º posição: " . $nomePiloto . "\n";
            }
            break;

        case '7':
            echo "\n-----\n";
            echo "Infelizmente você escolheu desistir do Campeonato. Mais sorte no próximo ano! \n";
            echo "-----\n";
            break;

        case '0':
            echo "\n-----\n";
            echo "Saindo do programa . . .";
            break;

        default:
            echo "\n-----\n";
            echo "Preste mais atenção!!! O número digitado não é uma opção.";
            echo "\n-----\n";
            break;
    }
} while ($escolha != 0 and $escolha != 7);

//colocar nacionalidade na base, e talvez anoentrada tambem, reitrei pontos de base pq nao usei e retirei pneu de Corrida pq tb nao usei, e ajeitar a exibicao de equipes pq nao esta aparecendo o nome.