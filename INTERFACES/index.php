<?php

require_once "Banco24Horas.php";
require_once "BancoBrasil.php";
require_once "Caixa.php";


$caixa = new Caixa('Caixa Economica Federal', 0);
$banco_brasil =  new Caixa('Banco do Brasil');

$banco24Horas = new Banco24Horas($caixa);
echo "<h2 style='color: ". $banco24Horas->getBanco()->getCor() . "'>" .
    $banco24Horas->getBanco()->getNome() . "</h2>";

$banco24Horas->depositar(200);
echo $banco24Horas->consultarSaldo() . '<br />';
$banco24Horas->sacar(50);
echo $banco24Horas->consultarSaldo() . '<br />';