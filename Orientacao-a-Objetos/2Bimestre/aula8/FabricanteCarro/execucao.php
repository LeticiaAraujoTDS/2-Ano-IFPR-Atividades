 <?php

    require_once("modelo/Carro.php");
    require_once("modelo/Fabricante.php");

    $fabricantes = [];


    $v = new Fabricante();
    $v->setNome("Volkswagem");
    $v->setSigla("VW");
    array_push($fabricantes, $v);

    $c = new Fabricante();
    $c->setNome("Chevrolet");
    $c->setSigla("GM");
    array_push($fabricantes, $c);

    $f = new Fabricante;
    $f->setNome("Fiat");
    $f->setSigla("F");
    array_push($fabricantes, $f);

    $r = new Fabricante();
    $r->setNome("Renault");
    $r->setSigla("RN");
    array_push($fabricantes, $r);

    $arrayCarros = [];
    $esta = false;

    do {

        echo "\n----------MENU-----------\n";
        echo "1 - Cadastrar carro -----\n";
        echo "2 - Excluir carro -------\n";
        echo "3 - Listar carro --------\n";
        echo "0 - Sair ----------------\n";

        $opcao = readline("Informe a opção escolhida: ");

        switch ($opcao) {
            case '1':
                foreach ($fabricantes as $key => $value) {
                    echo "Fabricante " . $key + 1 . ": " . $value;
                }
                $carros = new Carro();
                $carros->setModelo(readline("Informe o modelo do carro:  "));
                $carros->setAnoFabricacao(readline("Informe o ano de fabricação do carro:  "));

                do {
                    $fabricante = readline("Informe a sigla fabricante do carro: ");
                    foreach ($fabricantes as $f) {
                        if ($fabricante == $f->getSigla()) {
                            $fabricante = $f;
                            $esta = true;
                        }
                    }
                    if (!$esta) {
                        echo "A fabricante " . $fabricante . " não existe.\n";
                    }
                } while (!$esta);
                $carros->setFabricante($fabricante);
                array_push($arrayCarros, $carros);
                $esta = false;
                break;

            case '2':
                echo "Listando os carros armazenados.\n";
                foreach ($arrayCarros as $key => $value) {
                    echo "Carro " . $key + 1 . ": " . $value;
                }
                $indice = readline("Informe o carro que deseja excluir: ");
                $indice -= 1;
                unset($arrayCarros[$indice]);
                break;

            case '3':

                $i = 1;
                foreach ($arrayCarros as $value) {
                    echo "Carro " . $i . ": " . $value;
                    $i++;
                }
                break;

            case '0':
                echo "Programa encerrado.\n";
                break;
            default:
                # code...
                break;
        }
    } while ($opcao != 0);
