<?php

class Estado {

    private string $nomeEstado;
    private string $sigla;

    /**
     * Get the value of sigla
     */
    public function getSigla(): string
    {
        return $this->sigla;
    }

    /**
     * Set the value of sigla
     */
    public function setSigla(string $sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get the value of nomeEstado
     */
    public function getNomeEstado(): string
    {
        return $this->nomeEstado;
    }

    /**
     * Set the value of nomeEstado
     */
    public function setNomeEstado(string $nomeEstado): self
    {
        $this->nomeEstado = $nomeEstado;

        return $this;
    }
}