<?php
require_once("modelo/CD.php");
require_once("modelo/DVD.php");

$cd = new CD();
$cd->setNome("RCHP");
$cd->setPreco("55.00");
echo $cd->getTipo(). " - " . $dvd;

$dvd = new DVD();
$cd->setNome("OIOI");
$cd->setPreco(56.00);
echo $dvd->getTipo(). " - " . $dvd;