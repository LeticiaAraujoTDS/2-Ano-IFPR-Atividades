<?php

    for ($i=1980; $i <=2024; $i++) { 
        
        if ($i % 4 == 0 and $i % 100 !== 0 or $i % 4 == 0 and $i % 400 == 0) {
            print "Esse $i é bissexto\n";
        }

        
    }
