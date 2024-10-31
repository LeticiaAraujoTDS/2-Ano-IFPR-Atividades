<?php

require_once("Animal.php");

class Cachorro extends Animal{
    public function Latir() {
        return "Au!Au!Au!Au!\n";
    }
}