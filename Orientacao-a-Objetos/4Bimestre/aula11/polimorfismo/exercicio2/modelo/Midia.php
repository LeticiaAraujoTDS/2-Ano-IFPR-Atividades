<?php

class Midia {
    private string $descricao;
    private int $precoPago;

    public function GetDados(){
        $dados = "Descriçao: " . $this->descricao . " | Preço Pago: " . $this->precoPago . ".00 reais";
        return $dados;
    } 

    public function GetTipo1(){
        $tipo = "Tipo de mídia desconhecido . . . \n";
        return $tipo;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of precoPago
     */
    public function getPrecoPago(): int
    {
        return $this->precoPago;
    }

    /**
     * Set the value of precoPago
     */
    public function setPrecoPago(int $precoPago): self
    {
        $this->precoPago = $precoPago;

        return $this;
    }
}