<?php

require_once("modelo/Animal.php");
require_once("modelo/Cachorro.php");
require_once("modelo/Gato.php");


$gato1 = new Gato;
$gato1->setNome("Bolota");
$gato1->setRaca("Siamês");
echo $gato1->getDados();
echo $gato1->Miar();

$gato2 = new Gato;
$gato2->setNome("Bolinha");
$gato2->setRaca("Ocicat");
echo $gato2->getDados();
echo $gato2->Miar();

$cahorro1 = new Cachorro;
$cahorro1->setNome("Pinguinho");
$cahorro1->setRaca("Pitbull");
echo $cahorro1->getDados();
echo $cahorro1->Latir();

$cachorro2 = new Cachorro;
$cachorro2->setNome("Sky");
$cachorro2->setRaca("Salsicha");
echo $cachorro2->getDados();
echo $cachorro2->Latir();

