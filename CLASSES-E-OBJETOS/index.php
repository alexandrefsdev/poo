<?php

require_once 'Gelo.php';

$geloTransparente = new Gelo();
$geloTransparente->material = 'Água';
$geloTransparente->cor = 'Transparente';

$geloTransparente->esfriarLiquido();
$geloTransparente->getEstado();

$geloTransparente->derreter();
$geloTransparente->derreter();
$geloTransparente->derreter();
$geloTransparente->derreter();

$geloTransparente->getEstado();

echo "<pre>";
print_r($geloTransparente);