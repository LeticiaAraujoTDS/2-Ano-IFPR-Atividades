<?php 

require_once("Base.php");
require_once("IDados.php");


class Piloto extends Base implements IDados{

    //Atributos
    private int $numero;
    private Equipe $equipe;
    private int $idade;
    private string $nacionalidade;

    //Métodos
    public function __construct($a = "", $b = 0, $c = "", $d = 0, $e = "")
    {
        $this->nome =  $a;
        $this->numero = $b;
        $this->equipe = $c; 
        $this->idade = $d;
        $this->nacionalidade = $e;
    }

    public function getDados()
    {
        return "Nome: " . $this->getNome() . "| Número do piloto: " . $this->numero . " | Equipe: " . $this->getEquipe()->getNome() . "| Idade: " . $this->idade . "| Nacionalidade: " . $this->nacionalidade . "\n";
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

 
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }
 
    public function getEquipe(): Equipe
    {
        return $this->equipe;
    }


    public function setEquipe(Equipe $equipe): self
    {
        $this->equipe = $equipe;

        return $this;
    }


    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

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