<?php

require __DIR__ . '/../source/autoload.php';

use Source\Models\Math\PythagoreanTheorem;
use Source\Models\Math\Bhaskara;

echo"<h1>Calculadora Matematica</h1>";

echo"<h2>Teorema de Pitagoras</h2>";

$pty1=new PythagoreanTheorem(3,4);
$pty1->calculate();
echo"<p>".$pty1->show()."</p>";

$pty2=new PythagoreanTheorem(5,12);
$pty2->calculate();
echo"<p>".$pty2->show()."</p>";

$pty1->setCathetusA(6);
$pty1->setCathetusB(8);
$pty1->calculate(); 
echo "<p><strong>Após alterar catetos para 6 e 8:</strong><br>" . $pty1->show() . "</p>";

echo "<h2>Fórmula de Báskara</h2>";

$bask1 = new Bhaskara(1, -5, 6);
$bask1->calculate();
echo "<p>" . $bask1->show() . "</p>";

$bask2 = new Bhaskara(1, 2, 5);
$bask2->calculate();
echo "<p>" . $bask2->show() . "</p>";

$bask3 = new Bhaskara(1, -4, 4);
$bask3->calculate();
echo "<p>" . $bask3->show() . "</p>";

$bask1->setA(2);
$bask1->setB(-8);
$bask1->setC(6);
$bask1->calculate(); 
echo "<p><strong>Após alterar coeficientes para a=2, b=-8, c=6:</strong><br>" . $bask1->show() . "</p>";