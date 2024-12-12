<?php

require_once("Midia.php");

class Dvd extends Midia{
    public function GetTipo(){
        $tipo = "Tipo de mídia: DVD\n";
        return $tipo;
    } 
}