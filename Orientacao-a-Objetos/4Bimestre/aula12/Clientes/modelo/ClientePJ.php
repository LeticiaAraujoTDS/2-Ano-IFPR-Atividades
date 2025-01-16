<?php

require_once("Cliente.php");

class ClientePJ extends Cliente
{

    private string $razaoSocial;
    private string $cnpj;

    public function GetIdentificacao()
    {
        return $this->razaoSocial;
    }

    public function GetNroDoc()
    {
        return $this->cnpj;
    }

    public function GetTipo()
    {
        return "Pessoa Jurídica";
    }


    /**
     * Get the value of cnpj
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get the value of razaoSocial
     */
    public function getRazaoSocial(): string
    {
        return $this->razaoSocial;
    }

    /**
     * Set the value of razaoSocial
     */
    public function setRazaoSocial(string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }
}
