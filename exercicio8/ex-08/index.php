<?php

require __DIR__ . "/../Source/autoload.php";

use Source\Models\Company\Employee;
use Source\Models\Company\Seller;
use Source\Models\Company\Manager;

echo "<h1>Cadastro de Funcionários</h1>";

// ============================================
// 1. Instanciar dois objetos Employee
// ============================================
$emp1 = new Employee(
    1,
    "João Silva",
    "joao@empresa.com",
    "123456",
    "joao.jpg",
    160,   // horas trabalhadas
    25.00  // valor da hora
);

$emp2 = new Employee(
    2,
    "Maria Souza",
    "maria@empresa.com",
    "654321",
    "maria.jpg",
    180,
    28.50
);

echo "<h2>Funcionários (Employee)</h2>";
echo "<p>" . nl2br($emp1->show()) . "</p>";
echo "<p>" . nl2br($emp2->show()) . "</p>";

// ============================================
// 2. Instanciar dois objetos Seller
// ============================================
$seller1 = new Seller(
    3,
    "Carlos Lima",
    "carlos@vendas.com",
    "senha123",
    "carlos.jpg",
    160,
    22.00,
    5000.00   // total de vendas
);

$seller2 = new Seller(
    4,
    "Ana Paula",
    "ana@vendas.com",
    "senha456",
    "ana.jpg",
    140,
    24.00,
    12000.00
);

echo "<h2>Vendedores (Seller)</h2>";
echo "<p>" . nl2br($seller1->show()) . "</p>";
echo "<p>" . nl2br($seller2->show()) . "</p>";

// ============================================
// 3. Instanciar um objeto Manager
// ============================================
$manager = new Manager(
    5,
    "Roberto Alves",
    "roberto@gestao.com",
    "master123",
    "roberto.jpg",
    160,
    45.00,
    2000.00   // bônus
);

echo "<h2>Gerente (Manager)</h2>";
echo "<p>" . nl2br($manager->show()) . "</p>";

echo "<h2>Demonstração de Getters e Setters</h2>";

// ---- Para Employee (usando $emp1) ----
echo "<h3>Employee (antes da alteração)</h3>";
echo "<p>Nome: " . $emp1->getName() . "</p>";
echo "<p>Horas trabalhadas: " . $emp1->getHoursWorked() . "</p>";
echo "<p>Valor da hora: " . $emp1->getHourValue() . "</p>";
echo "<p>Salário: " . $emp1->calculateSalary() . "</p>";

// Modificando atributos
$emp1->setName("João Carlos Silva");
$emp1->setHoursWorked(180);
$emp1->setHourValue(28.00);

echo "<h3>Employee (depois da alteração)</h3>";
echo "<p>Nome: " . $emp1->getName() . "</p>";
echo "<p>Horas trabalhadas: " . $emp1->getHoursWorked() . "</p>";
echo "<p>Valor da hora: " . $emp1->getHourValue() . "</p>";
echo "<p>Salário: " . $emp1->calculateSalary() . "</p>";


echo "<h2>Funcionario alterado</h2>";
echo "<p>" . nl2br($emp1->show()) . "</p>";

// ---- Para Seller (usando $seller1) ----
echo "<h3>Seller (antes da alteração)</h3>";
echo "<p>Nome: " . $seller1->getName() . "</p>";
echo "<p>Total de vendas: " . $seller1->getTotalSales() . "</p>";
echo "<p>Comissão: " . $seller1->calculateCommission() . "</p>";
echo "<p>Salário total: " . $seller1->calculateSalary() . "</p>";

// Modificando atributos
$seller1->setName("Carlos Augusto Lima");
$seller1->setTotalSales(7500.00);

echo "<h3>Seller (depois da alteração)</h3>";
echo "<p>Nome: " . $seller1->getName() . "</p>";
echo "<p>Total de vendas: " . $seller1->getTotalSales() . "</p>";
echo "<p>Comissão: " . $seller1->calculateCommission() . "</p>";
echo "<p>Salário total: " . $seller1->calculateSalary() . "</p>";

echo "<h2>Vendedor alterado(Seller)</h2>";
echo "<p>" . nl2br($seller1->show()) . "</p>";

// ---- Para Manager (usando $manager) ----
echo "<h3>Manager (antes da alteração)</h3>";
echo "<p>Nome: " . $manager->getName() . "</p>";
echo "<p>Bônus: " . $manager->getBonus() . "</p>";
echo "<p>Salário total: " . $manager->calculateSalary() . "</p>";

// Modificando atributos
$manager->setName("Roberto Alves Santos");
$manager->setBonus(2500.00);

echo "<h3>Manager (depois da alteração)</h3>";
echo "<p>Nome: " . $manager->getName() . "</p>";
echo "<p>Bônus: " . $manager->getBonus() . "</p>";
echo "<p>Salário total: " . $manager->calculateSalary() . "</p>";

echo "<h2>Gerente (Manager)</h2>";
echo "<p>" . nl2br($manager->show()) . "</p>";
