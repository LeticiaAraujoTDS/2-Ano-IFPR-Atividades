<?php

class Retangulo{

    public $base;
    public $altura;

    function __construct($altura = 0, $base = 0){
        $this->altura = $altura;
        $this->base = $base;
    }
    function area(){
        $area = ($this->base) * ($this->altura);
        return $area;
    }
    function perimetro(){
        $perimetro = (($this->base)+($this->altura))*2;
        return $perimetro;
    }
}

for ($i=1; $i < 4; $i++) { 
    $retangulo = new Retangulo($altura, $base);
    $base = readline("Qual a base do retângulo " . $i . "? ");
    $altura = readline("Qual a altura do retângulo " . $i . "? ");
    $retangulo ->area();
    echo "A área do retângulo " . $i . " é igual a " . $retangulo->area() . "cm.\n";
    $retangulo ->perimetro();
    echo "O perímetro do retângulo " . $i . " é igual a " . $retangulo->perimetro() . "cm.\n";
    print("\n*****\n");
}