<?php

require_once("Espaco.php");
class PontoTuristico extends Espaco{
    private int $duracaoVisita;
    
    public function getDadosPontoTuristico(){
        return "Ponto Turístico: " . $this->nome . " | Endereco: " . $this->endereco . " | Duração Visita: " . $this->duracaoVisita . "dias.\n";
    }

    /**
     * Get the value of duracaoVisita
     */
    public function getDuracaoVisita(): int
    {
        return $this->duracaoVisita;
    }

    /**
     * Set the value of duracaoVisita
     */
    public function setDuracaoVisita(int $duracaoVisita): self
    {
        $this->duracaoVisita = $duracaoVisita;

        return $this;
    }
}