<?php

require_once("Espaco.php");

class Hotel extends Espaco{
    private int $numeroEstrelas;
    private bool $cafeIncluso;

    public function getDadosHotel(){
        return "Hotel: " . $this->nome . " | Endereço: " . $this->endereco . " | Número de estrelas inclusa: " . $this->numeroEstrelas . " estrelas | Café Incluso: " . ($this->cafeIncluso ? "Sim" : "Não") . "\n"; 
        //relacionamento ternário no café incluso com true or flase, se for true, retorna a primeira instância, se for false, retorna a segunda instância.
    }
    
    /**
     * Get the value of numeroEstrelas
     */
    public function getNumeroEstrelas(): int
    {
        return $this->numeroEstrelas;
    }

    /**
     * Set the value of numeroEstrelas
     */
    public function setNumeroEstrelas(int $numeroEstrelas): self
    {
        $this->numeroEstrelas = $numeroEstrelas;

        return $this;
    }

    /**
     * Get the value of cafeIncluso
     */
    public function isCafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

    /**
     * Set the value of cafeIncluso
     */
    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}