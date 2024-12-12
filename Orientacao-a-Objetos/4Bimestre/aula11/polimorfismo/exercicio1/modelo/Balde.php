<?php

require_once("Produto.php");

class Balde extends Produto{

    private string $capacidade;

    public function GetDados()
    {
        //$dados = parent::GetDados(); concatena com o debaixo e puxa osa dados da classe pai
        $dados = "Balde\n" . "Descrição: " . $this->getDescricao() . " | Capacidade: " . $this->capacidade . " | Unidade de Medida: " . $this->getUnidadeMedida() . "\n";
        return $dados;
    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade(): string
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade(string $capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}