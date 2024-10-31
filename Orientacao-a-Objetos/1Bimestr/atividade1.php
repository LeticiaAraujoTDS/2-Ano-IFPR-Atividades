<?php

class Animal{

    public $numeroPatas;
    public $tipoPele;
    public $especie;

    function Funcao($especie, $numeroPatas, $tipoPele){
        $this->especie = $especie;
        $this->numeroPatas = $numeroPatas;
        $this->tipoPele = $tipoPele; 
        print "Este animal é um $especie, e possui $numeroPatas patas e $tipoPele como tipo de pele.\n";  
    }
    function sons($a){
        print "O animal faz " . $a . "!!!\n";
    }
    function movimentos($b){
        print "Este animal se movimenta" . $b . "!!!\n";
    }
}

for ($i=1; $i < 8; $i++) { 
    $especie = readline("Qual a espécie do animal $i? ");
    $patas = readline("O animal $i possui quantas patas? ");
    $pele = readline("O animal $i possui qual tipo de pele? ");
    $som = readline("Qual som que o animal $i emite? ");
    $movimento = readline("Como o animal $i se movimenta? ");
    print "\n";
    $animais = new Animal($especie, $patas, $pele);
    $animais ->sons($som);
    $animais ->movimentos($movimento);
}
