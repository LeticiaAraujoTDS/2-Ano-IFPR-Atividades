<?php

require_once("IDados.php");
require_once("Base.php");

class Corrida extends Base implements IDados {

    private int $voltas;
    private int $posicao;

    public function getDados()
    {
        $d = "Campeonato: \n";
        $d .= " ";
        return $d;
    }

    /**
     * Get the value of voltas
     */
    public function getVoltas(): int
    {
        return $this->voltas;
    }

    /**
     * Set the value of voltas
     */
    public function setVoltas(int $voltas): self
    {
        $this->voltas = $voltas;

        return $this;
    }


    /**
     * Get the value of posicao
     */
    public function getPosicao(): int
    {
        return $this->posicao;
    }

    /**
     * Set the value of posicao
     */
    public function setPosicao(int $posicao): self
    {
        $this->posicao = $posicao;

        return $this;
    }
}