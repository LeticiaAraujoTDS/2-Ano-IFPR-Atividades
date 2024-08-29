<?php

class Robo {

    private string $nome;
    private string $tipo;
    private int $qtdSensores;
    
    public function __construct($a = "", $b = "", $c = 0){
        $this->nome=$a;
        $this->tipo=$b;
        $this->qtdSensores=$c;
    }
    //Metódos

    public function __toString(){
    
        return $this->nome . " - " . $this->tipo . " - " . $this->qtdSensores . ".\n";
    }


    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getQtdSensores(): int
    {
        return $this->qtdSensores;
    }

    public function setQtdSensores(int $qtdSensores): self
    {
        $this->qtdSensores = $qtdSensores;

        return $this;
    }


}

//Programa principal

$robo1 = new Robo();
$robo1->setNome("Charles") ->setTipo("Ferrari") ->setQtdSensores("16");

$robo2 = new Robo();
$robo2->setNome("Lewis") ->setTipo("Mercedes") ->setQtdSensores("44");

$robo3 = new Robo();
$robo3->setNome("Oscar") ->setTipo("Maclaren") ->setQtdSensores("81");

$robos = array($robo1, $robo2);
/*echo $robos[0];*/

array_push($robos, $robo3);


array_push($robos, new Robo("Carlos", "Ferrari", 55));
//Laço for

foreach ($robos as $r) {
    echo $r;
    /*echo $r->getQtdSensores() . "\n";*/
}

$algumRobo = $robos[3];
echo $algumRobo->getTipo();
