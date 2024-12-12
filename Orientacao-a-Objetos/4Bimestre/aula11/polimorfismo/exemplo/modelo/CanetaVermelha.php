<?php

require_once("CanetaAzul.php");

class CanetaVermelha extends CanetaAzul{

    //Método sobreescrevendo o método da classe pai.
    public function escrever()
    {
        echo "Escrevendo em vermelho.\n";
    }
    //caneta chamando a sobreescrita
    public function escreverEspec(){
        $this->escrever();
    }

    public function escreverPai(){
        parent::escrever();
        //chama a classe pai(canetaAzul) -> para quando se sobreescreve o método do pai, e quer usar o do pai.
    }
}