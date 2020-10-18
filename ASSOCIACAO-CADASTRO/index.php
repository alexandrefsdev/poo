<?php

require_once 'Categoria.php';
require_once 'Produto.php';

$categoria = new Categoria('Informática');
$produto = new Produto('Notebook Odyssey', 4000, $categoria);

echo $produto->nome . ' - ' . $produto->getCategoria()->getNome();