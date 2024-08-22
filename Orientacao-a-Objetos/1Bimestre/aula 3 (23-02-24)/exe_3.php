<?php

    function imprimeDados($nome, $habitantes, $area, $altitude, $estado){

        //Foz do Iguaçu | 250000 | 500km² | 145m | Paraná-PR

        printf("$nome | $habitantes | $area | $altitude | $estado \n");
    }

    $nome = readline("Informe o nome da cidade:");
    $habitantes = readline ("Informe a quantidade de habitantes: ");
    $area = readline("Informe a área da cidade: ");
    $altitude = readline("Informe a altitude da cidade: ");
    $estado = readline("Informe a sigla do estado: ");

    /*
    Foz do Iguaçu | 250000 | 500km² | 145m | Paraná-PR
    Cascavel | 300000 | 420km² | 320m | Paraná-PR
    Chapecó | 240000 | 120km² | 620m | Santa Catarina-SC
    Blumenau | 330000 | 200km² | 85m | Santa Catarina-SC
    Curitiba | 1500000 | 300km² | 850m | Paraná-PR
*/

    imprimeDados($nome, $habitantes, $area, $altitude, $estado);