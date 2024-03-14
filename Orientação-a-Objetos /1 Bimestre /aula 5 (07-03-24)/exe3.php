<?php
    function existe ($vetor, $num){
        //função para verificar se existe ou não no outro vetor
        foreach ($vetor as $v)
            if ($v == $num)
                return true;

        return false;
    }

    //Vet A
    $vetA = array();
    for ($i=0; $i < 5; $i++) {
        $A = readline("\nInforme um valor para o vetor A: ");
        array_push($vetA, $A);
    }
        echo "\nVetor A: ";
        foreach ($vetA as $a) {
            echo $a . ", ";
        }
        echo "\n";

    //Vet B
    $vetB = array();
    for ($i=0; $i < 5; $i++)
        $B = readline("\nInforme um valor para o vetor B: ");
        array_push($vetB, $B);
    echo "\nVetor B: ";
    foreach ($vetB as $b) {
        echo $b . ", ";
    }
    echo "\n";

    //vet D
    $vetD = array();
    foreach ($vetA as $a){
        if (! existe($vetD,$a))
            array_push($vetD, $a);
    }
    for ($i=0; $i < count($vetB); $i++) 
        array_push($vetD, $vetB[$i]);
    echo "\nVetor D: ";
    foreach ($vetD as $d) {
        echo $d . ", ";
    }
    echo "\n";

    //Vet C
    $vetC = array();
    foreach ($vetC as $a) {
        foreach ($vetC as $b){
            if (in_array ($a, $vetB)){
                array_push($vetC, $a);
            }
            /*if ($a == $b) {
                array_push($vetC, $a);
                break;
            }*/
        }
    }
    foreach ($vetC as $c) {
        echo $c . ", ";
    }
    echo "\n";