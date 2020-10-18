<?php

include_once 'Cliente.php';
include_once 'Vendedor.php';
include_once 'Categoria.php';
include_once 'Produto.php';
include_once 'CarrinhoCompras.php';
include_once 'FormaPagamento.php';

ini_set('xdebug.var_display_max_depth', '10');
ini_set('xdebug.var_display_max_children', '256');
ini_set('xdebug.var_display_max_data', '1024');


$cliente = new Cliente('Alexandre Silveira');
$vendedor = new Vendedor('Gustavo Silveira');

$categoria = new Categoria('Informatica');
$produto1 = new Produto('Notebook Odissey',4000, $categoria);
$produto2 = new Produto('Teclado RedDragon',500, $categoria);
$produto3 = new Produto('Cadeira Gamer',900, $categoria);

$avista = new FormaPagamento('A vista');

$carrinhoCompras = new CarrinhoCompras(new DateTime(), $avista);
$carrinhoCompras->setCliente($cliente);
$carrinhoCompras->setVendedor($vendedor);
$carrinhoCompras->adicionarProduto($produto1);
$carrinhoCompras->adicionarProduto($produto2);
$carrinhoCompras->adicionarProduto($produto3);
/*  demonstrando que o método está fortemente tipado */
// $carrinhoCompras->adicionarProduto($vendedor);

echo '<pre>'; var_dump($carrinhoCompras); die();

