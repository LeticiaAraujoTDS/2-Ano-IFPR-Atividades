<?php

require_once("Pessoa.php");

class PessoaFisica extends Pessoa {

    private int $idade;
    private string $cpf;

    public function getDadosPf()
    {
        return $this->nome . " - Idade: " . $this->idade . " - CPF: " . $this->cpf . ".\n";
    }
    

    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}