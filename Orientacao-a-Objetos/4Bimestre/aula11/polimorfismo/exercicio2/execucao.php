<?php

require_once("modelo/CD.php");
require_once("modelo/DVD.php");

$midias = array();

for ($i=0; $i < 5; $i++) {
    echo "\nTipos de mídia: \n"; 
    echo "1 - CD \n2 - DVD\n";
    $escolha = readline("Informe qual você quer armazenar: ");
    echo "\n";

    if ($escolha == 1) {
        echo "CD " . ($i+1) . ":\n";
        $cd = new Cd;
        $cd->setDescricao(readline("Informe qual CD será armazenado: "));
        $cd->setPrecoPago(readline("Informe o preço pago no CD: R$"));
        array_push($midias, $cd);
    } else {
        echo "DVD " . ($i+1) . ":\n";
        $dvd = new Dvd;
        $dvd->setDescricao(readline("Informe qual DVD será armazenado: "));
        $dvd->setPrecoPago(readline("Informe o preço pago no DVD: R$"));
        array_push($midias, $dvd);    
    }

}

foreach ($midias as $indice => $objetoMidia) {
    echo "\n" . ($indice + 1) . "- "  . $objetoMidia->GetDados() . " | " . $objetoMidia->GetTipo();
}