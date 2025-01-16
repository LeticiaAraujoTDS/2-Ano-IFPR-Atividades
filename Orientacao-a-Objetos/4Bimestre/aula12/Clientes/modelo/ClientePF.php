<?php

require_once("Cliente.php");

class ClientePF extends Cliente
{

    private string $nome;
    private string $cpf;

    public function GetIdentificacao(){
        return $this->nome;
    }

    public function GetNroDoc(){
        return $this->cpf;
    }

    public function GetTipo(){
        return "Pessoa Física";
    }


    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

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
