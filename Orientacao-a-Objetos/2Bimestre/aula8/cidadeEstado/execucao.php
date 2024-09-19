<?php

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$arrayCidades = array();

$sc = new Estado();
$sc->setNomeEstado("Santa Catarina");
$sc->setSigla("SC");

$pr = new Estado();
$pr->setNomeEstado("Paraná");
$pr->setSigla("PR");

$cidade = new Cidade();
$cidade->setNome("Florianópolis");
$cidade->setQtdHabitantes(45678);
$cidade->setAltitude(3);
$cidade->setEstado($sc);

array_push($arrayCidades, $cidade);

$cidade = new Cidade();
$cidade->setNome("Blumenau");
$cidade->setQtdHabitantes(53467);
$cidade->setAltitude(21);
$cidade->setEstado($sc);

array_push($arrayCidades, $cidade);

$cidade = new Cidade();
$cidade->setNome("Foz do Iguaçu");
$cidade->setQtdHabitantes(258248);
$cidade->setAltitude(164);
$cidade->setEstado($pr);

array_push($arrayCidades, $cidade);

$cidade = new Cidade();
$cidade->setNome("Cascavel");
$cidade->setQtdHabitantes(348051);
$cidade->setAltitude(781);
$cidade->setEstado($pr);

array_push($arrayCidades, $cidade);
foreach ($arrayCidades as $c) {
    echo $c . "\n";
}