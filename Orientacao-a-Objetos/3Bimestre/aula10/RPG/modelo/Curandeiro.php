<?php

require_once("Mago.php");

class Curandeiro extends Mago {
    private int $forcaDeCura;

    public function lancarPoder(){
        return "O Mago " . $this->getNome() . ", do tipo Curandeiro, possui Força de Cura de " . $this->forcaDeCura . " e lançou o poder " . $this->getPoder()->getDescricao() . " com força total de " . $this->getPoder()->getForcaTotal($this->forcaDeCura) . ".\n"; 
    }
    

    /**
     * Get the value of forcaDeCura
     */
    public function getForcaDeCura(): int
    {
        return $this->forcaDeCura;
    }

    /**
     * Set the value of forcaDeCura
     */
    public function setForcaDeCura(int $forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }
}
