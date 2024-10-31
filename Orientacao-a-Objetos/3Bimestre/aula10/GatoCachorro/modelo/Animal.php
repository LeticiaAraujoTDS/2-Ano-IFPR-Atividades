<?php

require_once("Cachorro.php");
require_once("Gato.php");

class Animal {
    protected $nome;
    protected $raca;

    public function getDados(){
        $dados = "Nome: " . $this->nome;
        $dados .= " | Raça: " . $this->raca;
        $dados .= "\n";
        return $dados;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of raca
     */
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     * Set the value of raca
     */
    public function setRaca($raca): self
    {
        $this->raca = $raca;

        return $this;
    }
}