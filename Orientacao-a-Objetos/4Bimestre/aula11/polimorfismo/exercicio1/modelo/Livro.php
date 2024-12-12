<?php

require_once("Produto.php");

class Livro extends Produto {
    private string $autor;
    
    public function GetDados(){
        $dados = "Livro\n" . "Descrição: " . $this->getDescricao() ." | Autor: " . $this->autor . " | Unidade de Medida: " . $this->getUnidadeMedida() . "\n";
        return $dados;
    }

    /**
     * Get the value of autor
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}