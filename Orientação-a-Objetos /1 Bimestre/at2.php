<?php

class Retangulo1{

    public $base;
    public $altura;

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
    $retangulo = new Retangulo1();//ta pedindo do __constructor do outro arquivo
    $retangulo ->base = readline("Qual a base do retângulo " . $i . "? ");
    $retangulo ->altura = readline("Qual a altura do retângulo " . $i . "? ");
    $retangulo ->area();
    echo "A área do retângulo " . $i . " é igual a " . $retangulo->area() . "cm.\n";
    $retangulo ->perimetro();
    echo "O perímetro do retângulo " . $i . " é igual a " . $retangulo->perimetro() . "cm.\n";
    print("\n*****\n");
}