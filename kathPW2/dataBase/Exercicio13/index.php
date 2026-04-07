<?php
require __DIR__ . '/source/autoload.php';

use Source\Models\Banking\BankAccount;
use Source\Models\Banking\SavingsAccount;
use Source\Models\Banking\Transaction;

echo "<h1>Sistema Bancario</h1>";

$account1 = new BankAccount(1, "Joao Silva", "1001-2", "1234");
$account2 = new BankAccount(2, "Maria Santos", "1002-5", "5678");

$account1->deposit(1000.00, "Deposito inicial");
$account1->deposit(500.00, "Deposito via TED");
$account2->deposit(300.00, "Deposito inicial");

$account1->withdraw(200.00, "1234", "Saque no caixa");
$account2->withdraw(100.00, "5678", "Saque no caixa");

$account1->withdraw(50.00, "9999", "Tentativa de saque PIN errado");
$account2->withdraw(50.00, "0000", "Tentativa de saque PIN errado");


$savings = new SavingsAccount(3, "Carlos Lima", "0003-8", "1111", 0.5);

$savings->deposit(2000.00, "Deposito inicial na poupanca");
$savings->applyYield();

$transactions1 = $account1->getTransactions();
$transactions2 = $account2->getTransactions();
$transactions3 = $savings->getTransactions();

echo $account1->show();
echo $account2->show();
echo $savings->show();

foreach ($transactions1 as $transaction) {
    echo $transaction->show();
}

foreach ($transactions2 as $transaction) {
    echo $transaction->show();
}

foreach ($transactions3 as $transaction) {
    echo $transaction->show();
}
?>