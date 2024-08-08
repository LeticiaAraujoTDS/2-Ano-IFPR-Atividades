<?php

class Pessoas{

    public $nome;
    public $endereco;
    public $cidade;
    public $uf;
    public $altura;

    function ola(){
        echo "\nOlá mundo, sou " . $this->nome . "!\n";
    }
    function falarEndereco(){
        echo "More em " . $this->endereco . ", " . $this->cidade . "/" . $this->uf . "!\n";
    }
    function falarAltura(){
        echo "Tenho " . $this->altura . " metros!\n";
    }
}

$pessoa1 = new Pessoas();
$pessoa1 ->nome = readline("Qual o seu nome? ");
$pessoa1 ->endereco = readline("Qual o seu endereço? ");
$pessoa1 ->cidade = readline("Qual a sua cidade? ");
$pessoa1 ->uf = readline("Qual o seu UF? ");
$pessoa1 ->altura = readline("Qual a sua altura? ");

print("*****\n");

$pessoa1 ->ola();
$pessoa1 ->falarEndereco();
$pessoa1 ->falarAltura();