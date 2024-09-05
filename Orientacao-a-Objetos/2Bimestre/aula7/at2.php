<?php

class Trapezio {

    private int $baseMaior;
    private int $baseMenor;
    private int $altura;

    public function __construct($a = 0, $b = 0, $c = 0){
        $this->baseMenor = $a;
        $this->baseMaior = $b;
        $this->altura = $c;
    }

    public function area() {
        $area = ((($this->baseMenor + $this->baseMaior) * $this->altura) / 2);
        return $area;
    }

    public function __toString(){
        return "O trapézio maior é o que tem a base menor de " . $this->baseMenor . "cm, com a base maior vale " . $this->baseMaior . "cm, a altura de " . $this->altura . "cm, e a área de " . $this->area() . "cm².\n";
    }

    public function getBaseMaior(): int
    {
        return $this->baseMaior;
    }

    public function setBaseMaior(int $baseMaior): self
    {
        $this->baseMaior = $baseMaior;

        return $this;
    }

    public function getBaseMenor(): int
    {
        return $this->baseMenor;
    }

    public function setBaseMenor(int $baseMenor): self
    {
        $this->baseMenor = $baseMenor;

        return $this;
    }

    public function getAltura(): int
    {
        return $this->altura;
    }

    public function setAltura(int $altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}
$trap = array();
for ($i=1; $i <= 4; $i++) { 
    echo "Trapézio $i: ";
    $baseMenor = readline("Informe o valor da base menor: ");
    $baseMaior = readline("Informe o valor da base maior: ");
    $altura =  readline("Infome o valor da altura: ");
    echo "\n";
    $trapezio = new Trapezio($baseMenor, $baseMaior, $altura);
    array_push($trap, $trapezio);
}

$maior = $trap[0];
foreach ($trap as $t) {
    if ($maior->area() < $t->area()){
        $maior = $t;
    } else {
        printf($maior);
    }   
}