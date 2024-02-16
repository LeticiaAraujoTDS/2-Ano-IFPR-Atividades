<?php

    for ($i=0; $i < 5; $i++) { 
        
        $nome = readline("Qual o seu nome? ");
        $altura = readline("Qual a sua altura em metros? ");
        $peso = readline("Qual o seu peso em quilos? ");
        $imc = $peso / ($altura * $altura);
            print ("\n$nome tem peso $peso kg, altura de $altura m e imc de $imc. \n");
            print "\n";

    }
    
    
