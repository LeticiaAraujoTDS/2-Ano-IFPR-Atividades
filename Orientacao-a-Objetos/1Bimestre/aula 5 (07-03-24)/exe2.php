<?php

    $vetor1 = array();
    $vetor2 = array();

    for ($i=0; $i < 5; $i++) { 

        $palavra = readline("Digite uma palavra: ");

        $vetor1[$i] = $palavra;
    }

    $vetor2 = $vetor1;
    
   for ($i=0; $i < 5; $i++) { 

        if($i == 4){

            print $vetor2[$i] . " \n";
            die();
            
        } else { 

          print $vetor2[$i] . ", "; 
        }
   }

    