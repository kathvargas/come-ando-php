<?php

require __DIR__ . "/source/Models/Employee.php";

use Source\Models\Employee;

echo "<h1>Teste da Classe Employee</h1>";
echo "<hr>";
//instancia o objeto
$employee= new Employee();
var_dump($employee);
//atribuindo valores ao objeto
$employee1= new Employee(1, "kath",1000);
$employee1->show();

$employee2= new Employee(2,"pedro",2000);
$employee2->show();

$employee3=new Employee();
//atribuindo valores com setters
$employee3->setId(3);
$employee3->setName("lucas");
$employee3->setSalary(1500);
$employee3->show();
//aplicando desconto
$employee3->raise(10);
$employee3->show();

$employee2->raise(-10);
$employee2->show();

$employee1->raise(50);
$employee1->show();
