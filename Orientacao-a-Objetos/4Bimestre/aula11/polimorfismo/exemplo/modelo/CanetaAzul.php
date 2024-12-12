<?php

require_once("Caneta.php");

class CanetaAzul extends Caneta {

    //Método sobreescrevendo o método da classe pai.
    public function escrever()
    {
        echo "Caneta escrevendo em azul.\n";
    }
}