<?php

require_once 'Conta.php';

$conta = new Conta(3571, 12069);
$conta->setTitular("Alexandre Silveira");
$conta->setTipo('cp');
$conta->abrir();


$conta->imprimirSaldo();

$conta->depositar(50);
$conta->depositar(20);
$conta->depositar(30);

$conta->sacar(50);
$conta->sacar(50);
$conta->sacar(70);
$conta->encerrar();