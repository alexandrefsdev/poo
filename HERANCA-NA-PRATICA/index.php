<?php

require_once "Funcionario.php";
require_once "Visitante.php";
require_once "Programador.php";
require_once "AnalistaSistemas.php";
require_once "DiretorTI.php";
require_once "Backend.php";
require_once "Frontend.php";

// $funcionario = new Funcionario(); -> ABSTRACT

$visitante = new Visitante();
echo $visitante->baterPonto() . '<br />';;

$programador = new Programador();
echo $programador->programar() . '<br />';

$analista = new AnalistaSistemas();
echo $analista->marcarReuniao(). '<br />';

$diretorTI = new DiretorTI();
echo $diretorTI->contratar(). '<br />';

$backend = new Backend();
echo $backend->consultarBD() . '<br />';
echo $backend->programar() . '<br />';

$frontend = new Frontend();
echo $frontend->usarReact() . '<br />';
echo $frontend->programar() . '<br />';
