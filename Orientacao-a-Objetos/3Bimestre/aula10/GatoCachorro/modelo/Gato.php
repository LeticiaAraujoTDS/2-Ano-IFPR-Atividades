<?php

require_once("Animal.php");

class Gato extends Animal{
    public function Miar() {
        return "Meoww!Meoww!\n";
    }
}