<?php

require_once("Base.php");
require_once("IDados.php");

class Equipe extends Base implements IDados{
    //Atributos
    private int $anoEntrada;
    private string $chefeEquipe;
    private string $nacionalidade;

    //Métodos

    public function __construct($a = " ", $b= 0, $c = " ", $d = " ", )
    {
        $this->nome =  $a;
        $this->anoEntrada = $b;
        $this->chefeEquipe = $c;
        $this->nacionalidade = $d;
        
    }
    public function getDados()
    {
        return "Ano entrada: " . $this->anoEntrada . "| Chefe da equipe: " . $this->chefeEquipe . " | Nacionalidade da equipe: " . $this->nacionalidade . "\n";

    }


    public function getAnoEntrada(): int
    {
        return $this->anoEntrada;
    }

    public function setAnoEntrada(int $anoEntrada): self
    {
        $this->anoEntrada = $anoEntrada;
        return $this;
    }

    public function getChefeEquipe(): string
    {
        return $this->chefeEquipe;
    }

    public function setChefeEquipe(string $chefeEquipe): self
    {
        $this->chefeEquipe = $chefeEquipe;
        return $this;
    }

    public function getNacionalidade(): string
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade(string $nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;
        return $this;
    }
}