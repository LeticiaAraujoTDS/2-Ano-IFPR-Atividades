<?php

require_once("Midia.php");

class Cd extends Midia{
    public function GetTipo(){
        $tipo = "Tipo de mídia: CD\n";
        return $tipo;
    } 
}