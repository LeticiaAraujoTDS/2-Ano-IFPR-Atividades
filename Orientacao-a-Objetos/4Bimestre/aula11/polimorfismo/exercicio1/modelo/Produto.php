<?php

class Produto {
    private string $descricao;
    private string $unidadeMedida;

    public function GetDados(){
        $dados = "Produto\n" . "Descrição: " . $this->descricao . " | Unidade de Medida: " . $this->unidadeMedida . "\n";
        return $dados;
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
     * Get the value of unidadeMedida
     */
    public function getUnidadeMedida(): string
    {
        return $this->unidadeMedida;
    }

    /**
     * Set the value of unidadeMedida
     */
    public function setUnidadeMedida(string $unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }
}