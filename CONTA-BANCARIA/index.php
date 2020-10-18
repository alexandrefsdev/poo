<?php

require_once 'ContaMelhorada.php';

$conta = new ContaMelhorada(3571, 12069);
$conta->titular = "Alexandre Silveira";
$conta->tipo = "cc";


// $conta->setTitular("Alexandre Silveira");
// $conta->setTipo('cp');
$conta->abrir();


echo $conta;
die();
// echo '<pre>';
// var_dump($conta);
// die();

$conta->imprimirSaldo();
