<?php
require_once("modelo/Exemplo.php");
// polimorfismo -> sobrecarga(overloading). Não requer herança
$e = new Exemplo();
$e->escreva();
$e->escreva(123);
$e->escreva(123, 456);