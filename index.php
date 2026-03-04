<?php

require __DIR__ . "/source/Models/Produto.php";

use Source\Models\Product;

echo "<h1>Teste da Classe Produto</h1>";
echo "<hr>";
//instancia o objeto
$product= new Product();
var_dump($product);
//atribuindo valores ao objeto
$product1= new Product(1,"banana",5.00);
$product1->show();

$product2= new Product(2,"morango",8.00);
$product2->show();

$product3=new Product();
//atribuindo valores com setters
$product3->setId(3);
$product3->setName("mamao");
$product3->setPrice(15.00);
$product3->show();
//aplicando desconto
$product3->discount(5);
$product3->show();
//exibindo via echo
echo "<p>Nome:".$product1->getName()." -Preço: R$". number_format($product1->getPrice(),2,',','.')."</p>";
echo "<p>Nome:".$product2->getName()." -Preço: R$". number_format($product2->getPrice(),2,',','.')."</p>";
echo "<p>Nome:".$product3->getName()." -Preço: R$". number_format($product3->getPrice(),2,',','.')."</p>";