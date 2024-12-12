<?php

class Exemplo {
    public function escreva($v="", $w=""){
        if ($v == "" && $w == "") {
            echo "Valor: sem valor.\n";
        } elseif ($w == "") {
            echo "Valor: " . $v . "\n";
        } else {
            echo "Valores: " . $v . ", " . $w . "\n";
        }
    }
}