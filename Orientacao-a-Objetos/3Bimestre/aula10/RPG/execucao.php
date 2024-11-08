<?php

require_once("modelo/Combatente.php");
require_once("modelo/Curandeiro.php");
//Objetos Poder
$p1 =new Poder("Recupera energia", 0);
$p2 =new Poder("Recupera energia super", 20);
$p3 =new Poder("Golpe normal", 0);
$p4 =new Poder("Golpe especial", 15);
//Array dos Magos
$arrayMagos = array();
//Objetos Curandeiro
$curandeiro1 = new Curandeiro();
$curandeiro1->setNome("Merlin");
$curandeiro1->setForcaDeCura(120);
$curandeiro1->setPoder($p1);
array_push($arrayMagos, $curandeiro1);

$curandeiro2 = new Curandeiro();
$curandeiro2->setNome("Morgan");
$curandeiro2->setForcaDeCura(800);
$curandeiro2->setPoder($p2);
array_push($arrayMagos, $curandeiro2);

//Objetos Combatente
$combatente1 = new Combatente;
$combatente1->setNome("Azrael");
$combatente1->setForcaDeAtaque(200);
$combatente1->setPoder($p3);
array_push($arrayMagos, $combatente1);

$combatente2 = new Combatente;
$combatente2->setNome("Adarlan");
$combatente2->setForcaDeAtaque(980);
$combatente2->setPoder($p4);
array_push($arrayMagos, $combatente2);

//  Percorrendo o array de Magos e imprimindo as saídas
foreach ($arrayMagos as $key => $objetoMago) {
    echo $objetoMago->lancarPoder();
}