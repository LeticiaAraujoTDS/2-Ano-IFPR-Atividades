<?php

require_once("modelo/Ingresso.php");
require_once("modelo/IngressoVIP.php");
require_once("modelo/IngressoCamarote.php");
//Ingresso
$ingresso = new Ingresso();
$ingresso->setValor(35);
echo "Valor do ingresso: " . $ingresso->getValorTotal() . "\n";

//IngressoVip
$ingressoVip = new IngressoVIP();
$ingressoVip->setValor(35);
$ingressoVip->setValorAdicional(15);
echo "Valor do ingresso VIP: " . $ingressoVip->getValorTotal(). "\n";

//IngresoCamarote

$ingressoCamarote = new IngressoCamarote();
$ingressoCamarote->setValor(35);
$ingressoCamarote->setValorAdicional(15);
$ingressoCamarote->setValorAdicionalCamarote(30);
echo "Valor do Ingresso Camarote: " . $ingressoCamarote->getValorTotal() . "\n";