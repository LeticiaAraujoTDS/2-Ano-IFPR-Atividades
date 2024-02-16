<?php

    $nome = readline("Qual o seu nome? ");
    print "\n";
    $altura = (int) readline("Qual a sua altura em metros? ");
    print "\n";
    $peso = (int) readline("Qual o seu peso em quilos? ");
    print "\n";

    $imc = $peso / ($altura * $altura);

    print ("$nome tem peso $peso kg, altura de $altura m e imc de $imc. \n");