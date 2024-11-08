<?php

require_once("Mago.php");

class Combatente extends Mago {
    private int $forcaDeAtaque;
    
    public function lancarPoder(){
        return "O Mago " . $this->getNome() . ", do tipo Combatente, possui Força de Ataque de " . $this->forcaDeAtaque . " e lançou o poder " . $this->getPoder()->getDescricao() . " com força total de " . $this->getPoder()->getForcaTotal($this->forcaDeAtaque) . ".\n" ;
    }

    /**
     * Get the value of forcaDeAtaque
     */
    public function getForcaDeAtaque(): int
    {
        return $this->forcaDeAtaque;
    }

    /**
     * Set the value of forcaDeAtaque
     */
    public function setForcaDeAtaque(int $forcaDeAtaque): self
    {
        $this->forcaDeAtaque = $forcaDeAtaque;

        return $this;
    }
}