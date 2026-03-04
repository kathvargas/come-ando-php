<?php

require __DIR__ . "/source/Models/Order.php";

use Source\Models\Order;

echo "<h1>Teste da Classe Order</h1>";
echo "<hr>";
//instancia o objeto
$order= new Order();
var_dump($order);
//atribuindo valores ao objeto
$order1= new Order(1, "kath",150.00);
$order1->show();

$order2= new Order(2,"pedro",200.00);
$order2->show();

$order3=new Order();
//atribuindo valores com setters
$order2->setId(2);
$order2->setCostumerName("lucas");
$order2->setTotal(150.00);
$order2->show();
//aplicando desconto
$order2->addFee(10);
$order2->show();

