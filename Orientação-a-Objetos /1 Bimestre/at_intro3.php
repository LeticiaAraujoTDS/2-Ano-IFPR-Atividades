<?php

    for ($i=1980; $i <=2024; $i++) { 
        
        if (($i % 4 == 0 and $i % 100 !== 0) or ($i % 4 == 0 and $i % 400 == 0)) {//tem que proteger os and do or com parenteses
            print "O ano $i é bissexto\n";
        }
    }