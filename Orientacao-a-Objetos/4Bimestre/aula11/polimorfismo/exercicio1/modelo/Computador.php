<?php

require_once("Produto.php");

class Computador extends Produto{

    private string $processador;
    private string $memoria;

    public function GetDados()
    {
        $dados = "Computador\n" . "Descrição: " . $this->getDescricao() . " | Processador: " . $this->processador . " | Memória: " . $this->memoria . " | Unidade de Medida: " . $this->getUnidadeMedida() . "\n";
        return $dados;
    }

    /**
     * Get the value of processador
     */
    public function getProcessador(): string
    {
        return $this->processador;
    }

    /**
     * Set the value of processador
     */
    public function setProcessador(string $processador): self
    {
        $this->processador = $processador;

        return $this;
    }

    /**
     * Get the value of memoria
     */
    public function getMemoria(): string
    {
        return $this->memoria;
    }

    /**
     * Set the value of memoria
     */
    public function setMemoria(string $memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }
}